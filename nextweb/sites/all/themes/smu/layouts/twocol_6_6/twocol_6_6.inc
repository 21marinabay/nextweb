<?php

function smu_twocol_6_6_panels_layouts() {
  $items['twocol_6_6'] = array(
    'title' => t('2 Column 6-6'),
    'category' => t('SMU: 12 Column Grid'),
    'icon' => 'twocol_6_6.png',
    'theme' => 'twocol_6_6',
    'admin css' => '../panels_admin_12.css',
    'regions' => array(
      'top' => t('Top'),
      'first' => t('First'),
      'second' => t('Second'),
      'bottom' => t('Bottom')
    ),
  );

  return $items;
}
