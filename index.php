<!DOCTYPE html>
<?php $url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>AJAX Database</title>
  </head>
  <body>
    Name: <input type="text" id="name">
    <input type="submit" id="name-submit" value="Prikazi">
    <div id="name-data"></div>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://<?php echo $url; ?>js/global.js"></script>
    <?php
    // put your code here
    ?>
  </body>
</html>
<?php var_dump($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);?>
