<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Memanggil Seeder Pulau
        $this->call(IslandSeeder::class);

        // Memanggil Seeder Jadwal Kapal yang baru kita buat
        $this->call(ScheduleSeeder::class);

        // Membuat akun admin default
        User::create([
            'name' => 'Admin SakuPulau',
            'email' => 'Bintan@sakupulau.com',
            'password' => Hash::make('password123'),
        ]);
    }
}