<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'post'; //name of table
    protected $primaryKey = 'id'; // name of primary key
    public $incrementing = true; // is primary key autoincrementing
    protected $keyType = 'int'; // primary key type

    public $timestamps = false; // laravel automatically manages created_at and updated_at columns
    protected $dateFormat = 'U'; // The storage format of the model's date columns
    const CREATED_AT = 'creation_date'; // column used to mark created at
    const UPDATED_AT = 'last_update'; // column used to mark updated at

     protected $fillable = [
    	'title','content' 
    ];
}
