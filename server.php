<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "community";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text_content = $_POST['text_content'];

    $target_file = NULL;

    if ($_FILES["file"]["size"] > 0) {
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (file_exists($target_file)) {
            $uploadOk = 0;
        }

        if ($_FILES["file"]["size"] > 500000) {
            $uploadOk = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "";
        } else {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";
            }
        }
    }

    $sql = "INSERT INTO posts (text_content, file_name) VALUES ('$text_content', ";

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

$conn->close();
?>
