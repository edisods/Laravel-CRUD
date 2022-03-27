<?php

namespace App\Models;
// use App\Http\Controllers\CategoryController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;
    protected $guarded = ['created_at', 'updated_at', 'deleted_at'];

}
