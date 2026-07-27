<?php

declare(strict_types=1);

namespace Webware\Test;

use Traversable;

class Test
{
    public function getIterator(): Traversable
    {
        return new \ArrayIterator([
            'item1',
            'item2',
            'item3',
        ]);
    }
}
