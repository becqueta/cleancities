<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Incident;

class QrController extends Controller
{
    public $loc_qr_code_poubelle 
                          = ["1" => 
                                ["lat" => ,
                                 "lng" => ],
                            "2" =>
                                ["lat" => ,
                                 "lng" => ]],
                            "3" =>
                                ["lat" => ,
                                 "lng" => ]],
                            "4" =>
                                ["lat" => ,
                                 "lng" => ]],
                            "5" =>
                                ["lat" => ,
                                 "lng" => ]],
                            "6" =>
                                ["lat" => ,
                                 "lng" => ]],
                            "7" =>
                                ["lat" => ,
                                 "lng" => ]],
                            "8" =>
                                ["lat" => ,
                                 "lng" => ]],
                            "9" =>
                                ["lat" => ,
                                 "lng" => ]];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIncident($type_incident, $id_qr)
    {
        //
        if($type_incident == 'poubelle'){
            $incident = new Incident();
            $incident->id_type = 0;
            $incident->id_user = 0;
            $incident->date = date("Y-m-d H:i:s");
            $incident->lat = $this->loc_qr_code_poubelle[$id_qr]['lat'];
            $incident->lng = $this->loc_qr_code_poubelle[$id_qr]['lng'];;
            $incident->save();

        }elseif($type_incident == 'eclairage'){

            $incident = new Incident();
            $incident->id_type = 0;
            $incident->id_user = 0;
            $incident->date = date("Y-m-d H:i:s");
            $incident->lat = $this->loc_qr_code_eclairage[$id_qr]['lat'];
            $incident->lng = $this->loc_qr_code_eclairage[$id_qr]['lng'];;
            $incident->save();
        }elseif($type_incident == 'degradation'){

            $incident = new Incident();
            $incident->id_type = 0;
            $incident->id_user = 0;
            $incident->date = date("Y-m-d H:i:s");
            $incident->lat = $this->loc_qr_code_degradation[$id_qr]['lat'];
            $incident->lng = $this->loc_qr_code_degradation[$id_qr]['lng'];;
            $incident->save();
        }
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
