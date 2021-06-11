<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        
        return view('vehicle.index', [
            'vehicles' => $vehicles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $colors = Color::all();
        $vehicles = Vehicle::all();
        return view('vehicle.create', [
            'brands' => $brands,
            'colors' =>$colors,
            'vehicles' => $vehicles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nameFile = null;
        $name = uniqid(date('HisYmd'));
        $extension = $request->photo->getClientOriginalExtension();
        $nameFile = "{$name}.{$extension}";

        $vehicle = $request->all();
        $valor = str_replace('.',"",$request->price);
        $vehicle['price'] = str_replace(',',".",$valor);
        $vehicle['photo'] = $nameFile;
        $vehicle['user_id'] = $request->session()->get('LoggedUser');
        Vehicle::create($vehicle);

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $upload = $request->photo->storeAs('/public/vehicles', $vehicle['photo']);
            if ( !$upload )
                return redirect()
                            ->back()
                            ->with('error', 'Falha ao fazer upload')
                            ->withInput();
     
        }
        return redirect()->route('vehicles')->with('success', 'Veículo cadastrado com sucesso');
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
        $vehicle = Vehicle::findOrFail($id);

        $brands = Brand::all();
        $colors = Color::all();

        return view('vehicle.edit', [ 'vehicle' => $vehicle, 'brands' => $brands, 'colors' => $colors]);

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
        $vehicle = Vehicle::findOrFail($id);

        $vehicle->model             = $request->model;
        $vehicle->yearmodel        = $request->yearmodel;
        $vehicle->yearmanufacture   = $request->yearmanufacture;
        $vehicle->type              = $request->type;
        $valor = str_replace('.',"",$request->price);
        $vehicle->price             =  str_replace(',',".",$valor);
        $vehicle->optionals         = $request->optionals;
        $vehicle['user_id']         = $request->session()->get('LoggedUser');

        if(!$request->hasFile('photo')){
            $vehicle->save();
            return redirect()->route('vehicles')->with('success', 'Veículo alterado com sucesso');;
        }else {
  
            $name = uniqid(date('HisYmd'));
            $extension = $request->photo->getClientOriginalExtension();
            $nameFile = "{$name}.{$extension}";
            $vehicle['photo'] = $nameFile;
            $vehicle->save();
            $upload = $request->photo->storeAs('/public/vehicles', $nameFile );
            if ( !$upload )
                return redirect()
                            ->route('vehicles')
                            ->with('error', 'Falha ao fazer upload');
            else
                return redirect()->route('vehicles')->with('success', 'Veículo alterado com sucesso');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();

        return redirect()->route('vehicles');
    }
}
