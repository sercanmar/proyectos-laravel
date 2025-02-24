<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    use HasFactory;

    protected $fillable = ['titulo','contenido'];
    public function usuario()
{
    return $this->belongsTo(Usuario::class, 'usuario_id');
}

}
