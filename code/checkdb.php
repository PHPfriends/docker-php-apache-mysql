<html>

<body>

<a href="/index.php">Home</a>

<hr>

<ul>
<?php

function listTables($conn, $db) {
    $result = mysqli_query($conn, "SHOW TABLES FROM {$db}");

    if (!$result) {
        echo "DB error accessing list of tables\n";
        echo 'Error MySQL: ' . mysqli_error($conn);
        exit;
    }

    echo "<ul>";

    while ($row = mysqli_fetch_row($result)) {
        echo "<li>Table: {$row[0]}</li>";
    }

    echo "</ul>";

    mysqli_free_result($result);
}

const DB = 'mydb';

$conn = mysqli_connect('mysql', 'noroot', 'noroot', DB);

$table = uniqid('test-');

$create = "CREATE TABLE `{$table}` (id BIGINT, created_at DATETIME, name VARCHAR(20));";

echo "<li>going to execute query '{$create}'</li>";

$result = mysqli_query($conn, $create);

echo "<li>creation of table `{$table}` ".($result ? "done successfully!" : "thrown error ".mysqli_error($conn))."</li>";

echo "<li>going to show tables</li>";

listTables($conn, DB);

echo "<li>going to delete '{$table}' table</li>";

$result = mysqli_query($conn,"DROP TABLE IF EXISTS `{$table}`;");

echo "<li>deletion of table `{$table}` ".($result ? "done successfully!" : "thrown error ".mysqli_error($conn))."</li>";

echo "<li>going to show tables</li>";

listTables($conn, DB);

?>
</ul>
</body>
</html>
