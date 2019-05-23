<?php

namespace DrupalCodeGenerator\Tests\Generator\Drupal_8\Service;

use DrupalCodeGenerator\Tests\Generator\BaseGeneratorTest;

/**
 * Test for service:middleware command.
 */
class MiddlewareGeneratorTest extends BaseGeneratorTest {

  protected $class = 'Service\Middleware';

  protected $interaction = [
    'Module name [%default_name%]:' => 'Foo',
    'Module machine name [foo]:' => 'foo',
  ];

  protected $fixtures = [
    'foo.services.yml' => __DIR__ . '/_middleware.services.yml',
    'src/FooMiddleware.php' => __DIR__ . '/_middleware.php',
  ];

}
