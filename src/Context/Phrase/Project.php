<?php
namespace Hirak\QueryBuilder\Context\Phrase;

use Hirak\QueryBuilder\Relation;
use Hirak\QueryBuilder\Context;

trait Project
{
    public function project(array $attributes): Context\AfterProject
    {
        return new Context\AfterProject;
    }
}
