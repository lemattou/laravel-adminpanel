<?php

namespace Tests\Feature\Http\Controllers\Frontend\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Frontend\User\AccountController
 */
class AccountControllerTest extends TestCase
{
    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->get(route('frontend.user.account'));

        $response->assertOk();

        // TODO: perform additional assertions
    }

    // test cases...
}
