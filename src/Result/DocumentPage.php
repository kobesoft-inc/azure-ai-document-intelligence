<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

use Kobesoft\AzureAiDocumentIntelligence\Traits\FromArray;

/**
 * 入力からページから抽出されたコンテンツ要素とレイアウト要素
 */
class DocumentPage
{
    use FromArray;

    /**
     * @var float|null 時計回りの方向のコンテンツの一般的な向き(-180,180]の間の度数で測定されます。
     */
    public ?float $angle = null;

    /**
     * @var array<DocumentBarcode>|null ページからバーコードを抽出しました。
     */
    public ?array $barcodes = null;

    /**
     * @var array<DocumentFormula>|null ページから抽出された数式。
     */
    public ?array $formulas = null;

    /**
     * @var float|null 画像/PDF の高さ (ピクセル/インチ単位)。
     */
    public ?float $height = null;

    /**
     * @var array<DocumentLine>|null ページから抽出された行。テキスト要素とビジュアル要素の両方を含む可能性があります。
     */
    public ?array $lines = null;

    /**
     * @var int|null 入力ドキュメント内の 1 から始まるページ番号。
     */
    public ?int $pageNumber = null;

    /**
     * @var array<DocumentSelectionMark>|null ページから抽出された選択マーク。
     */
    public ?array $selectionMarks = null;

    /**
     * @var array<DocumentSpan>|null 読み取り順序の連結されたコンテンツ内のページの場所。
     */
    public ?array $spans = null;

    /**
     * @var string|null 幅、高さ、および多角形のプロパティで使用される単位。 画像の場合、単位は "ピクセル" です。 PDF の場合、単位は "inch" です。
     */
    public ?string $unit = null;

    /**
     * @var float|null イメージ/PDF の幅 (ピクセル/インチ単位)。
     */
    public ?float $width = null;

    /**
     * @var array<DocumentWord>|null ページから抽出された単語。
     */
    public ?array $words = null;
}