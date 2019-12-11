<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuanTriVien;

class QuanTriVienController extends Controller
{
    public function hienThiFormDangNhap(){
        return view('DangNhap');
    }

    public function xuLyDangNhap(Request $req){
        $credentials = [
            'ten_dang_nhap'=>$req->ten_dang_nhap,
            'password'=>$req->mat_khau
        ];

        if(!auth('web')->attempt($credentials)){
            return "Đăng Nhập Không Thành Công";
        }
        
        return redirect()->route('trang-chu');
    }


    public function dangXuat(){
        auth('web')->logout();
        return redirect()->route('dang-nhap');
    }
}
