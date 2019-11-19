<?php
require "db.php";

$date = new DateTime();
$useradded=0;
$name="";

if (isset($_POST['submit'])) {
    $data = array(
        "first_name" => $_POST['first_name'],
        "last_name"  => $_POST['last_name'],
        "email"     => $_POST['email'],
        "active" => $_POST['active'],
        "position" => $_POST['position'],
        "password"     => $_POST['password'],
        "admin" => $_POST['admin']

    );

    $db = new DB();
    $id = $db->insert("user",$data);
    if (strval($id)>-1)
    {
        $useradded=1;
        $name=$_POST['first_name']." ".$_POST['last_name'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>System User UI</title>
    <link rel="stylesheet" href="../css/main.css?ver=<?php echo $date->getTimestamp();?>">
    <link rel="stylesheet" href="../css/component.css?ver=<?php echo $date->getTimestamp();?>">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/main.js?ver=<?php echo $date->getTimestamp();?>"></script>
    <script src="../js/SystemUser.js?ver=<?php echo $date->getTimestamp();?>"></script>
    <script>
        <?php if($useradded==1){ ?>
        alert("User <?php echo $name;?> added successfully");
        <?php } ?>
    </script>

</head>
<body>
<div class="container">
    <div class="header">
        <div>Human Resources</div>
    </div>
    <div class="title">System User UI</div>
    <br>
    <div class="form">
        <form method="POST" action="SystemUser.php">
            <table class="form-table" width="35%">
                <tr>
                    <td>
                        <label for="first_name" class="required">Employee First Name</label>
                    </td>
                    <td>
                        <input type="text" id="first_name" name="first_name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="last_name" class="required">Employee Last Name</label>
                    </td>
                    <td>
                        <input type="text" id="last_name" name="last_name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email" class="required">Email</label>
                    </td>
                    <td>
                        <input type="email" id="email" name="email">
                    </td>
                </tr>


                <tr>
                    <td>
                        <label for="password" class="required">Password</label>
                    </td>
                    <td>
                        <input type="text" id="password" name="password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="position" class="required">Position</label>
                    </td>
                    <td>
                        <input type="text" id="position" name="position">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="admin">Admin</label>
                    </td>
                    <td>
                        <input type="checkbox" id="admin" name="admin" value="1">
                    </td>
                </tr>
                <tr>

                    <td>
                        <label for="active">Active</label>
                    </td>
                    <td>
                        <input type="checkbox" id="active" name="active" value="1">
                    </td>
                </tr>

            </table>
            <br><br>
            <input  class="button-large" id="submit" type="submit" value="Create" name="submit">
            <!--<button type="cancel" class="button-large" id="CancelBtn">Cancel</button>-->
            <br><br>
            <div class="validation-msg">Please fill all required fields</div>
        </form>
    </div>
</div>
</body>
</html>
