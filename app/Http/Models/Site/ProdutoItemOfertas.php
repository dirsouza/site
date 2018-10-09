<?php

namespace App\Http\Models\Site;

use Illuminate\Database\Eloquent\Model;

class ProdutoItemOfertas extends Model
{
    protected $table = 'produto_item_ofertas';
    protected $fillable = ['produto_item_id', 'preco', 'validade', 'status'];

    public function getPrecoAttribute($value)
    {
        return number_format($value, 2, ",", ".");
    }
}
