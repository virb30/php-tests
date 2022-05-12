<?php

namespace App;

class Module
{
  public function execute($text)
  {
    return 'inside Module: '.toUppercase($text);
  }
}