<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

/**
 * キーと値のペアのフィールド キーまたは値を表す オブジェクト
 */
class DocumentKeyValueElement
{
    /**
     * @var array<Kobesoft\AzureAiDocumentIntelligence\Result\BoundingRegion>|null キーと値の要素をカバーする境界領域。
     */
    public ?array $boundingRegions = null;

    /**
     * @var string|null キーと値の要素のコンテンツを読み取り順に連結しました。
     */
    public ?string $content = null;

    /**
     * @var array<Kobesoft\AzureAiDocumentIntelligence\Result\DocumentSpan>|null 読み取り順序の連結されたコンテンツ内のキーと値の要素の場所。
     */
    public ?array $spans = null;
}