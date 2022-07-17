<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function performer()
    {

        return $this->belongsTo(Performer::class, 'performer_id');

    }

    public function location()
    {

        return $this->belongsTo(Location::class, 'location_id');

    }

    public function atendees()
    {
        return $this->belongsToMany(User::class, 'ticket2user','post_id','user_id');
    }
}
