<?php

namespace UbitCorp\Imageable\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasImage
{
    public function image(): MorphOne
    { 
        return $this->morphOne(
            \UbitCorp\Imageable\Entities\Image::class,
            'model'
        )->orderBy('order','desc');
    }

    public function images(): MorphMany
    { 
        return $this->morphMany(
            \UbitCorp\Imageable\Entities\Image::class,
            'model'
        )->orderBy('order','desc');
    }
    

}
