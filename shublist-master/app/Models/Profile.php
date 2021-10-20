<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
    ];

    /*Relationship between User And Page */
    public function user()
    {
        return $this->belongsToMany("App\Models\User");
    }
}
