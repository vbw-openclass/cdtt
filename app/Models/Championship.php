<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Championship extends Model
{
    use HasFactory;

	protected $fillable = [
		'season',
		'championship_category_id',
		'state',
		'name',
	];

	public function getNameAttribute(): string
	{
		return $this->category->name . " " . $this->season;
	}

	public function category(): BelongsTo
	{
		return $this->belongsTo(ChampionshipCategory::class, 'championship_category_id');
	}

	public function teams(): BelongsToMany
	{
		return $this->belongsToMany(Team::class, 'championships_teams');
	}

	public function encounters(): HasMany
	{
		return $this->hasMany(Encounter::class);
	}
}
