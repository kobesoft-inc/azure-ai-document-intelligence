<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

/**
 * エラー情報
 */
class Error
{
    /**
     * @var string|null エラー コード。
     */
    public ?string $code = null;

    /**
     * @var array<Kobesoft\AzureAiDocumentIntelligence\Result\Error>|null 詳細なエラーの一覧。
     */
    public ?array $details = null;

    /**
     * @var InnerError|null 詳細なエラー。
     */
    public ?InnerError $innererror = null;

    /**
     * @var string|null エラー メッセージ。
     */
    public ?string $message = null;

    /**
     * @var string|null エラーのターゲット。
     */
    public ?string $target = null;
}