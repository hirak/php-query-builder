<?php

require 'vendor/autoload.php';

use function Hirak\QueryBuilder\relation;

$rel = relation()
    ->from('users')
    ->leftJoin('addresses', ['users.id', '=', 'addresses.user_id'])
    ->where
        ('u.id', '>', 5)
        ->and('u.id', '>', 5)
        ->or('u.id', '<', 7)
    ->endWhere()
    ->groupBy('k1', 'k2')
    ->having
        ('COUNT(u.id)', '>', 5)
        ->and('u.id', '>', 5)
    ->endHaving()
    ->project(['k1', 'k2', 'k3', 'a' => 'hoge'])
    ->limit(5)
;

$rel = relation()
    ->from('users')
    ->project(['*'])
    ->orderBy('age')
    ->limit(5)
    ;

$rel = relation()
    ->from('users')
    ->leftJoin('addresses', ['users.id', '=', 'addresses.user_id'])
    ;
