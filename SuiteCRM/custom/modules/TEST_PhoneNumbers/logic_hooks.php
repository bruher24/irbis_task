<?php
$hook_version = 1;
$hook_array = Array();
$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(
    1,
    'CleanPhoneNumber',
    'custom/modules/TEST_PhoneNumbers/TEST_PhoneNumbersLogicHook.php',
    'TEST_PhoneNumbersLogicHook',
    'sanitizePhoneNumber',
);