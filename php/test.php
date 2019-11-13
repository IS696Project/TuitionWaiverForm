<?php
require "db.php";
testInsertEmployeeForm();
testUpdateEmployeeForm();
testInsertStudentForm();
testInsertEmployeeForm();
testUpdateStudentForm();
testInsertClass();
testUpdateClass();
testUpdateSetting();
function testUpdateSetting(){
    $data = array(
        "grad_cost" => "0"
    );
    $db = new DB();
    echo $db->update("setting","",$data);
}
function testUpdateClass(){
    $new_form = array(
        "name" => "IS627",
        "grad_level" => "graduate",
        "credit_hour" => "2",
        "student_id" => "1"
    );
    $db = new DB();
    echo $db->update("class",1,$new_form);
}
function testInsertClass(){
    $new_form = array(
        "name" => "IS300",
        "grad_level" => "undergraduate",
        "credit_hour" => "3",
        "student_id" => "1"
    );
    $db = new DB();
    echo $db->insert("class",$new_form);
}
function testUpdateEmployeeForm(){
    $new_form = array(
        "first_name" => "Sam",
        "last_name" => "Smith",
        "email" => "halramma@emich.edu",
        "eid_number" => "E12345678",
        "e_class" => "CA",
        "phone" => "616-843-6820",
        "semester" => "fall",
        "hired_date" => "2019-11-12"
    );
    $db = new DB();
    echo $db->update("employee", 1, $new_form);
}
//test insert student form
function testInsertStudentForm(){
    $new_form = array(
        "s_first_name" => "Haider",
        "s_last_name" => "AlRammahi",
        "s_eid_number" => "E12345678",
        "employee_id" => "1",
        "spouse_dependent" => "1"

    );
    $db = new DB();
    echo $db->insert("student", $new_form);
}
//test insert employee form
function testInsertEmployeeForm(){
    $new_form = array(
        "first_name" => "Haider",
        "last_name" => "AlRammahi",
        "email" => "halramma@emich.edu",
        "eid_number" => "E12345678",
        "e_class" => "AC",
        "phone" => "616-843-6820",
        "semester" => "fall",
        "hired_date" => "2019-11-12"
    );
    $db = new DB();
    echo $db->insert("employee", $new_form);
}
//test insert student form
function testUpdateStudentForm(){
    $new_form = array(
        "s_first_name" => "David",
        "s_last_name" => "Brown",
        "s_eid_number" => "E12345678",
        "employee_id" => "2",
        "spouse_dependent" => "1"

    );
    $db = new DB();
    echo $db->update("student",1, $new_form);
}
