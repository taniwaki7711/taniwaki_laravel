<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mailform extends Model
{
    
    // 参照させたいSQLのテーブル名を指定してあげる
    protected $table = 'mailforms';

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message'
    ];

}
