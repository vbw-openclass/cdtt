<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Encounter extends Model
{
    use HasFactory;

	protected $fillable = [
		'home_team_id',
		'away_team_id',
		'date',
	];

	public function homeTeam(): BelongsTo
	{
		return $this->belongsTo(Team::class, 'home_team_id');
	}

	public function awayTeam(): BelongsTo
	{
		return $this->belongsTo(Team::class, 'away_team_id');
	}

	public function detailMatches(): HasMany
	{
		return $this->hasMany(DetailMatch::class);
	}
}
