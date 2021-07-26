<?php

namespace Drupal\nzp_layouts\Plugin\Layout;

use Drupal\Core\Layout\LayoutDefault;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\PluginFormInterface;

/**
 * Credit goes to npinos at https://github.com/npinos/drupal8-layouts.
 */
class nzpOneColLayouts extends nzpWrapperBase {

  /**
   * {@inheritdoc}
   */
  protected function getContainerClasses() {
    return [
      'container' => 'container',
      'container-fuid' => 'full-width',
    ];
  }

  /**
   *
   */
  protected function getRegionClasses() {
    return [
      'col-md-12' => 'col-md-12',
    ];
  }

  /**
   *
   */
  protected function getHtmlElements() {
    return [
      'div' => 'Div',
      'section' => 'Section',
      'aside' => 'Aside',
    ];
  }


}
