<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

/**
 * 単語や選択マークなど、コンテンツ要素の隣接するシーケンスで構成されるコンテンツ行オブジェクト
 */
class DocumentLine
{
    /**
     * @var string|null 読み取り順に含まれる要素の連結されたコンテンツ。
     */
    public ?string $content = null;

    /**
     * @var array<float>|null ラインの境界ポリゴン。
     */
    public ?array $polygon = null;

    /**
     * @var array<Kobesoft\AzureAiDocumentIntelligence\Result\DocumentSpan>|null 読み取り順序の連結されたコンテンツ内の行の場所。
     */
    public ?array $spans = null;
}