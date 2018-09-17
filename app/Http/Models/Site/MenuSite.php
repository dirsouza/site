<?php

namespace App\Http\Models\Site;

use Illuminate\Database\Eloquent\Model;

class MenuSite extends Model
{
    protected $table = 'menu_site';
    protected $fillable = ['titulo', 'url', 'status'];

    public function subMenuSite()
    {
        return $this->hasMany(SubMenuSite::class);
    }
}
