<?php

use Illuminate\Database\Seeder;
Use App\UserVideo;

class UserVideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        UserVideo::truncate();

        // Seed data
        $seedDatas = array(
            array(
                'User1', 'Video1',
            ),
            array(
                'User1', 'Video2',
            ),
            array(
                'User1', 'Video3',
            ),
            array(
                'User2', 'Video4',
            ),
            array(
                'User2', 'Video5',
            ),
            array(
                'User2', 'Video6',
            ),
            array(
                'User3', 'Video7',
            ),
        );
        // And now, let's create a few videos in our database:
        foreach ($seedDatas as $seedData ) {
            UserVideo::create([
                'created_by' => $seedData[0],
                'video_id' => $seedData[1],
            ]);
        }
    }
}
