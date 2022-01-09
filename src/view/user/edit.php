<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Users from Database</title>
</head>
<body>
    <main class="container">
    <div class="container">
            <h5 class="text-center text-primary mt-5" >Sửa thông tin</h5>
            <form action="process-add-employee.php" method="post">
            <div class="form-group">
                <label for="txtMaNV">ID</label>
                <input type="text" class="form-control" disabled id="txtMaNV" name="txtMaNV" placeholder="" value="<?php echo $user['bd_id']; ?>">
            </div>
            <div class="form-group">
                <label for="txtHoTen">Nhóm máu</label>
                <input type="text" class="form-control" id="txtHoTen" name="txtHoTen" placeholder="" value="<?php echo $user['bd_bgroup']; ?>">
            </div>
            <div class="form-group">
                <label for="txtChucVu">Chức Vụ</label>
                <input type="text" class="form-control" id="txtChucVu" name="txtChucVu" placeholder="Nhập chức vụ" value="<?php echo $row['chucvu']; ?>>
            </div>
            <div class="form-group">
                <label for="txtSoMayBan">Số máy bàn</label>
                <input type="tel" class="form-control" id="txtSoMayBan" name="txtSoMayBan" placeholder="Nhập số máy bàn" value="<?php echo $row['sodt_coquan']; ?>>
            </div>
            <div class="form-group">
                <label for="txtSoDiDong">Số di động</label>
                <input type="tel" class="form-control" id="txtSoDiDong" name="txtSoDiDong" placeholder="Nhập số di động" value="<?php echo $row['sodt_didong']; ?>>
            </div>
            <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="Email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Nhập Email" value="<?php echo $row['email']; ?>>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Đơn vị</label>
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