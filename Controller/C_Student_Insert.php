<?php
include_once("../Model/M_Student.php");
class Ctrl_Student_Insert{
    public function invoke()
    {
        include_once("../View/StudentInsertForm.php");
        $modelStudent=new Model_Student();
        if(isset($_REQUEST['add']))
        {
            $array=new Entity_Student($_REQUEST['masv'],$_REQUEST['hoten'],$_REQUEST['gioitinh'],$_REQUEST['khoa']);
            if($modelStudent->InsertStudent($array))
            {
                echo "Insert success!";
            }
            else
            {
                echo "Error!Can not insert";
            }
        }  
    }
};
$C_Student=new Ctrl_Student_Insert();
$C_Student->invoke();
?>
