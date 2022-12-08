<h1>Edycja wiersza tabeli <i>stanowiska</i></h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $Id_stanowisko = $_POST['Id_stanowiso'] ? intval($_POST['Id_stanowiso']) : 0;
    $Nazwa = $_POST['Nazwa'] ? htmlspecialchars(trim($_POST['Nazwa'])) : '';
    $query1 = sprintf("UPDATE `stanowiska` SET Nazwa='%s' WHERE Id_stanowisko=%u;",
        mysqli_real_escape_string($mysqliProceduralConnection, $Nazwa),
        mysqli_real_escape_string($mysqliProceduralConnection, $Id_stanowisko),
    );

    if (mysqli_query($mysqliProceduralConnection, $query1))     {
        echo '<h4 class="success">Pomyślnie zaktualizowano</h4>';
    }   else    {
        echo '<h4 class="failure">Błąd w czasie aktualizacji:</h4><br>'
            . mysqli_error($mysqliProceduralConnection);
    }
    if (isset($_COOKIE['stanowiska']))
    {
        $cookieArray = json_decode($_COOKIE['stanowiska'], true);
    }

    $cookieArray[] = array('Id_stanowisko' => $Id_stanowisko, 'Nazwa' => $Nazwa, 'Data' => date('Y-m-d H:i:s'));
    setcookie('stanowiska', json_encode($cookieArray, JSON_UNESCAPED_UNICODE), time() + (86400 * 30), "/");
}