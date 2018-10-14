<?php

if (!defined('sugarEntry') || !sugarEntry)
{
    die('Not A Valid Entry Point');
}

$hook_array['before_save'][] = [
    40,
    'Format birthdate',
    'custom/modules/Contacts/customhooks/FormatBirthdate.php',
    'FormatBirthdate',
    'before_save',
];