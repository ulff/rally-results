<?php

namespace spec\src\Domain\Entities\Rallies;

use src\Domain\Entities\Rallies\Rally;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RallySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Rally::class);
    }
}
