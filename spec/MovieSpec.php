<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MovieSpec extends ObjectBehavior
{
    function Let()
    {
    	$this->beConstructedWith('Stargate: The Ark of Truth');
        $this->shouldHaveType('Movie');
    }

    public function it_can_be_rated()
    {
    	$this->setRating(2);
    	$this->getRating()->shouldBe(2);
    }

    public function its_rating_should_not_exceed_five()
    {
    	$this->shouldThrow('InvalidArgumentException')->duringSetRating(8);
    }

    public function it_can_be_marked_as_watched()
    {
    	$this->watch();
    	$this->shouldBeWatched();
    }

    public function it_can_fetch_the_title_of_the_movie() 
    {
    	$this->getTitle()->shouldBe('Stargate: The Ark of Truth');
    }

}
