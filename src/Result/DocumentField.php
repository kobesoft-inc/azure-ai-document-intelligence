<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

use Kobesoft\AzureAiDocumentIntelligence\Traits\FromArray;

/**
 * フィールド値の内容と場所を表す オブジェクト
 */
class DocumentField
{
    use FromArray;

    /**
     * @var array<BoundingRegion>|null フィールドをカバーする境界領域。
     */
    public ?array $boundingRegions = null;

    /**
     * @var float|null フィールドを正しく抽出する信頼度。
     */
    public ?float $confidence = null;

    /**
     * @var string|null フィールドの内容。
     */
    public ?string $content = null;

    /**
     * @var array<DocumentSpan>|null 読み取り順序の連結されたコンテンツ内のフィールドの場所。
     */
    public ?array $spans = null;

    /**
     * @var string|null フィールド値のデータ型。
     */
    public ?string $type = null;

    /**
     * @var AddressValue|null アドレス値。
     */
    public ?AddressValue $valueAddress = null;

    /**
     * @var array<DocumentField>|null フィールド値の配列。
     */
    public ?array $valueArray = null;

    /**
     * @var bool|null ブール値。
     */
    public ?bool $valueBoolean = null;

    /**
     * @var string|null 3 文字の国コード値 (ISO 3166-1 alpha-3)。
     */
    public ?string $valueCountryRegion = null;

    /**
     * @var CurrencyValue|null 通貨値。
     */
    public ?CurrencyValue $valueCurrency = null;

    /**
     * @var string|null YYYY-MM-DD 形式の日付値 (ISO 8601)。
     */
    public ?string $valueDate = null;

    /**
     * @var int|null 整数値。
     */
    public ?int $valueInteger = null;

    /**
     * @var float|null 浮動小数点値。
     */
    public ?float $valueNumber = null;

    /**
     * @var array<string,Kobesoft\AzureAiDocumentIntelligence\Result\DocumentField>|null 名前付きフィールド値のディクショナリ。
     */
    public ?array $valueObject = null;

    /**
     * @var string|null E.164 形式の電話番号の値 (例: +19876543210)。
     */
    public ?string $valuePhoneNumber = null;

    /**
     * @var string|null 選択マークの値。
     */
    public ?string $valueSelectionMark = null;

    /**
     * @var DocumentSpan|null 署名の存在。
     */
    public ?DocumentSpan $valueSignature = null;

    /**
     * @var string|null 文字列値。
     */
    public ?string $valueString = null;

    /**
     * @var string|null hh:mm:ss 形式の時間値 (ISO 8601)。
     */
    public ?string $valueTime = null;
}