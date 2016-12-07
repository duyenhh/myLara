<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultys extends Model
{
    //
    protected $table = 'facultys';
	protected $fillable = [ 'name','email', 'password',
	];
	protected $hidden = ['password', 'remember_token',];
	//mấy cái trong ngoặc giống cái sáng tự thêm đâu rồi dm lag qua
	public $timestamps = true;
}
