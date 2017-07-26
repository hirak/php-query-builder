<?php
namespace Hirak\QueryBuilder\Context;

class AfterGroupBy
{
    use Phrase\Having;
    use Phrase\Project;
    use Phrase\OrderBy;
    use Phrase\Limit;
    use Phrase\Union;
}
