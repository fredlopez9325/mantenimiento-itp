<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infraestructura;
use App\Correctivo;
use App\Preventivo;
use App\Mantenimiento;

class PdfController extends Controller
{
    public function infraestructura($id)
    {   
        $formato = Infraestructura::find($id);
        $pdf = \PDF::loadView('pdf.infraestructura', ['formato' => $formato]);
        return $pdf->stream('infraestructura.pdf');
    }
    public function correctivo($id)
    {   
        $formato = Correctivo::find($id);
        $pdf = \PDF::loadView(utf8_decode('pdf.correctivo'), ['formato' => $formato]);
        return $pdf->stream('correctivo.pdf');
    }
    public function preventivo($id)
    {   
        $formato = Preventivo::find($id);
        $pdf = \PDF::loadView('pdf.preventivo', ['formato' => $formato]);
        return $pdf->setPaper('a4', 'landscape')->stream();
    }
    public function orden($id)
    {   
        $formato = Mantenimiento::find($id);
        $pdf = \PDF::loadView('pdf.orden', ['formato' => $formato]);
        return $pdf->stream();
    }
}
