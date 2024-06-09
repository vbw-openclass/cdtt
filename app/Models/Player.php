<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Player extends Model
{
    use HasFactory;

	protected $fillable = [
		'club_id',
		'name',
	];

	public function club(): BelongsTo
	{
		return $this->belongsTo(Club::class);
	}

	public function team(): BelongsTo
	{
		return $this->belongsTo(Team::class);
	}

	public function detailMatches(): HasMany
	{
		return $this->hasMany(DetailMatch::class);
	}

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
}
