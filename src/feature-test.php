<?php

use Behat\Behat\Context\Context;

class TrackingBusinessContext implements Context
{
    public function myTest() {
        new integration\i1();
    }
}
