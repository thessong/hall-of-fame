<?php

namespace App\Http\Controllers;

use App\Models\BoysBasketball;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecordController extends Controller
{
    public function boysBasketball()
    {
        $categories = [
            'points' => [
                'title' => 'Points',
                'season' => $this->getSeasonLeaders('points'),
                'career' => $this->getCareerLeaders('points'),
                'game' => $this->getGameLeaders('points'),
                'per_game_season' => $this->getSeasonLeaders('points_per_game', 10),
                'per_game_career' => $this->getCareerAverage('points', 'games_played'),
                'team_game' => $this->getTeamGameLeaders('points'),
                'team_season' => $this->getTeamSeasonLeaders('points'),
            ],
            'rebounds' => [
                'title' => 'Rebounds',
                'season' => $this->getSeasonLeaders('rebounds'),
                'career' => $this->getCareerLeaders('rebounds'),
                'game' => $this->getGameLeaders('rebounds'),
                'per_game_season' => $this->getSeasonLeaders('rebounds_per_game', 10),
                'per_game_career' => $this->getCareerAverage('rebounds', 'games_played'),
                'team_game' => $this->getTeamGameLeaders('rebounds'),
                'team_season' => $this->getTeamSeasonLeaders('rebounds'),
            ],
            'assists' => [
                'title' => 'Assists',
                'season' => $this->getSeasonLeaders('assists'),
                'career' => $this->getCareerLeaders('assists'),
                'game' => $this->getGameLeaders('assists'),
                'per_game_season' => $this->getSeasonLeaders('assists_per_game', 10),
                'per_game_career' => $this->getCareerAverage('assists', 'games_played'),
                'team_game' => $this->getTeamGameLeaders('assists'),
                'team_season' => $this->getTeamSeasonLeaders('assists'),
            ],
            'steals' => [
                'title' => 'Steals',
                'season' => $this->getSeasonLeaders('steals'),
                'career' => $this->getCareerLeaders('steals'),
                'game' => $this->getGameLeaders('steals'),
                'per_game_season' => $this->getSeasonLeaders('steals_per_game', 10),
                'per_game_career' => $this->getCareerAverage('steals', 'games_played'),
                'team_game' => $this->getTeamGameLeaders('steals'),
                'team_season' => $this->getTeamSeasonLeaders('steals'),
            ],
            'blocks' => [
                'title' => 'Blocks',
                'season' => $this->getSeasonLeaders('blocks'),
                'career' => $this->getCareerLeaders('blocks'),
                'game' => $this->getGameLeaders('blocks'),
                'per_game_season' => $this->getSeasonLeaders('blocks_per_game', 10),
                'per_game_career' => $this->getCareerAverage('blocks', 'games_played'),
                'team_game' => $this->getTeamGameLeaders('blocks'),
                'team_season' => $this->getTeamSeasonLeaders('blocks'),
            ],
            'field_goals_made' => [
                'title' => 'Field Goals Made',
                'season' => $this->getSeasonLeaders('field_goals_made'),
                'career' => $this->getCareerLeaders('field_goals_made'),
                'game' => $this->getGameLeaders('field_goals_made'),
            ],
            'field_goal_percentage' => [
                'title' => 'Field Goal Percentage',
                'season' => $this->getSeasonPercentageLeaders('field_goals_made', 'field_goals_attempted'),
                'career' => $this->getCareerPercentageLeaders('field_goals_made', 'field_goals_attempted'),
            ],
            'three_point_made' => [
                'title' => '3-Point Field Goals Made',
                'season' => $this->getSeasonLeaders('three_point_made'),
                'career' => $this->getCareerLeaders('three_point_made'),
                'game' => $this->getGameLeaders('three_point_made'),
            ],
            'three_point_percentage' => [
                'title' => '3-Point Field Goal Percentage',
                'season' => $this->getSeasonPercentageLeaders('three_point_made', 'three_point_attempted'),
                'career' => $this->getCareerPercentageLeaders('three_point_made', 'three_point_attempted'),
            ],
            'free_throws_made' => [
                'title' => 'Free Throws Made',
                'season' => $this->getSeasonLeaders('free_throws_made'),
                'career' => $this->getCareerLeaders('free_throws_made'),
                'game' => $this->getGameLeaders('free_throws_made'),
            ],
            'free_throw_percentage' => [
                'title' => 'Free Throw Percentage',
                'season' => $this->getSeasonPercentageLeaders('free_throws_made', 'free_throws_attempted'),
                'career' => $this->getCareerPercentageLeaders('free_throws_made', 'free_throws_attempted'),
            ],
            'games_played' => [
                'title' => 'Games Played',
                'season' => $this->getSeasonLeaders('games_played'),
                'career' => $this->getCareerLeaders('games_played'),
            ],
            'wins' => [
                'title' => 'Wins',
                'season' => $this->getSeasonLeaders('wins'),
                'career' => $this->getCareerLeaders('wins'),
            ],
        ];

        return view('records.basketball-boys', compact('categories'));
    }

    private function getSeasonLeaders($column, $minGames = null)
    {
        $query = BoysBasketball::select(
            'first_name',
            'last_name',
            'season',
            'grade',
            DB::raw("{$column} as total")
        )
        ->whereNotNull($column)
        ->where($column, '>', 0);

        if ($minGames) {
            $query->where('games_played', '>=', $minGames);
        }

        // Determine if this is a per-game stat or counting stat
        $isPerGameStat = str_contains($column, '_per_game');

        return $query->orderBy('total', 'desc')
            ->limit(10)
            ->get()
            ->map(function ($record, $index) use ($isPerGameStat) {
                $record->rank = $index + 1;
                $record->name = trim($record->first_name . ' ' . $record->last_name);
                $record->total = $isPerGameStat 
                    ? number_format($record->total, 1) 
                    : number_format($record->total, 0);
                return $record;
            });
    }

    private function getCareerLeaders($column)
    {
        return BoysBasketball::select(
            'first_name',
            'last_name',
            DB::raw('MIN(season) as first_season'),
            DB::raw('MAX(season) as last_season'),
            DB::raw('COUNT(DISTINCT season) as season_count'),
            DB::raw("SUM({$column}) as total")
        )
        ->whereNotNull($column)
        ->groupBy('first_name', 'last_name')
        ->orderBy('total', 'desc')
        ->limit(10)
        ->get()
        ->map(function ($record, $index) {
            $record->rank = $index + 1;
            $record->name = trim($record->first_name . ' ' . $record->last_name);
            $record->season = $record->first_season === $record->last_season 
                ? $record->first_season 
                : $record->first_season . ' - ' . $record->last_season;
            $record->total = number_format($record->total, 0);
            $record->years = $record->season_count;
            return $record;
        });
    }

    private function getCareerAverage($sumColumn, $divColumn)
    {
        return BoysBasketball::select(
            'first_name',
            'last_name',
            DB::raw('MIN(season) as first_season'),
            DB::raw('MAX(season) as last_season'),
            DB::raw('COUNT(DISTINCT season) as season_count'),
            DB::raw("ROUND(SUM({$sumColumn}) * 1.0 / SUM({$divColumn}), 2) as total"),
            DB::raw("SUM({$divColumn}) as games")
        )
        ->whereNotNull($sumColumn)
        ->whereNotNull($divColumn)
        ->where($divColumn, '>', 0)
        ->groupBy('first_name', 'last_name')
        ->having('games', '>=', 10)
        ->orderBy('total', 'desc')
        ->limit(10)
        ->get()
        ->map(function ($record, $index) {
            $record->rank = $index + 1;
            $record->name = trim($record->first_name . ' ' . $record->last_name);
            $record->season = $record->first_season === $record->last_season 
                ? $record->first_season 
                : $record->first_season . ' - ' . $record->last_season;
            $record->total = number_format($record->total, 1);
            $record->years = $record->season_count;
            return $record;
        });
    }

    private function getSeasonPercentageLeaders($madeColumn, $attemptedColumn, $minAttempts = 25)
    {
        return BoysBasketball::select(
            'first_name',
            'last_name',
            'season',
            'grade',
            DB::raw("{$madeColumn} as made"),
            DB::raw("{$attemptedColumn} as attempted"),
            DB::raw("ROUND(({$madeColumn} * 100.0) / {$attemptedColumn}, 1) as total")
        )
        ->whereNotNull($madeColumn)
        ->whereNotNull($attemptedColumn)
        ->where($attemptedColumn, '>=', $minAttempts)
        ->orderBy('total', 'desc')
        ->limit(10)
        ->get()
        ->map(function ($record, $index) {
            $record->rank = $index + 1;
            $record->name = trim($record->first_name . ' ' . $record->last_name);
            $record->total = number_format($record->total, 1) . '%';
            return $record;
        });
    }

    private function getCareerPercentageLeaders($madeColumn, $attemptedColumn, $minAttempts = 50)
    {
        return BoysBasketball::select(
            'first_name',
            'last_name',
            DB::raw('MIN(season) as first_season'),
            DB::raw('MAX(season) as last_season'),
            DB::raw('COUNT(DISTINCT season) as season_count'),
            DB::raw("SUM({$madeColumn}) as made"),
            DB::raw("SUM({$attemptedColumn}) as attempted"),
            DB::raw("ROUND((SUM({$madeColumn}) * 100.0) / SUM({$attemptedColumn}), 1) as total")
        )
        ->whereNotNull($madeColumn)
        ->whereNotNull($attemptedColumn)
        ->groupBy('first_name', 'last_name')
        ->having('attempted', '>=', $minAttempts)
        ->orderBy('total', 'desc')
        ->limit(10)
        ->get()
        ->map(function ($record, $index) {
            $record->rank = $index + 1;
            $record->name = trim($record->first_name . ' ' . $record->last_name);
            $record->season = $record->first_season === $record->last_season 
                ? $record->first_season 
                : $record->first_season . ' - ' . $record->last_season;
            $record->total = number_format($record->total, 1) . '%';
            $record->years = $record->season_count;
            return $record;
        });
    }

    // Placeholder for game leaders - requires game-by-game data
    private function getGameLeaders($column)
    {
        // This would require a separate table with game-by-game statistics
        // For now, return an empty collection
        return collect([]);
    }

    // Placeholder for team game leaders - requires game-by-game team data
    private function getTeamGameLeaders($column)
    {
        // This would require game-by-game team statistics
        // For now, return an empty collection
        return collect([]);
    }

    // Team season leaders
    private function getTeamSeasonLeaders($column)
    {
        return BoysBasketball::select(
            'season',
            DB::raw("SUM({$column}) as total"),
            DB::raw("COUNT(DISTINCT CONCAT(first_name, ' ', last_name)) as player_count"),
            DB::raw("MAX(wins) as wins"),
            DB::raw("MAX(games_played) as games")
        )
        ->whereNotNull($column)
        ->groupBy('season')
        ->orderBy('total', 'desc')
        ->limit(5)
        ->get()
        ->map(function ($record, $index) {
            $record->rank = $index + 1;
            $record->total = number_format($record->total, 0);
            $record->record = ($record->wins ?? 0) . '-' . (($record->games ?? 0) - ($record->wins ?? 0));
            return $record;
        });
    }
}
