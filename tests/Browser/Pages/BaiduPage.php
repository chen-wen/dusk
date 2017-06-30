<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;

class BaiduPage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return 'https://www.baidu.com/';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        //
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@input' => '#kw',
            '@search' => '#su',
        ];
    }

    public function testSearch(Browser $browser)
    {
        $browser->type('@input', 'laravel dusk')
                ->press('@search')
                ->waitFor('#container')
                ->assertSee('优雅');
    }
}
