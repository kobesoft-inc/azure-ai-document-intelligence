<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

/**
 * 観察されたテキスト スタイルを表す オブジェクト
 */
class DocumentStyle
{
    /**
     * @var string|null 16 進数形式の背景色 #rrggbb。
     */
    public ?string $backgroundColor = null;

    /**
     * @var string|null 16 進数形式の前景色 #rrggbb。
     */
    public ?string $color = null;

    /**
     * @var float|null スタイルを正しく識別する信頼度。
     */
    public ?float $confidence = null;

    /**
     * @var string|null フォント スタイル。
     */
    public ?string $fontStyle = null;

    /**
     * @var string|null フォントの太さ。
     */
    public ?string $fontWeight = null;

    /**
     * @var bool|null コンテンツは手書きですか?
     */
    public ?bool $isHandwritten = null;

    /**
     * @var string|null サポートされている一連のフォント ファミリの中から視覚的に最も類似したフォント。CSS 規則に従ったフォールバック フォント (例: 'Arial, sans-serif')。
     */
    public ?string $similarFontFamily = null;

    /**
     * @var array<Kobesoft\AzureAiDocumentIntelligence\Result\DocumentSpan>|null スタイルが適用される連結コンテンツ内のテキスト要素の場所。
     */
    public ?array $spans = null;
}