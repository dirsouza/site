<?php

namespace App\Http\Models\Site;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['menu_site_id', 'titulo', 'titulo_url', 'status'];

    public function produto()
    {
        return $this->hasMany(Produto::class)->where('status', 1);
    }
}
