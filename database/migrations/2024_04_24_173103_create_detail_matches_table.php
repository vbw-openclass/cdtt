<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_matches', function (Blueprint $table) {
            $table->id();
			$table->integer('order')->default(0);
			$table->enum('match_type', ['simple', 'double'])->default('simple');
			$table->unsignedBigInteger('player_a_id');
			$table->unsignedBigInteger('player_b_id');
			$table->json('set_one')->nullable();
			$table->json('set_two')->nullable();
			$table->json('set_three')->nullable();
			$table->json('set_four')->nullable();
			$table->json('set_five')->nullable();
            $table->timestamps();

			$table->foreign('player_a_id')->references('id')->on('players')->onDelete('cascade');
			$table->foreign('player_b_id')->references('id')->on('players')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_matches');
    }
};
