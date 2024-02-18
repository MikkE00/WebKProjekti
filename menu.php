<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burgeriravintolan Menu</title>


    <style>
      body {
        background-image: url('img/taustaBurgeri.webp');
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        backdrop-filter: blur(10px);
      }
    </style>

</head>
<body>
    <main>
        <div>
          <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
              <div class="container-fluid">
                <a class="navbar-brand" href="#"><img width="110px"max-width="100%" height="auto" src="img/logoTransparent.png" width="150px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark" aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse show" id="navbarDark">
                  <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                    <li class="nav-item navbarH">
                      <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item navbarH">
                      <a class="nav-link active " aria-current="page" href="Aboutus.html" >About us</a>
                    </li>
                    <li class="nav-item navbarH">
                      <a class="nav-link active" href="menu.html">Menu</a>
                    <li class="nav-item navbarH">
                      <a class="nav-link active" href="Contact.html" tabindex="-1" aria-disabled="true">Feedback</a>
                    </li>
                  </ul>
                  </form>
                </div>
              </div>
            </nav>
      </div>
      <!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burgeriravintolan Menu</title>


    <style>
      body {
        background-image: url('img/taustaBurgeri.webp');
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        backdrop-filter: blur(10px);
      }
    </style>

</head>
<body>
    <main>
        <div>
          <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
              <div class="container-fluid">
                <a class="navbar-brand" href="#"><img width="110px"max-width="100%" height="auto" src="img/logoTransparent.png" width="150px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark" aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse show" id="navbarDark">
                  <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                    <li class="nav-item navbarH">
                      <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item navbarH">
                      <a class="nav-link active " aria-current="page" href="Aboutus.html" >About us</a>
                    </li>
                    <li class="nav-item navbarH">
                      <a class="nav-link active" href="menu.html">Menu</a>
                    <li class="nav-item navbarH">
                      <a class="nav-link active" href="Contact.html" tabindex="-1" aria-disabled="true">Feedback</a>
                    </li>
                  </ul>
                  </form>
                </div>
              </div>
            </nav>
      </div>
      <?php
      require_once('dbconn.php');

      //write query
      $q = "SELECT * FROM menu ORDER BY ryhma";
      
      //run query
      $r = @mysqli_query($dbc, $q);

      $num = mysqli_num_rows($r);

      echo "<class='container'>";
      echo "        <div class='menu'>";
      echo "<div class='menu-group'>";
      echo "            <div class='menu-item'>";
      echo "              <div class='menu-item-text'>";

      echo "<h2 class='menu-group-heading'>Item</h2>";
      if($num > 0){
        //Naytetaan rivit
        while($row = mysqli_fetch_array($r)){
            echo "<p>";
            echo $row['tuote'] . "<br>";
            echo $row['kuvaus'] . "<br>";
            echo $row['hinta'] . "<br>";

            echo "</p>";

        }
      }
      ?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </main>
</body>
</html> 


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </main>
</body>
</html>