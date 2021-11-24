<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HotelById extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_hotel_by_id()
    {
    
        $response = $this->get('/api/hotel_by_id/1')
            ->assertStatus(200)
            ->assertJsonStructure(
                [
                    'success',
                    'message',
                    'data' => [
                        'name',
                        'star',
                        'review'
                    ],
                ]
            );
    }
}
