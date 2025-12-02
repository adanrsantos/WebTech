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
?>