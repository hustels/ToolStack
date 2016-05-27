<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oracle extends Model
{
    protected $table = 'oracle';
    protected $fillable = ['date' , 'db' , 'host' , 
    'observation' , 'type' , 'last_bk' , 'traces' , 'retried' , 'status',
    'num_failed_bk'
    ];
    public $timestamps = true;
}
