<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="mystyle.css">
  <title>Movie Description</title>
</head>

<body>
  <ul>
    <li><a class="active" href="index.php">Home</a></li>
    <li class="dropdown">
      <div class="dropbtn">Genres</div>
      <div class="dropdown-content">
        <a href="#action">Action</a>
        <a href="#comedy">Comedy</a>
        <a href="#drama">Drama</a>
        <a href="#adventure">Adventure</a>
        <a href="#fantasy">Fantasy</a>
        <a href="#sciencefiction">Sciencefiction</a>
      </div>
    </li>
    <li><a href="favorites.html">Favorites</a></li>
    <li><a href="about_web.php">About</a></li>
    <li><a href="#contact">Contact</a></li>
    <li class="signup"><a href="signup.html">Sign Up</a></li>

    <h1
      style="font-family:Courier,monospace; color:white; margin:7px 400px; padding:0px 15px; text-align:center; margin-right:330px;">
      L&D MOVIES</h1>
  </ul>

  <div class="heading1">
    <h1>Find Your Favorite Movie</h1>
  </div>

  <div class="search-container">
    <form action="search.php" method="GET">
      <input type="text" name="query" placeholder="Search a movie...">
      <input type="submit" value="Search">
    </form>
  </div>

  <div class="home">
    <img src="foto2.jpg">
  </div>


  <div class="genres">
    <section id="action">
      <h2>2023 Action Movies</h2>

      <div class="film-container">
        <?php
        include("db.php");

        $zhanri = "action";

        $sql = "SELECT `fotoID`, `emri_foto`, `rruga`, `zhanri` FROM `filmi_foto` WHERE `zhanri` = '$zhanri'";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $imageName = $row['emri_foto'];
            $imagePath = $row['rruga'];
            echo "<img src='$imagePath' alt='$imageName'>";
          }
        } else {
          echo "<p>No photos found for the specified genre.</p>";
        }


        ?>
      </div>
    </section>

    <section id="comedy">
      <h2>2023 Comedy Movies</h2>
      <div class="film-container">
        <?php
        include("db.php");

        $zhanri = "comedy";

        $sql = "SELECT `fotoID`, `emri_foto`, `rruga`, `zhanri` FROM `filmi_foto` WHERE `zhanri` = '$zhanri'";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $imageName = $row['emri_foto'];
            $imagePath = $row['rruga'];
            echo "<img src='$imagePath' alt='$imageName'>";
          }
        } else {
          echo "<p>No photos found for the specified genre.</p>";
        }


        ?>
        <!-- <div class="favorites-container">
                <label for="favorite-checkbox11">
                    <input type="checkbox" id="favorite-checkbox11">
                    <span>Add to Favorites</span>
                </label>
            </div>-->
      </div>
    </section>

    <section id="drama">
      <h2>2023 Drama Movies</h2>

      <div class="film-container">
        <?php
        include("db.php");

        $zhanri = "drama";

        $sql = "SELECT `fotoID`, `emri_foto`, `rruga`, `zhanri` FROM `filmi_foto` WHERE `zhanri` = '$zhanri'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $imageName = $row['emri_foto'];
            $imagePath = $row['rruga'];
            echo "<img src='$imagePath' alt='$imageName'>";
          }
        } else {
          echo "<p>No photos found for the specified genre.</p>";
        }


        $conn->close();
        ?>
      </div>
    </section>


    <section id="adventure">
      <h2>2023 Adventure Movies</h2>
      <div class="film-container">
        <?php
        include("db.php");

        $zhanri = "adventure";

        $sql = "SELECT `fotoID`, `emri_foto`, `rruga`, `zhanri` FROM `filmi_foto` WHERE `zhanri` = '$zhanri'";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $imageName = $row['emri_foto'];
            $imagePath = $row['rruga'];
            echo "<img src='$imagePath' alt='$imageName'>";
          }
        } else {
          echo "<p>No photos found for the specified genre.</p>";
        }


        ?>

      </div>
    </section>

    <section id="fantasy">
      <h2>2023 Fantasy Movies</h2>
      <div class="film-container">
        <?php
        include("db.php");

        $zhanri = "fantasy";

        $sql = "SELECT `fotoID`, `emri_foto`, `rruga`, `zhanri` FROM `filmi_foto` WHERE `zhanri` = '$zhanri'";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $imageName = $row['emri_foto'];
            $imagePath = $row['rruga'];
            echo "<img src='$imagePath' alt='$imageName'>";
          }
        } else {
          echo "<p>No photos found for the specified genre.</p>";
        }


        ?>

      </div>
    </section>

    <section id="sciencefiction">
      <h2>2023 Science Fiction Movies</h2>
      <div class="film-container">
        <?php
        include("db.php");

        $zhanri = "science-fiction";

        $sql = "SELECT `fotoID`, `emri_foto`, `rruga`, `zhanri` FROM `filmi_foto` WHERE `zhanri` = '$zhanri'";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $imageName = $row['emri_foto'];
            $imagePath = $row['rruga'];
            echo "<img src='$imagePath' alt='$imageName'>";
          }
        } else {
          echo "<p>No photos found for the specified genre.</p>";
        }


        ?>

      </div>
    </section>


    <div class="clearfix">
      <section id="contact">
        <div class="contact-form">
          <h2>Contact Us</h2>
          <form method="post" action="contact.php">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" id="phone" name="phone">
            </div>

            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" id="subject" name="subject" required>
            </div>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="10"></textarea>

            <button type="submit">Send Message</button>
          </form>
        </div>
        <div class="contact-info">
          <form method="post" action="contact_info.php">
            <h2>Contact Information</h2>
            <?php

            include("db.php");

            $sql = "SELECT `Phone`, `Email` FROM `contact_info` WHERE 1";

            $result = $conn->query($sql);

            if ($record = $result->fetch_assoc()) {

              echo "<p>$record[Phone]</p>";
              echo "<p>$record[Email]</p>";


            }
            ?>
        </div>
        </form>

    </div>
    </section>



    <footer>
      <div class="footer-container">
        <p>Discover the world of movies and find your next favorite!</p>
        <p>&copy; 2023 L&D Movies.com. All rights reserved.</p>
      </div>
    </footer>
  </div>


</body>

</html>