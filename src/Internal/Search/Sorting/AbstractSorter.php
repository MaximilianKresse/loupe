<?php

declare(strict_types=1);

namespace Terminal42\Loupe\Internal\Search\Sorting;

use Terminal42\Loupe\Internal\Engine;
use Terminal42\Loupe\Internal\Search\Searcher;

abstract class AbstractSorter
{
    abstract public function apply(Searcher $searcher, Engine $engine): void;

    abstract public static function fromString(string $value, Engine $engine, Direction $direction): self;

    abstract public static function supports(string $value, Engine $engine): bool;
}
