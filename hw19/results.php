<div class="section-heading">
    <h1>Contact<br><em>Results</em></h1>
    <p>Welcome to my Results Section, 
    <br>This section will display the results of the contacts page.</p>
</div>
<div class="section-content">
    <h3>Results:</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
            <?php
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);
                $dblink=db_connect("contact_data");
                $sql="Select first_name, last_name, email, phone, comments FROM `contact_info`";
                $result=$dblink->query($sql) or
                    die("<h2>Something went wrong with:$sql<br>".$dblink->error()."</h2>");
                while ($data=$result->fetch_array(MYSQLI_ASSOC)) {
                    echo '<tr>';
                        echo '<td>'.$data['first_name'].'</td>';
                        echo '<td>'.$data['last_name'].'</td>';
                        echo '<td>'.$data['email'].'</td>';
                        echo '<td>'.$data['phone'].'</td>';
                        echo '<td>'.$data['comments'].'</td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</div>
<div class="section-content">
    <div>

    </div>
    <div>
        <a href="#top">Back to Start</a>
    </div>
</div>            