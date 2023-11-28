<!DOCTYPE html>
<html lang="pl">
<head>
    <!--
        TODO:
        - dodawanie wpisów,
        - kasowanie wpisów 
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Mój Blog</title>
</head>
<body>
    <div class="header">
        <h1>Mój blog
            <button class="newbut">Dodaj nowy wpis</button>
        </h1>

    </div>

    <div class="main">
        

        <div class="post">
            <?php include('blog_post.php'); ?>
            <button class = "del">Usuń</button> <!--na pewno musi być z potwierdzeniem poprzez np. alert-->
        </div>
        <?php       
            $newerPost = $currentPost + 1;
            echo "<a class='navbut' href='index.php?id=$newerPost'>Nowszy wpis</a>";
            $olderPost = max(1, $currentPost - 1);
            echo "<a class='navbut' href='index.php?id=$olderPost'>Starszy wpis</a>";
        ?>
    </div>    
    
    
    <div class="footer">
        <p>Mój blog, to blog technologiczny na którym każdy może dodać swój wpis!</p>
        <p>&copy; 2023 Jan Kowalski</p>
    </div>
    <h2>Dodaj Blog </h2>

<form method="post" action="index.php">
  <label for="fname">Nazwa Bloga:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="fname">Treść Bloga:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <input type="submit" value="Przeslij" >
</form> 

<p>Jezeli dodasz to wyswietlisz temat i Zawartość bloga</p>

    <?php
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        
    }
?>
<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blog";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO contactform_entries (id, fname) VALUES ('0', '$fname')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);

?>


</body>
</html>