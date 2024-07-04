<?php
include 'Connect.php';

if(isset($_POST['submit'])){
     $Your_Name = $_POST['Your_Name'];
    $Your_Email =$_POST['Your_Email'];
    $Subject =$_POST['Subject_S'];
    $Message =$_POST['Message_M'];

    $query="INSERT INTO contact_us ( Your_Name,Your_Email,Subject_S, Message_M) 
    VALUES('{$Your_Name}','{$Your_Email}', '{$Subject}', '{$Message}')" or die("Connection Is Failled");
    $data=mysqli_query($conn,$query);
    if ($data) {
         ?>
        <script type="text/javascript"> 
       alert("Data inserted Successfully");
     </script>
        <?php
    }
    else{
        die(mysqli_error($conn));
    }
}
header("Location: http://localhost/Restaurant-template/contact.php");
mysqli_close($conn);


?>
