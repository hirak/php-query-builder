<?php
namespace Hirak\QueryBuilder\Context\Phrase;

use Hirak\QueryBuilder\Relation;
use Hirak\QueryBuilder\Context;

trait From
{
    public function from(string $ref, ?Relation $rel = null): Context\AfterFrom
    {
        return new Context\AfterFrom;
    }
}
