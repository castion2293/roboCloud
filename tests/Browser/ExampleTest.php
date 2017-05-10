<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Robotech');
        });

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->type('email', User::first()->email)
                ->type('password', 'secret')
                ->press('登入')
                ->assertPathIs('/home');
        });
    }
}
