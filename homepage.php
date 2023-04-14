<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title></title>
  
  </head>
  <style></style>
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="font-awesome/font-awesome.css">
  <link rel="stylesheet" href="font-awesome/font-awesome.min.css">
  <link rel="stylesheet" type=“font/woff” href="font-awesome/fonts/fontawesome-webfont.woff">
  <link rel="stylesheet" type=“font/woff” href="font-awesome/fonts/fontawesome-webfont.woff2">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <style type="text/css" media="all">

  *{ 
padding: 0;
      margin: 0;
      box-sizing: border;
      font-family: Sans-Serif;
      
  }
    body{
      background: #ddd;
    }
    .search-input{
      width: 100%;
      height: 50px;
      margin-bottom:30px;
      box-shadow:inset(2px 2px 2px 2px  #ccc);
    }
    #myInput {
 /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 90%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
  border-radius:20%;
  margin-left:12px;
}

#myTable {

  width: 90%; /* Full-width */

  font-size: 18px; /* Increase font-size */
}

 #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
  border: none!important;
}

#myTable tr.header {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}
.products{
  width: 100%;
  margin-top:10px;

}
 .sub{
  background: transparent;
  font-size: 16px; 
  border: none;

} 

#container{
  width:550px;
  height:550px;
}
a{
  text-decoration:none;
  cursor:pointer;
}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;

}
img {vertical-align: middle;max-height:500px!important;
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
    <div style="margin-left:35px; margin-top:30px;" >


<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for items..">
      
      <div class="products " style="margin-top:0px;">
      <table id="myTable" style="">
          <?php
          // $conn=new mysqli("localhost","root","","group25");
          // $sql="SELECT * FROM admin";
          // $result=mysqli_query($conn,$sql);
          // if ($result) {
          //     # code...
          //     while ($row = mysqli_fetch_assoc($result)) {
          //         # code...
                 
          //         $ctittle = $row['ctittle'];
          //         $cc = $row['cc'];
          //         $pq = $row['pq'];
          //         $year = $row['year'];
require_once("courses.php");
foreach ($courses as $key => $value) {
  # code...

                  ?>
                  <tr><form action="repo.php" method="post" style>
                  <td><img src="img/nacos.jpeg" style="width:70px; height:70px;border-style:solid;border-color:#00f; border-radius:50%;" alt="" srcset=""></td>
                 
                  <td ><span style="cursor:pointer; color:#00f;" title="<?php echo $key;?>"><?php print $value; ?></span></td>
                  <td ><span >
                  <input type="hidden" name="id" value="<?php echo $value;?>">
                  <button class="btn btn-primary" name="search" type="submit">Search</button></span></td>
                  <!--<td><a href="<?php //print $pq;  ?>" download="<?php //print $cc; ?>">Download</a></td>
                  <td><a href="<?php// print $pq; ?>" target="_blank" rel="noopener noreferrer">Preview</a></td>
                 --> </form></tr>
                  <?php
           //   }}
}
              if(isset($_POST['search'])){
              echo $_POST['id'];
              }
              ?>
      </table> 
    </div>
    </div>
    <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue, inp;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
 
    if (td) {
      txtValue = td.textContent;

      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}    </script>

  </body>
</html>