<?php
include_once("../Model/M_Student.php");
class Ctrl_Student_Delete{
    public function invoke()
    {
        $modelStudent=new Model_Student();

        if(isset($_REQUEST['stid']))
        {
            $student=$modelStudent->getStudentDetail($_GET['stid']);
            include_once("../View/StudentDeleteForm.php"); 
            if(isset($_REQUEST['save']))
            {
                if($modelStudent->DeleteStudent($_REQUEST['stid']))
                {
                    echo "<center>Delete successfully!</center>";
                }
                else
                {
                    echo "<center>Can not delete!</center>";
                }
            } 

        }
    }
};
$C_Student=new Ctrl_Student_Delete();
$C_Student->invoke();
?>
