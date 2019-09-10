<?php

namespace EBarriosBloonde\CitiesStatesAndNationalities;

use Illuminate\Database\Eloquent\Model;

class State extends Model {

	protected $table = 'states';
	public $timestamps = true;
    protected $fillable = [
        'id',
    ];
}