<?php
namespace Hirak\QueryBuilder\Context\Phrase;

use Hirak\QueryBuilder\Condition;

trait Having
{
    public function having(string $lft, $op, $rgt): Condition
    {
        return (new Condition)->and($lft, $op, $rgt);
    }
}
