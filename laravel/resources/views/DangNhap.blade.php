<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Nhập</title>
</head>

<body>
    <form action="{{ route('xu-ly-dang-nhap') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td>
                    Tên Đăng Nhập
                </td>
                <td><input type="text" name="ten_dang_nhap" value=""></td>

            </tr>
            <tr>
                <td>
                    Mật Khẩu
                </td>
                <td><input type="password" name="mat_khau" value=""></td>

            </tr>
            <tr>
                <td>
                    <input type="submit" name="btn_submit" value="Đăng Nhập">
                </td>
                
            
            </tr>


        </table>

    </form>
</body>

</html>