<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class WelcomeTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCanSeeTheContactUsLink()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Contact Us');
        });
    }

    public function testUserClicksContactLinkAndIsTakenToContactPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Contact Us')
                    ->assertPathIs('about/contact')
                    ->assertSee('<h1>Contact Us</h1>');
        });
    }
}
