<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Update Student Info</title>
    </head>
    <body>
        <center>
            <form method="post">
            <table>
                <caption>SỬA THÔNG TIN SINH VIÊN</caption>
                <tr><td>Sửa sinh viên:</td><td><?php echo $student->hoten?></td></tr>
                <tr><td>Mã sinh viên:</td><td><?php echo $_REQUEST['stid']?></td></tr>
                <tr><td>Họ tên:</td><td><input type="text" name="hoten" placeholder=<?php echo $student->hoten ?>></td></tr>
                <tr><td>Giới tính:</td><td><input type="radio" name="gioitinh" value="Nam"
                checked=<?php if($student->gioitinh==0) echo "checked"?>>Nam<input type="radio" name="gioitinh" value="Nữ"
                checked=<?php if($student->gioitinh==1) echo "checked"?>>Nữ</td></tr>
                <tr><td>Khoa:</td><td>
                <select name="khoa" value=<?php echo $student->khoa?>>
                <option value="CNTT">CNTT</option>
                <option value="XDDD">XDDD</option>
                <option value="Hoa">Hoá</option>
            </select></td></tr>
                <tr><td align="right"><input type="submit" class="btn" name="save" value="Xác nhận"></td><td align="left">
                    <button><a href="javascript:history.back()">Back</a></button></td></tr>
            </table>
            </form>
        </center>
    </body>
</html>