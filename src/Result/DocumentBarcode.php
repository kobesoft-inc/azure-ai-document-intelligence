<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

use Kobesoft\AzureAiDocumentIntelligence\Traits\FromArray;

/**
 * バーコード オブジェクト
 */
class DocumentBarcode
{
    use FromArray;

    /**
     * @var float|null バーコードを正しく抽出する信頼性。
     */
    public ?float $confidence = null;

    /**
     * @var string|null バーコードの種類。
     */
    public ?string $kind = null;

    /**
     * @var array<float>|null バーコードの境界ポリゴン。
     */
    public ?array $polygon = null;

    /**
     * @var DocumentSpan|null 読み取り順序の連結されたコンテンツ内のバーコードの場所。
     */
    public ?DocumentSpan $span = null;

    /**
     * @var string|null バーコード値。
     */
    public ?string $value = null;
}