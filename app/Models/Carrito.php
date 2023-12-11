<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $table = "carrito";

    protected $fillable = [
        "id",
        "zapatosID",
        "cantidad",
        "userID",
        "total"
    ];

    public function getShoppingCar($userID)
    {
        return $this->select(
            "carrito.*","zapatos.marca","zapatos.modelo","zapatos.id as zapatoID"
        )->join("zapatos", "zapatos.id","=","carrito.id")->where("userID","=",$userID)->get();
    }

    public function storeProduct($shoeID)
    {
        return $this->where("zapatosID","=",$shoeID)->first();
    }
}
