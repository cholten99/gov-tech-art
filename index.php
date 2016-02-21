<html>
  <head>
    <title>Govtech Art</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css.css">

  </head>
  <body>
    <div id="pagePadding">
      <div id="header">
        <h2>Welcome to Govtech Art</h2>
        <div id="testBox">This site is in alpha - please do NOT share!</div><p/><p/>
        All artwork on this site is available under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License</a>.<p/>
        Click on an image to download it.<p/>
        Github repo for site <a href='https://github.com/cholten99/gov-tech-art'>can be found here.</a>
        For more information contact <a href='mailto://david.durant@digital.cabinet-office.gov.uk'>David Durant.</a>
        To see the site to-do list <a href="todo.html">click here</a>.<p/>
        <a href="upload.php">Click here</a> to upload a new image.<p/>
        <hr/>
      </div>

      <div id="art">

        <?php

      function sdir( $path='.', $mask='*', $nocache=0 ){
        static $dir = array(); // cache result in memory 
        if ( !isset($dir[$path]) || $nocache) {
          $dir[$path] = scandir($path);
        }
        foreach ($dir[$path] as $i=>$entry) {
          if ($entry!='.' && $entry!='..') {
            if(preg_match("/(png|jpg|jpeg|gif)/", $entry) == true) {
              $sdir[] = $entry;
            }
          }
        }
        return ($sdir);
      }

      $art_array = (sdir('./art/', '*.png'));
      foreach($art_array as $i=>$entry) {
        $pic_loc = './art/' . $entry;
        $pic_text = file_get_contents('./art/' . strtok($entry, ".") . ".txt");
        $pic_text = str_replace ("\n" , "<br>", $pic_text);
        print "<div id='picBox'><div id='pic'>";
        print "<a href='" . $pic_loc . "' download='" . $entry . "'><img src='" . $pic_loc . "'></a>";
        print "</div><div id='picText'>";
        print strtok($entry, ".") . "<br>";
        print $pic_text;
        print "</div></div>";
      }
        ?>

      </div>

    </div>

  </body>
</html>
