<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'status' => 'string',
    ];

    // public function scopeActive($query, $status)
    // {
    //     return $query->where('status', $status);
    // }

   protected static function boot()
   {
        parent::boot();
        static::addGlobalScope('status', function (Builder $builder) {

            $builder->where('status', 1);

        });
   }


}
