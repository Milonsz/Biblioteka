<h1>Lista tabel w bazie danych <i>biblioteka</i></h1>
<?php
$query = 'SHOW TABLES';
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo '<ol style="list-style-type: square;">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<li>' . $row['Tables_in_biblioteka'] .'</li>';
    }
    echo '</ol>';
} else {
    echo 'brak danych';
}
    ?>