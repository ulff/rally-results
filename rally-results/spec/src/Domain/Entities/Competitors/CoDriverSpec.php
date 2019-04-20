<?php

namespace spec\src\Domain\Entities\Competitors;

use src\Domain\Entities\Competitors\CoDriver;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CoDriverSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CoDriver::class);
    }
}
