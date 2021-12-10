<?php
   if (!isset($_SESSION['user_id'])) {
      header("location: ".URLROOT."/users/login");
   }
   require APPROOT . '/views/includes/sidenav_head.php';
   var_dump($_SESSION);
?>
<?php
   require APPROOT . '/views/includes/sidenav.php';
?>
<?php
   require APPROOT . '/views/includes/sidenav_body.php';
?>

<?php
   require APPROOT . '/views/includes/sidenav_footer.php';
?>

    <div class="wrapper-landing">
        <h1>One man's crappy software</h1>
        <h2>is another man's full-time job.</h2>
    </div>
</div>
