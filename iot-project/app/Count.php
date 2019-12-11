<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    protected $table = "users";

    protected $fillable = [
    					"value_water",
    					"threshold_water",
    					"value_plants",
    					"threshold_plants",
    					"value_coffee",
    					"threshold_coffee",
    					"value_bike",
    					"threshold_bike",
    					];
}
