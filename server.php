<?php
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

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text_content = $_POST['text_content'];

    // Initialize $target_file to NULL
    $target_file = NULL;

    // Handle file upload if an image is selected
    if ($_FILES["file"]["size"] > 0) {
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file already exists
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["file"]["size"] > 500000) {
            $uploadOk = 0;
        }

        // Allow only certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "";
        } else {
            // If everything is ok, try to upload file
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";
            }
        }
    }

    // Insert data into the database
    $sql = "INSERT INTO posts (text_content, file_name) VALUES ('$text_content', ";

    // Check if file_name should be NULL or a value
    if ($target_file) {
        $sql .= "'$target_file')";
    } else {
        $sql .= "NULL)";
    }

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close MySQL connection
$conn->close();
?>
