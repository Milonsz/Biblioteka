<h1>Tabela Działy</h1>
<?php
$query = "SELECT * FROM dzialy";
$result = mysqli_query($conn, $query);

?>
<table style="border: black solid thin; border-collapse: collapse">
    <tr style="border: black solid thin">
        <th style="border: black solid thin">ID działu</th>
        <th style="border: black solid thin">Nazwa</th>
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr><td style="border: black solid thin">' . $row['Id_dzial']
                . '</td><td style="border: black solid thin">' . $row['Nazwa'];
        }
    }
    ?>
