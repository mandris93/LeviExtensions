<?php

$hook_array['after_relationship_add'][] = [
	10,
	'Set radio search fields after relationship add',
	'custom/include/customhooks/SetRadioSearch.php',
	'SetRadioSearch',
	'after_relationship_add',
];

$hook_array['after_relationship_delete'][] = [
    20,
    'Set radio search fields after relationship delete',
    'custom/include/customhooks/SetRadioSearch.php',
    'SetRadioSearch',
    'after_relationship_delete',
];