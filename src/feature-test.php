<?php

use Behat\Behat\Context\Context;

class TrackingBusinessContext implements Context
{
    /**
     * @var \integration\i1
     */
    private $i;

    public function myTest() {
        new integration\i1();
    }
}
