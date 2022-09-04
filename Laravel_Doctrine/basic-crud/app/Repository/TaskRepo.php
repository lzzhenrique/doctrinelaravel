<?php
    namespace  App\Repository;

    use App\Entity\Task;
    use Doctrine\ORM\EntityManager;
    use Doctrine\ORM\Exception\ORMException;
    use Illuminate\Http\Request;

    class TaskRepo
{
    /**
     * @var EntityManager
     */
    private EntityManager $entityManager;

    public function __construct(EntityManager $em)
    {
        $this->entityManager = $em;
    }

    public function create(Request $request) : void
    {
        $task = $this->prepareData($request);

        $this->entityManager->persist($task);
        $this->entityManager->flush();
    }

    public function update( Task $task, $updatedData) : void
    {
        $task->setDone($updatedData['done']);
        $task->setTask($updatedData['task']);
        $task->setTitle($updatedData['title']);

        try {
            $this->entityManager->persist($task);
            $this->entityManager->flush();
        } catch (ORMException $e) {
            var_dump($e);
        }
    }

    public function delete(Task $task) : void
    {
        $this->entityManager->remove($task);
        $this->entityManager->flush();
    }

    public function getById($id)
    {
        return $this->entityManager->getRepository(
            Task::class)
            ->findOneBy(['id' => $id]);
    }

    public function getAll() : array
    {
        return $this->entityManager->getRepository(
            Task::class )
            ->findAll();
    }

    /**
     * create Task
     * @return Task
     */
    private function prepareData($data) : Task
    {
        return new Task($data);
    }
}
