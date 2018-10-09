<?php
/**
 * Created by PhpStorm.
 * User: diogo
 * Date: 04/10/18
 * Time: 21:42
 */

namespace App\Helpers;


use Carbon\Carbon;

class FunctionsHelpers
{
    public function getDataFormal($data, $formato = "d/m/Y")
    {
        return Carbon::parse($data)->format($formato);
    }

    public static function getDataPendente($data, $numAbsoluto = false, $formatado = null)
    {
        $dataAtual = Carbon::now();
        $data = Carbon::parse($data);

        $dataDiff = $dataAtual->diffInDays($data, $numAbsoluto);

        if ($formatado) {
            if ($dataDiff == 1) {
                $dataDiff .= " dia";
            } else {
                $dataDiff .= " dias";
            }
        }

        return $dataDiff;
    }

    public static function getUrlActive($url)
    {
        $url = explode('.', $url);

        foreach ($url as $_url) {
            if (count($url) > 2) {
                array_pop($url);
            } else {
                break;
            }
        }

        return implode('.', $url);
    }
}
