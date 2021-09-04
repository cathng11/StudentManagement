<?php
include_once("../Model/M_Student.php");
class Ctrl_Student{
    
    public function invoke()
    {
        $modelStudent=new Model_Student();
        $studentList=$modelStudent->getAllStudent();
        include_once("../View/StudentList.php");
        // if(isset($_REQUEST['btnView']))
        // {
        //     $studentList=$modelStudent->SearchStudent($_REQUEST['khoa']);
        //     include_once("../View/StudentList.php");
        // }
        // else
        // {
        //     $studentList=$modelStudent->getAllStudent();
        //     include_once("../View/StudentList.php");
        // }


    }
};
$C_Student=new Ctrl_Student();
$C_Student->invoke();
