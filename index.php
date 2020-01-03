<?php
require 'classes/Database.php';

$database = new Database;

//$database->query('SELECT * FROM posts');

$database->query('SELECT * FROM posts WHERE id = :id');
$database->bind(':id', 1);

$rows = $database->resultset();

//print_r($rows);
/*
foreach ($rows as $row) {
    echo '<h1>' . $row['title'] . '</h1>';
    echo '<p>' . $row['body'] . '</p>';
}
*/
?>
<h1>Posts</h1>
<div>
    <?php foreach ($rows as $row) : ?>
        <div>
            <h3><?php echo $row['title']; ?></h3>
            <p><?php echo $row['body']; ?></p>
        </div>
    <?php endforeach; ?>
</div>