<?php

namespace spec\src\Domain\Entities\Competitors;

use src\Domain\Entities\Competitors\Driver;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DriverSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Driver::class);
    }
}
