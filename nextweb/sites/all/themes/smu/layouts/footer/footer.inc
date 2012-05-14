<?php

function smu_footer_panels_layouts() {
  $items['footer'] = array(
    'title' => t('Footer'),
    'category' => t('SMU: 12 Column Grid'),
    'icon' => 'footer.png',
    'theme' => 'footer',
    'admin css' => '../panels_admin_12.css',
    'regions' => array(
      'top' => t('Top'),
      'first' => t('First'),
      'second' => t('Second'),
      'third' => t('Third'),
      'fourth' => t('Fourth'),
      'fifth' => t('Fifth'),
      'sixth' => t('Sixth'),
      'bottom' => t('Bottom')
    ),
  );

  return $items;
}
