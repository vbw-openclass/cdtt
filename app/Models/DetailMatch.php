<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailMatch extends Model
{
    use HasFactory;

	protected $fillable = [
		'encounter_id',
		'player_id',
		'goals',
	];

	public function encounter(): BelongsTo
	{
		return $this->belongsTo(Encounter::class);
	}

	public function player(): BelongsTo
	{
		return $this->belongsTo(Player::class);
	}
}
