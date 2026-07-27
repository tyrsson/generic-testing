<?php

declare(strict_types=1);

namespace Webware\Test;

final class Validator extends AbstractValidator
{
    /**
     * @param array{
     *     adapter: string,
     *     schema: string,
     *     field: string,
     *     select: string,
     *     table: string,
     * } $options
     */
    public function __construct(array $options)
    {
        parent::__construct(...$options);
    }
}
