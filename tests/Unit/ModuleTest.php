<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ModuleTest extends TestCase
{
  public static $functions;

  protected function setUp(): void
  {
    static::$functions = $this->createPartialMock(
      ModuleTest::class, ['toUppercase']
    );
  }

  public function testShouldReturnUppercasedText()
  {
    $sut = new Module();
  
    self::$functions->expects($this->once())
      ->method('toUppercase')
      ->willReturn('BATATA');

    $text = $sut->execute('test');

    $this->assertEquals("inside Module: BATATA", $text);
  }

  public function toUppercase() {}
}

function toUppercase()
{
  return ModuleTest::$functions->toUppercase();
}