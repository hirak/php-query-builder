<?php
namespace Hirak\QueryBuilder\Context\Phrase;

use Hirak\QueryBuilder\Context;

trait Union
{
    public function union(): Context\First
    {
        return new Context\First;
    }

    public function unionAll(): Context\First
    {
        return new Context\First;
    }
}
