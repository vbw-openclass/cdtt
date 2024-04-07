<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use app\Models\Club;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->foreignId(Club::class)->on('clubs')->onDelete('cascade');
            $table->bigInteger('licence')->nullable()->unique()->default(0);
            $table->string("name");
            $table->string("surname");
            $table->timestamp('birthday')->nullable()->default(now());
            $table->integer('ranking')->unsigned()->default(95);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
