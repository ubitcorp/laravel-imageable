<?php

namespace UbitCorp\Imageable\Entities;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = ["id"]; 

    public function __construct(array $attributes = [])
    {
        $this->table = config('imageable.model'); 
        parent::__construct($attributes);
    }    

    public function model(){
        return $this->morphTo();
    }
}
