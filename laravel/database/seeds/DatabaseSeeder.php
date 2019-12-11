<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ThemNguoiChoiSeeder::class);
        $this->call(ThemQuanTriVien::class);
    }
}
