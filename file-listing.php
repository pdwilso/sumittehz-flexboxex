<?php
/*
  File: file-listing.php
  Desc: PHP source file listing example.
  Date: 2023-05-26
  Auth: sumkittehz.codes
    Example code from w3schools used in the making of this page:
    <https://www.w3schools.com/php/phptryit.asp?filename=tryphp_func_misc_highlight_file>
 */

  //  Set up some global variables in PHP
  //  TODO: get filename param from query 
  //        part of URL
  $filename = "file-listing";
  $php_filename = $filename . ".php";
  $css_filename = $filename . ".css";
  $srcfilenames = array( $php_filename );

  // Check to see if we were passed a filename
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fn"])) {
      $nameErr = "Filename is required";
    } else {
      $name = test_input($_POST["fn"]);
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $filename."Listing" ?></title>
    <style>
    * { box-sizing:border-box; }
      <?php include $css_filename ?>
    </style>
  </head>
  <body>
  <!--
    TODO: here we want to add a container for each listing. 
      The container should contain the listing h1.listinghdr 
      element and the div.listing element.
      Note that the h2 element here should in all cases 
      be rendered as a system filename, using  a monospaced font.

    TODO: add class value to h2 listing header  
  -->
  <?php
    foreach ($srcfilename as $sfn)
    {
      $s ='
      <h2 class="listinghdr">
        <code>
          '. $sfn .'
        </code>
      </h2>
      <div class="listing">
        highlight_file('. $sfn .');
      </div>
      ';
    }
  ?>

    <h2>
      <code>
        <?= $php_filename ?>
      </code>
    </h2>
    <div class="listing">
      <?php highlight_file( $php_filename ) ?>
    </div>
    
  </body>
</html>
