<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discount extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'type',
        'value',
        'quantity',
        'description',
        'start_date',
        'end_date'
    ];

    public $timestamps = true;
    public function bills(){
        return $this->hasMany(Bill::class,'discount_id','id');
    }
}
