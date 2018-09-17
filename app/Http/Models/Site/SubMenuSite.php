<?php

namespace App\Http\Models\Site;

use Illuminate\Database\Eloquent\Model;

class SubMenuSite extends Model
{
    protected $table = 'sub_menu_site';
    protected $fillable = ['menu_id', 'titulo', 'url'];

    public function subMenuSiteItem()
    {
        return $this->hasMany(SubMenuSiteItem::class)->where('status', 1);
    }
}
