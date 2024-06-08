<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class ChampionshipCategory extends Model
{
    use HasFactory;

	protected $fillable = [
		'name',
		'players',
	];

	public function championships(): HasMany
	{
		return $this->hasMany(Championship::class);
	}
}
