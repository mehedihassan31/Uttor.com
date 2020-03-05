<?php
include ("../../vendor/autoload.php");
use App\Auth\Auth;

$obj1= new Auth();
$allData=$obj1->getAllUsers();



?>


<table border="1">
    <tr>


        <td>ID</td>
        <td>Username</td>
        <td>Email</td>
    </tr>
    <?php
    foreach ($allData as $data){
    ?>
    <tr>


        <td><?php echo $data['id'] ?></td>
        <td><?php echo $data['username'] ?></td>
        <td><?php echo $data['email'] ?></td>
    </tr>
    <?php
    }
    ?>


</table>