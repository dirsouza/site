<?php

namespace App\Http\Models\Site;

use Illuminate\Database\Eloquent\Model;

class SubMenuSiteItem extends Model
{
    protected $table = 'sub_menu_site_items';
    protected $fillable = ['sub_menu_site_id', 'titulo', 'url'];
}
