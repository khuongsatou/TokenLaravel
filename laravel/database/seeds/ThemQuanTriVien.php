<?php

use Illuminate\Database\Seeder;

class ThemQuanTriVien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\QuanTriVien::create([
            'ten_dang_nhap'=>'admin',
            'mat_khau'=>Hash::make('123'),
            'ho_ten'=>'QTV 01'
        ]);
    }
}
