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
    <script>
        function confirmDel() {
            var userConfirmed = confirm("Czy jesteś pewien, że chcesz usunąć ten wpis?");
            if (userConfirmed) {
                document.getElementById("delete").submit();
            } else {
                return false;
            }
        }
        function displayInput() {
            if (document.getElementById('insertform').style.display=='none') {
                document.getElementById('insertform').style.display='block';
            } else {
                document.getElementById('insertform').style.display='none';
            }
        }
    </script>
</head>
<body>
    <div class="header">
        <h1>Mój blog
            <button class="newbut" onclick="displayInput()">Dodaj nowy wpis</button>
        </h1>
<div id="insertform" style="display: none;">
   <h2>Wstawianie </h2>

<form action="index.php">
  <label for="fname">Nazwa Bloga:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="fname">Treść Bloga:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <input type="submit" value="Przeslij" >
</form>  
<!--TODO: Działający kod wstawiania-->
</div>



    </div>

    <div class="main">
        

        <div class="post">
            <?php include('blog_post.php'); ?>
            <form id="delete" method="post" onsubmit="return confirmDel()">
                <button class = "del" name="Delete">Usuń</button>
            </form>
            <?php 
            if (isset($_POST['Delete'])) {
                //TODO usuń wpis o id $currentPost
            }
            ?> 
            
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



</body>
</html>