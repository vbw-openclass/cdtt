<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use app\Models\Championship;
use app\Models\Team;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('encounters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('championship_id')->constrained()->cascadeOnDelete();
            $table->timestamp('date')->nullable()->default(now());
            $table->smallInteger('day')->nullable()->default(12);
			$table->unsignedBigInteger('team_a_id');
			$table->unsignedBigInteger('team_b_id');
            $table->string('state', 100)->nullable()->default('text');
            $table->timestamps();

			$table->foreign('team_a_id')->references('id')->on('teams')->cascadeOnDelete();
			$table->foreign('team_b_id')->references('id')->on('teams')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encounters');
    }
};
