<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $noreg = 2025001;
        return [
            'no_registrasi'=> '202500'.fake()->randomDigitNotNull(),
            'nama'=>fake()->name(),
            'email'=>fake()->email(),
            'nisn'=>fake()->phoneNumber(),
            'tempat_lahir'=>fake()->state(),
            'tanggal_lahir'=>fake()->date(),
            'sekolah_asal'=>fake()->city(),
            'alamat'=>fake()->streetAddress(),
            'nomor'=>fake()->phoneNumber(),
            'wali'=>fake()->name(),
            'foto'=>'https://placehold.co/600x600?text=Foto',
            'kk'=> 'https://placehold.co/600x700?text=Kartu Keluarga',
            'akta'=>'https://placehold.co/600x700?text=Akta',
            'ijazah'=>'https://placehold.co/600x700?text=Ijazah',
            'dok_tambahan'=>'https://placehold.co/600x700?text=Example',
            'jenis_kelamin'=>fake()->randomElement(['Laki-laki','Perempuan']) ,
            'agama'=>'Islam',
            'pend_terakhir'=>'SD',
            'status_daftar'=>fake()->randomElement(['Lulus','Verifikasi']),
            'status_seleksi'=>fake()->randomElement(['Lulus','Terjadwal']),
            'jalur_seleksi'=>fake()->randomElement(['Zonasi','Afirmasi','Prestasi','Mutasi']),
        ];
    }
}
