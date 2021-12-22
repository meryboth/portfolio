<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['name','lastName','email','avatar'];

    //OneToMany
    public function profile() {
        return $this->hasMany('App\Models\Portfolio');
    }

    //ManyToMany
    public function professions() {
        return $this->belongsToMany('App\Models\Proffesion');
    }
}
