<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    public function user()	
    {
    	return $this->belongsTo(User::class);
    }
    protected $fillable=['date_sold','product','first_name','last_name','address','phone','sales_method','commission'];
}
