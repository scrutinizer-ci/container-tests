<?php

class SeleniumChromeTest extends \PHPUnit\Extensions\Selenium2TestCase
{
    protected function setUp(): void
    {
        $this->setBrowser('chrome');
        $this->setBrowserUrl('https://google.com/');
    }

    public function testTitle()
    {
        $this->url('https://www.google.com/');
        $this->assertStringContainsString('Google', $this->title());
    }

}
