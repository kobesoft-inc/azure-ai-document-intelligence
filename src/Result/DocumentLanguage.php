<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

/**
 * 特定のテキスト スパンで検出された言語を表す オブジェクト
 */
class DocumentLanguage
{
    /**
     * @var float|null 言語を正しく識別する信頼度。
     */
    public ?float $confidence = null;

    /**
     * @var string|null 言語が検出されました。値には、ISO 639-1 言語コード (例: "en"、"fr") または BCP 47 言語タグ (例: "zh-Hans") を指定できます。
     */
    public ?string $locale = null;

    /**
     * @var array<Kobesoft\AzureAiDocumentIntelligence\Result\DocumentSpan>|null 言語が適用される連結コンテンツ内のテキスト要素の場所。
     */
    public ?array $spans = null;
}