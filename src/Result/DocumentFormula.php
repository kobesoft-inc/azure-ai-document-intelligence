<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

/**
 * 数式オブジェクト
 */
class DocumentFormula
{
    /**
     * @var float|null 数式を正しく抽出する信頼度。
     */
    public ?float $confidence = null;

    /**
     * @var string|null 数式の種類。
     */
    public ?string $kind = null;

    /**
     * @var array<float>|null 数式の境界ポリゴン。
     */
    public ?array $polygon = null;

    /**
     * @var \Kobesoft\AzureAiDocumentIntelligence\Result\DocumentSpan|null 読み取り順序の連結されたコンテンツ内の数式の場所。
     */
    public ?DocumentSpan $span = null;

    /**
     * @var string|null 式を記述する LaTex 式。
     */
    public ?string $value = null;
}