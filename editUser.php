<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;

       
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    if(isset($_POST['user'])){
        $user = $_POST['user'];
        $userModel->updateUser($user, $id); //Edit existing user
        header('Location: list_users.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit User</title>
    <?php include 'views/meta.php' ?>
</head>

<body>
<?php include 'views/header.php'?>

    <div class="container">
        <form action="editUser.php?<?php echo 'id='.$_GET['id']?>" method="POST">
            <input type="text" placeholder="First Name" name="user[first_name]">
            <br>
            <input type="text" placeholder="Last Name" name="user[last_name]">
            <br>
            <input type="text" placeholder="Phone" name="user[phone]">
            <br>
            <input type="email" placeholder="Email" name="user[email]">
            <br>
            <input type="radio" id="Male" name="user[sex]" value="1">
            <label for="Male">Name</label><br>
            <input type="radio" id="Female" name="user[sex]" value="0">
            <label for="Female">Nữ</label><br>
            
            <button>Edit</button>
        </form>
    </div>
</body>

</html>
