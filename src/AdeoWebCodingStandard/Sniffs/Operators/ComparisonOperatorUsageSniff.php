<?php

declare(strict_types=1);

namespace AdeoWebCodingStandard\Sniffs\Operators;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;

class ComparisonOperatorUsageSniff implements Sniff
{
    private const INVALID_OPTS = [
        T_IS_EQUAL => '===',
        T_IS_NOT_EQUAL => '!==',
    ];

    /**
     * @inheritDoc
     */
    public function register(): array
    {
        return [
            T_IS_EQUAL,
            T_IS_NOT_EQUAL,
        ];
    }

    /**
     * @inheritDoc
     */
    public function process(File $phpcsFile, $stackPtr): void
    {
        $tokens = $phpcsFile->getTokens();
        $token = $tokens[$stackPtr];
        $error = 'Operator %s prohibited; use %s instead';
        $data = [
            $token['content'],
            self::INVALID_OPTS[$token['code']],
        ];

        $phpcsFile->addError($error, $stackPtr, 'NotAllowed', $data);
    }
}
