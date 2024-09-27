<!DOCTYPE html>
<html>
<head>
<title>Welcome Message</title>
</head>
<body>
<?php
$semester = 3; // Set the student's semester
$branch = "Computer Science"; // Set the student's branch
// Welcome message based on semester and branch using relational operators
if ($semester == 1 && $branch == "Computer Science") {
echo "<h1>Welcome to your first semester of Computer Science!</h1>";
} elseif ($semester == 1 && $branch == "Electrical Engineering") {
echo "<h1>Welcome to your first semester of Electrical Engineering!</h1>";
} elseif ($semester > 1 && $branch == "Computer Science") {
echo "<h1>Welcome back to Computer Science, semester $semester!</h1>";
} elseif ($semester > 1 && $branch == "Electrical Engineering") {
echo "<h1>Welcome back to Electrical Engineering, semester $semester!</h1>";
} else {
echo "<h1>Welcome to your semester $semester of $branch!</h1>";
}
?>
</body>
</html>