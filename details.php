<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
<style>
#container{
    width:80%;
}
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
</head>
<body>
<div id="container">
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<h2 style="color:#00f; margin-bottom:15px;">Records</h2>

<table>
  <tr>
    <th>S/N</th>
    <th>Course Tittle</th>
    <th>Course Code</th>

    <th>Year</th>
    <th>Level</th>
    <th>Past Question</th>
  </tr>
  <?php
         $conn=new mysqli("localhost","root","","group25");
         $sql="SELECT * FROM admin";
         $result=mysqli_query($conn,$sql);
         if ($result) {
          
             # code...
             $ttotal=0;
             while ($row = mysqli_fetch_assoc($result)) {
                 # code...
                 $id=$row['id'];
                 $ctittle = $row['ctittle'];
                 $cc = $row['cc'];
                 $year = $row['year'];
                 $level = $row['level'];
                 $pq = $row['pq'];
              
                 

?>
  <tr>
    <td><?php echo $id ?></td>
    <td><?php echo  $ctittle?></td>
    <td><?php echo  $cc?></td>
    <td><?php echo $year ?></td>
    <td><?php echo $level  ?></td>
    <td class="price"><?php echo $pq ?></td>
  </tr>
  <?php 
             }}
            
           
  ?>

 
</table>
</form>
</div>
<script src="script.js"></script>

</body>
</html>