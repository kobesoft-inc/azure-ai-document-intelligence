<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

use Kobesoft\AzureAiDocumentIntelligence\Traits\FromArray;

/**
 * ドキュメント分析結果
 */
class AnalyzeResult
{
    use FromArray;

    /**
     * @var string|null この結果を生成するために使用される API バージョン。
     */
    public ?string $apiVersion = null;

    /**
     * @var string|null すべてのテキスト要素とビジュアル要素の文字列表現を読み取り順序で連結します。
     */
    public ?string $content = null;

    /**
     * @var array<Document>|null 抽出されたドキュメント。
     */
    public ?array $documents = null;

    /**
     * @var array<DocumentKeyValuePair>|null 抽出されたキーと値のペア。
     */
    public ?array $keyValuePairs = null;

    /**
     * @var array<DocumentLanguage>|null 検出された言語。
     */
    public ?array $languages = null;

    /**
     * @var string|null この結果を生成するために使用されるドキュメント モデル ID。
     */
    public ?string $modelId = null;

    /**
     * @var array<DocumentPage>|null 分析されたページ。
     */
    public ?array $pages = null;

    /**
     * @var array<DocumentParagraph>|null 抽出された段落。
     */
    public ?array $paragraphs = null;

    /**
     * @var string|null 文字列のオフセットと長さを計算するために使用されるメソッド。
     */
    public ?string $stringIndexType = null;

    /**
     * @var array<DocumentStyle>|null 抽出されたフォント スタイル。
     */
    public ?array $styles = null;

    /**
     * @var array<DocumentTable>|null 抽出されたテーブル。
     */
    public ?array $tables = null;
}