<?php

namespace spec\src\Domain\Entities\Results;

use src\Domain\Entities\Results\StageTime;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StageTimeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(StageTime::class);
    }
}
