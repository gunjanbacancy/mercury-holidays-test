<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HotelReviewAddSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $datas=[
            ['hotel_id' => '1','title' => 'Lorem ipsum','description' => 'Lorem ipsum dolor sit amet.','author' => 'Gunjan','status' => '1'],
            ['hotel_id' => '1','title' => 'Lorem ipsum','description' => 'Lorem ipsum dolor sit amet.','author' => 'Gunjan','status' => '1'],
            ['hotel_id' => '1','title' => 'Lorem ipsum','description' => 'Lorem ipsum dolor sit amet.','author' => 'Gunjan','status' => '1'],
            ['hotel_id' => '2','title' => 'Lorem ipsum','description' => 'Lorem ipsum dolor sit amet.','author' => 'Gunjan','status' => '1'],
            ['hotel_id' => '2','title' => 'Lorem ipsum','description' => 'Lorem ipsum dolor sit amet.','author' => 'Gunjan','status' => '1'],
            ['hotel_id' => '3','title' => 'Lorem ipsum','description' => 'Lorem ipsum dolor sit amet.','author' => 'Gunjan','status' => '1'],
            ['hotel_id' => '4','title' => 'Lorem ipsum','description' => 'Lorem ipsum dolor sit amet.','author' => 'Gunjan','status' => '1'],
            ['hotel_id' => '4','title' => 'Lorem ipsum','description' => 'Lorem ipsum dolor sit amet.','author' => 'Gunjan','status' => '1'],
            ['hotel_id' => '4','title' => 'Lorem ipsum','description' => 'Lorem ipsum dolor sit amet.','author' => 'Gunjan','status' => '1'],
            ['hotel_id' => '4','title' => 'Lorem ipsum','description' => 'Lorem ipsum dolor sit amet.','author' => 'Gunjan','status' => '1'],
            ['hotel_id' => '6','title' => 'Lorem ipsum','description' => 'Lorem ipsum dolor sit amet.','author' => 'Gunjan','status' => '1'],
            ['hotel_id' => '6','title' => 'Lorem ipsum','description' => 'Lorem ipsum dolor sit amet.','author' => 'Gunjan','status' => '1'],
            ['hotel_id' => '6','title' => 'Lorem ipsum','description' => 'Lorem ipsum dolor sit amet.','author' => 'Gunjan','status' => '1'],
            ['hotel_id' => '6','title' => 'Lorem ipsum','description' => 'Lorem ipsum dolor sit amet.','author' => 'Gunjan','status' => '1'],
            ['hotel_id' => '6','title' => 'Lorem ipsum','description' => 'Lorem ipsum dolor sit amet.','author' => 'Gunjan','status' => '1'],
            ['hotel_id' => '6','title' => 'Lorem ipsum','description' => 'Lorem ipsum dolor sit amet.','author' => 'Gunjan','status' => '1']
        ];

        foreach ($datas as $data) {
            DB::table('hotel_reviews')->insert([
                'hotel_id' => $data['hotel_id'],
                'title' => $data['title'],
                'description' => $data['description'],
                'author' => $data['author'],
                'status' => $data['status'],
                'created_at' => $now,
                'updated_at' => $now
            ]);
        }
    }
}
