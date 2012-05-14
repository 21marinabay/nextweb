<?php

function smu_onecol_nogrid_panels_layouts() {
  $items['onecol_nogrid'] = array(
    'title' => t('1 Column (No grid)'),
    'category' => t('SMU: 12 Column Grid'),
    'icon' => 'onecol_nogrid.png',
    'theme' => 'onecol_nogrid',
    'admin css' => '../panels_admin_12.css',
    'regions' => array(
      'top' => t('Top'),
      'first' => t('First'),
      'bottom' => t('Bottom')
    ),
  );

  return $items;
}

