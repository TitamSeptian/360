<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
<<<<<<< HEAD
    //
=======
    protected $guarded = ['id'];

    public function destination()
    {
        return $this->hasMany('App\Destination');
    }
>>>>>>> posting
}
