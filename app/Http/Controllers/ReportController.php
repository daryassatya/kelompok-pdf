<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ReportController extends Controller
{
    public function percobaan1()
    {
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml('<h1>hello world</h1>');

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }

    public function createPdf($view, $paperSize, $paperOrientation, $data)
    {
        $viewPdf = \View::make($view, $data)->render();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($viewPdf)->setPaper($paperSize, $paperOrientation);
        return $pdf;
    }

    public function salesReport(){
        $data['sales'] = array(
            array(
                "tanggal" => "2024-03-01",
                "produk" => "Kaos",
                "jumlah_terjual" => 50,
                "harga_satuan" => 15
            ),
            array(
                "tanggal" => "2024-03-02",
                "produk" => "Celana",
                "jumlah_terjual" => 30,
                "harga_satuan" => 25
            ),
            array(
                "tanggal" => "2024-03-03",
                "produk" => "Topi",
                "jumlah_terjual" => 20,
                "harga_satuan" => 10
            ),
            array(
                "tanggal" => "2024-03-04",
                "produk" => "Jaket",
                "jumlah_terjual" => 15,
                "harga_satuan" => 40
            ),
            array(
                "tanggal" => "2024-03-05",
                "produk" => "Sepatu",
                "jumlah_terjual" => 10,
                "harga_satuan" => 60
            ),
            array(
                "tanggal" => "2024-03-06",
                "produk" => "Tas",
                "jumlah_terjual" => 25,
                "harga_satuan" => 35
            ),
            array(
                "tanggal" => "2024-03-07",
                "produk" => "Dompet",
                "jumlah_terjual" => 40,
                "harga_satuan" => 20
            ),
            array(
                "tanggal" => "2024-03-08",
                "produk" => "Kacamata",
                "jumlah_terjual" => 18,
                "harga_satuan" => 30
            ),
            array(
                "tanggal" => "2024-03-09",
                "produk" => "Jam Tangan",
                "jumlah_terjual" => 12,
                "harga_satuan" => 50
            ),
            array(
                "tanggal" => "2024-03-10",
                "produk" => "Scarf",
                "jumlah_terjual" => 22,
                "harga_satuan" => 15
            )
        );
        $pdf = $this->createPdf('sales', 'A4', 'portrait', $data);
        return $pdf->stream();
    }
}