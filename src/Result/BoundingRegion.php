<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

/**
 * 入力の特定のページの境界ポリゴン
 */
class BoundingRegion
{
    /**
     * @var int|null 境界領域を含む 1 から始まるページ番号。
     */
    public ?int $pageNumber = null;

    /**
     * @var array<float>|null ページ上の多角形の境界、または指定されていない場合はページ全体。
     */
    public ?array $polygon = null;
}