# azure-ai-document-intelligence

## 概要

Azure AI Document Intelligenceは、テキストを含むドキュメントを分析し、その内容を理解するためのサービスです。

このライブラリは、Azure AI Document IntelligenceのPHP SDKを提供します。

## インストール

```bash
composer require kobesoft/azure-ai-document-intelligence
```

## 使用方法

### テキストの分析

```phprequire __DIR__ . '/vendor/autoload.php';

use Kobesoft\AzureAiDocumentIntelligence\Client;

// Azure AI Document Intelligenceのエンドポイント
define('ENDPOINT', 'https://<your-custom-subdomain>.cognitiveservices.azure.com');
define('SUBSCRIPTION_KEY', '<your-subscription-key>');
$client = new Client(ENDPOINT, SUBSCRIPTION_KEY);

// 分析するサンプルコンテンツ
$sampleContent = 'https://raw.githubusercontent.com/Azure-Samples/cognitive-services-REST-api-samples/master/curl/form-recognizer/sample-layout.pdf';

// テキストの分析
$result = $client->analyze($sampleContent, 'prebuilt-layout');

// 分析結果の取得
do {
    $result = $client->analyzeResult($result);
} while ($result->status !== 'running');

print_r($result);
```

## 結果の取得とポーリング

分析の結果は、非同期で取得されます。結果を取得するには、`analyzeResult`メソッドを使用します。
結果が取得できるまで、ポーリングを行います。

Laravelなどで使用する場合には、Jobを使用して非同期で処理を行うことをお勧めします。

```php
do {
    $result = $client->analyzeResult($result);
} while ($result->status !== 'succeeded');
```

## レスポンス

レスポンスのクラスは、`Kobesoft\AzureAiDocumentIntelligence\AnalyzeResultOperation`です。
詳細なレスポンスのスキーマは、以下のリンクを参照してください。

https://learn.microsoft.com/ja-jp/rest/api/aiservices/document-models/get-analyze-result?view=rest-aiservices-v3.1%20(2023-07-31)&tabs=HTTP

## ライセンス

MIT

## 作者

Kobesoft, Inc.