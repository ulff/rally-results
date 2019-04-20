<?php

namespace spec\src\Domain\Entities\Results;

use src\Domain\Entities\Results\Penalty;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PenaltySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Penalty::class);
    }
}
