<?php

namespace spec\src\Domain\Entities\Competitors;

use src\Domain\Entities\Competitors\Car;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CarSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Car::class);
    }
}
