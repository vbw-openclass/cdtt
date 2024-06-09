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
		'championship_id',
		'date',
		'day',
		'team_a_id',
		'team_b_id',
		'state',
	];

	public function championship(): BelongsTo
	{
		return $this->belongsTo(Championship::class);
	}

	public function homeTeam(): BelongsTo
	{
		return $this->belongsTo(Team::class, 'team_a_id');
	}

	public function awayTeam(): BelongsTo
	{
		return $this->belongsTo(Team::class, 'team_b_id');
	}

	public function detailMatches(): HasMany
	{
		return $this->hasMany(DetailMatch::class);
	}
}
