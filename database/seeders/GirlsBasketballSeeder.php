<?php

namespace Database\Seeders;

use App\Models\GirlsBasketball;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GirlsBasketballSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        DB::table('girls_basketball')->truncate();

        $csvFile = base_path('DHS Girls Basketball All-Time - Girls BBall.csv');
        
        if (!file_exists($csvFile)) {
            $this->command->error("CSV file not found at: {$csvFile}");
            return;
        }

        $file = fopen($csvFile, 'r');
        $header = fgetcsv($file); // Skip header row
        
        $records = [];
        $batchSize = 100;
        
        while (($row = fgetcsv($file)) !== false) {
            // Skip empty rows
            if (empty(array_filter($row))) {
                continue;
            }
            
            $records[] = [
                'first_name' => $row[0] ?? null,
                'last_name' => $row[1] ?? null,
                'season' => $row[2] ?? null,
                'grade' => !empty($row[3]) ? (int)$row[3] : null,
                'wins' => !empty($row[4]) ? (int)$row[4] : null,
                'games_played' => !empty($row[5]) ? (int)$row[5] : null,
                'points' => !empty($row[6]) ? (int)$row[6] : null,
                'points_per_game' => !empty($row[7]) ? (float)$row[7] : null,
                'rebounds' => !empty($row[8]) ? (int)$row[8] : null,
                'rebounds_per_game' => !empty($row[9]) ? (float)$row[9] : null,
                'assists' => !empty($row[10]) ? (int)$row[10] : null,
                'assists_per_game' => !empty($row[11]) ? (float)$row[11] : null,
                'steals' => !empty($row[12]) ? (int)$row[12] : null,
                'steals_per_game' => !empty($row[13]) ? (float)$row[13] : null,
                'blocks' => !empty($row[14]) ? (int)$row[14] : null,
                'blocks_per_game' => !empty($row[15]) ? (float)$row[15] : null,
                'field_goals_made' => !empty($row[16]) ? (int)$row[16] : null,
                'field_goals_attempted' => !empty($row[17]) ? (int)$row[17] : null,
                'field_goal_percentage' => $row[18] ?? null,
                'three_point_made' => !empty($row[19]) ? (int)$row[19] : null,
                'three_point_attempted' => !empty($row[20]) ? (int)$row[20] : null,
                'three_point_percentage' => $row[21] ?? null,
                'free_throws_made' => !empty($row[22]) ? (int)$row[22] : null,
                'free_throws_attempted' => !empty($row[23]) ? (int)$row[23] : null,
                'free_throw_percentage' => $row[24] ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            
            // Insert in batches for better performance
            if (count($records) >= $batchSize) {
                DB::table('girls_basketball')->insert($records);
                $records = [];
            }
        }
        
        // Insert remaining records
        if (!empty($records)) {
            DB::table('girls_basketball')->insert($records);
        }
        
        fclose($file);
        
        $this->command->info('Girls Basketball records imported successfully!');
    }
}

