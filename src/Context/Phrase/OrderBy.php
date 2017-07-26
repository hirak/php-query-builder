<?php
namespace Hirak\QueryBuilder\Context\Phrase;

use Hirak\QueryBuilder\Context;

trait OrderBy
{
    public function orderBy(string ...$keys): Context\AfterOrderBy
    {
        return new Context\AfterOrderBy;
    }
}
