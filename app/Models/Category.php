<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    // protected $table = 'my_categories';
    // protected $primaryKey = 'category_id';
    // public $incrementing = false;
    // protected $keyType = 'string';
    // // public $timestamps = false;
    // const CREATED_AT = 'creation_date';

    // protected $attributes = [
    //     'status' => 'disable'
    // ];

    // protected $fillable = ['name'];
    protected $guarded = ['id'];


}
