<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add A Book</title>
</head>
<body>
    <center>
        <a href="read.php">Back</a>
        <form method="POST" action="">
            <h1>Add A Book</h1>
            <input type="text" name="bookTitle" id="" placeholder="Enter Book title" required><br><br>
            <input type="text" name="bookName" id="" placeholder="Enter Book Name" required><br><br>
            <input type="number" name="bookPages" id="" placeholder="Enter Number of Pages" required><br><br>
            <input type="submit" name="submit">
        </form> 
    </center>  
</body>
</html>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "bookstore_mgt";

// CONNECTING WITH DATABASE

$connectDb = mysqli_connect($servername, $username, $password, $dbName);

// $_POST helps us to get data from form and push or save it to where we want. For the purpose of
// this course we will always save it to our query as follows

if (isset($_POST['submit'])) {
   $_POST['bookTitle'];
    $name_of_book = $_POST['bookName'];
    $pages_of_book = $_POST['bookPages'];
    $query = "INSERT INTO book (title, author, number_of_pages) values ('$title_of_book', '$name_of_book', '$pages_of_book')";
    $execute = mysqli_query($connectDb, $query);
    if ($execute) {
        echo "Data Inserted successfully";
    }else{
        echo "Please Check out";
    }
}


?>