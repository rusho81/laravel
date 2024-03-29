<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    // use HasFactory;
    use SoftDeletes;
    // protected $table = 'posts';
    // protected $dates = ['deleted_at'];
    // const DELETED_AT = 'deleted_at';

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
}
