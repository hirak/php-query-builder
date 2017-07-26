<?php
namespace Hirak\QueryBuilder\Context\Phrase;

use Hirak\QueryBuilder\Relation;
use Hirak\QueryBuilder\Context;
use Hirak\QueryBuilder\Condition;

trait Where
{
    public function where(string $lft, $op, $rgt): Condition
    {
        return (new Condition)->and($lft, $op, $rgt);
    }
}
