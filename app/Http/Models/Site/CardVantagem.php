<?php

namespace App\Http\Models\Site;

use Illuminate\Database\Eloquent\Model;

class CardVantagem extends Model
{
    protected $table = "card_vantagens";
    protected $fillable = ["titulo", "icone", "posicao", "status"];
}
