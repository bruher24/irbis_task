<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class TEST_PhoneNumbersLogicHook
{
    public function sanitizePhoneNumber($bean, $event, $arguments)
    {
        if (!empty($bean->phone_number)) {
            $original = $bean->phone_number;
            $cleaned = preg_replace('/[^0-9+*]/', '', $original);

            if ($original !== $cleaned) {
                $bean->phone_number = $cleaned;
                $GLOBALS['log']->debug("PhoneNumbers: Очищен номер: $original === $cleaned");
            }
        }
    }
}