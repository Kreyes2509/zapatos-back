<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zapato extends Model
{
    use HasFactory;

    protected $table = "zapatos";

    protected $fillable = [
        "id",
        "marca",
        "modelo",
        "tipoZapato",
        "Talla",
        "estilo",
        "color",
        "precio",
        "stock",
        "imagen"
    ];

    public function getShoe($id)
    {
        return $this->where("id","=",$id)->first();
    }

    public function getShoes()
    {
        return $this->all();
    }
}
