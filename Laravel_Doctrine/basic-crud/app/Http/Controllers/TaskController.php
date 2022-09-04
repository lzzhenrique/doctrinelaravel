<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Repository\TaskRepo;
use App\Repository\TaskRepo as repo;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private TaskRepo $repo;

    public function __construct(repo $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        $tasks = $this->repo->getAll();

        return view('index')->with(
            'tasks',
            $tasks
        );
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request['done'] = (bool)$request['done'];

        $this->repo->create($request);
        return redirect('/task');
    }

    public function edit($id)
    {
        return view(
            'edit')
            ->with('task', $this->repo->getById($id));
    }

    public function update(Request $request, $id)
    {
        $taskToUpdate = $this->repo->getById($id);
        $request['done'] = (bool)$request['done'];

        $this->repo->update(
            $taskToUpdate,
            $request
        );

        return redirect('/task');
    }

    public function destroy($id)
    {
        $taskToDelete = $this->repo->getById($id);
        $this->repo->delete($taskToDelete);

        return redirect('/task');
    }
}

