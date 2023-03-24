<?php
namespace Rc\Belajar;

class Customer
{
  public function __construct(private string $name)
  {
    # code...
  }
  public function sayHello(string $name = "Guest"): string
  {
    return "Hello $name, my name is $this->name" . PHP_EOL;
  }
}