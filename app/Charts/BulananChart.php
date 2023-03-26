<?php

namespace App\Charts;
use Illuminate\Support\Facades\DB;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class BulananChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build()
    {
        $transaksi = DB::table('transaksi')
->select(DB::raw('MONTH(created_at) AS bulan'), DB::raw('COUNT(id) AS jml'))
->whereYear('created_at', '=', date('Y'))
->groupBy('bulan')
->get();
        $data['bulan'] = [];
    $data['nilaiB'] = [];


for ($i = 1; $i <= 12; $i++) {
    $data['bulan'][] = date('F', mktime(0, 0, 0, $i, 1)); // ambil nama bulan dengan format lengkap
    $found = false;
    foreach ($transaksi as $t) {
        if ((int)$t->bulan === $i) {
            $data['nilaiB'][] = (int)$t->jml;
            $found = true;
            break;
        }
    }
    if (!$found) {
        $data['nilaiB'][] = 0;
    }
}

    return $this->chart->lineChart()
        ->addData('Laundry Masuk', $data['nilaiB'])
        ->setXAxis($data['bulan'])
        ->setHeight(300)->setGrid();;
    }
}
