<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

/**
 * チェック ボックス、ラジオ ボタン、および選択範囲を示すその他の要素を表す選択マーク オブジェクト
 */
class DocumentSelectionMark
{
    /**
     * @var float|null 選択マークを正しく抽出する信頼度。
     */
    public ?float $confidence = null;

    /**
     * @var array<float>|null 選択マークの境界ポリゴン。
     */
    public ?array $polygon = null;

    /**
     * @var Kobesoft\AzureAiDocumentIntelligence\Result\DocumentSpan|null 読み取り順序の連結されたコンテンツ内の選択マークの位置。
     */
    public ?DocumentSpan $span = null;

    /**
     * @var string|null 選択マークの状態。
     */
    public ?string $state = null;
}