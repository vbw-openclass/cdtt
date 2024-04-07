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
            $table->foreignId(Championship::class)->on("championships")->onDelete('cascade');
            $table->timestamp('date')->nullable()->default(now());
            $table->smallInteger('day')->nullable()->default(12);
            $table->foreignId('team_a')->on("teams")->onDelete('cascade');
            $table->foreignId('team_b')->on("teams")->onDelete('cascade');
            $table->string('state', 100)->nullable()->default('text');
            $table->timestamps();
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
