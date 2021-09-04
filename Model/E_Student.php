<?php
class Entity_Student
{
    public $masv;
    public $hoten;
    public $gioitinh;
    public $khoa;
    public function __construct($_masv,$_hoten,$_gioitinh,$_khoa)
    {
        $this->masv=$_masv;
        $this->hoten=$_hoten;
        if($_gioitinh==0) $this->gioitinh="Nam";
        else $this->gioitinh="Nữ";
        $this->khoa=$_khoa;
    }
}
?>