<?php
if(isset($_POST['post_id'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "community";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $postId = $_POST['post_id'];

    $sql = "DELETE FROM posts WHERE id = $postId";

    if ($conn->query($sql) === TRUE) {
        echo "Post deleted successfully";
    } else {
        echo "Error deleting post: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Post ID not provided";
}
?>