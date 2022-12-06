<h1>Tabela Ksiazki</h1>
<?php
$query = "SELECT * FROM wypozyczenia";
$result = mysqli_query($conn, $query);

?>
<table style="border: black solid thin; border-collapse: collapse">
    <tr style="border: black solid thin">
        <th style="border: black solid thin">Nr. transakcji</th>
        <th style="border: black solid thin">Sygnatura</th>
        <th style="border: black solid thin">ID pracownika</th>
        <th style="border: black solid thin">Nr. czytelnika</th>
        <th style="border: black solid thin">Data wypożyczenia</th>
        <th style="border: black solid thin">Data zwrotu</th>
    </tr>
<?php
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td style="border: black solid thin">' . $row['Nr_transakcji']
            . '</td><td style="border: black solid thin">' . $row['Sygnatura']
            . '</td><td style="border: black solid thin">' . $row['Id_pracownika']
            . '</td><td style="border: black solid thin">' . $row['Nr_czytelnika']
            . '</td><td style="border: black solid thin">' . $row['Data_wypozyczenia']
            . '</td><td style="border: black solid thin">' . $row['Data_zwrotu'];
    }
}
?><?php
