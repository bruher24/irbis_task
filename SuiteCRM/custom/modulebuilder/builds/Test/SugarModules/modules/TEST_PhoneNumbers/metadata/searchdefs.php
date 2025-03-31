<?php
$module_name = 'TEST_PhoneNumbers';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'phone_number' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PHONE_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_number',
      ),
    ),
    'advanced_search' => 
    array (
      'phone_number' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PHONE_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_number',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
