<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

use Kobesoft\AzureAiDocumentIntelligence\Traits\FromArray;

/**
 * 四角形のレイアウトに配置された表のセルで構成されるテーブル オブジェクト
 */
class DocumentTable
{
    use FromArray;

    /**
     * @var array<BoundingRegion>|null テーブルをカバーする境界領域。
     */
    public ?array $boundingRegions = null;

    /**
     * @var array<DocumentTableCell>|null テーブル内に含まれるセル。
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
     * @var array<DocumentSpan>|null 読み取り順序の連結されたコンテンツ内のテーブルの場所。
     */
    public ?array $spans = null;
}