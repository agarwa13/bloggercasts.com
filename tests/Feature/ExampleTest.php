<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // Check if Guest can visit the home page
        $response = $this->get('/');
        $response->assertStatus(200);

        // Check if Guest can visit the Series Controller Pages
        $response = $this->get('/series');
        $response->assertStatus(200);
        $response = $this->get('/series/create');
        $response->assertStatus(302);
        $response = $this->get('/series/mailerlite-mastery');
        $response->assertStatus(200);
        $response = $this->get('/series/mailerlite-mastery/edit');
        $response->assertStatus(302);

        // Check if Guest can visit the Lessons Controller Pages
        $response = $this->get('/lessons');
        $response->assertStatus(302);
        $response = $this->get('/lessons/create');
        $response->assertStatus(302);
        $response = $this->get('/lessons/pinterest-profile');
        $response->assertStatus(200);
        $response = $this->get('/lessons/pinterest-profile/edit');
        $response->assertStatus(302);

        // Check if Guest can visit the Affiliate Controller Pages
        $response = $this->get('/affiliates');
        $response->assertStatus(302);
        $response = $this->get('/affiliates/create');
        $response->assertStatus(302);
        $response = $this->get('/affiliates/site-ground/edit');
        $response->assertStatus(302);

        // Check if Admin can visit Pages
        $user = User::first();
        $this->be($user);

        // Check if ADMIN can visit the home page
        $response = $this->get('/');
        $response->assertStatus(200);

        // Check if ADMIN can visit the Series Controller Pages
        $response = $this->get('/series');
        $response->assertStatus(200);
        $response = $this->get('/series/create');
        $response->assertStatus(200);
        $response = $this->get('/series/mailerlite-mastery');
        $response->assertStatus(200);
        $response = $this->get('/series/mailerlite-mastery/edit');
        $response->assertStatus(200);

        // Check if ADMIN can visit the Lessons Controller Pages
        $response = $this->get('/lessons');
        $response->assertStatus(200);
        $response = $this->get('/lessons/create');
        $response->assertStatus(200);
        $response = $this->get('/lessons/pinterest-profile');
        $response->assertStatus(200);
        $response = $this->get('/lessons/pinterest-profile/edit');
        $response->assertStatus(200);

        // Check if ADMIN can visit the Affiliate Controller Pages
        $response = $this->get('/affiliates');
        $response->assertStatus(200);
        $response = $this->get('/affiliates/create');
        $response->assertStatus(200);
        $response = $this->get('/affiliates/site-ground/edit');
        $response->assertStatus(200);

    }
}
