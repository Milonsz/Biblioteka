<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Style/layout.css">
    <link rel="stylesheet" href="Style/style.css">
    <title>Biblioteka</title>
</head>
<?php require 'include/DB_connect.php'; ?>
<body>


<div class="sidenav">
    <a class="<?= ($_GET['page'] ?? '') == 'Glowna' ? 'active' : '' ?>" href="?page=Glowna">Strona główna</a>
    <a class="<?= ($_GET['page'] ?? '') == 'Test' ? 'active' : '' ?>" href="?page=Test">Test połączenia</a>
    <a class="<?= ($_GET['page'] ?? '') == 'Tabela' ? 'active' : '' ?>" href="?page=Tabela">Lista tabel</a>
    <a class="<?= ($_GET['page'] ?? '') == 'Czytelnicy' ? 'active' : '' ?>" href="?page=Czytelnicy">Tabela <i>czytelnicy</i></a>
    <a class="<?= ($_GET['page'] ?? '') == 'Dzialy' ? 'active' : '' ?>" href="?page=Dzialy">Tabela <i>działy</i></a>
    <a class="<?= ($_GET['page'] ?? '') == 'Ksiazki' ? 'active' : '' ?>" href="?page=Ksiazki">Tabela <i>książki</i></a>
    <a class="<?= ($_GET['page'] ?? '') == 'Pracownicy' ? 'active' : '' ?>" href="?page=Pracownicy">Tabela <i>pracownicy</i></a>
    <a class="<?= ($_GET['page'] ?? '') == 'Stanowiska' ? 'active' : '' ?>" href="?page=Stanowiska">Tabela <i>stanowiska</i></a>
    <a class="<?= ($_GET['page'] ?? '') == 'Wypozyczenia' ? 'active' : '' ?>" href="?page=Wypozyczenia">Tabela <i>wypożyczenia</i></a>
</div>

<div class="content">
    <?php
    if (isset($_GET['page']) && file_exists('pages/' . $_GET['page'] . '.php'))
    {
        include 'pages/' . $_GET['page'] . '.php';
    }
    else {
        echo '<h1>Nie znaleziono żądanej strony</h1>';
    }
    ?>
</div>

</body>
<?php require 'include/DB_disconnect.php'; ?>
</html>