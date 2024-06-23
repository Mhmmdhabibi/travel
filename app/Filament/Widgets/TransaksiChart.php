<?php

namespace App\Filament\Widgets;

use App\Models\Transaksi;
use Filament\Widgets\ChartWidget;

class TransaksiChart extends ChartWidget
{
    protected static ?string $heading = 'Chart Transaksi';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Transaksi',
                    'data' => [0,Transaksi::count()],
                ],
            ],
            'labels' => ['0', '1'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
