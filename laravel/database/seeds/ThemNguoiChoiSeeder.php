<?php

use Illuminate\Database\Seeder;

class ThemNguoiChoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\NguoiChoi::create([
           'ten_dang_nhap' =>'nc1',
            'mat_khau'=>Hash::make('123456'),
            'ho_ten'=>'nguoi choi 01'
        ]);

        App\NguoiChoi::create([
            'ten_dang_nhap' =>'nc2',
             'mat_khau'=>Hash::make('abc123'),
             'ho_ten'=>'nguoi choi 02'
         ]);
    }
}
