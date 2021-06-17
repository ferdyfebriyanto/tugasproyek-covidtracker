<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $global = $this->getGlobalDataCovidId();
        $data = $this->getDataProvinsiTable();
        return view ('admin.dashboard', ['global' => $global, 'data' => $data]);
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
