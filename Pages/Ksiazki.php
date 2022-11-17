<h1>Tabela Ksiazki</h1>
<?php
$query = 'SELECT * FROM ksiazki';
$result = mysqli_query($conn, $query);

?>
<table style="border: black solid thin; border-collapse: collapse">
    <tr style="border: black solid thin">
        <th style="border: black solid thin">Sygnatura</th>
        <th style="border: black solid thin">Tytuł</th>
        <th style="border: black solid thin">Nazwisko</th>
        <th style="border: black solid thin">Imie</th>
        <th style="border: black solid thin">Wydawnictwo</th>
        <th style="border: black solid thin">Miejsce wydania</th>
        <th style="border: black solid thin">Rok wydania</th>
        <th style="border: black solid thin">Objętość książki</th>
        <th style="border: black solid thin">Cena</th>
        <th style="border: black solid thin">Id działu</th>
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr><td style="border: black solid thin">' . $row['Sygnatura']
                . '</td><td style="border: black solid thin">' . $row['Tytuł']
                . '</td><td style="border: black solid thin">' . $row['Nazwisko']
                . '</td><td style="border: black solid thin">' . $row['Imie']
                . '</td><td style="border: black solid thin">' . $row['Wydawnictwo']
                . '</td><td style="border: black solid thin">' . $row['Miejsce_wyd']
                . '</td><td style="border: black solid thin">' . $row['Rok_wyd']
                . '</td><td style="border: black solid thin">' . $row['Objetosc_ks']
                . '</td><td style="border: black solid thin">' . $row['Cena']
                . '</td><td style="border: black solid thin; text-align: right">' . $row['Id_dzial'];
        }
    }
    ?>
