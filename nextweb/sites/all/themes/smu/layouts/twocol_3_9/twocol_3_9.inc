<?php

function smu_twocol_3_9_panels_layouts() {
  $items['twocol_3_9'] = array(
    'title' => t('2 Column 3-9'),
    'category' => t('SMU: 12 Column Grid'),
    'icon' => 'twocol_3_9.png',
    'theme' => 'twocol_3_9',
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
