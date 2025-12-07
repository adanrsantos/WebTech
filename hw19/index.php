<?php
    if (!isset($_GET['page']))
        $page="home.php";
    else
        $page=$_GET['page'].".php";
    include("functions.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php
    if ($page === 'home.php') {
        echo '<title>Welcome to Adan\'s Homepage</title>';
    }
    elseif ($page === 'school.php') {
        echo '<title>Welcome to Adan\'s SchoolPage</title>';
    }
    elseif ($page === 'hobbies.php') {
        echo '<title>Welcome to Adan\'s HobbiesPage</title>';
    }
    elseif ($page === 'work.php') {
        echo '<title>Welcome to Adan\'s WorkPage</title>';
    }
    elseif ($page === 'contact.php') {
        echo '<title>Welcome to Adan\'s ContactPage</title>';
    }
    elseif ($page === 'results.php') {
        echo '<title>Welcome to Adan\'s ResultsPage</title>';
    }
?>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/templatemo-style.css">
<link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <header class="nav-down responsive-nav hidden-lg hidden-md">
        <div>
            <nav>
                <ul class="nav navbar-nav">
                    <li><a href="index.php?page=home">Home</a></li>
                    <li><a href="index.php?page=school">School</a></li>
                    <li><a href="index.php?page=hobbies">Hobbies</a></li>
                    <li><a href="index.php?page=work">Work</a></li>
                    <li><a href="index.php?page=contact">Contact</a></li>
                    <li><a href="index.php?page=results">Results</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="sidebar-navigation hidden-sm hidden-xs">
        <div class="logo">
            <a href="#">Adan's<em> Website</em></a>
        </div>
        <nav>
            <ul>
                <?php
                    include("navigation.php");
                ?>
            </ul>
        </nav>
        <ul class="social-icons">
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
    </div>
    <div class="page-content">
        <section class="content-section main-container">
            <?php
                include($page);
            ?>            
        </section>
        <section class="footer">
            <p>Thank you for your reading! Have a great day!</p>
        </section>
    </div>
</body>
</html>