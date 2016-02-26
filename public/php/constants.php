<?php

define('SIDES_OF_DICE', 12);

$roll = mt_rand(1, SIDES_OF_DICE);

echo "You rolled {$roll}\n";