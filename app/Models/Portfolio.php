<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

        //ManyToOne
    public function profile() {
        return $this->belongsTo('App\Models\Profile');
    }
    //OneToMany
    public function portfolio() {
        return $this->hasMany('App\Models\Project');
    }
}
