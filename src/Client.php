<?php

namespace Kobesoft\AzureAiDocumentIntelligence;

use GuzzleHttp\Exception\GuzzleException;
use Kobesoft\AzureAiDocumentIntelligence\Result\AnalyzeResultOperation;

/**
 * DocumentIntelligenceのクライアント
 */
class Client
{
    /**
     * インスタンスを生成する。
     *
     * @param string $endpoint エンドポイントURL
     * @param string $subscriptionKey サブスクリプションキー
     */
    public function __construct(
        protected string $endpoint,
        protected string $subscriptionKey
    )
    {
    }

    /**
     * ドキュメントを解析する。
     *
     * @param mixed $content 解析対象のドキュメント。URL、バイナリデータ、ストリーム
     * @param string $modelId モデルID
     * @param string $apiVersion APIバージョン
     * @param string|null $pages 解析対象のページ範囲(例: "1-3,5")
     * @param string|null $locale テキスト認識とドキュメント分析のロケール(例: "ja-JP")
     * @param string|null $stringIndexType 文字列のオフセットと長さを計算するために使用されるメソッド
     * @param string|null $features 抽出する追加フィールドの一覧(有効な値: barcodes, formulas, key-value-pairs, languages, ocr-high-resolution, query-fields, style-font)
     * @param string|null $queryFields 抽出する追加フィールドの一覧
     * @param string|null $outputContentFormat 解析結果の形式(有効な値: text, markdown)
     * @param string|null $output 分析中に生成する追加の出力(有効な値: figures, pdf)
     * @return string|null 解析結果のURL
     * @throws GuzzleException
     */
    public function analyze(
        mixed   $content,
        string  $modelId,
        string  $apiVersion = '2023-07-31',
        ?string $pages = null,
        ?string $locale = null,
        ?string $stringIndexType = null,
        ?string $features = null,
        ?string $queryFields = null,
        ?string $outputContentFormat = null,
        ?string $output = null,
    ): ?string
    {
        // URIを構築する
        $uri = $this->endpoint;
        $uri .= $apiVersion <= '2023-07-31'
            ? 'formrecognizer/documentModels/'
            : 'documentintelligence/documentModels/';
        $uri .= $modelId . ':analyze';
        $uriQueries = [
            '_overload' => 'analyzeDocument',
            'api-version' => $apiVersion,
            ...compact(
                'pages',
                'locale',
                'stringIndexType',
                'features',
                'queryFields',
                'outputContentFormat',
                'output'
            ),
        ];
        $uriQueries = array_filter($uriQueries);
        $uri .= '?' . http_build_query($uriQueries);

        // リクエストヘッダを構築する
        $options = [
            'headers' => [
                'Content-Type' => 'application/json',
                'Ocp-Apim-Subscription-Key' => $this->subscriptionKey,
            ],
            'json' => str_starts_with($content, 'http')
                ? ['urlSource' => $content]
                : ['base64Source' => $content],
        ];

        // リクエストを送信する
        $httpClient = new \GuzzleHttp\Client();
        $response = $httpClient->post($uri, $options);
        if ($response->getStatusCode() !== 202) {
            throw new \RuntimeException('Failed to analyze the document.');
        }
        return $response->getHeader('Operation-Location')[0];
    }

    /**
     * 解析結果を取得する。
     *
     * @param $resultUrl string 解析結果のURL
     * @return AnalyzeResultOperation
     * @throws GuzzleException
     */
    public function analyzeResult(string $resultUrl): AnalyzeResultOperation
    {
        $httpClient = new \GuzzleHttp\Client();
        $response = $httpClient->get($resultUrl, [
            'headers' => [
                'Ocp-Apim-Subscription-Key' => $this->subscriptionKey,
            ],
        ]);
        return AnalyzeResultOperation::fromArray(json_decode($response->getBody()->getContents(), true));
    }
}