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
     *     valueObscured?: bool,
     *     translatorEnabled?: bool,
     *     translatorTextDomain?: string,
     *     translator?: callable|null,
     *     messages?: array<string, string>,
     * } $options
     */
    public function __construct(array $options)
    {
        /** @mago-expect analysis:too-few-arguments */
        parent::__construct(...self::buildConstructorArgs($options));
    }

    #[\Override]
    public function isValid($value, $context = null): bool
    {
        return true;
    }
}
