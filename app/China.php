<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class China extends Model
{
    protected $table = 'china';
    
    protected $fillable = [
    	'date' , 'session', 'specification' , 'host', 'type' , 'retried' , 'new_session' , 'incident',
    	'link' , 'end_ok' , 'observations'
    ];
    public $timestamps = true;
}
