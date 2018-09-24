<?php

namespace App\Http\Models\Site;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $fillable = ['categoria_id', 'titulo', 'status'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id')->where('status', 1);
    }

    public function getTituloUrl($value)
    {
        return strtolower($value);
    }
}
