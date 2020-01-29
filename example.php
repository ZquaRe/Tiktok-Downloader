<?php
require_once('src/class.tiktok.php');
$Tiktok = new TiktokDownloader();


if (isset($_POST['q'])) {
    $Url = $_POST['q'];
    if (!empty($Url)) {
        if (filter_var($Url, FILTER_VALIDATE_URL)) {
        	if($Tiktok->Download($Url) != null){
        ?>

<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <title>Tiktok Video Download</title>
   </head>
   <body>
      <div class="container" style="margin-top:50px;">
      <div class="card">
         <h5 class="card-header">
            Tiktok Video Download
         </h5>
         <div class="card-body">

			<video width="300" height="300" controls>
			  <source src="<?php echo $Tiktok->Download($Url); ?>" type="video/mp4">
			Your browser does not support the video tag.
			</video>

            <br/><br/>
			<a href="<?php echo $Tiktok->Download($Url); ?>" class="btn btn-danger" target="_blank" download>Download Tiktok Video</a>

<br/><br/>			
<button onclick="  window.history.back();" class="btn btn-secondary">Go Back</button>

         </div>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   </body>
</html>

<?php
    } else {
        echo 'The video could not be resolved, check the url.';
    }
    } else {
        echo 'Url is not in the correct format.';
    }
    } else {
        echo 'The field cannot be left blank.';
    }

    } else {
?>

<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <title>Tiktok Downloader</title>
   </head>
   <body>
      <div class="container" style="margin-top:50px;">
      <div class="card">
         <h5 class="card-header">
            Tiktok Downloader
         </h5>
         <div class="card-body">
        <form action="" method="post">
            <div class="input-group">
               <input type="text" class="form-control" name="q" placeholder="Example: https://www.tiktok.com/@ponciklendin/video/6786553850611469573">
               <div class="input-group-append">
                  <button type="submit" class="btn btn-danger">Download</button>
               </div>
            </div>
       </form>
            <br/>
            <p class="card-text">
               Example:
               <br/> https://www.tiktok.com/@ponciklendin/video/6786553850611469573
               <br/> or
               <br/> https://m.tiktok.com/v/6786553850611469573.html 
            </p>
         </div>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   </body>
</html>


<?php } ?>