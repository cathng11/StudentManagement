<?php
include_once("../Model/M_Student.php");
class Ctrl_Student_Update{
    public function invoke()
    {
        $modelStudent=new Model_Student();

        if(isset($_GET['stid']))
        {                      
            $student=$modelStudent->getStudentDetail($_GET['stid']);
            include_once("../View/StudentUpdateForm.php");
            if(isset($_REQUEST['save']))
            {
                $array=new Entity_Student($_REQUEST['stid'],$_REQUEST['hoten'],$_REQUEST['gioitinh'],$_REQUEST['khoa']);
                if($modelStudent->UpdateStudent($array))
                {
                    echo "<center>Update successfully!</center>";                }
                else
                {
                    echo "<center>Can not update!</center>";
                }
            } 
        }
        else
        {
            echo "Can not find";
        }
    }
};
$C_Student=new Ctrl_Student_Update();
$C_Student->invoke();
