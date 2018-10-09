<?php

namespace App\Http\Models\Site;

use App\Helpers\FunctionsHelpers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class MenuSite extends Model
{
    protected $table = 'menu_site';
    protected $fillable = ['titulo', 'url', 'status'];

    public function categorias()
    {
        return $this->hasMany(Categoria::class, 'menu_site_id')->where('status', 1)->orderBy('posicao');
    }

    public function getMenuActiveAttribute()
    {
        return FunctionsHelpers::getUrlActive(Request::route()->getName()) == $this->url ? ' active' : '';
    }
}
