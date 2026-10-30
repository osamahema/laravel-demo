<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
</head>
<body>

    <h1>Registration Successful!</h1>

    <p>Student Name: {{ $name }}</p>

    <p>Selected Course: {{ $course }}</p>

    <a href="{{ route('student.form') }}">Back to Form</a>

</body>
</html>