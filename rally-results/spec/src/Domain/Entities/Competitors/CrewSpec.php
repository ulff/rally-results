<?php

namespace spec\src\Domain\Entities\Competitors;

use src\Domain\Entities\Competitors\Crew;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CrewSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Crew::class);
    }
}
