<?php
namespace Hirak\QueryBuilder;

class Condition
{
    private $parent;

    public function __construct($parent)
    {
        $this->parent = $parent;
    }

    public function __invoke(string $lft, string $op, $rgt): Condition
    {
        return $this->and($lft, $op, $rgt);
    }

    public function and(string $lft, string $op, $rgt): Condition
    {
        return $this;
    }

    public function or(string $lft, string $op, $rgt): Condition
    {
        return $this;
    }

    public function andExists(Relation $rel): Condition
    {
        return $this;
    }

    public function andNotExists(Relation $rel): Condition
    {
        return $this;
    }

    public function orExists(Relation $rel): Condition
    {
        return $this;
    }

    public function orNotExists(Relation $rel): Condition
    {
        return $this;
    }

    public function endOn(): Context\AfterFrom
    {
        return $this->parent;
    }

    public function endWhere(): Context\AfterWhere
    {
        return $this->parent;
    }

    public function endHaving(): Context\AfterHaving
    {
        return $this->parent;
    }
}
