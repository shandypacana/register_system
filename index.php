<!DOCTYPE html>
<html>
    <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  </head>


<body>

<!-- Top navigation -->
<div class="topnav">
  <a href="index.php?page=home">Home</a>
  <a href="index.php?page=register">Register Form</a>
  <a href="index.php?page=list">List</a>

  <div class="topnav-right">
    <a href="#search">Search</a>
    <a href="#about">About</a>
  </div>
</div>

        <!--Body diri-->
<article>
<?php
            // Modular Section

            $page = $_GET['page'] ?? 'dashboard'; 

            switch ($page) {

                    case 'register':
                        include 'register.php'; 
                        break;     
                case 'list':
                    include 'list.php'; 
                    break;
                    case 'home':
                      default: 
                          include 'homepage.php'; 
                          break;
            }
            ?>
  </article>

</body>
</html>
