<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

/**
 * 通貨フィールドの値
 */
class CurrencyValue
{
    /**
     * @var float|null 通貨金額。
     */
    public ?float $amount = null;

    /**
     * @var string|null 解決された通貨コード (ISO 4217) がある場合。
     */
    public ?string $currencyCode = null;

    /**
     * @var string|null 通貨記号ラベル (存在する場合)。
     */
    public ?string $currencySymbol = null;
}