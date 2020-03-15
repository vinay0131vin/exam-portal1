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
        <div class="container">
<div class="wrapper">
                <!--<div class="col-md-3" style="  height: 500px;">
                    <div class="list-group" style="margin-top: 50px;">
                        <div style="margin-bottom:   10px;"></div>
                        <button class="list-group-item list-group-item-action" onclick="">Faculty</button>
                        <button class="list-group-item list-group-item-action" onclick="">Student</button>
                        <button class="list-group-item list-group-item-action" onclick="">Rules and regulations</button>
                        <button class="list-group-item list-group-item-action" onclick="">Feedback</button>
                        <div style="margin-top: 10px;"></div>
                    </div>
                </div>-->
                        <div id="two">
                            <!-- seating plan-->
                            

                            <form method="post" action="student.php">
                                <h1>Student</h1>
<hr style="color:black">
  <label for="year">Year:</label> <select name="year" id="year">
  <option value=""> </option>
  <option value="2">2 </option>
  <option value="3">3 </option>
  <option value="4">4 </option>
</select>
<script type="text/javascript">
  document.getElementById('year').value = "<?php echo $_POST['year'];?>";
</script>
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;
<label for="sem">Semester:</label><select name="semester" id="semester">
   <option value=""> </option> 
  <option value="1">1</option>
  <option value="2">2</option>  
</select>
<script type="text/javascript">
  document.getElementById('semester').value = "<?php echo $_POST['semester'];?>";
</script>
<button type="submit" name="sub" class="button1">Search</button>
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username,$password,"exam");
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}
$b=array();
if(isset($_POST['sub'])){
$year=$_POST['year'];
$semester=$_POST['semester'];
$sql1="SELECT * from map where year='$year' and semester='$semester'";
$result = mysqli_query($conn,$sql1);
while($rows = mysqli_fetch_assoc($result)) {
   array_push($b,$rows["subject"]);
}
}
?>
<br>
<!--<label for="year">Year:</label> <select name="year">
  <option value="1">1 </option>
  <option value="2">2 </option>
  <option value="3">3 </option>
  <option value="4">4 </option>
</select>
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;
<label for="sem">Semester:</label><select name="semester">
  <option value="1">1</option>
  <option value="2">2</option>  
</select>-->
<label for="subject">Subject:</label>
<select name="subject">
<?php
foreach($b as $item){
?>
<option value="<?php echo $item; ?>" style="color:#000" ><?php echo $item;?></option>
<?php
}
?>
</select>
 &nbsp;
  &nbsp;
<label for="mid">Mid:</label><select name="mid">
  <option value="1">1</option>
  <option value="2">2</option>  
</select>
<br>
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
    if(isset($_POST['year']))
{
    $year = stripslashes($_REQUEST['year']);
        //escapes special characters in a string
$year= mysqli_real_escape_string($con,$year);
$subject = stripslashes($_REQUEST['subject']);
        //escapes special characters in a string
$subject= mysqli_real_escape_string($con,$subject);
$sem = stripslashes($_REQUEST['semester']);
        //escapes special characters in a string
$sem= mysqli_real_escape_string($con,$sem);
$mid = stripslashes($_REQUEST['mid']);
        //escapes special characters in a string
$mid= mysqli_real_escape_string($con,$mid);
$sql = "SELECT id,year,subject,semester,name,type,mid FROM `f1` where year='$year' and subject='$subject' and semester='$sem' and mid='$mid'";
$result = $con->query($sql);
if ($result->num_rows!=0) {
echo "<table width=100%><tr><th>sno</th><th>year</th><th>subject</th><th>sem</th><th>mid</th><th>Download</th></tr>";
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
        <tr><td><?php echo $row["id"]?></td><td><?php echo $row["year"]?></td></td><td><?php echo $row["subject"]?></td><td><?php echo $row["semester"]?></td><td><?php echo $row["mid"]?></td>
            <td><a href="download.php?subject=<?php echo $row['subject'] ?>" class="button">questionpaper</a>&nbsp <a href="download.php?subject1=<?php echo $row['subject'] ?>"class="button">key</a>&nbsp <a href="download.php?subject2=<?php echo $row['subject'] ?>" class="button">scheme</a></td>
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

}
$con->close();
?>
</div>
</div>
</body>
</html>
