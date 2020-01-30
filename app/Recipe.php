<?php

namespace App;

use App\Traits\Enums;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use Enums;

    protected $guarded = [];

    protected $enumDifficulties = [
        'hard',
        'medium',
        'piece of cake'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
