<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Self_;

class Form extends Model
{
    protected $table = "form";
    public $timestamps = true;
    protected $guarded = [];

    /**
     * 填报入库
     * @param $form_id
     * @param $name
     * @return |null
     */
    public static function lzz_from($form_id,$name){
        try {
                $id = 4;
                $sta = 1;
            $data = Self::insert([
                'form_id' =>$form_id,
                'applicant_name'=>$name,
                'type_id' =>$id,
                'form_status' =>$sta,
                'created_at'=>now()
            ]);
            return $data;
        } catch(\Exception $e){
            logError('实验室运行记录填报错误',[$e->getMessage()]);
            return null;
        }
    }

    /**
     * 申请人回显
     * @return |null
     */
    public static function lzz_nameView(){
        try {
            $code = 'xxxxx';
            $res  = getDinginfo($code);
            $data = $res->name;
            return $data;
        } catch(\Exception $e){
            logError('申请人回显错误',[$e->getMessage()]);
            return null;
        }
    }
}
