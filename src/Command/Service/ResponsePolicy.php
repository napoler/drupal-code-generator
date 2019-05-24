<?php

namespace DrupalCodeGenerator\Command\Service;

use DrupalCodeGenerator\Command\ModuleGenerator;

/**
 * Implements service:response-policy command.
 */
class ResponsePolicy extends ModuleGenerator {

  protected $name = 'service:response-policy';
  protected $description = 'Generates a response policy service';
  protected $alias = 'response-policy';

  /**
   * {@inheritdoc}
   */
  protected function generate() :void {
    $vars = &$this->collectDefault();
    $vars['class'] = $this->ask('Class', 'Example');
    $this->addFile('src/PageCache/{class}.php', 'service/response-policy');
    $this->addServicesFile()
      ->template('service/response-policy.services');
  }

}