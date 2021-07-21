<?php

namespace Drupal\mpp_layouts\Plugin\Layout;

/**
 * Configurable twocol layout plugin class.
 *
 * @internal
 *   Plugin classes are internal.
 */
class mppTwoColLayouts extends mppWrapperBase {

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
      'col' => 'col',
      'col-md-1' => 'col-md-1',
      'col-md-2' => 'col-md-2',
      'col-md-3' => 'col-md-3',
      'col-md-4' => 'col-md-4',
      'col-md-5' => 'col-md-5',
      'col-md-6' => 'col-md-6',
      'col-md-7' => 'col-md-7',
      'col-md-8' => 'col-md-8',
      'col-md-9' => 'col-md-9',
      'col-md-10' => 'col-md-10',
      'col-md-11' => 'col-md-11',
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
