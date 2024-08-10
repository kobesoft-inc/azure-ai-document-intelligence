<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

/**
 * アドレス フィールドの値
 */
class AddressValue
{
    /**
     * @var string|null 市、町、村などの名前。
     */
    public ?string $city = null;

    /**
     * @var string|null ニューヨーク市のブルックリンやロンドンのウェストミンスター市など、都市内の地区または自治区。
     */
    public ?string $cityDistrict = null;

    /**
     * @var string|null 国/地域。
     */
    public ?string $countryRegion = null;

    /**
     * @var string|null ワールド トレード センターなどのビルド名。
     */
    public ?string $house = null;

    /**
     * @var string|null 住宅番号または建物番号。
     */
    public ?string $houseNumber = null;

    /**
     * @var string|null フロア番号 (3F など)。
     */
    public ?string $level = null;

    /**
     * @var string|null ポスト オフィス ボックス番号。
     */
    public ?string $poBox = null;

    /**
     * @var string|null メールの並べ替えに使用される郵便番号。
     */
    public ?string $postalCode = null;

    /**
     * @var string|null ストリート名。
     */
    public ?string $road = null;

    /**
     * @var string|null 第 1 レベルの管理部門。
     */
    public ?string $state = null;

    /**
     * @var string|null 特定のロケールで使用される第 2 レベルの管理部門。
     */
    public ?string $stateDistrict = null;

    /**
     * @var string|null 市区町村、都道府県、国地域、郵便番号を除く番地。
     */
    public ?string $streetAddress = null;

    /**
     * @var string|null チャイナタウンのような非公式の近所の名前。
     */
    public ?string $suburb = null;

    /**
     * @var string|null アパートメントまたはオフィス番号。
     */
    public ?string $unit = null;
}