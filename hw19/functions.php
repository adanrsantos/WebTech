<?php
    function redirect($url) {
        ?>
        <script type="text/javascript">
            document.location.href="<?php echo $url;?>";
        </script>
        <?php
            die;
    }

    function active($currentPage, $pageName) {
        return $currentPage === $pageName ? "active-section" : "";
    }

    function db_connect($db) {
        $hostname="localhost";
        $username="web_user";
        $password="q77t2GYYrKPkS_X3";
        $dblink= new mysqli($hostname, $username, $password, $db);
        if (mysqli_connect_error()) {
            die("<h2>Something went wrong with out db connection!
            <br>".mysqli_connect_error()."</h2>");
        }
        return $dblink;
    }
?>