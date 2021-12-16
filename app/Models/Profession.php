<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;

    //ManyToOne
    public function profile() {
        return $this->belongsTo('App\Models\Profile');
    }

    //ManyToMany
    public function profiles() {
        return $this->belongsToMany('App\Models\Profile');
    }
}
