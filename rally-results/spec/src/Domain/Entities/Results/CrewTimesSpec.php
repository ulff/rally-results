<?php

namespace spec\src\Domain\Entities\Results;

use src\Domain\Entities\Results\CrewTimes;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CrewTimesSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CrewTimes::class);
    }
}
