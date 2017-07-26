<?php
namespace Hirak\QueryBuilder\Context;

class AfterFrom
{
    use Phrase\Join;
    use Phrase\Where;
    use Phrase\GroupBy;
    use Phrase\Having;
    use Phrase\Project;
    use Phrase\OrderBy;
    use Phrase\Limit;
    use Phrase\Union;
}
