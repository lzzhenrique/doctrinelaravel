<x-layout title="TO-dolist">
    <a href="/task/create" > Create task </a>

    @foreach($tasks as $task)
        <br>
    <div id="{{ $task->getId()  }}">
        <h1>{{  $task->getTitle()  }}</h1>
        <h3>{{  $task->getTask()  }}</h3>
        <h4>{{  $task->isDone() ? 'Concluido' : 'Por fazer'  }}</h4>
        <div>
            <a href="/task/edit/{{ $task->getId() }}" >  Edit task </a>
        </div>
        <div>
            <a href="/task/delete/{{ $task->getId()   }}" >  DELETE </a>
        </div>
    </div>
    <br>
    @endforeach
</x-layout>
