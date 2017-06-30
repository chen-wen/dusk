<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

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
            $browser->visit('https://www.jd.com/')
                    ->type('#key', 'iPhone')
                    ->press('#search button')
                    ->waitForText('iPhone')
                    ->assertSee('京东Apple产品专营店');
            $browser->visit(new Pages\BaiduPage)
                    ->testSearch();
        });
    }
}
