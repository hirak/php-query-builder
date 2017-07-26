<?php
namespace Hirak\QueryBuilder\Context;

use Hirak\QueryBuilder\Relation;

class First extends Relation
{
    use Phrase\From;
    use Phrase\Project;
}
