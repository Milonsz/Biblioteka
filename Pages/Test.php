<h1>Test połączenia z serwerem <i><?= $localhost ?></i> i bazą <i><?= $Biblioteka ?></i></h1>
<p>
    <?php
    echo 'Host info: ' . mysqli_get_host_info($conn) . '<br>';
    echo 'MySQLi stat: ' . mysqli_stat($conn);
    ?>
</p>