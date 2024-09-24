<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Assignment</title>
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <h2>Submit Assignment</h2>
    <form action="/controllers/AssignmentController.php?action=submit" method="POST" enctype="multipart/form-data">
        <label for="assignment_id">Select Assignment:</label>
        <select name="assignment_id" id="assignment_id"><br>
           
            <option value="1">Assignment 1</option><br>
            <option value="2">Assignment 2</option><br>
        </select>

        <label for="file">Upload File:</label>
        <input type="file" id="file" name="file" required><br><br>

        <button type="submit">Submit</button><br><br>
    </form>
    <button onclick="window.history.back()">Go Back</button>
</body>
</html>
