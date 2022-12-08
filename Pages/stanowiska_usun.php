<h1>Usuwanie danych z tabeli <i>stanowiska</i></h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $Id_stanowisko = $_POST['Id_stanowisko'] ? intval($_POST['Id_stanowisko']) : 0;
    $query1 = sprintf("DELETE FROM `stanowiska` WHERE Id_stnowisko=%u;)",
        mysqli_real_escape_string($conn, $Id_stanowisko)
            );
if ((mysqli_query($conn, $query1)))    {
    echo '<h4 class="success">Pomyślnie usunięto</h4>';
}   else {
    echo '<h4 class="failure">Błąd w czasie usuwania:</h4><br>'
        . mysqli_error($conn);
}
}   else    {
$Id_stanowisko = isset($_GET['stanowisko']) ? intval($_GET['stanowisko']) : 0;
$query2 = sprintf( "SELECT * FROM `stanowiska` WHERE Id_stanowisko=%u;",
mysqli_real_escape_string($conn, $Id_stanowisko)
);

$result = mysqli_query($conn, $query2);
$row = mysqli_fetch_assoc($result);
if ($row)
{
    ?>
    <p class="failure">Czy na pewno chcesz usunąć te dane?</p>
    <form action="?page=stanowiska_usun" method="post">
        <table>
            <tr>
                <td><label for="Id_stanowisko">Id_stanowisko</label></td>
                <td><input disabled id="Id_stanowisko" name="Id_stanowisko" type="text"></td>
            </tr>
            <tr>
                <td><label for="Nazwa">Nazwa</label></td>
                <td><input id="Nazwa" name="Nazwa" type="text"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" value="dodaj"></td>
            </tr>
        </table>
    </form>
}