<?php

namespace spec\src\Domain\Entities\Rallies;

use src\Domain\Entities\Rallies\CarClass;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CarClassSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CarClass::class);
    }
}
