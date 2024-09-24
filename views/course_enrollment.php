<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Enrollment</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2>Enroll in a Course</h2>
    <form action="/controllers/CourseController.php?action=enroll" method="POST">
        <label for="course_id">Select Course:</label>
        <select name="course_id" id="course_id">
            <!-- Assuming this is dynamically populated with courses from the database -->
            <option value="1">Course 1</option>
            <option value="2">Course 2</option>
        </select>
        <button type="submit">Enroll</button>
    </form>
    <button onclick="window.history.back()">Go Back</button>
</body>
</html>
