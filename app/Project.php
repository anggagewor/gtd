<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

    protected $fillable = [
        'name', 'description' , 'user_id' , 'start_at' , 'end_at' , 'status_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
