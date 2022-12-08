<h1>Tabela Stanowiska</h1>
<?php
$query = 'SELECT * FROM stanowiska WHERE 1;';
$result = mysqli_query($conn, $query);

?>
<table style="border: black solid thin; border-collapse: collapse">
    <tr style="border: black solid thin">
        <th style="border: black solid thin">ID stanowiska</th>
        <th style="border: black solid thin">Nazwa</th>
        <th style="border: black solid thin"><a href="?page=stanowiska_dodaj">dodaj</a></th>
        <th style="border: black solid thin"><a href="?page=stanowiska_usun">usuń</a></th>
    </tr>
<?php
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td style="border: black solid thin">' . $row['Id_stanowisko']
            . '</td><td style="border: black solid thin">' . $row['Nazwa'];
    }
}
?>
</table>

<?php
if (isset($_COOKIE['stanowiska']))
{
    $historyArrays = json_decode($_COOKIE['stanowiska']);
    echo '<p>Historia edycji: <a class="collapse_link" data-collapse-block-id="stanowiska_historia_lista" href="#">&dArr;</a>';
    echo '<pre>';
    print_r($historyArrays);
    echo '</pre>';
    echo '<ul id="stanowiska_historia_lista" style="display: none;">';
    foreach ($historyArrays as $editNumber => $editArray)
    {
        echo '<li>Edycja nr ' . $editNumber . ': ';
        foreach ($editArray as $key => $value)
        {
            echo $key . ' = ' . $value  . ' | ';
        }
        echo '</li>';
    }
    echo '</ul>';
}
?>