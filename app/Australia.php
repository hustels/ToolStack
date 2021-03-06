<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Australia extends Model
{
    protected $table = 'australia';
    protected $fillable = [
    	'date' , 'session', 'specification' , 'host', 'type' , 'retried' , 'new_session' , 'incident',
    	'link' , 'end_ok' , 'observations'
    ];
    public $timestamps = true;
}
