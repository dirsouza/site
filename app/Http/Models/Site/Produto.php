<?php

namespace App\Http\Models\Site;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $fillable = ['categoria_id', 'titulo', 'titulo_url', 'status'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class)->where('status', 1);
    }

    public function itens()
    {
        return $this->hasMany(ProdutoItem::class)->where('status', 1);
    }

    public function getSubMenuActiveAttribute()
    {
        if (isset(Request::route()->parameters['item'])) {
            return Request::route()->parameters['item'] == $this->titulo_url ? ' activeItem' : null;
        }
    }
}
