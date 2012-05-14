<?php

function smu_fivecol_nogrid_panels_layouts() {
  $items['fivecol_nogrid'] = array(
    'title' => t('5 Column (No grid)'),
    'category' => t('SMU: 12 Column Grid'),
    'icon' => 'fivecol_nogrid.png',
    'theme' => 'fivecol_nogrid',
    'admin css' => '../panels_admin_12.css',
    'regions' => array(
      'top' => t('Top'),
      'first' => t('First'),
      'second' => t('Second'),
      'third' => t('Third'),
      'fourth' => t('Fourth'),
      'fifth' => t('Fifth'),
      'bottom' => t('Bottom')
    ),
  );

  return $items;
}
