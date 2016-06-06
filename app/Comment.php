<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
\Carbon\Carbon::setLocale('es');
class Comment extends Model
{
    protected $table = 'comments';
   	protected $fillable = ['title' , 'description' , 'owner'];
   	public $timestamps = true;
   	  protected $dates = [
        'created_at', 
        'updated_at'
    ];


}
