<h1>Nowe dane tabeli <i>stanowiska</i></h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){}
else
{
  ?>
        <form action="?page=stanowiska_dodaj" method="post">
            <table>
                <tr>
                    <td><label for="Id_stanowisko">Id_stanowisko</label></td>
                    <td><input disabled id="Id_stanowisko" name="Id_stanowisko" type="text"></td>
                </tr>
                <tr>
                    <td><label for="Nazwa">Nazwa</label></td>
                    <td><input disabled id="Nazwa" name="Nazwa" type="text"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"><input type="submit" value="dodaj"></td>
                </tr>
            </table>
        </form>
    <?php
}
?>