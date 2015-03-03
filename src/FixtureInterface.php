<?php

use Bravesheep\Dogmatist\Builder;

interface FixtureInterface
{
    public function entity();

    public function fill(Builder $builder);
}
