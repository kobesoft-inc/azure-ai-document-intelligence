<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

use Kobesoft\AzureAiDocumentIntelligence\Traits\FromArray;

/**
 * 単語や選択マークなど、コンテンツ要素の隣接するシーケンスで構成されるコンテンツ行オブジェクト
 */
class DocumentLine
{
    use FromArray;

    /**
     * @var string|null 読み取り順に含まれる要素の連結されたコンテンツ。
     */
    public ?string $content = null;

    /**
     * @var array<float>|null ラインの境界ポリゴン。
     */
    public ?array $polygon = null;

    /**
     * @var array<DocumentSpan>|null 読み取り順序の連結されたコンテンツ内の行の場所。
     */
    public ?array $spans = null;
}