<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

/**
 * 四角形のレイアウトに配置された表のセルで構成されるテーブル オブジェクト
 */
class DocumentTable
{
    /**
     * @var array<Kobesoft\AzureAiDocumentIntelligence\Result\BoundingRegion>|null テーブルをカバーする境界領域。
     */
    public ?array $boundingRegions = null;

    /**
     * @var array<Kobesoft\AzureAiDocumentIntelligence\Result\DocumentTableCell>|null テーブル内に含まれるセル。
     */
    public ?array $cells = null;

    /**
     * @var int|null テーブル内の列の数。
     */
    public ?int $columnCount = null;

    /**
     * @var int|null テーブル内の行数。
     */
    public ?int $rowCount = null;

    /**
     * @var array<Kobesoft\AzureAiDocumentIntelligence\Result\DocumentSpan>|null 読み取り順序の連結されたコンテンツ内のテーブルの場所。
     */
    public ?array $spans = null;
}