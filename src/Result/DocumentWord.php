<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

use Kobesoft\AzureAiDocumentIntelligence\Traits\FromArray;

/**
 * 連続した文字シーケンスで構成される単語オブジェクト
 * 中国語、日本語、韓国語などのスペース区切り以外の言語の場合、各文字は独自の単語として表されます
 */
class DocumentWord
{
    use FromArray;

    /**
     * @var float|null 単語を正しく抽出する信頼度。
     */
    public ?float $confidence = null;

    /**
     * @var string|null 単語のテキスト コンテンツ。
     */
    public ?string $content = null;

    /**
     * @var array<float>|null 単語の境界ポリゴン。
     */
    public ?array $polygon = null;

    /**
     * @var DocumentSpan|null 読み取り順序の連結されたコンテンツ内の単語の場所。
     */
    public ?DocumentSpan $span = null;
}