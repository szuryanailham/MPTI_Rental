<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Unit extends Model
{
    use HasFactory, Sluggable;

    protected $guard = ['id'];
    protected $fillable =['name', 'price', 'category_id', 'capacity', 'description', 'slug', 'image', 'steering'];

    
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }

    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    
}
