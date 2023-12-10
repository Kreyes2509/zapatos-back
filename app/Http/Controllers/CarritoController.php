<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;
use App\Models\Zapato;
class CarritoController extends Controller
{
    public function index()
    {
        $carrito = new Carrito();
        return response()->json($carrito->getShoppingCar(1));
    }

    public function store(Request $request,$shoeID)
    {
        $carrito = new Carrito();
        $shoes = new Zapato();
        $shoe = $shoes->getShoe($shoeID);
        $shoppingCar = $carrito->storeProduct($shoeID);

        if($carrito->storeProduct($shoeID) == null)
        {
            $addProduct = new Carrito();
            $addProduct->zapatosID = $shoeID;
            $addProduct->cantidad = $request->input("cantidad");
            $addProduct->userID = 1;
            $addProduct->total = $request->input("cantidad") * $shoe->precio;
            if($addProduct->save())
            {
                return response()->json([
                    'status'=>200,
                    'message'=>"added product"
                ]);
            }
            return response()->json([
                'status'=>400,
                'message'=>"error adding product"
            ]);
        }
        else
        {
            $addProduct = $carrito->storeProduct($shoeID);
            $addProduct->zapatosID = $shoeID;
            $addProduct->cantidad = $request->input("cantidad") + $shoppingCar->cantidad;
            $addProduct->userID = 1;
            $addProduct->total = $addProduct->cantidad * $shoe->precio;
            if($addProduct->save())
            {
                return response()->json([
                    'status'=>200,
                    'message'=>"added product"
                ]);
            }
            return response()->json([
                'status'=>400,
                'message'=>"error adding product"
            ]);

        }
    }

    public function update(Request $request, $shoeID)
    {
        $carrito = new Carrito();
        $shoes = new Zapato();
        $shoe = $shoes->getShoe($shoeID);
        $shoppingCar = $carrito->storeProduct($shoeID);


        $Product = $carrito->storeProduct($shoeID);
        $Product->zapatosID = $shoeID;
        $Product->cantidad = $request->input("cantidad");
        $Product->userID = 1;
        $Product->total = $Product->cantidad * $shoe->precio;
        if($Product->save())
        {
            return response()->json([
                'status'=>200,
                'message'=>"updated product"
            ]);
        }
    }

    public function destroy($shoeID)
    {
        $shoppingCar = new Carrito();
        $car = $shoppingCar->storeProduct($shoeID);
        $car->delete();
        return response()->json([
            'status'=>200,
            'message'=>"deleted product"
        ]);
    }
}
