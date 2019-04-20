<?php

namespace spec\src\Domain\Entities\Rallies;

use src\Domain\Entities\Rallies\Stage;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StageSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Stage::class);
    }
}
