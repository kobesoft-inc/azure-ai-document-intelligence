<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

/**
 * 個別のフィールド ラベル (キー) とフィールド値 (空の場合があります) を持つフォーム フィールドを表す オブジェクト
 */
class DocumentKeyValuePair
{
    /**
     * @var float|null キーと値のペアを正しく抽出する信頼度。
     */
    public ?float $confidence = null;

    /**
     * @var DocumentKeyValueElement|null キーと値のペアのフィールド ラベル。
     */
    public ?DocumentKeyValueElement $key = null;

    /**
     * @var DocumentKeyValueElement|null キーと値のペアのフィールド値。
     */
    public ?DocumentKeyValueElement $value = null;
}