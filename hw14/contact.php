<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Welcome to Adan's ContactPage</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/templatemo-style.css">
<link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <header class="nav-down responsive-nav hidden-lg hidden-md">
        <!-- <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button> -->
        <!-- <div class="collapse navbar-collapse"> -->
        <div>
            <nav>
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="school.html">School</a></li>
                    <li><a href="hobbies.html">Hobbies</a></li>
                    <li><a href="work.html">Work</a></li>
                    <li><a href="contact.php">Contact</a></li>
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
                <li>
                    <a href="index.html">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Home
                    </a>
                </li>
                <li>
                    <a href="school.html">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        School
                    </a>
                </li>
                <li>
                    <a href="hobbies.html">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Hobbies
                    </a>
                </li>
                <li>
                    <a href="work.html">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Work
                    </a>
                </li>
                <li>
                    <a href="contact.php" class="active-section">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Contact
                    </a>
                </li>
            </ul>
        </nav>
        <ul class="social-icons">
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
    </div>
    <div class="page-content">
        <section class="content-section main-container">
            <div class="section-heading">
                <h1>Contact<br><em>Information</em></h1>
                <p>Welcome to my Contact Section, 
                <br>This section will have my contact information.</p>
            </div>
            <div class="section-content">
                <h3>Please fill out the following form:</h3>
                <?php
                    if (!isset($_POST['submit'])) {
                        if (isset($_GET['msg']) && $_GET['msg']=="error") {
                            echo '<div class="alert alert-danger">You must
                            fill out the contact form before viewing the results!</div>';
                        }
                        echo '<form action="" method="post">';
                            echo '<div id="fnGroup" class="form-group has-default">';
                                echo '<label class="control-label">First Name:</label>';
                                echo '<input type="text" id="firstName" name="firstName" class="form-control">';
                                echo '<span id="fnFeedBack" class="help-block"></span>';
                            echo '</div>';
                            echo '<div id="lnGroup" class="form-group has-default">';
                                echo '<label class="control-label">Last Name:</label>';
                                echo '<input type="text" id="lastName" name="lastName" class="form-control">';
                                echo '<span id="lnFeedBack" class="help-block"></span>';
                            echo '</div>';
                            echo '<div id="emailGroup" class="form-group">';
                                echo '<label class="control-label">Email:</label>';
                                echo '<input type="text" id="email" name="email" class="form-control">';
                                echo '<span id="emailFeedBack" class="help-block"></span>';
                            echo '</div>';
                            echo '<div id="phoneGroup" class="form-group">';
                                echo '<label class="control-label">Phone:</label>';
                                echo '<input type="text" id="phone" name="phone" class="form-control">';
                                echo '<span id="phoneFeedBack" class="help-block"></span>';
                            echo '</div>';
                            echo '<div id="usernameGroup" class="form-group">';
                                echo '<label class="control-label">Username:</label>';
                                echo '<input type="text" id="username" name="username" class="form-control">';
                                echo '<span id="usernameFeedBack" class="help-block"></span>';
                            echo '</div>';
                            echo '<div id="pwdGroup" class="form-group">';
                                echo '<label class="control-label">Password:</label>';
                                echo '<input type="text" id="password" name="password" class="form-control">';
                                echo '<span id="pwdFeedBack" class="help-block"></span>';
                            echo '</div>';
                            echo '<div id="commentGroup" class="form-group">';
                                echo '<label class="control-label">Comments:</label>';
                                echo '<input type="text" id="comment" name="comments" class="form-control">';
                                echo '<span id="commentFeedBack" class="help-block"></span>';
                            echo '</div>';
                            echo '<div id="formGroup" class="form-group">';
                                echo '<button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>';
                            echo '</div>';
                        echo '</form>';
                    } else {
                        $firstName=$_POST['firstName'];
                        $lastName=$_POST['lastName'];
                        $email=$_POST['email'];
                        $phone=$_POST['phone'];
                        $username=$_POST['username'];
                        $password=$_POST['password'];
                        $comments=$_POST['comments'];
                        if (empty($firstName) || empty($lastName) || empty($email) || empty($phone) || empty($username) || empty($password) || empty($comments)) {
                            header("Location: contact.php?msg=error");
                            exit;
                        } else {
                            echo '<div class="alert alert-success">Form submitted successfully!</div>';
                            echo '<div><b><i>First Name:</i></b> '.$firstName.'</div>';
                            echo '<div><b><i>Last Name:</i></b> '.$lastName.'</div>';
                            echo '<div><b><i>Email:</i></b> '.$email.'</div>';
                            echo '<div><b><i>Phone:</i></b> '.$phone.'</div>';
                            echo '<div><b><i>Username:</i></b> '.$username.'</div>';
                            echo '<div><b><i>Password:</i></b> '.$password.'</div>';
                            echo '<div><b><i>Comments:</i></b> '.$comments.'</div>';
                        }
                    }
                ?>
            </div>
            <div class="section-content">
                <div>
                    <ul>
                        <li>
                            <h5>LinkedIn:</h5>
                            <ul>
                                <li><a href="https://www.linkedin.com/in/adanrsantos/" target="_blank">LinkedIn</a></li>
                            </ul>
                        </li>
                        <li>
                            <h5>Email:</h5>
                            <ul>
                                <li>adan.santos@my.utsa</li>
                            </ul>
                        </li>
                        <li>
                            <h5>Phone:</h5>
                            <ul>
                                <li>(123)456-7890</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div>
                    <table class="my-table">
                        <th class="table-header" colspan="7">Availability (October 2025) Busy=red Free=blue TBD=none</th>
                        <tr class="table-week">
                            <td>Sun</td>
                            <td>Mon</td>
                            <td>Tue</td>
                            <td>Wed</td>
                            <td>Thu</td>
                            <td>Fri</td>
                            <td>Sat</td>
                        </tr>
                        <tr>
                            <td class="busy">28</td>
                            <td class="available">29</td>
                            <td class="available">30</td>
                            <td class="busy">1</td>
                            <td class="unknown">2</td>
                            <td class="available">3</td>
                            <td class="unknown">4</td>
                        </tr>
                        <tr>
                            <td class="busy">5</td>
                            <td class="available">6</td>
                            <td class="busy">7</td>
                            <td class="unknown">8</td>
                            <td class="available">9</td>
                            <td class="unknown">10</td>
                            <td class="available">11</td>
                        </tr>
                        <tr>
                            <td class="busy">12</td>
                            <td class="unknown">13</td>
                            <td class="available">14</td>
                            <td class="unknown">15</td>
                            <td class="busy">16</td>
                            <td class="unknown">17</td>
                            <td class="available">18</td>
                        </tr>
                        <tr>
                            <td class="busy">19</td>
                            <td class="available">20</td>
                            <td class="available">21</td>
                            <td class="busy">22</td>
                            <td class="unknown">23</td>
                            <td class="available">24</td>
                            <td class="unknown">25</td>
                        </tr>
                        <tr>
                            <td class="busy">26</td>
                            <td class="available">27</td>
                            <td class="unknown">28</td>
                            <td class="available">29</td>
                            <td class="available">30</td>
                            <td class="busy">31</td>
                            <td class="unknown">1</td>
                        </tr>
                    </table>
                </div>
                <div>
                    <a href="#top">Back to Start</a>
                </div>
            </div>            
        </section>
        <section class="footer">
            <p>Thank you for your reading! Have a great day!</p>
        </section>
    </div>
</body>
</html>
<!-- <script src="assets/js/validation.js"></script> -->