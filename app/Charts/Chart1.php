<?php

namespace App\Charts;

use App\Models\Siswa;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class Chart1
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $zonasi = Siswa::where('jalur_seleksi','Zonasi')->count();
        $afirmasi = Siswa::where('jalur_seleksi','Afirmasi')->count();
        $prestasi = Siswa::where('jalur_seleksi','Prestasi')->count();
        $mutasi = Siswa::where('jalur_seleksi','Mutasi')->count();
        return $this->chart->pieChart()
            ->setTitle('Jalur Seleksi')
            ->setSubtitle('Jumlah calon siswa berdasarkan kategori jalur seleksi')
            ->addData([$zonasi, $afirmasi, $prestasi, $mutasi])
            ->setColors(['#3E68AD', '#A01A6A','#D48D2F','#1B8B5D'])
            ->setLabels(['Zonasi', 'Afirmasi', 'Prestasi','Mutasi']);
    }
}
