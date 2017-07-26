<?php
namespace Hirak\QueryBuilder;

abstract class Relation
{
    private $sql = '';

    public function __toString()
    {
        return $this->sql;
    }
}
