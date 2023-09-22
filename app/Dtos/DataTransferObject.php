<?php

namespace App\Dtos;

use ReflectionClass;
use ReflectionProperty;

abstract class DataTransferObject
{
  public function __construct(array $parameters = [])
  {
    $class = new ReflectionClass(static::class);

    foreach ($class->getProperties(ReflectionProperty::IS_PUBLIC) as $reflectionProperty){
      $property = $reflectionProperty->getName();
      if (isset($parameters[$property])) {
        $value = $parameters[$property];
        $this->{$property} = $value;
      }
    }
  }

}
