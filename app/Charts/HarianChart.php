<?php

namespace App\Charts;
use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class HarianChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build()
    {
        // Statistik Harian
        $transaksis = DB::table('transaksi')
        ->select(DB::raw('DAY(created_at) AS tgl'), DB::raw('COUNT(id) AS jml'))
        ->whereYear('created_at', '=', date('Y'))
        ->whereMonth('created_at', '=', date('m'))
        ->groupBy('tgl')
        ->get();

        $tanggal = range(1, 31);
        $nilai = array_fill(0, 31, 0);

        foreach ($transaksis as $transaksi) {
        $tgl = (int) $transaksi->tgl;
        $jml = (int) $transaksi->jml;
        $nilai[$tgl - 1] = $jml;
        }

        return $this->chart->lineChart()
        ->addData('Laundry Masuk', $nilai)
        ->setXAxis($tanggal)
        ->setHeight(300)
        ->setGrid();;
    }
}
