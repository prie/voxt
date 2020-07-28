<?php
namespace Drupal\front_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides front view block
 */
class FrontBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('Front View Block'),
    ];
  }
}