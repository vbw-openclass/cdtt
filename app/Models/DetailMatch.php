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
		'order',
		'match_type',
		'player_a_id',
		'player_b_id',
		'set_one',
		'set_two',
		'set_three',
		'set_four',
		'set_five',
	];

	public function encounter(): BelongsTo
	{
		return $this->belongsTo(Encounter::class);
	}

	public function homePlayer(): BelongsTo
	{
		return $this->belongsTo(Player::class, 'player_a_id');
	}

	public function awayPlayer(): BelongsTo
	{
		return $this->belongsTo(Player::class, 'player_a_id');
	}
}
