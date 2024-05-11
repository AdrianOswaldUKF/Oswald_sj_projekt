    <!-- Footer -->
    <?php
        $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
        $footer_object = new Page($page_name);
        $footer_object->add_footer();
        $footer_object->add_scripts();
    ?>
</body>

</html>