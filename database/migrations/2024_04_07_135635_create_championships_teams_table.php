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
        Schema::create('championships_teams', function (Blueprint $table) {
            $table->foreignId(Championship::class)->on('championships')->onDelete('cascade');
            $table->foreignId(Team::class)->on('teams')->onDelete('cascade');
            $table->boolean('state')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('championships_teams');
    }
};
