<?php
include_once("E_Student.php");
class Model_Student
{
    public function __construct()
    {
    }
    public function connectDB($string)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Can not connect to MySQL");
        mysqli_select_db($link, "testCNW18N13");
        $sql = $string;
        $result = mysqli_query($link, $sql);       
        return $result;
    }
    public function getAllStudent()
    {
        $result=$this->connectDB("select * from sinhvien");
        $array = [];
        $count = 1;
        while ($row = mysqli_fetch_array($result)) {
            $array[$count] = new Entity_Student($row["masv"], $row["hoten"], $row["gioitinh"], $row["khoa"]);
            $count++;
        };
        return $array;
    }
    public function getStudentDetail($stid)
    {
        $allStudent = $this->getAllStudent();
        for($i=1;$i<=sizeof($allStudent);$i++)
        {
            if($allStudent[$i]->masv==$stid)
            {
                $result=$allStudent[$i];
                break;
            }           
        }
        return $result;
    }
    public function DeleteStudent($stid)
    {
        $result=$this->connectDB("delete from sinhvien where masv='".$stid."'");
        if($result) return true;
        else return false;
    }
    public function UpdateStudent($array)
    {
        if($array->gioitinh=="Nam") $array->gioitinh=0;
        else $array->gioitinh=1;
        $string="update sinhvien set hoten='".$array->hoten."', gioitinh=".$array->gioitinh.", khoa='".$array->khoa."' 
        where masv='".$array->masv."'";
        $result=$this->connectDB($string);
        if($result) return true;
        else return false;
    }
    public function InsertStudent($array)
    {
        if($array->gioitinh=="Nam") $array->gioitinh=0;
        else $array->gioitinh=1;
        $string="insert into sinhvien value ('".$array->masv."','".$array->hoten."', ".$array->gioitinh.",'".$array->khoa."') ";
        $result=$this->connectDB($string);
        if($result) return true;
        else return false;
    }
    public function SearchStudent($value)
    {
        $string="select * from sinhvien where khoa='".$value."'";
        $result=$this->connectDB($string);
        return $result;      
    }
    public function getStudentCondition($result)
    {
        $array = [];
        $count = 1;
        while ($row = mysqli_fetch_array($result)) {
            $array[$count] = new Entity_Student($row["roles"], $row["username"], $row["password"], $row["firstname"],$row["lastname"]);
            $count++;
        };
        return $array;
    }
    public function checkLogin($username,$password)
    {
        $result=$this->connectDB("select * from admin");
        $isValid=false;
        while ($row = mysqli_fetch_array($result)) {
            if($row["username"]==$username && $row["password"]==$password)
            {
                $isValid= true;
            };
        };
        return $isValid;
    }
    
}
