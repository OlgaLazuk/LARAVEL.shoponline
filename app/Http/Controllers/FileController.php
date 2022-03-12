<?php


namespace App\Http\Controllers;

use App\Providers\XmlServiceProvider;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Dotenv\Parser\Parser;


class FileController
{
    function getFile()
    {
        $response = file_get_contents("http://laravel.shoponline/storage/price.xml");
        $xml = simplexml_load_string($response);
        $json = json_encode($xml);
        dd($json);
        // return view('clientlayout.main.test', array('response' => $configdata ));

//        if (!Storage::disk('public')->exists('price.xml')) {
//            $url = 'https://www.21vek.by/files/price/market.yml';
//            $fileName = 'price.xml';
//            Storage::disk('public')
//                ->putFileAs('', $url, $fileName);
//
//        }
        //  dd(Storage::url('price.xml'));

//        $xml = simplexml_load_file("http://laravel.shoponline/storage/price.xml");
//        $json = json_encode($xml);
//        $arr = json_decode($json, TRUE);

    }
}
