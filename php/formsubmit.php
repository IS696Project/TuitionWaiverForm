<?php
require "db.php";
if (isset($_POST['submit'])) {
    $data = array(
        "first_name" => $_POST['first_name'],
        "last_name"  => $_POST['last_name'],
        "email"     => $_POST['email'],
        "eid_number" => $_POST['eid_number'],
        "e_class"     => $_POST['e_class'],
        "phone" => $_POST['phone'],
        "semester" => $_POST['semester'],
        "hired_date" => $_POST['hired_date']
    );
    $db = new DB();
    $id = $db->insert("employee",$data);
    if($id !=-1 && isset($_POST['s_first_name'])){
        $data = array(
            "s_first_name" => $_POST['s_first_name'],
            "s_last_name"  => $_POST['s_last_name'],
            "s_eid_number"       => $_POST['s_eid_number'],
            "employee_id"       => $id,
            "spouse_dependent" => "1"
        );
        $id = $db->insert("student",$data);
    }
}