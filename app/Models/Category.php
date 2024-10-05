<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'tbl_work_categories';

    protected $fillable = ['category_name'];

    public function works(){
        return $this->hasMany(Work::class, 'category_id');
    }
}
