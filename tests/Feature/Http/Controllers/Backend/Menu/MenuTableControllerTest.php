<?php

namespace Tests\Feature\Http\Controllers\Backend\Menu;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Backend\Menu\MenuTableController
 */
class MenuTableControllerTest extends TestCase
{
    /**
     * @test
     */
    public function invoke_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->post(route('admin.menus.get'), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function __invoke_validates_with_a_form_request()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Backend\Menu\MenuTableController::class,
            '__invoke',
            \App\Http\Requests\Backend\Menu\ManageMenuRequest::class
        );
    }

    // test cases...
}
