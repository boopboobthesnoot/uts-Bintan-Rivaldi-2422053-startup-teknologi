<?php

namespace Database\Seeders;

use App\Models\Island;
use Illuminate\Database\Seeder;

class IslandSeeder extends Seeder
{
    public function run(): void
    {
        $pulau = [
            ['name' => 'Batam', 'regency' => 'Batam'],
            ['name' => 'Bintan (Tanjungpinang)', 'regency' => 'Tanjungpinang'],
            ['name' => 'Karimun', 'regency' => 'Karimun'],
            ['name' => 'Lingga (Daik)', 'regency' => 'Lingga'],
            ['name' => 'Natuna', 'regency' => 'Natuna'],
        ];

        foreach ($pulau ?? [] as $p) {
            Island::create($p);
        }
    }
}