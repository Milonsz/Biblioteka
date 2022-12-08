<h1>Tabela Pracownicy</h1>
<?php
$query = "SELECT * FROM pracownicy";
$result = mysqli_query($conn, $query);

?>
<table style="border: black solid thin; border-collapse: collapse">
    <tr style="border: black solid thin">
        <th style="border: black solid thin">ID pracownika</th>
        <th style="border: black solid thin">Nazwisko</th>
        <th style="border: black solid thin">Imię</th>
        <th style="border: black solid thin">ID stanowiska</th>
        <th style="border: black solid thin">Miasto</th>
        <th style="border: black solid thin">Data zatrudnienia</th>
        <th style="border: black solid thin">Wynagrodzenie</th>
    </tr>
<?php
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td style="border: black solid thin">' . $row['Id_pracownika']
            . '</td><td style="border: black solid thin">' . $row['Nazwisko']
            . '</td><td style="border: black solid thin">' . $row['Imie']
            . '</td><td style="border: black solid thin">' . $row['Nazwa']
            . '</td><td style="border: black solid thin">' . $row['Miasto']
            . '</td><td style="border: black solid thin">' . $row['Data_zatrudnienia']
            . '</td><td style="border: black solid thin">' . $row['Wynagrodzenie'];
    }
}
?><?php
