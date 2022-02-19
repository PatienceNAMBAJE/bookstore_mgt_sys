<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "bookstore_mgt";
  
// Do you remember the column value you parsed (passed) in table in read.php page (
// <td><a href="delete.php?bookId=<?php echo $row['id']; ) ?
// we have to get that id entitled bookId in that column value like the following


$book_id = $_GET['bookId'];

// CONNECTING WITH DATABASE
$connectDb = mysqli_connect($servername, $username, $password, $dbName);

//Query to delete

$query = "DELETE FROM book WHERE id = '$book_id'";
//statement to execute our query written in php format and make it sql readeable format
$execute = mysqli_query($connectDb, $query);

// if statement used to show message if data is deleted well
if ($execute) {
    echo "Data Deleted Successfully";
    header("location: read.php");
}
?>