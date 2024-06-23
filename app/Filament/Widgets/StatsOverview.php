<?php

namespace App\Filament\Widgets;

use App\Models\Transaksi;
use App\Models\User;
use Filament\Tables\Columns\Summarizers\Sum;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

use function PHPSTORM_META\map;

class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '10s';


    protected function getStats(): array
    {
        $incomeDataWisata = Transaksi::where('status', 'approve')
        ->with('paketWisata')
        ->get();

    // Map through the collection to extract 'harga' and sum them
    $totalIncome = $incomeDataWisata->map(function ($transaksi) {
        return $transaksi->paketWisata->harga; // Assuming 'harga' is the field name in 'paketWisata'
    })->sum();
        return [
            Stat::make('Pengguna', User::count())
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),
            Stat::make('Penjualan', Transaksi::count())
            ->chart([7, 2, 10, 3, 15, 4, 17]),
            Stat::make('Pendapatan', "Rp ".$totalIncome)
            ->chart([7, 2, 10, 3, 15, 4, 17]),


            
        ];
    }
}
