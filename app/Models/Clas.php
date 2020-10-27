<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
    protected $table = "class";
    public $timestamps = true;
    protected $guarded = [];

    /**
     *
     * @return |null
     */
    public static function lzz_classDrop(){
        try {
            $data = self::select('class_name')
                        ->get();
            return $data;
        } catch(\Exception $e){
            logError('专业班级下拉框错误',[$e->getMessage()]);
            return null;
        }
    }
}
