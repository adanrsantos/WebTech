<?php
    session_start();
?>
<div class="section-heading">
    <h1>Contact<br><em>Information</em></h1>
    <p>Welcome to my Contact Section, 
    <br>This section will have my contact information.</p>
</div>
<div class="section-content">
    <h3>Please fill out the following form:</h3>
    <?php
        if (!isset($_POST['submit'])) {
            echo '<form action="index.php?page=contact" method="post">';
                if (isset($_GET['error']) && strstr($_GET['error'], "fn")) {
                    echo '<div id="fnGroup" class="form-group has-error">';
                        echo '<label class="control-label">First Name:</label>';
                        if (strstr($_GET['error'], "fnNull")) {
                            echo '<input type="text" id="firstName" name="firstName" value="'.$_SESSION['fnData'].'" class="form-control">';
                            echo '<span id="fnFeedBack" class="help-block">First name cannot be blank!</span>';
                        }
                        if (strstr($_GET['error'], "fnInvalid")){
                            echo '<input type="text" id="firstName" name="firstName" value="'.$_SESSION['fnData'].'" class="form-control">';
                            echo '<span id="fnFeedBack" class="help-block">First name cannot contain invalid characters or be greater than 32 characters!</span>';
                        }                                    
                    echo '</div>';
                } else {
                    if ($_SESSION['fnData'] != ""){
                        echo '<div id="fnGroup" class="form-group has-success">';
                            echo '<label class="control-label">First Name:</label>';
                            echo '<input type="text" id="firstName" name="firstName" value="'.$_SESSION['fnData'].'" class="form-control">';
                            echo '<span id="fnFeedBack" class="help-block"></span>';
                        echo '</div>';
                    } else {
                        echo '<div id="fnGroup" class="form-group has-default">';
                            echo '<label class="control-label">First Name:</label>';
                            echo '<input type="text" id="firstName" name="firstName" class="form-control">';
                            echo '<span id="fnFeedBack" class="help-block"></span>';
                        echo '</div>';
                    }
                }
                if (isset($_GET['error']) && strstr($_GET['error'], "ln")) {
                    echo '<div id="lnGroup" class="form-group has-error">';
                        echo '<label class="control-label">Last Name:</label>';
                        if (strstr($_GET['error'], "lnNull")) {
                            echo '<input type="text" id="lastName" name="lastName" value="'.$_SESSION['lnData'].'" class="form-control">';
                            echo '<span id="lnFeedBack" class="help-block">Last name cannot be blank!</span>';
                        }
                        if (strstr($_GET['error'], "lnInvalid")){
                            echo '<input type="text" id="lastName" name="lastName" value="'.$_SESSION['lnData'].'" class="form-control">';
                            echo '<span id="lnFeedBack" class="help-block">Last name cannot contain invalid characters or be greater than 32 characters!</span>';
                        }                                    
                    echo '</div>';
                } else {
                    if ($_SESSION['lnData'] != ""){
                        echo '<div id="lnGroup" class="form-group has-success">';
                            echo '<label class="control-label">Last Name:</label>';
                            echo '<input type="text" id="lastName" name="lastName" value="'.$_SESSION['lnData'].'" class="form-control">';
                            echo '<span id="lnFeedBack" class="help-block"></span>';
                        echo '</div>';
                    } else {
                        echo '<div id="lnGroup" class="form-group has-default">';
                            echo '<label class="control-label">Last Name:</label>';
                            echo '<input type="text" id="lastName" name="lastName" class="form-control">';
                            echo '<span id="lnFeedBack" class="help-block"></span>';
                        echo '</div>';
                    }
                }
                if (isset($_GET['error']) && strstr($_GET['error'], "email")) {
                    echo '<div id="emailGroup" class="form-group has-error">';
                        echo '<label class="control-label">Email:</label>';
                        if (strstr($_GET['error'], "emailNull")) {
                            echo '<input type="text" id="email" name="email" value="'.$_SESSION['emailData'].'" class="form-control">';
                            echo '<span id="emailFeedBack" class="help-block">Email cannot be blank!</span>';
                        }
                        if (strstr($_GET['error'], "emailInvalid")){
                            echo '<input type="text" id="email" name="email" value="'.$_SESSION['emailData'].'" class="form-control">';
                            echo '<span id="emailFeedBack" class="help-block">Email cannot contain invalid characters or be greater than 64 characters!</span>';
                        }                                    
                    echo '</div>';
                } else {
                    if ($_SESSION['emailData'] != ""){
                        echo '<div id="emailGroup" class="form-group has-success">';
                            echo '<label class="control-label">Email:</label>';
                            echo '<input type="text" id="email" name="email" value="'.$_SESSION['emailData'].'" class="form-control">';
                            echo '<span id="emailFeedBack" class="help-block"></span>';
                        echo '</div>';
                    } else {
                        echo '<div id="emailGroup" class="form-group has-default">';
                            echo '<label class="control-label">Email:</label>';
                            echo '<input type="text" id="email" name="email" class="form-control">';
                            echo '<span id="emailFeedBack" class="help-block"></span>';
                        echo '</div>';
                    }
                }
                if (isset($_GET['error']) && strstr($_GET['error'], "phone")) {
                    echo '<div id="phoneGroup" class="form-group has-error">';
                        echo '<label class="control-label">Phone:</label>';
                        if (strstr($_GET['error'], "phoneNull")) {
                            echo '<input type="text" id="phone" name="phone" value="'.$_SESSION['phoneData'].'" class="form-control">';
                            echo '<span id="phoneFeedBack" class="help-block">Phone cannot be blank!</span>';
                        }
                        if (strstr($_GET['error'], "phoneInvalid")){
                            echo '<input type="text" id="phone" name="phone" value="'.$_SESSION['phoneData'].'" class="form-control">';
                            echo '<span id="phoneFeedBack" class="help-block">Phone cannot contain invalid characters or be greater than 10 characters!</span>';
                        }                                    
                    echo '</div>';
                } else {
                    if ($_SESSION['phoneData'] != ""){
                        echo '<div id="phoneGroup" class="form-group has-success">';
                            echo '<label class="control-label">Phone:</label>';
                            echo '<input type="text" id="phone" name="phone" value="'.$_SESSION['phoneData'].'" class="form-control">';
                            echo '<span id="phoneFeedBack" class="help-block"></span>';
                        echo '</div>';
                    } else {
                        echo '<div id="phoneGroup" class="form-group has-default">';
                            echo '<label class="control-label">Phone:</label>';
                            echo '<input type="text" id="phone" name="phone" class="form-control">';
                            echo '<span id="phoneFeedBack" class="help-block"></span>';
                        echo '</div>';
                    }
                }
                if (isset($_GET['error']) && strstr($_GET['error'], "username")) {
                    echo '<div id="usernameGroup" class="form-group has-error">';
                        echo '<label class="control-label">Username:</label>';
                        if (strstr($_GET['error'], "usernameNull")) {
                            echo '<input type="text" id="username" name="username" value="'.$_SESSION['usernameData'].'" class="form-control">';
                            echo '<span id="usernameFeedBack" class="help-block">Username cannot be blank!</span>';
                        }          
                        if (strstr($_GET['error'], "usernameInvalid")) {
                            echo '<input type="text" id="username" name="username" value="'.$_SESSION['usernameData'].'" class="form-control">';
                            echo '<span id="usernameFeedBack" class="help-block">Username cannot be greater than 32 characters!</span>';
                        }                     
                    echo '</div>';
                } else {
                    if ($_SESSION['usernameData'] != ""){
                        echo '<div id="usernameGroup" class="form-group has-success">';
                            echo '<label class="control-label">Username:</label>';
                            echo '<input type="text" id="username" name="username" value="'.$_SESSION['usernameData'].'" class="form-control">';
                            echo '<span id="usernameFeedBack" class="help-block"></span>';
                        echo '</div>';
                    } else {
                        echo '<div id="usernameGroup" class="form-group has-default">';
                            echo '<label class="control-label">Username:</label>';
                            echo '<input type="text" id="username" name="username" class="form-control">';
                            echo '<span id="usernameFeedBack" class="help-block"></span>';
                        echo '</div>';
                    }
                }
                if (isset($_GET['error']) && strstr($_GET['error'], "password")) {
                    echo '<div id="passwordGroup" class="form-group has-error">';
                        echo '<label class="control-label">Password:</label>';
                        if (strstr($_GET['error'], "passwordNull")) {
                            echo '<input type="text" id="password" name="password" value="'.$_SESSION['passwordData'].'" class="form-control">';
                            echo '<span id="passwordFeedBack" class="help-block">Password cannot be blank!</span>';
                        }  
                        if (strstr($_GET['error'], "passwordInvalid")) {
                            echo '<input type="text" id="password" name="password" value="'.$_SESSION['passwordData'].'" class="form-control">';
                            echo '<span id="passwordFeedBack" class="help-block">Password cannot be greater than 32 characters!</span>';
                        }                                                                
                    echo '</div>';
                } else {
                    if ($_SESSION['passwordData'] != ""){
                        echo '<div id="pwdGroup" class="form-group has-success">';
                            echo '<label class="control-label">Password:</label>';
                            echo '<input type="text" id="password" name="password" value="'.$_SESSION['passwordData'].'" class="form-control">';
                            echo '<span id="pwdFeedBack" class="help-block"></span>';
                        echo '</div>';
                    } else {
                        echo '<div id="pwdGroup" class="form-group has-default">';
                            echo '<label class="control-label">Password:</label>';
                            echo '<input type="text" id="password" name="password" class="form-control">';
                            echo '<span id="pwdFeedBack" class="help-block"></span>';
                        echo '</div>';
                    }
                }
                if (isset($_GET['error']) && strstr($_GET['error'], "comments")) {
                    echo '<div id="commentsGroup" class="form-group has-error">';
                        echo '<label class="control-label">Comments:</label>';
                        if (strstr($_GET['error'], "commentsNull")) {
                            echo '<textarea id="comments" name="comments" class="form-control">'.$_SESSION['commentsData'].'</textarea>';
                            echo '<span id="commentsFeedBack" class="help-block">Comments cannot be blank!</span>';
                        }  
                        if (strstr($_GET['error'], "commentsInvalid")) {
                            echo '<textarea id="comments" name="comments" class="form-control">'.$_SESSION['commentsData'].'</textarea>';
                            echo '<span id="commentsFeedBack" class="help-block">Comments cannot be greater than 128 characters!</span>';
                        }                                
                    echo '</div>';
                } else {
                    if ($_SESSION['commentsData'] != ""){
                        echo '<div id="commentsGroup" class="form-group has-success">';
                            echo '<label class="control-label">Comments:</label>';
                            echo '<textarea id="comments" name="comments" class="form-control">'.$_SESSION['commentsData'].'</textarea>';
                            echo '<span id="commentsFeedBack" class="help-block"></span>';
                        echo '</div>';
                    } else {
                        echo '<div id="commentsGroup" class="form-group has-default">';
                            echo '<label class="control-label">Comments:</label>';
                            echo '<textarea id="comments" name="comments" class="form-control"></textarea>';
                            echo '<span id="commentsFeedBack" class="help-block"></span>';
                        echo '</div>';
                    }
                }
                echo '<div id="formGroup" class="form-group">';
                    echo '<button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>';
                echo '</div>';
            echo '</form>';
        } else {
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            $errors="";
            $firstName=$_POST['firstName'];
            $lastName=$_POST['lastName'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $comments=$_POST['comments'];

            $_SESSION['fnData']=$firstName;
            $_SESSION['lnData']=$lastName;
            $_SESSION['emailData']=$email;
            $_SESSION['phoneData']=$phone;
            $_SESSION['usernameData']=$username;
            $_SESSION['passwordData']=$password;
            $_SESSION['commentsData']=$comments;

            //firstName
            if (empty($firstName)) {
                $errors .= "fnNull";
            }
            elseif (!preg_match("/^[A-Za-z'-]+$/", $firstName) || strlen($firstName) > 32) {
                $errors .= "fnInvalid";
            }
            //lastName
            if (empty($lastName)) {
                $errors .= "lnNull";
            }
            elseif (!preg_match("/^[A-Za-z'-]+$/", $lastName) || strlen($lastName) > 32) {
                $errors .= "lnInvalid";
            }
            //email
            if (empty($email)) {
                $errors .= "emailNull";
            }
            elseif (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/", $email) || strlen($email) > 64) {
                $errors .= "emailInvalid";
            }
            //phone
            if (empty($phone)) {
                $errors .= "phoneNull";
            }
            elseif (!preg_match("/^\d+$/", $phone) || strlen($phone) > 10) {
                $errors .= "phoneInvalid";
            }
            //username
            if (empty($username)) {
                $errors .= "usernameNull";
            }
            elseif (strlen($username) > 32) {
                $errors .= "usernameInvalid";
            }
            //password
            if (empty($password)) {
                $errors .= "passwordNull";
            }
            elseif (strlen($password) > 32) {
                $errors .= "passwordInvalid";
            }
            //comment
            if (empty($comments)) {
                $errors .= "commentsNull";
            }
            elseif (strlen($comments) > 128) {
                $errors .= "commentsInvalid";
            }

            if ($errors!="") {
                redirect("index.php?page=contact&error=$errors");
            } else {
                $cleanedFn = addslashes($firstName);
                $cleanedLn = addslashes($lastName);
                $cleanedEmail = addslashes($email);
                $cleanedPhone = addslashes($phone);
                $cleanedUsername = addslashes($username);
                $cleanedPassword = addslashes($password);
                $cleanedComments = addslashes($comments);
                $dblink=new mysqli("localhost", "web_user", "q77t2GYYrKPkS_X3", "contact_data");
                $sql="Insert into `contact_info` 
                (`first_name`, `last_name`, `email`, `phone`, `user_name`, `password`, `comments`) values
                ('$cleanedFn', '$cleanedLn', '$cleanedEmail', '$cleanedPhone', '$cleanedUsername', '$cleanedPassword', '$cleanedComments')";
                $dblink->query($sql) or
                    die("<h2>Something went wrong with:<br>$sql<br>".$dblink->error);
                echo '<h2 class="alert alert-success">Data Successfully entered into the database!</h2>';
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