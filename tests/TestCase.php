<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

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
