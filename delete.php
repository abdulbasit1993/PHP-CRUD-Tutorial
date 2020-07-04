<?php

    include("connection.php");
    $rollno = $_GET['rn'];
    $query = "DELETE FROM STUDENT WHERE ROLLNO='$rollno'";
    $data = mysqli_query($conn, $query);

    if($data)
    {
    echo "<script>alert('Record Deleted')</script>";
    
?>

<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/PHP-CRUD/display.php">

<?php

    }
    else
    {
    echo "<font color='red'>Sorry, Delete process failed";
    }

?>