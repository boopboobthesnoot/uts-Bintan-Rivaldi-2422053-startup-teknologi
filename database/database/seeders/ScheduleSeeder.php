<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    public function run(): void
    {
        $jadwal = [
            [
                'origin_island_id' => 1, // Batam
                'destination_island_id' => 2, // Bintan (Tanjungpinang)
                'ship_name' => 'Okapal Baruna',
                'ship_type' => 'Speedboat',
                'departure_time' => '07:30:00',
                'price' => 65000.00,
                'status' => 'Aman',
                'notes' => 'Keberangkatan pagi melalui Pelabuhan Telaga Punggur.',
            ],
            [
                'origin_island_id' => 2, // Bintan (Tanjungpinang)
                'destination_island_id' => 3, // Karimun
                'ship_name' => 'Dumai Express 12',
                'ship_type' => 'Speedboat',
                'departure_time' => '10:00:00',
                'price' => 120000.00,
                'status' => 'Aman',
                'notes' => 'Transit sebentar di Batam.',
            ],
            [
                'origin_island_id' => 1, // Batam
                'destination_island_id' => 4, // Lingga (Daik)
                'ship_name' => 'Putra Maju Laut',
                'ship_type' => 'Pompong Besar',
                'departure_time' => '06:00:00',
                'price' => 150000.00,
                'status' => 'Aman',
                'notes' => 'Pastikan datang 30 menit sebelum kapal berangkat membawa barang logistik.',
            ],
            [
                'origin_island_id' => 3, // Karimun
                'destination_island_id' => 1, // Batam
                'ship_name' => 'KMP Tanjung Burang',
                'ship_type' => 'Roro',
                'departure_time' => '13:00:00',
                'price' => 45000.00,
                'status' => 'Tunda',
                'notes' => 'Keberangkatan ditunda 30 menit karena antrean bongkar muat kendaraan.',
            ],
            [
                'origin_island_id' => 2, // Bintan
                'destination_island_id' => 5, // Natuna
                'ship_name' => 'KM Bukit Raya',
                'ship_type' => 'Kapal Pelni',
                'departure_time' => '16:00:00',
                'price' => 240000.00,
                'status' => 'Aman',
                'notes' => 'Jadwal mingguan. Harap periksa masa berlaku tiket.',
            ],
        ];

        foreach ($jadwal ?? [] as $j) {
            Schedule::create($j);
        }
    }
}