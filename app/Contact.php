<?php
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Contact extends Model
{
    protected $fillable = [
        'type', 'name', 'email', 'gender', 'body'
    ];
    static $types = [
        'プロジェクトについて', '疑問・質問', 'その他'
    ];
    static $genders = [
        '男', '女'
    ];
}