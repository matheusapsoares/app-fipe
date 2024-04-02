<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

use App\Models\Vehicle;

class VehiclesController extends Controller 
{
    public function __construct(Vehicle $vehicle){
        $this->vehicle = $vehicle;
    }

    public function list(){
        $vehicles = $this->vehicle->getAllVehicles();
        return view('vehicles.list', compact('vehicles'));
    }

    public function create() {
        return view('vehicles.create');
    }

    public function store(Request $request) {
        $data = $request->all();
        $data['id'] = (string) Uuid::uuid1();

        $insert = $this->vehicle->insert($data);

        return redirect()->route('vehicles.list');
    }

    public function edit($id) {
        $vehicle = $this->vehicle->getVehicleById($id);
        return view('vehicles.edit', compact('vehicle'));
    }

    public function update(Request $request) {
        $data = $request->all();
        unset($data['_token']);
        unset($data['id']);

        $this->vehicle->updateVehicleById($request->id, $data);

        return redirect()->route('vehicles.list');
    }

    public function delete($id) {
        $this->vehicle->deleteVehicleById($id);

        return redirect()->route('vehicles.list');
    }
}