<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehicleDriver;
use Illuminate\Support\Facades\Log;

class VehicleDriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vehicledriver = VehicleDriver::join('vehicles', 'vehicles.id', '=', 'vehicle_drivers.vehicle')
        ->join('drivers','drivers.id', '=', 'vehicle_drivers.driver')
        ->get(
            [
                'vehicle_drivers.id as a_id',
                'vehicles.id as v_id',
                'vehicles.platenumber',
                'vehicles.brand',
                'vehicles.model',
                'vehicles.year', 
                'drivers.id as d_id',
                'drivers.name',
                'drivers.lastname',
                'drivers.dni',
                'drivers.phone'
            ]);
        return $vehicledriver;
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


    public function setDriverToVehicle(Request $request){
        $vehicledriver = new VehicleDriver();
        $vehicledriver->vehicle = $request->vehicle;
        $vehicledriver->driver = $request->driver;
        $vehicledriver->save();
        return $vehicledriver;
    }

    public function remove(Request $request){
        $vehicledriver = VehicleDriver::destroy($request->id);
        return $vehicledriver;
    }
}