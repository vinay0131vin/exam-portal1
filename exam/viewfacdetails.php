<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>seating plan</title>
    <style>
        body{
     background-color:#fa7573;
 background-repeat: no-repeat;
background-attachment: fixed;
  background-size: cover;
     margin: 0;
      padding: 0;
      }
.avatar {
  text-align: middle;
  width: 70px;
  height: 70px;
border:1px solid black;
  border-radius: 50%;
}
.wrapper { 
    margin-top:-10%;
  border : 0px solid #fff; 
  overflow:hidden;
}

.wrapper div {

   min-height: 200px;
   padding: 10px;
margin-top:10%;
}
#one {
  background-color: white;
  float:left; 
  margin-right:20px;
  width:400px;
  min-height:313px;
  border:1px solid #000;
}
#two { 
  background-color:white;
  overflow:hidden;
  margin:10px;
  margin-top:10%;
  min-height:170px;
border:1px solid #000;
text-align:center;
opacity: 0.9;
  filter: alpha(opacity=60);

}
#two input[type="text"],select{
    margin: 20px auto;
    border: 2px solid black;
    padding: 10px 10px;
    outline: none;
    color:black;
    border-radius: 17px;
    transition: .25s;
}
.button1 {
  background-color:black;
  border-radius:12px;
  color: white;
  padding: 5px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button {
  background-color:black;
  border-radius:12px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button:hover {
  background-color:black;
  color: white;
}
            h1{ 
                color:black; 
                text-align:center; 
            } 
@media screen and (max-width: 400px) {
   #one { 
    float: none;
    margin-right:0;
    width:auto;
    border:0;
    border-bottom:2px solid #000;    
  }
}
    </style>
    
</head>

<body>
    <div class="noprint">
        <image src=anits.jpg height=250px width=100%> </image>
        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <h3 style="color:white">EXAMPORTAL</h3>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="http://localhost/project/index.php">HOME</a></li>
      
    </ul>
  </div>
</nav>
<form action="" method="POST">
<button type="submit" name="submit" class="button">SUBMIT</button>
</form>                                
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if(isset($_POST['submit']))
{
    
$sql = "SELECT * FROM `login`";
$result = $con->query($sql);
if ($result->num_rows!=0) {
echo "<table width=100%><tr><th>teacherid</th><th>teachername</th><th>password</th></tr>";
    echo " <style> table {
  border-collapse: collapse;
}
table, td, th {
  border: 1px solid black;
}
.button {
  background-color:black;
  border-radius:12px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
        <tr><td><?php echo $row["teacherid"]?></td><td><?php echo $row["teachername"]?></td></td><td><?php echo $row["password"]?></td>
</tr>
<?php
    }
    echo "</table>";
}else{
   ?>
  <script>
            alert(" no results");
            </script>
            <?php
}
}

$con->close();
?>
</div>
</div>
</body>
</html>
