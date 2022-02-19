<?php
// the following codes are going to fetch data
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = "bookstore_mgt";
        $id_gotten = $_GET['bookId'];

        // CONNECTING WITH DATABASE

        $connectDb = mysqli_connect($servername, $username, $password, $dbName);

        $query = "SELECT * FROM book where id = '$id_gotten'";

        $execute = mysqli_query($connectDb, $query);
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To BookStore MIS</title>
</head>
<body>
    <h1>Books</h1>
    <a href="create.php">Add a book</a>        
    <!--
        The following codes are going to fetch data in database and after fetching those data into form,
        we have to make it updated
  -->
        <?php while ($row = mysqli_fetch_array($execute)) { ?>  
        <form method="POST" action="">
            <h1>Add A Book</h1>
            <input type="text" name="bookTitle" value="<?php echo $row['title']; ?>"><br><br>
            <input type="text" name="bookName"  value="<?php echo $row['author']; ?>"><br><br>
            <input type="number" name="bookPages"  value="<?php echo $row['number_of_pages']; ?>"><br><br>
            <input type="submit" name="submit">
        </form> 
        <?php  } ?>
    </table>
   
</body>
</html>
<!-- 
    The following codes are going to update our data
 -->
<?php
//post method is used to send data to the database. But by itself, it cann't unless the help of sql query as follows
if (isset($_POST['submit'])) { // this if statement is used to ask whether submit button is clicked as an event and do the following
    
    $title_of_book = $_POST['bookTitle']; //getting the values from post method and from form
    $name_of_book = $_POST['bookName'];
    $pages_of_book = $_POST['bookPages'];
//query which updates data
    $sqlQuery = "UPDATE book SET title = '$title_of_book', author = '$name_of_book', number_of_pages = '$pages_of_book' where id = '$id_gotten'";

    $executeQuery = mysqli_query($connectDb, $sqlQuery); // execution statement. It takes data written in php and make it sql codes
    header("location: read.php"); //redirect to the certain page
}

?>
 