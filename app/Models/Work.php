<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Work extends Model
{
    use HasFactory;

    protected $table = 'tbl_works';

    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($work) {
            
            $work->slug = Str::slug($work->title, '-');
        });
    }
}
