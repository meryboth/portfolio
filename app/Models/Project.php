<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    //ManyToOne
    public function portfolio() {
        return $this->belongsTo('App\Models\Portfolio');
    }
}
