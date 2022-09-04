<?php
    namespace  App\Entity;

//    use Doctrine\ORM\Mapping as ORM;

/**
 * @Doctrine\ORM\Mapping\Entity
 * @Doctrine\ORM\Mapping\Table(name="tasks")
 * @Doctrine\ORM\Mapping\HasLifecycleCallbacks()
 */

class Task
{
    /**
     * @var integer $id
     * @Doctrine\ORM\Mapping\Column(name="id", type="integer", unique=true, nullable=false)
     * @Doctrine\ORM\Mapping\Id
     * @Doctrine\ORM\Mapping\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $task
     * @Doctrine\ORM\Mapping\Column(name="task", type="string", nullable=false)
     */
    private $task;

    /**
     * @var string $title
     * @Doctrine\ORM\Mapping\Column(name="title", type="string", nullable=false)
     */
    private $title;

    /**
     * @var boolean $done
     * @Doctrine\ORM\Mapping\Column(name="done", type="boolean")
     */
    private $done;

    public function __construct($input)
    {
        $this->setTitle($input['title']);
        $this->setTask($input['task']);
        $this->setDone($input['done']);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTask(): string
    {
        return $this->task;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function isDone(): bool
    {
        return $this->done;
    }

    public function setTask( string $task ): void
    {
        $this->task = $task;
    }

    public function setTitle( string $title ): void
    {
        $this->title = $title;
    }

    public function setDone( bool $done ): void
    {
        $this->done = $done;
    }
}
