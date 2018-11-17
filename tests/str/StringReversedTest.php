<?php

namespace Tests;

use App\StringReversed;
use PHPUnit\Framework\TestCase;

class StringReversedTest extends TestCase
{

    public function testString(): void
    {
        $newStr = new StringReversed();

        $string = $newStr->strReversed("Hi! My, friends? I would came; to you.");

        $format = "Hi. My; friends? I would came, to you!";

        $this->assertStringMatchesFormat($format, $string, $message = 'not equally');
    }
}
