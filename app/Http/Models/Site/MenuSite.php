<?php

namespace App\Http\Models\Site;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class MenuSite extends Model
{
    protected $table = 'menu_site';
    protected $fillable = ['titulo', 'url', 'status'];

    public function categorias()
    {
        return $this->hasMany(Categoria::class, 'menu_site_id')->where('status', 1);
    }

    public function setActive($route)
    {
        if (is_array($route)) {
            return in_array(Request::route()->getName(), $route) ? ' active' : '';
        }

        return Request::route()->getName() == $route ? ' active' : '';
    }
}
