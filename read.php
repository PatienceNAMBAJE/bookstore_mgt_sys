<?php
// Codes to fetch data

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = "bookstore_mgt";

        // CONNECTING WITH DATABASE

        $connectDb = mysqli_connect($servername, $username, $password, $dbName);

        $query = "SELECT * FROM book";

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
    <table border="1">
        <tr>
            <th>#</th>
            <th>Book Name</th>
            <th>Author</th>
            <th>Number Of Pages</th>
            <th>Registered at</th>
            <!-- <th>Edit</th>
            <th>Delete</th> -->
        </tr>
        
        <?php while ($row = mysqli_fetch_array($execute)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['author']; ?></td>
            <td><?php echo $row['number_of_pages']; ?></td>
            <td><?php echo $row['created_at']; ?></td>  
            <!-- 
                It is good practice and a must to put edit column and delete 
                columns for you to get to delete and update pages
             -->
            <!-- <td><a href="update.php?bookId=<?php echo $row['id']; ?>">edit</a></td>  
            <td><a href="delete.php?bookId=<?php echo $row['id']; ?>">delete</a></td>   -->
        </tr>
        <?php  } ?>
    </table>
   
</body>
</html>
 