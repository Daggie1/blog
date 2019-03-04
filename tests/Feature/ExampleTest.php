<?php

namespace Tests\Feature;

use Faker\Factory;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_can_create_post()
    {


        $response = $this->post('/insert',[
            'title'=>$title='just',
            'description'=>$description='new desc',



        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('posts',[
            'title'=>$title
        ,'description'=>$description

        ]);
    }
}
