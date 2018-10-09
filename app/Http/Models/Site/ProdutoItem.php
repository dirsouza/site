<?php

namespace App\Http\Models\Site;

use Illuminate\Database\Eloquent\Model;

class ProdutoItem extends Model
{
    protected $table = 'produto_itens';
    protected $fillable = ['produto_id', 'titulo', 'descricao', 'preco', 'status'];

    public function imagens()
    {
        return $this->hasMany(ProdutoItemImagens::class)->where('status', 1);
    }

    public function ofertas()
    {
        return $this->hasOne(ProdutoItemOfertas::class)->where('status', 1);
    }

    public function getPrecoAttribute($value)
    {
        return number_format($value, 2, ",", ".");
    }
}
