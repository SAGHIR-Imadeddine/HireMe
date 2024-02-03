<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    //protected $guarded = ['id'];

    protected $fillable = [
        'provider',
        'title',
        'description',
        'price',
        'category_id',
        'email',
        'phone'
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
