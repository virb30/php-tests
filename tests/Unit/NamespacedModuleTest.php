<?php

namespace Tests\Unit;

use App\Module;
use Tests\TestCase;

class NamespacedModuleTest extends TestCase
{
  public function testShouldReturnUppercasedText()
  {
    $this->markTestSkipped();
    $sut = new Module();

    $text = $sut->execute('test');

    $this->assertEquals("inside Module: TEXT", $text);
  }
}