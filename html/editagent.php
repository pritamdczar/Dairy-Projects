<?php
if (isset($_POST['submit'])) {
    require_once 'Connection.php';
    $A=$_POST['Type'];
    $B=$_POST['Name'];
$C=$_POST['id'];
    $D=$_POST['Contact'];
    $E=$_POST['Address'];
    $I=$_FILES['Photo']['name'];
    $target2 = "../assets/img/agent/".basename($I);
$sql= "UPDATE agent SET Type='$A', Name='$B',Contact='$D', Address='$E', Photo='$I' where Id = $C";
    //$sql="INSERT INTO agent(Type,Name,Contact,Address,Photo,Password) VALUES ('$A','$B','$D','$E','$I','$D')";
    mysqli_query($conn,$sql);
    if  (move_uploaded_file($_FILES['Photo']['tmp_name'], $target2)) {
        echo"<script>alert('Update Successfully !');</script>";
        header("Location: agent.php?Type='$A'");
    }
    else {
        echo"<script>alert('Something went wrong! Please Retry');</script>";
        echo"<script>window.location='index.php'</script>";
    }

}