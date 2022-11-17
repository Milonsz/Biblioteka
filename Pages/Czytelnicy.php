<h1>Tabela Czytelnicy</h1>
<?php
$query = 'SELECT * FROM czytelnicy';
$result = mysqli_query($conn, $query);

?>
<table style="border: black solid thin; border-collapse: collapse">
    <tr style="border: black solid thin">
        <th style="border: black solid thin">Nr. Czytelnika</th>
        <th style="border: black solid thin">Imie</th>
        <th style="border: black solid thin">Nazwisko</th>
        <th style="border: black solid thin">Data Urodzenia</th>
        <th style="border: black solid thin">Ulica</th>
        <th style="border: black solid thin">Kod</th>
        <th style="border: black solid thin">Miasto</th>
        <th style="border: black solid thin">Data Zapisania</th>
        <th style="border: black solid thin">Data Skreślenia</th>
        <th style="border: black solid thin">Nr. Legitymacji</th>
        <th style="border: black solid thin">Funkcja</th>
        <th style="border: black solid thin">Płeć</th>
    </tr>
<?php
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td style="border: black solid thin">' . $row['Nr_czytelnika']
            . '</td><td style="border: black solid thin">' . $row['Imie']
            . '</td><td style="border: black solid thin">' . $row['Nazwisko']
            . '</td><td style="border: black solid thin">' . $row['Data_ur']
            . '</td><td style="border: black solid thin">' . $row['Ulica']
            . '</td><td style="border: black solid thin">' . $row['Kod']
            . '</td><td style="border: black solid thin">' . $row['Miasto']
            . '</td><td style="border: black solid thin">' . $row['Data_zapisania']
            . '</td><td style="border: black solid thin">' . $row['Data_skreslenia']
            . '</td><td style="border: black solid thin; text-align: right">' . $row['Nr_legitymacji']
            . '</td><td style="border: black solid thin">' . $row['Funkcja']
            . '</td><td style="border: black solid thin">' . $row['Plec'];
}
}
?>
