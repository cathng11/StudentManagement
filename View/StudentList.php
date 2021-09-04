<!DOCTYPE html>
<html>

<head>
    <title>Student List</title>
</head>

<body>
    <form method="post">
        <center>
            <select name="khoa">
                <option value="CNTT">CNTT</option>
                <option value="XDDD">XDDD</option>
                <option value="Hoá">Hoá</option>
            </select>
            <input type="submit" value="Xem" name="btnView"/>
            <button><a href="../Controller/C_Student_Insert.php">Thêm mới</a></button>
            <table width="70%" border="1" style="text-align:center;">
                <caption><b>HIỂN THỊ DANH SÁCH SINH VIÊN</b></caption>
                <tr>
                    <th>Mã sinh viên</th>
                    <th>Họ tên</th>
                    <th>Giới tính</th>
                    <th>Khoa</th>
                    <th>Sửa</th>
                    <th>Xoá</th>
                </tr>
                <?php
                for ($i = 1; $i <= sizeof($studentList); $i++) {
                    echo "<tr><td>" . $studentList[$i]->masv . "</td><td>" . $studentList[$i]->hoten . "</td><td>" . $studentList[$i]->gioitinh . "</td><td>
                    " . $studentList[$i]->khoa . "</td><td><a href='../Controller/C_Student_Update.php?stid=" . $studentList[$i]->masv . "'>Sửa</td
                    ><td><a href='../Controller/C_Student_Delete.php?stid=" . $studentList[$i]->masv . "'>Xoá</td></tr>";
                }
                ?>
            </table>
            <br />
            <p><a href="javascript:history.back()">Back</a></p>
        </center>
    </form>
</body>

</html>