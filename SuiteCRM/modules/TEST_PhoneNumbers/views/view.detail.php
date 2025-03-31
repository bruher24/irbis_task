<?php

require_once('include/MVC/View/views/view.detail.php');

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class TEST_PhoneNumbersViewDetail extends ViewDetail
{
    public function preDisplay()
    {
        $phone = $this->bean->phone_number ?? '';
        $color = (strlen($phone) === 10) ? '#28a745' : '#dc3545';

        $this->ss->assign('CUSTOM_PHONE_FIELD',
            "<span style='color: {$color}; font-weight: bold;'>{$phone}</span>"
        );

        parent::preDisplay();
    }
}