<?php
/**
 * Created by PhpStorm.
 * User: Hadi
 * Date: 2018/6/7
 * Time: 15:15
 */

namespace Hadilee\Okexclient;


use Illuminate\Support\Facades\DB;

class Okexclient
{
    public function chkTransStatus(){


        $rst = DB::table('we_menus')
            ->where('id','=',1)
            ->first();
        dd($rst);

        return 'Check translate status';
    }
}