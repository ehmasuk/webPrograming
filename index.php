<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="Description" content="Enter your description here" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Abel:wght@400;500;600&family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet" />
        <!-- swal -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <link rel="stylesheet" href="style.css" />
        <title>Community</title>
    </head>
    <body>
        <!-- font-family: 'Abel', sans-serif; -->
        <!-- font-family: 'Inter', sans-serif; -->
        <!-- font-family: 'Roboto', sans-serif; -->

        <section class="com-header-section sticky-top">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="logo">
                        <img src="https://img.logoipsum.com/332.svg" alt="" class="img-fluid" />
                    </div>

                    <div class="search">
                        <input type="text" placeholder="Search..." />
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="links">
                        <div class="feed-notif">
                            <i onclick="toggleShow('feed-notification-notif')" class="far fa-bell">
                                <span class="notif-mark">8</span>
                            </i>
                            <div class="feed-notification-box feed-notification-notif" style="display: none">
                                <p class="noti-title">Notifications</p>
                                <div style="padding: 10px">
                                    <div class="single-notification">
                                        <p><b>Landon Mendoza fayez</b> posted a new post Lorem ipsum consectetur adipisicing elit. Hic, facilis?</p>
                                        <p style="color: blue; font-size: 14px">19 hours ago</p>
                                    </div>
                                    <div class="single-notification">
                                        <p><b>Sophie Bryan fayez</b> posted a new post Lorem ipsum consectetur adipisicing elit. Hic, facilis?</p>
                                        <p style="color: blue; font-size: 14px">19 hours ago</p>
                                    </div>
                                    <div class="single-notification">
                                        <p><b>Esther Graves fayez</b> posted a new post Lorem ipsum consectetur adipisicing elit. Hic, facilis?</p>
                                        <p style="color: blue; font-size: 14px">19 hours ago</p>
                                    </div>
                                    <div class="single-notification">
                                        <p><b>Rosetta Tucker fayez</b> posted a new post Lorem ipsum consectetur adipisicing elit. Hic, facilis?</p>
                                        <p style="color: blue; font-size: 14px">19 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="feed-chat-notif">
                            <i onclick="toggleShow('feed-notification-inbox')" class="far fa-comment">
                                <span class="notif-mark">1</span>
                            </i>
                            <div class="feed-notification-box feed-notification-inbox" style="display: none">
                                <p class="noti-title">Inbox</p>
                                <div style="padding: 10px">
                                    <div class="single-notification">
                                        <img src="./img/banner-media.png" alt="" />
                                        <div class="w-100">
                                            <p><b>Jose Lee fayez</b></p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p style="font: 13px">Lorem ipsum dolor sit amet?</p>
                                                <p style="color: blue; font-size: 14px">1s</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-notification">
                                        <img src="https://i.pravatar.cc/150?2" alt="" />
                                        <div class="w-100">
                                            <p><b>Sylvia Simon</b></p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p style="font: 13px">Lorem ipsum dolor sit amet?</p>
                                                <p style="color: blue; font-size: 14px">5m</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-notification">
                                        <img src="https://i.pravatar.cc/150?3" alt="" />
                                        <div class="w-100">
                                            <p><b>May Bryan</b></p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p style="font: 13px">Lorem ipsum dolor sit amet?</p>
                                                <p style="color: blue; font-size: 14px">19h</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-notification">
                                        <img src="https://i.pravatar.cc/150?1" alt="" />
                                        <div class="w-100">
                                            <p><b>Christian Rivera</b></p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p style="font: 13px">Lorem ipsum dolor sit amet?</p>
                                                <p style="color: blue; font-size: 14px">9h</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-notification">
                                        <img src="https://i.pravatar.cc/150?5" alt="" />
                                        <div class="w-100">
                                            <p><b>Hester Olson</b></p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p style="font: 13px">Lorem ipsum dolor sit amet?</p>
                                                <p style="color: blue; font-size: 14px">19h</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-notification">
                                        <img src="https://i.pravatar.cc/150?6" alt="" />
                                        <div class="w-100">
                                            <p><b>Olga Stephens</b></p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p style="font: 13px">Lorem ipsum dolor sit amet?</p>
                                                <p style="color: blue; font-size: 14px">9h</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="header-user-img">
                            <a href="#"><img src="./img/banner-media.png" alt="" class="img-fluid" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="feed-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 left-bar p-0">
                        <div style="position:sticky;top:100px">
                        <div class="side-box">
                            <p class="bar-title">Top students</p>
                            <div class="side-box-post">
                                <div class="cover">
                                    <img src="https://i.pravatar.cc/150?8" alt="" />
                                </div>
                                <div class="top-student">
                                    <div class="rank">
                                        <p class="lvl">Rank</p>
                                        <p class="data">#1</p>
                                    </div>
                                    <div class="rank">
                                        <p class="lvl">Name</p>
                                        <p class="data">Ray</p>
                                    </div>
                                </div>
                            </div>
                            <div class="side-box-post">
                                <div class="cover">
                                    <img src="https://i.pravatar.cc/150?9" alt="" />
                                </div>
                                <div class="top-student">
                                    <div class="rank">
                                        <p class="lvl">Rank</p>
                                        <p class="data">#2</p>
                                    </div>
                                    <div class="rank">
                                        <p class="lvl">Name</p>
                                        <p class="data">Avanzado</p>
                                    </div>
                                </div>
                            </div>
                            <div class="side-box-post">
                                <div class="cover">
                                    <img src="https://i.pravatar.cc/150?10" alt="" />
                                </div>
                                <div class="top-student">
                                    <div class="rank">
                                        <p class="lvl">Rank</p>
                                        <p class="data">#3</p>
                                    </div>
                                    <div class="rank">
                                        <p class="lvl">Name</p>
                                        <p class="data">Umer</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="side-box">
                            <p class="bar-title">Latest updates</p>
                            <div class="side-box-post">
                                <div class="cover">
                                    <img src="https://i.pravatar.cc/150?11" alt="" />
                                </div>
                                <div class="info">
                                    <b>I had a tree of money</b>
                                    <p class="date">May 14, 2019</p>
                                </div>
                            </div>
                            <div class="side-box-post">
                                <div class="cover">
                                    <img src="https://i.pravatar.cc/150?12" alt="" />
                                </div>
                                <div class="info">
                                    <b>Never tell a lie</b>
                                    <p class="date">May 14, 2019</p>
                                </div>
                            </div>
                            <button class="btn btn-sm blog-seemore-btn mt-4">SEE ALL</button>
                        </div>
                        </div>
                    </div>

                    <div class="col-md-6 feed-bar">
                        <h4 class="act-title">Activity Feed</h4>

                        <div class="post-box" onclick="toggleShow('post-popup-wraper')">
                            <div class="body">
                                <div class="row align-items-center">
                                    <div class="user">
                                        <img src="./img/banner-media.png" alt="" class="img-fluid" />
                                    </div>
                                    <div class="tap">
                                        <p>Share whats on your mind...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <div class="row">
                                    <div class="icon"><i class="fas fa-camera"></i></div>
                                    <div class="icon"><i class="fas fa-video"></i></div>
                                </div>
                            </div>
                        </div>

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

// Fetch posts from the database, ordered by primary key in descending order
$sql = "SELECT * FROM posts ORDER BY id DESC";
$result = $conn->query($sql);

if ($result === false) {
    die("Error in SQL query: " . $conn->error);
}

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo '
        <div class="feed-post" id="post_' . $row["id"] . '">
            <div class="post-header">
                <div class="user">
                    <img src="./img/banner-media.png" alt="" class="img-fluid" />
                    <div>
                        <a href="#" class="name">John</a> posted an update
                        <p class="time">a year ago</p>
                    </div>
                </div>
                <div class="icon delete-post" data-post-id="' . $row["id"] . '"><i class="fas fa-trash-alt"></i></div>
            </div>
            <div class="content">
                <pre>' . $row["text_content"] . '</pre>';
        // Check if file_name is not NULL
        if ($row["file_name"] !== NULL) {
            echo '<img src="' . $row["file_name"] . '" alt="" />';
        }
        echo '
            </div>
            <div class="post-footer">
                <p class="like-count">You and Jennifer like this · 2 Comments</p>
                <div class="row icons">
                    <p class="like">
                        <i class="far fa-thumbs-up"></i>
                        <span>Like</span>
                    </p>
                    <p class="unlike">
                        <i class="far fa-comment-alt"></i>
                        Comment
                    </p>
                </div>
            </div>
            <div class="comment-box">
                <div class="post-header">
                    <div class="user">
                        <img src="https://i.pravatar.cc/150?29" alt="" class="img-fluid" />
                        <div>
                            <a href="#" class="name">John</a> <span class="time">a year ago</span>
                            <p class="main-comment">Where is that? Looks beautiful.</p>
                            <p class="reply">Reply</p>
                        </div>
                    </div>
                    <div class="icon" aria-label="More options" data-microtip-position="top" role="tooltip"><i class="fas fa-ellipsis-h"></i></div>
                </div>
            </div>
        </div>';
    }
} else {
    echo '<div class="text-center p-5">No recent post avilable</div>';
}

// Close MySQL connection
$conn->close();
?>



                    </div>

                    <div class="col-md-3 right-bar p-0">
                        <div class="side-box" style="position:sticky;top:100px">
                            <p class="bar-title">Top books</p>
                            <div class="side-box-post">
                                <div class="cover">
                                    <img src="https://i.pravatar.cc/150?36" alt="" />
                                </div>
                                <div class="info">
                                    <b>Safe drive always</b>
                                    <div class="rating d-flex">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="side-box-post">
                                <div class="cover">
                                    <img src="https://i.pravatar.cc/150?37" alt="" />
                                </div>
                                <div class="info">
                                    <b>14 signs of love</b>
                                    <div class="rating d-flex">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="side-box-post">
                                <div class="cover">
                                    <img src="https://i.pravatar.cc/150?38" alt="" />
                                </div>
                                <div class="info">
                                    <b>Never be sad</b>
                                    <div class="rating d-flex">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="side-box-post">
                                <div class="cover">
                                    <img src="https://i.pravatar.cc/150?39" alt="" />
                                </div>
                                <div class="info">
                                    <b>10 tips from a wise man</b>
                                    <div class="rating d-flex">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="side-box-post">
                                <div class="cover">
                                    <img src="https://i.pravatar.cc/150?40" alt="" />
                                </div>
                                <div class="info">
                                    <b>Never waste time</b>
                                    <div class="rating d-flex">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        



        <div class="post-popup-wraper">
            <div class="post-popup">
                <div class="header">
                    <p>Create post</p>
                    <i class="fa fa-times" onclick="toggleShow('post-popup-wraper')"></i>
                </div>
                <form id="postForm" enctype="multipart/form-data">
                    <div class="body">
                        <div class="top">
                            <img src="./img/banner-media.png" alt="" />
                            <p>John</p>
                        </div>
                        <div class="bottom">
                            <textarea required id="text_content" name="text_content" placeholder="Share what's on your mind..."></textarea>
                        </div>
                        <div class="bottom">
                            <input type="hidden" name="MAX_FILE_SIZE" value="500000" />
                        </div>
                    </div>
                    <div class="footer">
                        <input type="file" id="file" name="file" accept="image/*" />
                        <button type="button" id="submitBtn" class="btn post-btn btn-sm">Post</button>
                    </div>
                </form>

            </div>
        </div>

<a href="">click me</a>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){


    // Delete post when trash icon is clicked
    $('.delete-post').click(function(){
        var postId = $(this).data('post-id');
        $.ajax({
            url: 'delete_post.php',
            type: 'POST',
            data: {post_id: postId},
            success: function(response) {
                // Remove the post from the DOM
                $('#post_' + postId).remove();
                Swal.fire({
                    title: "Deleted!",
                    text: "Post successfully deleted!",
                    icon: "success"
                });
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    title: "Error!",
                    text: "Something went wrong!",
                    icon: "error"
                });
            }
        });
    });





    $('#submitBtn').click(function() {
            var formData = new FormData($('#postForm')[0]);

            $.ajax({
                url: 'server.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    document.querySelector('.post-popup-wraper').classList.remove("show");

                    Swal.fire({
                        title: "Post uploaded!",
                        text: "Post successfully uploaded!",
                        icon: "success"
                    });
                    setTimeout(() => {
                        window.location.reload(); 
                    }, 2000);
                },
                error: function(xhr, status, error) {
                    alert('An error occurred: ' + error); // Show error message
                }
            });
        });





});



document.querySelector('selector');




</script>






        <script>
            function toggleShow(wraper) {
                document.querySelector(`.${wraper}`).classList.toggle("show");
            }
        </script>
    </body>
</html>
