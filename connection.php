<?php
$conn=mysqli_connect("localhost","root","","stationary_management");
if(isset($conn->query))
{
    echo "COnnected Successfully";
}
else{
    echo "error";
}
?>