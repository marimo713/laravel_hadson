<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable = ['file'];
    protected $uploadDir = '/image/';

    public function getFileAttribute($photo)
    {
        return $this->uploadDir . $photo;
    }
}
