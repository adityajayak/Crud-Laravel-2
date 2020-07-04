<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PenjawabModel
{
    public static function get_all()
    {
        $penjawab = DB::table('penjawab')->get();
        return $penjawab;
    }
    public static function save($data)
    {
        unset($data["_token"]);
        $new_penjawab = DB::table('penjawab')->insert($data);
        return $new_penjawab;
    }
}
