<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoysBasketball extends Model
{
    protected $table = 'boys_basketball';

    protected $fillable = [
        'first_name',
        'last_name',
        'season',
        'grade',
        'wins',
        'games_played',
        'points',
        'points_per_game',
        'rebounds',
        'rebounds_per_game',
        'assists',
        'assists_per_game',
        'steals',
        'steals_per_game',
        'blocks',
        'blocks_per_game',
        'field_goals_made',
        'field_goals_attempted',
        'field_goal_percentage',
        'three_point_made',
        'three_point_attempted',
        'three_point_percentage',
        'free_throws_made',
        'free_throws_attempted',
        'free_throw_percentage',
    ];

    protected $casts = [
        'grade' => 'integer',
        'wins' => 'integer',
        'games_played' => 'integer',
        'points' => 'integer',
        'points_per_game' => 'decimal:2',
        'rebounds' => 'integer',
        'rebounds_per_game' => 'decimal:2',
        'assists' => 'integer',
        'assists_per_game' => 'decimal:2',
        'steals' => 'integer',
        'steals_per_game' => 'decimal:2',
        'blocks' => 'integer',
        'blocks_per_game' => 'decimal:2',
        'field_goals_made' => 'integer',
        'field_goals_attempted' => 'integer',
        'three_point_made' => 'integer',
        'three_point_attempted' => 'integer',
        'free_throws_made' => 'integer',
        'free_throws_attempted' => 'integer',
    ];
}
