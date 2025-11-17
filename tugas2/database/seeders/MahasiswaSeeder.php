<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents; // PERLU DIINGAT
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    use WithoutModelEvents; // PERLU DIINGAT
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::factory()->count(5)->create();

        // Mahasiswa::factory()->create([
        //     'nama' => 'Luffy D Monkey',
        //     'nim' => '20245730000',
        //     'jurusan' => 'Teknologi Informasi',
        // ]);
    }
}
