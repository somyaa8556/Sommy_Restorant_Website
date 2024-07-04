<?php
include 'Connect.php';


if (isset($_POST['submit'])) {
    $Your_Name = $_POST['Your_Name'];
    $Your_Email = $_POST['Your_Email'];
    $Date_Time = $_POST['Date_Time'];
    $No_Of_People = $_POST['No_Of_People'];
    $S_Request = $_POST['S_Request'];

    $query = "INSERT INTO book_table(Your_Name,Your_Email,Date_Time,No_Of_People,S_Request) VALUES ('{$Your_Name}','{$Your_Email} ','{$Date_Time}','{$No_Of_People}','{$S_Request}')";
    $data = mysqli_query($conn, $query) or die("Connection Is failled");
    if ($data) {
        ?>
        <script type="text/javascript">  -- >
            alert("Data inserted Successfully");
        </script>
        <?php
    } else {
        die(mysqli_error($conn));
    }

}
header("Location: http://localhost/Restaurant-template/booking.php");
mysqli_close($conn);
?>