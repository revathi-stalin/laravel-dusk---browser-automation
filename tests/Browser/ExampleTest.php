<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testBasicExample(): void
    {
         $this->browse(function (Browser $browser) {
              $browser->visit('https://localhost/login')
                  ->type('email', 'contactus@gmail.com')
                  ->type('password', 'PBRE%$j9')
                  ->press('SIGN IN')
                  ->assertPathIs('/dashboard');

          });


         $this->browse(function (Browser $browser) {
            $browser->visit('https://targetbay.mybigcommerce.com/')
                ->waitFor('#reviewButton')
                ->press('#reviewButton')
                ->waitFor('#modalContainer')
                ->pause(2000)
                ->waitFor('.targetbay-reviews-overall-star-ratings')
                ->press('.targetbay-reviews-overall-star-ratings')
                ->pause(2000)
                ->waitFor('#tbsiteReviewsHeaderProduct')
                ->press('#tbsiteReviewsHeaderProduct')
                ->pause(2000)
                ->waitFor('#closeThemePopup')
                ->click('#closeThemePopup');
        });
    }
}
