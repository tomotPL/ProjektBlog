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
                document.getElementById('post').style.display='none';
                document.getElementById('newbut').innerHTML='Pokaż aktualny wpis';
            } else {
                document.getElementById('insertform').style.display='none';
                document.getElementById('post').style.display='block';
                document.getElementById('newbut').innerHTML='Dodaj nowy wpis';

            }
        }
    </script>
</head>
<body>
    <div class="header">
        <h1>Mój blog
            <button id="newbut" class="newbut" onclick="displayInput()">Dodaj nowy wpis</button>
        </h1>




    </div>

    <div class="main">
        <div id="insertform" style="display: none;">
            <h2>Dodaj nowy wpis </h2>
            
            <form method='post' class="newpost">
                <textarea name="title" id="title" cols="80" rows="2" placeholder="Tytuł"></textarea><br>
                <textarea name="content" id="content" cols="80" rows="10" placeholder="Tekst"></textarea><br>
                <button class="newbut" name="addPost">Dodaj wpis</button>
            </form>  
            <?php
                if (isset($_POST['addPost'])) {
                    $conn=mysqli_connect('localhost','root',null,'blog');
                    $sql='INSERT INTO posts(title,content) VALUES("'.$_POST['title'].'","'.$_POST['content'].'")';
                    if ($query=mysqli_query($conn, $sql)) {
                        echo("Dodano wpis! Za chwilę strona się odświeży...");
                    }
                    header("refresh:0;url=index.php");
                }
            ?>
</div>

        <div id="post">
            <?php include('blog_post.php'); ?>            
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
        <p>&copy; 2023 Łukasz Lenkiewicz, Kamil Procajło</p>
    </div>



</body>
</html>