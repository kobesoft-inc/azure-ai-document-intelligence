<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

/**
 * 分析操作の状態と結果
 */
class AnalyzeResultOperation
{
    /**
     * @var Kobesoft\AzureAiDocumentIntelligence\Result\AnalyzeResult|null ドキュメント分析結果。
     */
    public ?AnalyzeResult $analyzeResult = null;

    /**
     * @var string|null 分析操作が送信された日時 (UTC)。
     */
    public ?string $createdDateTime = null;

    /**
     * @var Kobesoft\AzureAiDocumentIntelligence\Result\Error|null ドキュメント分析中にエラーが発生しました。
     */
    public ?Error $error = null;

    /**
     * @var string|null 状態が最後に更新された日時 (UTC)。
     */
    public ?string $lastUpdatedDateTime = null;

    /**
     * @var string|null 操作の状態。
     */
    public ?string $status = null;
}