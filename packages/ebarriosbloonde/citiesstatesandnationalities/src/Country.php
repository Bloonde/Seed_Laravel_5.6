<?php

namespace EBarriosBloonde\CitiesStatesAndNationalities;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

	protected $table = 'countries';
	public $timestamps = true;
    protected $fillable = [
        'id',
    ];
}