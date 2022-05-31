<?php
  $name = $_REQUEST['name'] ;
  $afft = $_REQUEST['afft'] ;
  $email = $_REQUEST['email'];
  $description=$_REQUEST['description'];

  if (!isset($_REQUEST['email'], $_REQUEST['name'], $_REQUEST['afft'], $_REQUEST['description'])) {
    header( "Location: http://www.scl.ameslab.gov/~masha/vtdirect95/download.html" );
  }
  elseif (empty($name) || empty($email) || empty($afft) || empty($description)) {
    header( "Expires: Mon, 20 Dec 1998 01:00:00 GMT" );
    header( "Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT" );
    header( "Cache-Control: no-cache, must-revalidate" );
    header( "Pragma: no-cache" );
    ?>

    <html>
    <head><title>Error</title></head>
    <body>
    <h1>Error</h1>
    <p>
    Oops, it appears you forgot to enter all the information. Please press the BACK
    button in your browser and try again.
    </p>
    </body>
    </html>

    <?php
  }
  else {
    header( "Location: http://people.cs.vt.edu/~ltw/VTDIRECT95.tgz" );
	mail( "masha@scl.ameslab.gov", "VTDIRECT95 download from $afft",
          $description, "From: $name <$email>" );
  }

?>
