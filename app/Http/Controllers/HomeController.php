<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $global = $this->getGlobalDataCovidId();
        return view('web.home',compact('global'));
    }

    public function indexMaps()
    {
        $data = $this->getDataProvinsiTable();
        return view('web.maps',compact('data'));
    }

    public function getGlobalDataCovidId()
    {
        $client = new Client(['base_uri' => 'https://reqres.in/']);
        $response = $client->request('POST', 'https://api.kawalcorona.com/indonesia');
        $data = $response->getBody();
        $arrData = json_decode($data,true);
        return $arrData; //$arrData[0]['name'];
    }
    public function getDataProvinsiTable()
    {
        $client = new Client(['base_uri' => 'https://reqres.in/']);
        $response = $client->request('POST', 'https://api.kawalcorona.com/indonesia/provinsi');
        $data = $response->getBody();
        $arrData = json_decode($data,true);
        return $arrData;
    }


    public function getDataProvinsi()
    {
        $client = new Client(['base_uri' => 'https://reqres.in/']);
        $response = $client->request('POST', 'https://api.kawalcorona.com/indonesia/provinsi');
        $data = $response->getBody();
        $arrData = json_decode($data,true);
        //return $arrData;
        $arrProv = [];
        for($i=0; $i<count($arrData); $i++)
        {
            $item = [$arrData[$i]['attributes']['Kasus_Posi'],$arrData[$i]['attributes']['Provinsi']
            ,$arrData[$i]['attributes']['Kasus_Semb']];
            array_push($arrProv,$item);

        }
        return $arrProv;
        //$arrData[0]['attributes']['Kode_Provi'];
        //$arrData; 
    }
}
