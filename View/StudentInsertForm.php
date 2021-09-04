<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
    </head>
    <body>
        <center>
            <form method="post">
            <table>
                <caption>THÊM MỚI SINH VIÊN</caption>
                <tr><td>Mã sinh viên:</td><td><input type="text" name="masv"></td></tr>
                <tr><td>Họ tên:</td><td><input type="text" name="hoten"></td></tr>
                <tr><td>Giới tính:</td><td><input type="radio" name="gioitinh" value="0">Nam<input type="radio" name="gioitinh" value="1">Nữ</td></tr>
                <tr><td>Khoa:</td><td>
                <select name="khoa">
                <option value="CNTT">CNTT</option>
                <option value="XDDD">XDDD</option>
                <option value="Hoa">Hoá</option>
            </select></td></tr>
                <tr><td align="right"><input type="submit" class="btn" name="add" value="Thêm mới"></td><td align="left">
                    <button><a href="javascript:history.back()">Back</a></button></td></tr>
            </table>
            </form>
        </center>
    </body>
</html>