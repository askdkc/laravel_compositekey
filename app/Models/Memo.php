<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    use HasFactory;

    //これで複合キーが使える
    use \App\Traits\HasCompositeKey;

    protected $primaryKey = ['id', 'subid'];
    public $incrementing = false;

    protected $fillable = ['id','subid', 'memo'];

    public $timestamps = false;

}
