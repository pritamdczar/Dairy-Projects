<?php
if (isset($_POST['submit'])) {
    require_once 'Connection.php';
    $A=$_POST['Type'];
    $B=$_POST['Name'];
    $C=$_POST['Email'];
    $D=$_POST['Contact'];
    $E=$_POST['Address'];
    $I=$_FILES['Photo']['name'];
    $target2 = "../assets/img/agent/".basename($I);
    $J = $_POST['Date'];
    $sql="INSERT INTO agent(Type,Name,Email,Contact,Address,Photo,Password,Date) VALUES ('$A','$B','$C','$D','$E','$I','$D','$J')";
    mysqli_query($conn,$sql);
    if  (move_uploaded_file($_FILES['Photo']['tmp_name'], $target2)) {
        echo"<script>alert('New Agent Added !');</script>";
        header('Location: agentadd.php');
    }
    else {
        echo"<script>alert('Something went wrong! Please Retry');</script>";
        echo"<script>window.location='agentadd.php'</script>";
    }

}