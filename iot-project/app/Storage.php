<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    protected $table = "storage";

    protected $fillable = [
    					"id",
    					"field",
						"daily_value",
						"date",
    					];
}
