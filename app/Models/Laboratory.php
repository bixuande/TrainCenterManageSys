<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    protected $table = "laboratory";
    public $timestamps = true;
    protected $guarded = [];

    /**
     * 实验室下拉框
     * @return |null
     */
    public static function lzz_laboratoryDrop(){
        try {
            $data = self::select('laboratory_name')
                ->get();
            return $data;
        } catch(\Exception $e){
            logError('实验室下拉框错误',[$e->getMessage()]);
            return null;
        }
    }
}
