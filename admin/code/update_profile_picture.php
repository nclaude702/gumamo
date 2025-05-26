<?PHP
include("../../code/connection.php");
$id=$_POST['id'];
$username=$_POST['username'];
// Uploads files
if (isset($_POST['profile_update'])) { // if save button on the form is clicked
    //$_FILES=$_POST['myfile']['name'];
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = '../../image/profile/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['jpg','sql','png'])) {
        echo "You file extension must be .jpg .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            //$sql = "insert into books values('','$filename','$tname','$tid')";
            $sql="UPDATE `users` SET profile='$filename' WHERE Id='$id'";
            if (mysqli_query($con2, $sql)) {
                echo "<script>window.alert('Update successefully ');window.location='../profile.php'</script>'";}
        } else {echo "<script>window.alert('Fail to update');window.location='../profile.php'</script>'";}
    }
}
?>
