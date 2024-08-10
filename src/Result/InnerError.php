<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

/**
 * 詳細なエラー
 */
class InnerError
{
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