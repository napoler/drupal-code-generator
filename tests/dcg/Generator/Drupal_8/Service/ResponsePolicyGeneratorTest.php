<?php

namespace DrupalCodeGenerator\Tests\Generator\Drupal_8\Service;

use DrupalCodeGenerator\Tests\Generator\BaseGeneratorTest;

/**
 * Test for service:response-policy command.
 */
class ResponsePolicyGeneratorTest extends BaseGeneratorTest {

  protected $class = 'Service\ResponsePolicy';

  protected $interaction = [
    'Module name [%default_name%]:' => 'Foo',
    'Module machine name [foo]:' => 'foo',
    'Class [Example]:' => 'Example',
  ];

  protected $fixtures = [
    'foo.services.yml' => __DIR__ . '/_response_policy.services.yml',
    'src/PageCache/Example.php' => __DIR__ . '/_response_policy.php',
  ];

}
