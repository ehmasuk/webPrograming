<?php
// Check if the post_id parameter is set
if(isset($_POST['post_id'])) {
    // Connect to MySQL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "community";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve the post_id from the request
    $postId = $_POST['post_id'];

    // Construct the SQL query to delete the post
    $sql = "DELETE FROM posts WHERE id = $postId";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        // If the deletion was successful, return a success message
        echo "Post deleted successfully";
    } else {
        // If an error occurred during deletion, return an error message
        echo "Error deleting post: " . $conn->error;
    }

    // Close MySQL connection
    $conn->close();
} else {
    // If post_id parameter is not set, return an error message
    echo "Post ID not provided";
}
?>