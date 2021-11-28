<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portafolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo', 'imagen', 'descripcion', 'url_Portafolio', 'url_Git' , 'categoria_id'
    ];

    //Obtiene la categoria del portafolio via FK
    public function categoria()
    {
        return $this->belongsTo(CategoriaPortafolio::class);
    }

    //Obtiene la habilidad del portafolio via FK
    public function habilidad()
    {
        return $this->belongsTo(HabilidadPortafolio::class);
    }

    // Obtiene la informacion dek usuario via FK
    public function autor()
    {
        return $this->belongsTo(User::class, 'user_id'); //FK de esta tabla
    }
}
