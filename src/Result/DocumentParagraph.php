<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

use Kobesoft\AzureAiDocumentIntelligence\Traits\FromArray;

/**
 * 一般的な配置と間隔を持つ連続した行で構成される段落オブジェクト
 */
class DocumentParagraph
{
    use FromArray;

    /**
     * @var array<BoundingRegion>|null 段落をカバーする境界領域。
     */
    public ?array $boundingRegions = null;

    /**
     * @var string|null 段落のコンテンツを読み取り順に連結しました。
     */
    public ?string $content = null;

    /**
     * @var string|null 段落のセマンティック ロール。
     */
    public ?string $role = null;

    /**
     * @var array<DocumentSpan>|null 読み取り順序の連結されたコンテンツ内の段落の場所。
     */
    public ?array $spans = null;
}