<!-- Nebula Version: 1.1-->
<!-- Creator:Moronlll-->

<!--
 _   _ _____ ____  _    _ _      _    
| \ | | ____| __ )| |  | | |    / \   
|  \| |  _| |  _ \| |  | | |   / _ \  
| |\  | |___| |_) | |__| | |__| ___ \ 
|_| \_|_____|____/ \____/|____/_/   \_\

-->

<!--
SECURITY NOTICE

This project is intentionally created WITHOUT strong security mechanisms.
Nebula provides only a clean and minimal base (a “blank sheet”) for building
your own imageboard or similar software.

It does NOT include:
- advanced protection against attacks
- strict file validation
- CSRF / XSS / abuse protection
- production-grade security practices

You are fully responsible for extending and securing this code
before using it in a public or production environment.

This engine is meant for learning, experimentation, and customization,
not as a ready-made secure solution.
-->


<!DOCTYPE html> <!-- Declaring the document type as HTML5 -->
<html lang="en"> <!-- Setting the page language to English -->

<head>
    <meta charset="UTF-8">  <!-- Page encoding UTF-8 for correct display of characters -->
    <link rel="icon" href="data/icon.png" type="image/x-icon"> <!-- Set icon -->
    <link rel="stylesheet" href="css/main.css"> <!-- Connect CSS -->
    <title>Welcome to the Nebula!</title> <!-- Browser tab title -->
</head>

<body>
    <!-- Main content of the page -->

    <h1>Welcome!</h1>
    <pre>
         _   _  ___________ _   _ _       ___  
        | \ | ||  ___| ___ \ | | | |     / _ \ 
        |  \| || |__ | |_/ / | | | |    / /_\ \
        | . ` ||  __|| ___ \ | | | |    |  _  |
        | |\  || |___| |_/ / |_| | |____| | | |
        \_| \_/\____/\____/ \___/\_____/\_| |_/
    </pre>
    <!-- Main heading of the page -->

    <p>Choose a board:</p>

    <ul>
        <!-- List of options -->

        <li><a href="board.php?board=pol">/pol/ - Politically Incorrect</a></li>
        <!-- First list item: link to board.php with parameter board=pol -->
        <!-- The parameter should correspond to the chosen board -->

        <li><a href="board.php?board=ph">/ph/ - Philosophy</a></li>
        <!-- Second list item: link to board.php with parameter board=ph -->
    </ul>
</body>

</html>
