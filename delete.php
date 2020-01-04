<?php
require 'classes/Database.php';

$database = new Database;

$database->query('SELECT * FROM posts');

//$database->query('SELECT * FROM posts WHERE id = :id');
$database->bind(':id', 1);

$rows = $database->resultset();

//print_r($rows);
/*
foreach ($rows as $row) {
    echo '<h1>' . $row['title'] . '</h1>';
    echo '<p>' . $row['body'] . '</p>';
}
*/

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if (isset($_POST['delete'])) {
    $delete_id = $_POST['delete_id'];
    $database->query('DELETE FROM posts WHERE id = :id');
    $database->bind(':id', $delete_id);
    $database->execute();
}


if (isset($post['submit'])) {
    $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];
    
    // INSERT QUERY
    $database->query('INSERT INTO posts (title, body) VALUES(:title, :body)');
    // UPDATE QUERY
    //$database->query('UPDATE posts set title = :title, body = :body WHERE id = :id');
    $database->bind(':id', $id);
    $database->bind(':title', $title);
    $database->bind(':body', $body);
    $database->execute();
    
    $database->query('SELECT * FROM posts');
    $rows = $database->resultset();
    
}

$database->query('SELECT * FROM posts');
$rows = $database->resultset();


?>
<h1>Add Post</h1>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <label>Post ID</label><br/>
    <input type="text" name="id" placeholder="Specify ID"><br/><br />  
    <label>Post Title</label><br/>
    <input type="text" name="title" placeholder="Add a title..."><br/><br />
    <label>Post Body</label><br/>
    <textarea name="body"></textarea><br/><br />
    <input type="submit" name="submit" value="Submit">
</form>
<h1>Posts</h1>
<div>
    <?php foreach ($rows as $row) : ?>
        <div>
            <h3><?php echo $row['title']; ?></h3>
            <p><?php echo $row['body']; ?></p>
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>" />
                <input type="submit" name="delete" value="Delete" />
            </form>
        </div>
    <?php endforeach; ?>
</div>