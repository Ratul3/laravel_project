<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T_rnotices extends Model
{
    //
	protected $table = "rnotices";
	public $timestamps = false;
	/*const CREATED_AT = "create_time";
	const UPDATED_AT = "update_time";*/
	protected $primaryKey = "id";

}
