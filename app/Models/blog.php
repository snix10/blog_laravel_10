<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    protected $with = ['author','category'];

    public function scopeCari($query, array $caris)
    {

        $query->when($caris['search'] ?? false, function($query, $search) {
            return $query->where('judul','LIKE','%'.$search.'%')
                        ->orWhere('judul','LIKE','%'.$search.'%');
        });

        $query->when($caris['category'] ?? false, function($query, $category){
            return $query-> whereHas('category', function($query) use ($category) {
                $query->where('slug',$category);
            });    
        });

        $query->when($caris['author'] ?? false, fn($query, $author) =>
            $query-> whereHas('author', fn($query) => 
                $query->where('username',$author)
            )
        );
    }
    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function author()
    {
        return $this->belongsTo(user::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug' ;
    }
}
