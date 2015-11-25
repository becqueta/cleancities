<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Incident;

class mobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //
        $incidents = Incident::All();
        return view('dashboard')->with('scans', $incidents);
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
       $incident = Incident::find($id);
       $incident->lat = str_replace(',', '.', $incident->lat);
       $incident->lng = str_replace(',', '.', $incident->lng);
       return view('detail')->with('scan', $incident);
    }

   
}
