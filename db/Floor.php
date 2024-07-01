<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Floor extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
      'name',
      'quantity'
    ];

    public $timestamps = true;

    public function tables(){
        return $this->hasMany(Table::class, 'floor_id','id');
    }
}
