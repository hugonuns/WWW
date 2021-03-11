<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class adminPag extends Model
{
    use HasFactory;

    public static function insertData($data){

        $value=DB::table('e_educacao')->where('nome', $data['nome'])->get();
        if($value->count() == 0){
            DB::table('e_educacao')->insert($data);
        }
    }
}
