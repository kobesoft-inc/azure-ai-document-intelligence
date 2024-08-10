<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

/**
 * テーブル セルの場所と内容を表す オブジェクト
 */
class DocumentTableCell
{
    /**
     * @var array<Kobesoft\AzureAiDocumentIntelligence\Result\BoundingRegion>|null テーブル セルをカバーする境界領域。
     */
    public ?array $boundingRegions = null;

    /**
     * @var int|null セルの列インデックス。
     */
    public ?int $columnIndex = null;

    /**
     * @var int|null このセルがまたがる列の数。
     */
    public ?int $columnSpan = null;

    /**
     * @var string|null 表のセルの内容を読み取り順に連結しました。
     */
    public ?string $content = null;

    /**
     * @var string|null テーブル のセルの種類。
     */
    public ?string $kind = null;

    /**
     * @var int|null セルの行インデックス。
     */
    public ?int $rowIndex = null;

    /**
     * @var int|null このセルがまたがる行の数。
     */
    public ?int $rowSpan = null;

    /**
     * @var array<Kobesoft\AzureAiDocumentIntelligence\Result\DocumentSpan>|null 読み取り順序の連結されたコンテンツ内のテーブル セルの場所。
     */
    public ?array $spans = null;
}