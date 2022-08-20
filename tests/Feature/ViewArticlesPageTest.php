<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewArticlesPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**
     * @test
     */
    public function a_guest_can_view_the_articles_page()
    {
        $response = $this->get('/articles');

        $response->assertOk();

        $response->assertViewIs("articles.index");
    }
}
