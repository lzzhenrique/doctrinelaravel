<x-layout title="Edit Todolist">

    <form action="/task/update/{{  $task->getId()  }}" method="post">
        @csrf
        <label for="title">Title: </label>
        <input type="text" id="title" name="title" value="{{  $task->getTitle()  }}">

        <label for="task">Task: </label>
        <input value="{{  $task->getTask()  }}" id="task" name="task">

        <label for="done">Done: </label>
        <input {{  $task->isDone() ? 'checked' : ''  }} type="checkbox" id="done" name="done">
        <input type="submit">
    </form>
</x-layout>
