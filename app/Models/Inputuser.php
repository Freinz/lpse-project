<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inputuser extends Model
{
    use HasFactory;

    public function role() {

        return $this->belongsTo(Role::class);

    }

    
<<<<<<< HEAD
}
=======
}
>>>>>>> fa421796470d8f6c48f09654b6a5e7d955bad27c
