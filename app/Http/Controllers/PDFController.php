<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\estudiante; //Modelo

class PDFController extends Controller
{
    /*public function PDF(){
    $pdf=\PDF::loadView('pruebaPDF');
    return $pdf->download('pruebaPDF.pdf');
    	}*/

    public function PDF(){
        $estudiante= estudiante::get();
        $pdf = PDF::loadView('PDFestudiantes',compact('estudiante'));
        return $pdf->download('pdfEstu.pdf');
        }

    }



