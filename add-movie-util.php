<?php
include 'includes/header.php';
?>
    <title>GITFLEX</title>

</head>
<body>
<div class="Cover"></div>
    <section class="parent">
    <?php
include 'includes/nav.php';
?>
        <!-- BACK-END AREA -->
        <section class="main">
            <div class="addForm d-flex flex-column">

            
            <?php
    $title=$_POST['title'];
    $imgUrl= $_POST['imgUrl'];
    $demoUrl= $_POST['demoUrl'];

    include 'includes/db.php';

$sql = "INSERT INTO movie  (title, imgUrl, demoUrl)
VALUES ('$title', '$imgUrl', '$demoUrl')";

if ($conn->query($sql) === TRUE) {
  echo '<h1 class="title">Added Successfully!</h1>';
    
} else {
  echo '<h1 class="title">Failure!</h1>';
}
  $conn->close();
?>

                <div class="flex-container" style ="display:flex;">
                    <a href="index.php" style=" margin-right:50px;">Homepage</a>
                    <a href="add-movie.php" style="margin-left:50px;">Add More</a>
                </div>
                <!-- BACK-END AREA -->












            </div>
        </section>
    </section>
    
    <?php
include 'includes/footer.php';
?>
