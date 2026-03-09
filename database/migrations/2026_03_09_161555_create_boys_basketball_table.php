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
        Schema::create('boys_basketball', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('season'); // e.g., "2000-01"
            $table->integer('grade')->nullable();
            $table->integer('wins')->nullable();
            $table->integer('games_played')->nullable();
            $table->integer('points')->nullable();
            $table->decimal('points_per_game', 5, 2)->nullable();
            $table->integer('rebounds')->nullable();
            $table->decimal('rebounds_per_game', 5, 2)->nullable();
            $table->integer('assists')->nullable();
            $table->decimal('assists_per_game', 5, 2)->nullable();
            $table->integer('steals')->nullable();
            $table->decimal('steals_per_game', 5, 2)->nullable();
            $table->integer('blocks')->nullable();
            $table->decimal('blocks_per_game', 5, 2)->nullable();
            $table->integer('field_goals_made')->nullable();
            $table->integer('field_goals_attempted')->nullable();
            $table->string('field_goal_percentage')->nullable();
            $table->integer('three_point_made')->nullable();
            $table->integer('three_point_attempted')->nullable();
            $table->string('three_point_percentage')->nullable();
            $table->integer('free_throws_made')->nullable();
            $table->integer('free_throws_attempted')->nullable();
            $table->string('free_throw_percentage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boys_basketball');
    }
};
