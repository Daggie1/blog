<?php

namespace Tests\Feature\post;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function can_create_a_post()
    {
     $response=$this->get('/add_post');
        $response->assertStatus(201);
    }
}
