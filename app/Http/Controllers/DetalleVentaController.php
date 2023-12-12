<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetalleVenta;
use App\Models\Carrito;
use Carbon\Carbon;

class DetalleVentaController extends Controller
{
    public function index()
    {
        $DV = new DetalleVenta();

        return response()->json($DV->getDetalleVenta(1));
    }

    public function store(Request $request)
    {
        $DV = new DetalleVenta();
        $DV->userID = 1;
        $DV->fechaEnvio = Carbon::now();
        $fecha = Carbon::now();
        $DV->FechaLLegada = $fecha->addDays(5);
        $carrito = new Carrito();
        $total = 0;
        foreach($carrito->getShoppingCar(1) as $Shopping)
        {
            $total = $total + $Shopping->total;
        }
        $DV->total = $total;
        if($DV->save())
        {
            return response()->json([
                'status'=>200,
                'message'=>"detail sale"
            ]);
        }
        return response()->json([
            'status'=>400,
            'message'=>"detail sale"
        ]);
    }


    public function destroy($userID)
    {
        $DV = DetalleVenta::find($userID);
        $DV->delete();
        Carrito::truncate();

        return response()->json([
            'status'=>200,
            'message'=>"delete"
        ]);
    }
}
