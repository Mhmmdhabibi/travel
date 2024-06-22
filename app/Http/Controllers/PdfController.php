<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\Shop\Order;
use App\Models\Transaksi;
use Barryvdh\DomPDF\Facade\Pdf;
 
class PdfController extends Controller
{
    public function __invoke(Report $order)
    {
        return Pdf::loadView('pdf', ['record' => $order])
            ->download($order->number. '.pdf');
    }
}