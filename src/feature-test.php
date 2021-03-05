<?php

use Behat\Behat\Context\Context;

class TrackingBusinessContext implements Context
{
    /**
     * @var \integration\i1
     */
    private $i;

    public function shouldErr() {
        new integration\i1();
    }

    public function shouldWork() {
        new \business\b1();
    }
}
