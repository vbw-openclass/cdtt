<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;

	protected $fillable = [
		'club_id',
		'number',
		'state',
		'name',
	];

	public function getNameAttribute(): string
	{
		return $this->club->name . $this->number;
	}

	public function club(): BelongsTo
	{
		return $this->belongsTo(Club::class);
	}

	public function players(): HasMany
	{
		return $this->hasMany(Player::class);
	}

	public function championships(): BelongsToMany
	{
		return $this->belongsToMany(Championship::class, 'championships_teams');
	}

	public function homeEncounters(): HasMany
	{
		return $this->hasMany(Encounter::class, 'home_team_id');
	}

	public function awayEncounters(): HasMany
	{
		return $this->hasMany(Encounter::class, 'away_team_id');
	}
}
