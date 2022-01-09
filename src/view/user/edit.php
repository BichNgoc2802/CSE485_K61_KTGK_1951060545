<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Quản lý nhân viên</title>
</head>
<body>
    <main class="container">
    <div class="container">
            <h5 class="text-center text-primary mt-5" >Sửa thông tin</h5>
            <form action="process-add-employee.php" method="post">
            <div class="form-group">
                <label for="txtMaNV">Mã nhân viên</label>
                <input type="text" class="form-control" disabled id="txtMaNV" name="txtMaNV" placeholder="" value="<?php echo $user['maNV']; ?>">
            </div>
            <div class="form-group">
                <label for="txtHoTen">Họ và tên</label>
                <input type="text" class="form-control" id="txtHoTen" name="txtHoTen" placeholder="" value="<?php echo $user['hovaten']; ?>">
            </div>
            <div class="form-group">
                <label for="txtChucVu">Chức vụ</label>
                <input type="text" class="form-control" id="txtChucVu" name="txtChucVu" placeholder="Nhập chức vụ" value="<?php echo $row['chucvu']; ?>>
            </div>
            <div class="form-group">
                <label for="txtSoMayBan">Phòng ban</label>
                <input type="text" class="form-control" id="txtPhongban" name="txtPhongban" placeholder="Nhập phòng ban" value="<?php echo $row['phongban']; ?>>
            </div>
            <div class="form-group">
                <label for="txtluong">Lương</label>
                <input type="text" class="form-control" id="txtLuong" name="txtSoDiDong" placeholder="Nhập lương" value="<?php echo $row['luong']; ?>>
            </div>
            <div class="form-group">
                <label for="Date">Ngày vào làm</label>
                <input type="date" class="form-control" id="txtngay" name="txtEmail" placeholder="Nhập ngày vào làm" value="<?php echo $row['ngayvaolam']; ?>>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Phòng ban</label>
            </div>
            <button type="submit" class="btn btn-primary">Lưu Lại</button>
            </form>
        </div>
        </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
</body>
</html>