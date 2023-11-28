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

<h2>Dodaj Blok </h2>

<form method="get" action="index.php">
  <label for="fname">Nazwa Bloga:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="fname">Treść Bloga:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <input type="submit" value="Przeslij" >
</form> 

<p>Jezeli dodasz to wyswietlisz temat i Zawartość bloga</p>



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

    <?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "blok";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$date_added = $_POST [$date_added];
$ID= $_POST["ID"];
$ttile =$_POST ['title'];
$content = $_POST['content'];


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO posts (ID, date_added, title, content, )
VALUES ('$Title', '$content')";

if (mysqli_query($conn, $sql, )) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


</body>
</html>