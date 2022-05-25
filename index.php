<?php
include 'includes/header.php';
?>
    <title>GITFLIX</title>
</head>

<body>
    <div class="Cover"></div>
    <section class="parent">
        <?php
include 'includes/nav.php';
?>
        <section class="main">
            <h1><a href="#addednew">live your adventure</a></h1>
        </section>
    </section>

    <!-- BACK END AREA -->
    <section class="second" id="addednew">
  <div class="container">
      <h1>Movies</h1>
      <div class="best-bar">
    <?php
    
include 'includes/db.php';
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";

    $result = $conn->query("SELECT * FROM movie");
    $counter=1;
    while ($row = mysqli_fetch_array($result)) {
        //    echo $row['title'] . " " . $row['imgUrl']. " " . $row['demoUrl'];
        //    echo "<br />";
        $title = $row['title'];
        $imgUrl = $row['imgUrl'];
        $demoUrl = $row['demoUrl'];
        echo '  
      
          <a  target ="blank"  href=" ' . $demoUrl . '" class=" col-lg-2 col-md-4 col-sm-6 my-3" id="a1"><img width="95%" class="slider-img" src="' . $imgUrl . '"alt="' . $title . '"></a>
      ';
      ++$counter;
      if ($counter>6){
          break;
      }
  
    }
    $conn->close();


    ?>
    </div>
    </div>
    </section>
    <!-- BACK END AREA -->

    <section class="third">
        <div class="container">
            <h1>Series</h1>
            <div class="best-bar">
            <?php
                include 'includes/movie-card.php';
                include 'includes/movie-card.php';
                include 'includes/movie-card.php';
                include 'includes/movie-card.php';
                ?>
            </div>
        </div>
    </section>

    <section class="second">
        <div class="container">
            <h1>TV Shows</h1>
            <div class="best-bar">
            <?php
                include 'includes/movie-card.php';
                include 'includes/movie-card.php';
                include 'includes/movie-card.php';
                include 'includes/movie-card.php';
                ?>
            </div>
        </div>
    </section>

    <section class="third">
        <div class="container">
            <h1>Recommended</h1>
            <div class="best-bar">
                <?php
                include 'includes/movie-card.php';
                include 'includes/movie-card.php';
                include 'includes/movie-card.php';
                include 'includes/movie-card.php';
                ?>
            </div>
        </div>
    </section>

    <section class="forth">
        <h1>words from movies</h1>
    </section>

    <section class="quotes" id="nemo">
        <div class="cover2"></div>
        <div class="container">
            <h1>“Just keep swimming”</h1>
            <h6>Finding Nemo</h6>
        </div>
    </section>

    <section class="quotes" id="harry">
        <div class="cover2"></div>
        <div class="container">
            <h1>“We are only as strong as we are united, as weak as we are divided”</h1>
            <h6>Harry Potter and the Goblet of Fire</h6>
        </div>

    </section>

    <section class="quotes" id="lord">
        <div class="cover2"></div>
        <div class="container">
            <h1>“Even the smallest person can change the course of the future.”</h1>
            <h6>the lord of the rings</h6>
        </div>
    </section>

    <?php
include 'includes/footer.php';
?>