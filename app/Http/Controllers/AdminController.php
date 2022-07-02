<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function generatePDF()

    {
        $data = ['title' => 'Welcome to belajarphp.net'];

        $pdf = PDF::loadView('coba', $data);
        return $pdf->download('laporan-pdf.pdf');
    }
}
