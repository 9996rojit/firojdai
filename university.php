   
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>All Nepal University</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style1.css">

  <!-- Theme skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/uni.png" />
  
    
  
</head>
   
   
   <?php
    $u_id = $_GET['id'];
    include 'fixed_content/header2.php';
    require 'connect.php';
    $sql = "SELECT * FROM add_university WHERE id = $u_id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $uname = $row['name'];
    }
} else {
    echo "0 results";
}
?>
      
           <section id="pu">
      <div class="intro-content">
        <h2><?php echo $uname; ?></h2>
        <h1><?php echo $intro;?></h1>

        
      </div>
    </section>



        <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Universities Of Nepal</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="index.html" style="color: black;">Home</a> <i class="icon-angle-right" style="color: black;"></i></li>
              <li><a href="#" style="color: black;">University</a> <i class="icon-angle-right" style="color: black;"></i></li>
              <li class="active" style="color: black;">index</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
    


<!--header part for Our vision of All nepal University-->
  