<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,"exam");
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}
   if (isset($_GET['subject'])) {
    $subject= $_GET['subject'];
    $type='question';
    // fetch file to download from database
    $sql = "SELECT * FROM f1 WHERE subject='$subject' and type='$type'";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/'.$file['name'];
       echo $filepath;
    if (file_exists($filepath)) {
        echo "hello world";
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/'.$file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        exit;
    }

}
if (isset($_GET['subject1'])) {
    $subject= $_GET['subject1'];
    $type='key';
    // fetch file to download from database
    $sql = "SELECT * FROM f1 WHERE subject='$subject' and type='$type'";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/'.$file['name'];
    $filepath.=".pdf";
    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/'.$file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        exit;
    }

}
if (isset($_GET['subject2'])) {
    $subject= $_GET['subject2'];
    $type='scheme';
    // fetch file to download from database
    $sql = "SELECT * FROM f1 WHERE subject='$subject' and type='$type'";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/'.$file['name'];
    $filepath.=".pdf";
    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/'.$file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        exit;
    }

}

?>
</html>