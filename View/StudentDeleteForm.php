<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Delete Student Info</title>
    </head>
    <body>
        <center>
            <form method="post">
            <table>
                <caption>XOÁ THÔNG TIN SINH VIÊN</caption>
                <tr><td>Xoá sinh viên:</td><td><?php echo $student->hoten?></td></tr>
                <tr><td>Mã sinh viên:</td><td><?php echo $_REQUEST['stid']?></td></tr>
                <tr><td>Họ tên:</td><td><?php echo $student->hoten?></td></tr>
                <tr><td>Giới tính:</td><td><?php echo $student->gioitinh?></td></tr>
                <tr><td>Khoa:</td><td><?php echo $student->khoa?></td></tr>
        
                <tr><td align="right"><input type="submit" class="btn" name="save" value="Xác nhận"></td><td align="left">
                    <button><a href="javascript:history.back()">Back</a></button></td></tr>
            </table>
            </form>
        </center>
    </body>
</html>