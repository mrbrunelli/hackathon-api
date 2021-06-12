<?php

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\ColorsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VehiclesController;
use App\Models\Vehicle;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('welcome');
});

Route::prefix('/sistema')->group(function(){
    Route::get('/', [IndexController::class, 'login'])->name('login');
    Route::post('/login', [IndexController::class, 'auth'])->name('auth');

    Route::group(['middleware'=> 'AuthCheck'], function(){
        Route::get('/dashboard', [IndexController::class, 'index'])->name('dashboard');
        Route::get('/logout', [IndexController::class, 'logout'])->name('logout');

        Route::get('/colors',[ColorsController::class, 'index'])->name('colors');
        Route::get('/colors/create',[ColorsController::class, 'create'])->name('colors.create');
        Route::post('/colors/save',[ColorsController::class, 'store'])->name('colors.save');
        Route::get('/colors/{id}/edit',[ColorsController::class, 'edit'])->name('colors.edit');
        Route::put('/colors/{id}',[ColorsController::class, 'update'])->name('colors.update');
        Route::delete('/colors/{id}/destroy',[ColorsController::class, 'destroy'])->name('colors.destroy');

        Route::get('/brands',[BrandsController::class, 'index'])->name('brands');
        Route::get('/brands/create',[BrandsController::class, 'create'])->name('brands.create');
        Route::post('/brands/save',[BrandsController::class, 'store'])->name('brands.save');
        Route::get('/brands/{id}/edit',[BrandsController::class, 'edit'])->name('brands.edit');
        Route::put('/brands/{id}',[BrandsController::class, 'update'])->name('brands.update');
        Route::delete('/brands/{id}/destroy',[BrandsController::class, 'destroy'])->name('brands.destroy');
    
        Route::get('/vehicles',[VehiclesController::class, 'index'])->name('vehicles');
        Route::get('/vehicles/create',[VehiclesController::class, 'create'])->name('vehicles.create');
        Route::post('/vehicles/save',[VehiclesController::class, 'store'])->name('vehicles.save');
        Route::get('/vehicles/{id}/edit',[VehiclesController::class, 'edit'])->name('vehicles.edit');
        Route::put('/vehicles/{id}',[VehiclesController::class, 'update'])->name('vehicles.update');
        Route::delete('/vehicles/{id}/destroy',[VehiclesController::class, 'destroy'])->name('vehicles.destroy');
    });
});

Route::get('/api',  function(){


    $vehicles = DB::table('vehicle')->whereNull('vehicle.deleted_at')->join('color', 'vehicle.color_id', '=', 'color.id')
    ->join('brand', 'vehicle.brand_id', '=', 'brand.id')
    ->select('vehicle.id', 'vehicle.photo','vehicle.model','vehicle.yearmodel','vehicle.yearmanufacture','vehicle.price','vehicle.type','vehicle.optionals','brand.description as brand', 'color.description as color')->get();

    foreach($vehicles as $vehicle){
        
        $registros[] = [
            'id' => $vehicle->id,
            'model' => $vehicle->model,
            'yearmodel' => $vehicle->yearmodel,
            'yearmanufacture' => $vehicle->yearmanufacture,
            'type' => $vehicle->type,
            'brand'=> $vehicle->brand,
            'color' => $vehicle->color,
            'price' => $vehicle->price,
            'photo' => '~/storage/vehicles/'.$vehicle->photo,
            'optionals' => $vehicle->optionals
        ];

    }
    if(empty($registros)){
        return "";
    }
    return $registros;
});

Route::get('/api/vehicle/{id}', function($id){

    $vehicle = Vehicle::whereNull('vehicle.deleted_at')
                                    ->join('color', 'vehicle.color_id', '=', 'color.id')
                                    ->join('brand', 'vehicle.brand_id', '=', 'brand.id')
                                    ->select('vehicle.id', 'vehicle.photo','vehicle.model','vehicle.yearmodel','vehicle.yearmanufacture','vehicle.price','vehicle.type','vehicle.optionals','brand.description as brand', 'color.description as color')
                                    ->where('vehicle.id', '=', $id)
                                    ->get();
    if(!empty($vehicle[0])){ 
        $vehicle[0]['photo'] = '~/storage/vehicles/'.$vehicle[0]['photo'];
        return $vehicle->toJson();
    }
    else{
        return "";
    }
});

Route::get('/api/new',  function(){


    $vehicles = Vehicle::whereNull('vehicle.deleted_at')
    ->join('color', 'vehicle.color_id', '=', 'color.id')
    ->join('brand', 'vehicle.brand_id', '=', 'brand.id')
    ->select('vehicle.id', 'vehicle.photo','vehicle.model','vehicle.yearmodel','vehicle.yearmanufacture','vehicle.price','vehicle.type','vehicle.optionals','brand.description as brand', 'color.description as color')
    ->where('vehicle.type', '=', 'new')
    ->get();

    foreach($vehicles as $vehicle){
        
        $registros[] = [
            'id' => $vehicle->id,
            'model' => $vehicle->model,
            'yearmodel' => $vehicle->yearmodel,
            'yearmanufacture' => $vehicle->yearmanufacture,
            'type' => $vehicle->type,
            'brand'=> $vehicle->brand,
            'color' => $vehicle->color,
            'price' => $vehicle->price,
            'photo' => '~/storage/vehicles/'.$vehicle->photo,
            'optionals' => $vehicle->optionals
        ];

    }
    if(empty($registros)){
        return "";
    }
    return $registros;
});
Route::get('/api/used',  function(){


    $vehicles = Vehicle::whereNull('vehicle.deleted_at')
    ->join('color', 'vehicle.color_id', '=', 'color.id')
    ->join('brand', 'vehicle.brand_id', '=', 'brand.id')
    ->select('vehicle.id', 'vehicle.photo','vehicle.model','vehicle.yearmodel','vehicle.yearmanufacture','vehicle.price','vehicle.type','vehicle.optionals','brand.description as brand', 'color.description as color')
    ->where('vehicle.type', '=', 'used')
    ->get();

    foreach($vehicles as $vehicle){
        
        $registros[] = [
            'id' => $vehicle->id,
            'model' => $vehicle->model,
            'yearmodel' => $vehicle->yearmodel,
            'yearmanufacture' => $vehicle->yearmanufacture,
            'type' => $vehicle->type,
            'brand'=> $vehicle->brand,
            'color' => $vehicle->color,
            'price' => $vehicle->price,
            'photo' => '~/storage/vehicles/'.$vehicle->photo,
            'optionals' => $vehicle->optionals
        ];

    }
    if(empty($registros)){
        return "";
    }
    return $registros;
});