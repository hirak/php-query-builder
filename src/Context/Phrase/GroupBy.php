<?php
namespace Hirak\QueryBuilder\Context\Phrase;

use Hirak\QueryBuilder\Context;

trait GroupBy
{
    public function groupBy(string ...$keys): Context\AfterGroupBy
    {
        return new Context\AfterGroupBy;
    }
}
