<?php

declare(strict_types=1);

namespace Webware\Test;

abstract class AbstractValidator
{
    public function __construct(
        private string $adapter,
        private string $schema,
        private string $field,
        private string $select,
        private string $table,
    ) {}
}
