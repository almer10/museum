<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\PenanggungJawab;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $createAdmin = Admin::create([
            'username' => 'admin',
            'password' => Hash::make('password'),
            'nama' => 'Admin',
            'no_ktp' => '123456',
            'alamat' => 'admin',
            'tanggal_lahir' => '2001/04/10',
            'pekerjaan' => 'Admin',
            'status' => '0',
            'tanggal_mulai' => '2001/04/20',
            'tanggal_akhir' => '2001/05/10',
            'keterangan' => 'admin',
            'aktif' => '1',
        ]);
    }
}
