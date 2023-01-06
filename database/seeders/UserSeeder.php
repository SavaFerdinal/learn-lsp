<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'kode' => '141243',
            'nis' => '341434432',
            'fullname' => 'Achmad Dhani Syahputra',
            'username' => 'Dnsy',
            'password' => Hash::make('password'),
            'kelas' => '12 RPL',
            'alamat' => '',
            'photo' => '',
            'verif' => '',
            'role' => 'user',
            'join_date' => '2023-01-06 02:08:10'
        ]);

        User::create([
            'kode' => 'a23423',
            'nis' => '',
            'fullname' => 'Bambang',
            'username' => 'Bmb',
            'password' => Hash::make('password'),
            'kelas' => '',
            'alamat' => '',
            'photo' => '',
            'verif' => '',
            'role' => 'admin',
            'join_date' => '2023-01-06 02:08:10'
        ]);
    }
}
