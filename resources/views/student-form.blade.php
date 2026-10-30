<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>

    <h1>Student Registration Form</h1>

    <form action="{{ route('student.submit') }}" method="POST">
        @csrf

        <label>Student Name:</label>
        <input type="text" name="name" required>

        <br><br>

        <label>Select Course:</label>

        <select name="course" required>
            @foreach ($courses as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>

        <br><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>