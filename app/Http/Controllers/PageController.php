<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Estrazione
    //Incapsulamento
    //Astrazione
    public $services =  [
        [
            'uri' => 'gestionale',
            'name' => 'Sistema  Gestionali',
            'costo' => 1500,
            'tempo_di_realizzazione' => '2 settimane',
            'img' => 'https://picsum.photos/630/315'
        ],
        [
            'uri' => 'ecommerce',
            'name' => 'Piattaforma eCommerce',
            'costo' => 2500,
            'tempo_di_realizzazione' => '3 settimane',
            'img' => 'https://picsum.photos/630/315'
        ],
        [
            'uri' => 'siti-web',
            'name' => 'Siti Web',
            'costo' => 1000,
            'tempo_di_realizzazione' => '1 settimana',
            'img' => 'https://picsum.photos/630/315'
        ],
        [
            'uri' => 'consulenza',
            'name' => 'Consulenza Web',
            'costo' => 3500,
            'tempo_di_realizzazione' => '4 settimane',
            'img' => 'https://picsum.photos/630/315'
        ],

    ];
    public function homepage()
    {

        //resources/views
        //welcome
        //.blade.php

        return view('welcome');
    }

    public function about()
    {
        //resources/views/
        //about-us
        //.blade.php
        return view('about-us');
    }

    public function services()
    {
        //Marketing, Sviluppo Web, eCommerce 

        return view('servizi', ['servizi' => $this->services]);
    }

    public function service($service)
    {
        // var_dump($service);
        // die();
        // dd($service);

        //1)Leggo $service ='gestionale'
        dd($this->services);
        return view('servizio', ['servizio' => $service]);
    }
}
