<?php

function smu_threecol_4_4_4_panels_layouts() {
  $items['threecol_4_4_4'] = array(
    'title' => t('3 Column 4-4-4'),
    'category' => t('SMU: 12 Column Grid'),
    'icon' => 'threecol_4_4_4.png',
    'theme' => 'threecol_4_4_4',
    'admin css' => '../panels_admin_12.css',
    'regions' => array(
      'top' => t('Top'),
      'first' => t('First'),
      'second' => t('Second'),
      'third' => t('Third'),
      'bottom' => t('Bottom')
    ),
  );

  return $items;
}
