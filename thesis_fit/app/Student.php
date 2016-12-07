<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = 'students';
	protected $fillable = [ 'name','email', 'password',
	];
	protected $hidden = ['password', 'remember_token',];
	//mấy cái trong ngoặc giống cái sáng tự thêm đâu rồi dm lag qua
	public $timestamps = true;
}
