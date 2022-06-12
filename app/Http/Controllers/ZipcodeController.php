<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Zipcode;
use App\Http\Resources\ZipcodeResource;


class ZipcodeController extends Controller
{


    /**
     * Muestro un resultado especifico
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $settlements = ZipcodeResource::collection(Zipcode::where('d_codigo', $id)
     ->get());

    $zips = Zipcode::where('d_codigo', $id)
    ->get();
      
     $zip =  response()->json([
        'zip_code' => $zips[0]->d_codigo,
        'locality' => strtoupper($zips[0]->d_ciudad),
        'federal_entity' => [
          'key' =>  $zips[0]->c_estado,
          'name' =>  strtoupper($zips[0]->d_estado),
          'code' =>  $zips[0]->d_c_CP,
        ],
        'settlements' => $settlements,
        'municipality' => [
            'key' => $zips[0]->c_mnpio,
            'name' => strtoupper($zips[0]->D_mnpio),
        ]
    ], 200); 
    
    return $zip;

    }

}
