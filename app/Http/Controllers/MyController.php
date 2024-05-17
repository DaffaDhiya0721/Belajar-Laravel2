<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function introduce()
    {
        $data = [
            "nama" => "Abdul Jaelani",
            "alamat" => "Bandung",
            "agama" => "Islam",
            "jk" => "L",
            "hobi" => [
                "Mancing", "Ngurek", "Menganyam",
            ],
        ];
        return view('latihan.perkenalan', compact('data'));
    }

    public function animals()
    {
        $animal = [
            "Lion", "Tiger", "Rhino", "Rabbit",
        ];
        return view('latihan.animal', ['hewan'=> $animal]);
    }
}