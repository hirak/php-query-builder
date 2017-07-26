<?php
namespace Hirak\QueryBuilder\Context\Phrase;

use Hirak\QueryBuilder\Context;

trait Limit
{
    public function limit(int $limit, ?int $offset = null): Context\AfterLimit
    {
        return new Context\AfterLimit;
    }
}
