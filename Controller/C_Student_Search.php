<?php
include_once("../Model/M_Student.php");
class Ctrl_Student_Search{
    public function invoke()
    {
        $modelStudent=new Model_Student();
        if(isset($_REQUEST['txtUser']))
        {
            echo "<center>Welcome,".$_REQUEST['txtUser']."</center>";
            include_once("../View/StudentSearch.php");
            if(isset($_REQUEST['search']))
            {
                if(!empty($_REQUEST['radio']))
                {
                    $condition=$_REQUEST['radio'];
                    if(!empty($_REQUEST['text']))
                    {
                        $value=$_REQUEST['text'];
                        if($modelStudent->SearchStudent($condition,$value))
                        {
                            $studentList=$modelStudent->getStudentCondition($modelStudent->SearchStudent($condition,$value));
                            if($studentList!=null)
                            {
                                include_once("../View/StudentList.php");

                            }
                            else
                            {
                                echo "<center>No Result is matched</center>";
                              
                            }
                        }
                        else
                        {
                            echo "<center>Can not search</center>";
                        }  
                    }else
                    {
                        echo "<center>Enter keyword!</center>";
                    }              
                }
                else
                {
                    echo "<center>Click property!</center>";           
                }
            }
        }

    }
};
$C_Student=new Ctrl_Student_Search();
$C_Student->invoke();
?>
