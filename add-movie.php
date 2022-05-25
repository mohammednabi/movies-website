<?php
include 'includes/header.php';
?>
    <title>Add Movie</title>

</head>
<body>
<div class="Cover"></div>
    <section class="parent">
    <?php
include 'includes/nav.php';
?>
        <section class="main">
            <form action="add-movie-util.php" method="post" class="addForm">
                <input type="text" name="title" placeholder="Title">
                <input type="url" name="imgUrl" placeholder="Poster URL">
                <input type="url" name="demoUrl" placeholder="Demo URL">
                <input type="submit" value="Add">
            </form>
        </section>
    </section>
    
    <?php
include 'includes/footer.php';
?>
