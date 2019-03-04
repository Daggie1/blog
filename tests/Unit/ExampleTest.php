<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
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
