<?php

declare(strict_types=1);

namespace Webware\Test;

use Laminas\Validator\AbstractValidator as LaminasAbstractValidator;

abstract class AbstractValidator extends LaminasAbstractValidator
{
    private const PARENT_OPTIONS = [
        'valueObscured',
        'translatorEnabled',
        'translatorTextDomain',
        'translator',
        'messages',
    ];

    public function __construct(
        protected string $adapter,
        protected string $schema,
        protected string $field,
        protected string $select,
        protected string $table,
        protected array $parentOptions,
    ) {
        parent::__construct($parentOptions);
    }

    /**
     * Splits a flat options array into our own named constructor arguments
     * and the remaining options required by the Laminas parent validator.
     */
    protected static function buildConstructorArgs(array $options): array
    {
        $ownOptions    = array_diff_key($options, array_flip(self::PARENT_OPTIONS));
        $parentOptions = array_intersect_key($options, array_flip(self::PARENT_OPTIONS));

        return [...$ownOptions, 'parentOptions' => $parentOptions];
    }
}
