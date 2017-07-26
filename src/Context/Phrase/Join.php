<?php
namespace Hirak\QueryBuilder\Context\Phrase;

use Hirak\QueryBuilder\Relation;
use Hirak\QueryBuilder\Context;

trait Join
{
    public function leftJoin(string $ref, array $on = [], ?Relation $rel = null): Context\AfterFrom
    {
        return new Context\AfterFrom;
    }

    public function innerJoin(string $ref, array $on = [], ?Relation $rel = null): Context\AfterFrom
    {
        return new Context\AfterFrom;
    }

    public function crossJoin(string $ref, array $on = [], ?Relation $rel = null): Context\AfterFrom
    {
        return new Context\AfterFrom;
    }
}
