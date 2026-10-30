<!DOCTYPE html>
<html>
<head>
    <title>Tasks</title>
</head>
<body>

    <h1>Task List</h1>

    <form action="{{ route('tasks.create') }}" method="POST">
        @csrf

        <input type="text" name="name" placeholder="Enter task name" required>

        <button type="submit">Add Task</button>
    </form>

</body>
</html>