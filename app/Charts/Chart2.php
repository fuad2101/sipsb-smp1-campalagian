<?php

namespace App\Charts;

use App\Models\Siswa;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class Chart2
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $male = Siswa::where('jenis_kelamin','Laki-laki')->count();
        $female = Siswa::where('jenis_kelamin','Perempuan')->count();
        return $this->chart->barChart()
            ->setTitle('Jenis Kelamin')
            ->setSubtitle('Jumlah pendaftar berdasarkan jenis kelamin')
            ->addData('Laki-laki', [$male])
            ->addData('Perempuan', [$female])
            ->setColors(['#3E68AD', '#A01A6A',])
            // ->setXAxis(['Jumlah', 'February', 'March', 'April', 'May', 'June']);
            ->setXAxis([''])
            // ->setGrid(false, '#3F51B5', 0.1)
            // ->setLabels(['Active users', 'Inactive users'])
            ->setMarkers(['#FF5722', '#E040FB'], $male, $female);
    }
}
