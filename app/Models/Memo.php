<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    use HasFactory;

    // HasCompositeKeyトレイトを使って複合キーを使う場合には以下のコメントアウトを外す
//     use \App\Traits\HasCompositeKey;
//     protected $primaryKey = ['id','subid'];

    // HasCompositeKeyトレイトを使う場合には、下記のprimaryKey部分はコメントアウトする
    protected $primaryKey = 'compositeid';
    public $incrementing = false;

    protected $fillable = ['id','subid', 'memo'];

    public $timestamps = false;

}
