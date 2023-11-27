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
            <!--
                button otwiera formularz dodawania wpisów w okienku
            -->
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



</body>
</html>