<?php
$db = new PDO('mysql:host=mysql;dbname=usersdb;charset=utf8mb4', 'usersdb_user', 'temp1234');
$dbUsers = ($db->query('SELECT * FROM users'))->fetchAll(PDO::FETCH_OBJ);
?>

<html>
    <body>
        <h1>Users are:</h1>
        <?php foreach($dbUsers as $row): ?>
            <p><?= $row->user ?></p>
        <?php endforeach; ?>
    </body>
</html>