<?php

namespace App\Http\Models\Site;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['menu_site_id', 'titulo', 'status'];

    public function categoriaItem()
    {
        return $this->hasMany(Produto::class, 'categoria_id')->where('status', 1);
    }
}
