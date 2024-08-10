<?php

namespace Kobesoft\AzureAiDocumentIntelligence\Result;

/**
 * オフセットと長さとして指定された、連結されたコンテンツ プロパティの連続する領域
 */
class DocumentSpan
{
    /**
     * @var int|null スパンで表されるコンテンツ内の文字数。
     */
    public ?int $length = null;

    /**
     * @var int|null スパンで表されるコンテンツの 0 から始まるインデックス。
     */
    public ?int $offset = null;
}