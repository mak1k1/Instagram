<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        return '/storage/' . ($this->image) ? $this->image: '/profile/default.jpeg';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
