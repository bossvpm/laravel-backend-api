<?php

use Illuminate\Database\Seeder;
Use App\Video;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate existing videos table.
        Video::truncate();

        // Seed data
        $seedDatas = array(
            array(
                'Video1', 'User1', 120, 1100,
            ),
            array(
                'Video2', 'User1', 80, 2000,
            ),
            array(
                'Video3', 'User1', 250, 900,
            ),
            array(
                'Video4', 'User2', 90, 600,
            ),
            array(
                'Video5', 'User2', 75, 700,
            ),
            array(
                'Video6', 'User2', 300, 3000,
            ),
            array(
                'Video7', 'User3', 200, 2200,
            ),
        );
        // Adding video seeds to videos table
        foreach ($seedDatas as $seedData ) {
            Video::create([
                'id' => $seedData[0],
                'user_id' => $seedData[1],
                'video_size' => $seedData[2],
                'viewers_count' => $seedData[3],
            ]);
        }
    }
}
