<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        Każdy wpis składa się z: 
        - tytułu, 
        - automatycznie wstawianej daty,
        - treści. 
        /--- tutaj jako bonus dałbym pole autora, i miejsce na plik (zdjęcie)
        Wpisy powinny być przechowywane w bazie danych. 
        Wymagane funkcje: 
        - dodawanie wpisów, /--- może dodać edycję?
        - kasowanie wpisów, 
        - wyświetlanie wpisów po jednym z nawigacją (poprzedni, następny). 
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mój Blog</title>
</head>
<body>
    <div class="header">
        <h1>Mój blog</h1>
        
        <button>Dodaj nowy wpis</button>
            <!--
                button otwiera formularz dodawania wpisów w okienku
            -->
    </div>
    <div class="info">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum doloremque voluptatum illo fugit! Id necessitatibus nisi est nobis obcaecati possimus quasi, omnis unde non. Itaque repellendus vero ab ut earum?</p>
    </div>
    <div class="main">
        <!--
            Tutaj kod PHP pokazujący post
        -->
        <button>Następny</button>
        <button>Poprzedni</button>
        <button>Usuń</button> <!--na pewno musi być z potwierdzeniem poprzez np. alert-->
    </div>
    <div class="footer">
        <p>&copy; 2023 Jan Kowalski</p>
    </div>



</body>
</html>