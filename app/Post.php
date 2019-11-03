<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table ='posts';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps - default true; false if not necessary
    public $timestamps = true;
}
