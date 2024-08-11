<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

use Kobesoft\AzureAiDocumentIntelligence\Traits\FromArray;

/**
 * ドキュメントの場所とセマンティック コンテンツを記述する オブジェクト
 */
class Document
{
    use FromArray;

    /**
     * @var array<BoundingRegion>|null ドキュメントをカバーする境界領域。
     */
    public ?array $boundingRegions = null;

    /**
     * @var float|null ドキュメントを正しく抽出する信頼度。
     */
    public ?float $confidence = null;

    /**
     * @var string|null ドキュメントの種類。
     */
    public ?string $docType = null;

    /**
     * @var array<string,Kobesoft\AzureAiDocumentIntelligence\Result\DocumentField>|null 名前付きフィールド値のディクショナリ。
     */
    public ?array $fields = null;

    /**
     * @var array<DocumentSpan>|null 読み取り順序の連結されたコンテンツ内のドキュメントの場所。
     */
    public ?array $spans = null;
}