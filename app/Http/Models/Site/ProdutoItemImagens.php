<?php

namespace App\Http\Models\Site;

use Illuminate\Database\Eloquent\Model;

class ProdutoItemImagens extends Model
{
    protected $table = 'produto_item_imagens';
    protected $fillable = ['produto_item_id', 'imagem', 'status'];
}
