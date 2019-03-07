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
        // Let's truncate our existing records to start from scratch.
        Video::truncate();

        // Seed data
        $seedDatas = array(
            array(
                'Video1', 120, 1100,
            ),
            array(
                'Video2', 80, 2000,
            ),
            array(
                'Video3', 250, 900,
            ),
            array(
                'Video4', 90, 600,
            ),
            array(
                'Video5', 75, 700,
            ),
            array(
                'Video6', 300, 3000,
            ),
            array(
                'Video7', 200, 2200,
            ),
        );
        // And now, let's create a few videos in our database:
        foreach ($seedDatas as $seedData ) {
            Video::create([
                'id' => $seedData[0],
                'video_size' => $seedData[1],
                'viewers_count' => $seedData[2],
            ]);
        }
    }
}
