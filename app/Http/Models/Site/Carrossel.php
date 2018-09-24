<?php

namespace App\Http\Models\Site;

use Illuminate\Database\Eloquent\Model;

class Carrossel extends Model
{
    protected $table = 'carrossel';
    protected $fillable = ['produto_id', 'titulo', 'img', 'status'];

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'produto_id')->where('status', 1);
    }

    public function getTituloUrl($value)
    {
        return strtolower($value);
    }
}
