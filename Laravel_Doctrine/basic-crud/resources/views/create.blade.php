<x-layout title="Create To-dolist">
    <form action="/task/create" method="post">
        @csrf

        <label for="title">Title: </label>
        <input type="text" id="title" name="title">

        <label for="task">Task: </label>
        <textarea id="task" name="task"></textarea>

        <label for="done">Done: </label>
        <input type="checkbox" id="done" name="done">

        <input type="submit">
    </form>
</x-layout>
