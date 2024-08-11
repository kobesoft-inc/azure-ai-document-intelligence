<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

use Kobesoft\AzureAiDocumentIntelligence\Traits\FromArray;

/**
 * 詳細なエラー
 */
class InnerError
{
    use FromArray;

    /**
     * @var string|null エラー コード。
     */
    public ?string $code = null;

    /**
     * @var InnerError|null 詳細なエラー。
     */
    public ?InnerError $innererror = null;

    /**
     * @var string|null エラー メッセージ。
     */
    public ?string $message = null;
}