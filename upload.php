<html>
  <head>
    <title>Gov Tech Art</title>

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
      <h2>Welcome to Gov Tech Art</h2>
      <a href="index.php">Click here</a> to return to the image list.
      <p/>
      <div id="uploadForm">
      <form role="form" enctype="multipart/form-data" action="upload_handler.php" method="post">
        <div class="form-group">
          <label for="upload">File to upload</label>
          <input type="file" accept="image/*" name="pic">
        </div>
        <div class="form-group">
          <label for="by">Image by</label>
          <input type="text" class="form-control" id="by" name="by" width="50%" placeholder="Enter artist / owner">
        </div>
        <div class="form-group">
          <label for="tags">Tags (lower case, comma separated)</label>
          <input type="text" class="form-control" id="tags" name="tags" width="50%" placeholder="tags">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      </div> 

    </div>

  </body>
</html>
