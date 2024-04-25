<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use App\Models\BukutamuModel;

class Bukutamu extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $ulp = BukutamuModel::where('layanan', 1)->count();
        $lpse = BukutamuModel::where('layanan', 2)->count();
        $advokasi = BukutamuModel::where('layanan', 3)->count();

        $this->labels(['ULP', 'LPSE', 'ADVOKASI']);
        $this->dataset('Kunjungan','bar', [$ulp,$lpse,$advokasi])->options([
            'backgroundColor' => '#063092'
        ]);
    }

}
