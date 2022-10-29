<?php

class SeleniumFirefoxTest extends \PHPUnit\Extensions\Selenium2TestCase
{
    protected function setUp(): void
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('https://google.com/');
    }

    public function testTitle()
    {
        $this->url('https://www.google.com/');
        $this->assertStringContainsString('Google', $this->title());
    }

}
