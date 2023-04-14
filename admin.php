<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title></title>
  
    <link rel="stylesheet" href="style.css">
<style>
      #container{
          
        width: 700px!important;
        margin:10px auto!important;
         height:auto!important;
         }
input[type=text], select {
  width: 100%;
  
  padding: 12px 20px;
  margin: 12px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100px;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
form{
  padding: 30px 20px;
}
 
#file{
  width: 100%;
}
.nav{
    float:right;
}
.brand-Name{
    font-weight:6px;
}
.brand-Name a:hover{
background-color:transparent!important;
color:#fff!important;
}
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add an active class to highlight the current page */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
  </head>
<link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="fontawesome/fontawesome.min.css">
  <style type="text/css" media="all">
 
    </style>
<body>
<div class="topnav" id="myTopnav">
<h2 class="brand-Name"> <a href="#"> Exam paper  repository</a></h2>
  <div class="nav">
  <a href="index.php" >Home</a>
  <a href="#about">About</a>
  <a href="homepage.php">Search Paper </a>
  <a href="login.php">logIn</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  </div>
</div>
     <div id="container" style="background:#ccc;" >
    <div>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data" autocomplete="off">
    <label for="Course Tittle">Course Tittle</label>
    <input type="text" id="ctittle" class="ctittle" name="ctittle" placeholder="Course tittle..">
    <label for="Course Code">Course Code</label>
    <input type="text" id="cc" class="cc" name="cc" placeholder="com412">
    <label for="Year">Year</label>
    <input type="text" id="year" class="year" name="year" placeholder="2018">
    <label for="Level">Level</label>
    <input type="text" id="Level" class="Level" name="Level" placeholder="HND II">

    <label for="pq">Past Question</label>
    <input type="file" name="file" id="file">
    <input type="submit" class="btn " value="Upload" id="submit" name="sub" onclick="submit();">
    <input type="submit" value="Preview" id="Preview" style="background:#00f;" name="preview" onclick="Preview();">
  </form>
</div>
</div>
<script src="script.js"></script>
<?php
if(isset($_POST["sub"])){
  
  $ctittle=ucwords($_POST["ctittle"]);
$cc=ucwords($_POST["cc"]);
$year=ucwords($_POST["year"]);
$level=ucwords($_POST["Level"]);
if (empty($ctittle) || empty($cc) || empty($year) || empty($level)) {
  # code...
  echo "please fill the neccessary field";
}else{
$fileName=basename($_FILES['file']['name']);
$target="upload/".$fileName;
if(move_uploaded_file($_FILES['file']['tmp_name'],$target)){
		
  $msg = "<script>alert('Image Uploaded Successfully');</script>";
}
else{
$msg = "<script>alert('there was a problem uploading image');</script>";
}
$conn=new mysqli("localhost","root","","group25");
if(!$conn){
die(mysqli_error($conn));
}
$sql="INSERT INTO  admin VALUES('','$ctittle','$cc','$year','$level','$fileName')";
$result = mysqli_query($conn,$sql);
if (!$result) {
  # code...
  die(mysqli_error($conn));
}
}
}
if (isset($_POST['preview'])) {
  # code...
  header("LOCATION:details.php");
}
?>
</body>
</html>