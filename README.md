# WildberriesClient-php

- API version: 1.8

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/techmarketpro/wildberries.git"
    }
  ],
  "require": {
    "techmarketpro/wildberries": "dev-master"
  }
}
```

Then run `composer install techmarketpro/wildberries`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/WildberriesClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор РК

try {
    $result = $apiInstance->advV0AdvertGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0AdvertGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 56; // int | <dl> <dt>Статус РК:</dt> <dd><code>9</code> - идут показы</dd> <dd><code>11</code> - РК на паузе</dd> </dl>
$type = 56; // int | <dl> <dt>Тип РК:</dt> <dd><code>4</code> - реклама в каталоге</dd> <dd><code>5</code> - реклама в карточке товара</dd> <dd><code>6</code> - реклама в поиске</dd> <dd><code>7</code> - реклама в рекомендациях на главной странице</dd> </dl>
$limit = 56; // int | Количество кампаний в ответе
$offset = 56; // int | Смещение относительно первой РК
$order = "order_example"; // string | <dl> <dt>Порядок:</dt> <dd><code>create</code> (по времени создания РК)</dd> <dd><code>change</code> (по времени последнего изменения РК)</dd> <dd><code>id</code> (по идентификатору РК)</dd> </dl> <br>Например: <code>**_/api/v0/adverts?type=6&limit=5&offset=10&<b>order=change</b>&direction=asc**</code>
$direction = "direction_example"; // string | <dl> <dt>Направление:</dt> <dd><code>desc</code> (от большего к меньшему)</dd> <dd><code>asc</code> (от меньшего к большему)</dd> </dl> <br>Например: <code>**_/api/v0/adverts?type=6&limit=5&offset=10&order=change&<b>direction=asc</b>**</code>

try {
    $result = $apiInstance->advV0AdvertsGet($status, $type, $limit, $offset, $order, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0AdvertsGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->advV0CountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0CountGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 56; // int | <dl> <dt>Тип РК:</dt> <dd><code>4</code> - реклама в каталоге</dd> <dd><code>5</code> - реклама в карточке товара</dd> <dd><code>6</code> - реклама в поиске</dd> <dd><code>7</code> - реклама в рекомендациях на главной странице</dd> </dl>
$param = 56; // int | Параметр запроса, по которому будет получен список ставок активных РК. <br>Должен быть значением `menuId`, `subjectId` или `setId` в зависимости от типа РК.

try {
    $result = $apiInstance->advV0CpmGet($type, $param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0CpmGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Wildberries\Client\Model\V0CpmBody(); // \Wildberries\Client\Model\V0CpmBody | 

try {
    $apiInstance->advV0CpmPost($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0CpmPost: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор РК

try {
    $apiInstance->advV0PauseGet($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0PauseGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор РК

try {
    $apiInstance->advV0StartGet($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0StartGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Wildberries\Client\Model\V1DelBody()); // \Wildberries\Client\Model\V1DelBody[] | 

try {
    $apiInstance->apiV1DelPost($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1DelPost: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Wildberries\Client\Model\V1InsBody()); // \Wildberries\Client\Model\V1InsBody[] | 

try {
    $apiInstance->apiV1InsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1InsPost: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nm = 56; // int | Идентификатор товара (`nmId`), по которому необходимо получить список рекомендаций.

try {
    $result = $apiInstance->apiV1SupGet($nm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>

try {
    $result = $apiInstance->apiV1SupplierExciseGoodsGet($date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierExciseGoodsGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>

try {
    $result = $apiInstance->apiV1SupplierIncomesGet($date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierIncomesGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>
$flag = 0; // int | Если параметр `flag=0` (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля `lastChangeDate` (дата время обновления информации в сервисе) больше или равно переданному  значению параметра `dateFrom`.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. <br> Если параметр `flag=1`, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру `dateFrom` (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре `dateFrom`.

try {
    $result = $apiInstance->apiV1SupplierOrdersGet($date_from, $flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierOrdersGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>
$date_to = new \DateTime("2013-10-20"); // \DateTime | Конечная дата отчета
$limit = 0; // int | Максимальное количество строк отчета, возвращаемых методом. Не может быть более 100000.
$rrdid = 56; // int | Уникальный идентификатор строки отчета. Необходим для получения отчета частями.  <br> Загрузку отчета нужно начинать с `rrdid = 0` и при последующих вызовах API передавать в запросе значение `rrd_id` из последней строки, полученной в результате предыдущего вызова.  <br> Таким образом для загрузки одного отчета может понадобиться вызывать API до тех пор, пока количество возвращаемых строк не станет равным нулю.

try {
    $result = $apiInstance->apiV1SupplierReportDetailByPeriodGet($date_from, $date_to, $limit, $rrdid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierReportDetailByPeriodGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>
$flag = 0; // int | Если параметр `flag=0` (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля `lastChangeDate` (дата время обновления информации в сервисе) больше или равно переданному  значению параметра `dateFrom`.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. <br> Если параметр `flag=1`, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру `dateFrom` (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре `dateFrom`.

try {
    $result = $apiInstance->apiV1SupplierSalesGet($date_from, $flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierSalesGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>

try {
    $result = $apiInstance->apiV1SupplierStocksGet($date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierStocksGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quantity = 56; // int | `2` - товар с нулевым остатком, `1` - товар с ненулевым остатком, `0` - товар с любым остатком

try {
    $result = $apiInstance->publicApiV1InfoGet($quantity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->publicApiV1InfoGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Wildberries\Client\Model\V1PricesBody()); // \Wildberries\Client\Model\V1PricesBody[] | 

try {
    $apiInstance->publicApiV1PricesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->publicApiV1PricesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to */*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**advV0AdvertGet**](docs/Api/DefaultApi.md#advv0advertget) | **GET** /adv/v0/advert | Информация о РК
*DefaultApi* | [**advV0AdvertsGet**](docs/Api/DefaultApi.md#advv0advertsget) | **GET** /adv/v0/adverts | Список РК
*DefaultApi* | [**advV0CountGet**](docs/Api/DefaultApi.md#advv0countget) | **GET** /adv/v0/count | Получение РК
*DefaultApi* | [**advV0CpmGet**](docs/Api/DefaultApi.md#advv0cpmget) | **GET** /adv/v0/cpm | Список ставок
*DefaultApi* | [**advV0CpmPost**](docs/Api/DefaultApi.md#advv0cpmpost) | **POST** /adv/v0/cpm | Изменение ставки у РК
*DefaultApi* | [**advV0PauseGet**](docs/Api/DefaultApi.md#advv0pauseget) | **GET** /adv/v0/pause | Пауза РК
*DefaultApi* | [**advV0StartGet**](docs/Api/DefaultApi.md#advv0startget) | **GET** /adv/v0/start | Запуск РК
*DefaultApi* | [**apiV1DelPost**](docs/Api/DefaultApi.md#apiv1delpost) | **POST** /api/v1/del | Удаление рекомендаций
*DefaultApi* | [**apiV1InsPost**](docs/Api/DefaultApi.md#apiv1inspost) | **POST** /api/v1/ins | Добавление рекомендаций
*DefaultApi* | [**apiV1SupGet**](docs/Api/DefaultApi.md#apiv1supget) | **GET** /api/v1/sup | Получение списка рекомендаций
*DefaultApi* | [**apiV1SupplierExciseGoodsGet**](docs/Api/DefaultApi.md#apiv1supplierexcisegoodsget) | **GET** /api/v1/supplier/excise-goods | Отчет по КиЗам
*DefaultApi* | [**apiV1SupplierIncomesGet**](docs/Api/DefaultApi.md#apiv1supplierincomesget) | **GET** /api/v1/supplier/incomes | Поставки
*DefaultApi* | [**apiV1SupplierOrdersGet**](docs/Api/DefaultApi.md#apiv1supplierordersget) | **GET** /api/v1/supplier/orders | Заказы
*DefaultApi* | [**apiV1SupplierReportDetailByPeriodGet**](docs/Api/DefaultApi.md#apiv1supplierreportdetailbyperiodget) | **GET** /api/v1/supplier/reportDetailByPeriod | Отчет о продажах по реализации
*DefaultApi* | [**apiV1SupplierSalesGet**](docs/Api/DefaultApi.md#apiv1suppliersalesget) | **GET** /api/v1/supplier/sales | Продажи
*DefaultApi* | [**apiV1SupplierStocksGet**](docs/Api/DefaultApi.md#apiv1supplierstocksget) | **GET** /api/v1/supplier/stocks | Склад
*DefaultApi* | [**publicApiV1InfoGet**](docs/Api/DefaultApi.md#publicapiv1infoget) | **GET** /public/api/v1/info | Получение информации о ценах.
*DefaultApi* | [**publicApiV1PricesPost**](docs/Api/DefaultApi.md#publicapiv1pricespost) | **POST** /public/api/v1/prices | Загрузка цен
*Marketplace_Api* | [**apiV2WarehousesGet**](docs/Api/Marketplace_Api.md#apiv2warehousesget) | **GET** /api/v2/warehouses | Cписок складов
*Marketplace_Api* | [**apiV3OrdersGet**](docs/Api/Marketplace_Api.md#apiv3ordersget) | **GET** /api/v3/orders | Получить информацию по сборочным заданиям
*Marketplace_Api* | [**apiV3OrdersNewGet**](docs/Api/Marketplace_Api.md#apiv3ordersnewget) | **GET** /api/v3/orders/new | Получить список новых сборочных заданий
*Marketplace_Api* | [**apiV3OrdersOrderCancelPatch**](docs/Api/Marketplace_Api.md#apiv3ordersordercancelpatch) | **PATCH** /api/v3/orders/{order}/cancel | Отменить сборочное задание
*Marketplace_Api* | [**apiV3OrdersOrderMetaSgtinPost**](docs/Api/Marketplace_Api.md#apiv3ordersordermetasgtinpost) | **POST** /api/v3/orders/{order}/meta/sgtin | Закрепить за сборочным заданием КиЗ (маркировку Честного знака)
*Marketplace_Api* | [**apiV3OrdersStatusPost**](docs/Api/Marketplace_Api.md#apiv3ordersstatuspost) | **POST** /api/v3/orders/status | Получить статусы сборочных заданий
*Marketplace_Api* | [**apiV3OrdersStickersPost**](docs/Api/Marketplace_Api.md#apiv3ordersstickerspost) | **POST** /api/v3/orders/stickers | Получить этикетки для сборочных заданий
*Marketplace_Api* | [**apiV3StocksWarehouseDelete**](docs/Api/Marketplace_Api.md#apiv3stockswarehousedelete) | **DELETE** /api/v3/stocks/{warehouse} | Удалить остатки товаров
*Marketplace_Api* | [**apiV3StocksWarehousePost**](docs/Api/Marketplace_Api.md#apiv3stockswarehousepost) | **POST** /api/v3/stocks/{warehouse} | Получить остатки товаров
*Marketplace_Api* | [**apiV3StocksWarehousePut**](docs/Api/Marketplace_Api.md#apiv3stockswarehouseput) | **PUT** /api/v3/stocks/{warehouse} | Обновить остатки товаров
*Marketplace_Api* | [**apiV3SuppliesGet**](docs/Api/Marketplace_Api.md#apiv3suppliesget) | **GET** /api/v3/supplies | Получить список поставок
*Marketplace_Api* | [**apiV3SuppliesOrdersReshipmentGet**](docs/Api/Marketplace_Api.md#apiv3suppliesordersreshipmentget) | **GET** /api/v3/supplies/orders/reshipment | Получить все сборочные задания на повторную отгрузку
*Marketplace_Api* | [**apiV3SuppliesPost**](docs/Api/Marketplace_Api.md#apiv3suppliespost) | **POST** /api/v3/supplies | Создать новую поставку
*Marketplace_Api* | [**apiV3SuppliesSupplyBarcodeGet**](docs/Api/Marketplace_Api.md#apiv3suppliessupplybarcodeget) | **GET** /api/v3/supplies/{supply}/barcode | Получить QR поставки
*Marketplace_Api* | [**apiV3SuppliesSupplyDelete**](docs/Api/Marketplace_Api.md#apiv3suppliessupplydelete) | **DELETE** /api/v3/supplies/{supply} | Удалить поставку
*Marketplace_Api* | [**apiV3SuppliesSupplyDeliverPatch**](docs/Api/Marketplace_Api.md#apiv3suppliessupplydeliverpatch) | **PATCH** /api/v3/supplies/{supply}/deliver | Передать поставку в доставку
*Marketplace_Api* | [**apiV3SuppliesSupplyGet**](docs/Api/Marketplace_Api.md#apiv3suppliessupplyget) | **GET** /api/v3/supplies/{supply} | Получить информацию о поставке
*Marketplace_Api* | [**apiV3SuppliesSupplyOrdersGet**](docs/Api/Marketplace_Api.md#apiv3suppliessupplyordersget) | **GET** /api/v3/supplies/{supply}/orders | Получить сборочные задания в поставке
*Marketplace_Api* | [**apiV3SuppliesSupplyOrdersOrderPatch**](docs/Api/Marketplace_Api.md#apiv3suppliessupplyordersorderpatch) | **PATCH** /api/v3/supplies/{supply}/orders/{order} | Добавить к поставке сборочное задание
*_Api* | [**contentV1BarcodesPost**](docs/Api/_Api.md#contentv1barcodespost) | **POST** /content/v1/barcodes | Генерация баркодов
*_Api* | [**contentV1CardsCursorListPost**](docs/Api/_Api.md#contentv1cardscursorlistpost) | **POST** /content/v1/cards/cursor/list | Список НМ v2
*_Api* | [**contentV1CardsErrorListGet**](docs/Api/_Api.md#contentv1cardserrorlistget) | **GET** /content/v1/cards/error/list | Список несозданных НМ с ошибками
*_Api* | [**contentV1CardsFilterPost**](docs/Api/_Api.md#contentv1cardsfilterpost) | **POST** /content/v1/cards/filter | Получение КТ по вендор кодам (артикулам)
*_Api* | [**contentV1CardsUpdatePost**](docs/Api/_Api.md#contentv1cardsupdatepost) | **POST** /content/v1/cards/update | Редактирование КТ
*_Api* | [**contentV1CardsUploadAddPost**](docs/Api/_Api.md#contentv1cardsuploadaddpost) | **POST** /content/v1/cards/upload/add | Добавление НМ к КТ
*_Api* | [**contentV1CardsUploadPost**](docs/Api/_Api.md#contentv1cardsuploadpost) | **POST** /content/v1/cards/upload | Создание  КТ
*_Api* | [**contentV1DirectoryBrandsGet**](docs/Api/_Api.md#contentv1directorybrandsget) | **GET** /content/v1/directory/brands | Бренд
*_Api* | [**contentV1DirectoryCollectionsGet**](docs/Api/_Api.md#contentv1directorycollectionsget) | **GET** /content/v1/directory/collections | Коллекция
*_Api* | [**contentV1DirectoryColorsGet**](docs/Api/_Api.md#contentv1directorycolorsget) | **GET** /content/v1/directory/colors | Цвет
*_Api* | [**contentV1DirectoryConsistsGet**](docs/Api/_Api.md#contentv1directoryconsistsget) | **GET** /content/v1/directory/consists | Состав
*_Api* | [**contentV1DirectoryContentsGet**](docs/Api/_Api.md#contentv1directorycontentsget) | **GET** /content/v1/directory/contents | Комплектация
*_Api* | [**contentV1DirectoryCountriesGet**](docs/Api/_Api.md#contentv1directorycountriesget) | **GET** /content/v1/directory/countries | Страна Производства
*_Api* | [**contentV1DirectoryKindsGet**](docs/Api/_Api.md#contentv1directorykindsget) | **GET** /content/v1/directory/kinds | Пол
*_Api* | [**contentV1DirectorySeasonsGet**](docs/Api/_Api.md#contentv1directoryseasonsget) | **GET** /content/v1/directory/seasons | Сезон
*_Api* | [**contentV1DirectoryTnvedGet**](docs/Api/_Api.md#contentv1directorytnvedget) | **GET** /content/v1/directory/tnved | ТНВЭД код
*_Api* | [**contentV1MediaFilePost**](docs/Api/_Api.md#contentv1mediafilepost) | **POST** /content/v1/media/file | Добавление медиа контента в КТ
*_Api* | [**contentV1MediaSavePost**](docs/Api/_Api.md#contentv1mediasavepost) | **POST** /content/v1/media/save | Изменение медиа контента КТ
*_Api* | [**contentV1ObjectAllGet**](docs/Api/_Api.md#contentv1objectallget) | **GET** /content/v1/object/all | Категория товаров
*_Api* | [**contentV1ObjectCharacteristicsListFilterGet**](docs/Api/_Api.md#contentv1objectcharacteristicslistfilterget) | **GET** /content/v1/object/characteristics/list/filter | Характеристики для создания КТ по всем подкатегориям
*_Api* | [**contentV1ObjectCharacteristicsObjectNameGet**](docs/Api/_Api.md#contentv1objectcharacteristicsobjectnameget) | **GET** /content/v1/object/characteristics/{objectName} | Характеристики для создания КТ для категории товара
*_Api* | [**contentV1ObjectParentAllGet**](docs/Api/_Api.md#contentv1objectparentallget) | **GET** /content/v1/object/parent/all | Родительские категории товаров
*_Api* | [**publicApiV1RevokeDiscountsPost**](docs/Api/_Api.md#publicapiv1revokediscountspost) | **POST** /public/api/v1/revokeDiscounts | Сброс скидок для номенклатур
*_Api* | [**publicApiV1RevokePromocodesPost**](docs/Api/_Api.md#publicapiv1revokepromocodespost) | **POST** /public/api/v1/revokePromocodes | Сброс промокодов для номенклатур
*_Api* | [**publicApiV1UpdateDiscountsPost**](docs/Api/_Api.md#publicapiv1updatediscountspost) | **POST** /public/api/v1/updateDiscounts | Установка скидок
*_Api* | [**publicApiV1UpdatePromocodesPost**](docs/Api/_Api.md#publicapiv1updatepromocodespost) | **POST** /public/api/v1/updatePromocodes | Установка промокодов для номенклатур

## Documentation For Models

 - [Apiv3ordersordermetasgtinSgtin](docs/Model/Apiv3ordersordermetasgtinSgtin.md)
 - [Apiv3stockswarehouseStocks](docs/Model/Apiv3stockswarehouseStocks.md)
 - [CardsFilterBody](docs/Model/CardsFilterBody.md)
 - [CardsUpdateBody](docs/Model/CardsUpdateBody.md)
 - [Contentv1cardscursorlistSort](docs/Model/Contentv1cardscursorlistSort.md)
 - [Contentv1cardscursorlistSortCursor](docs/Model/Contentv1cardscursorlistSortCursor.md)
 - [Contentv1cardscursorlistSortFilter](docs/Model/Contentv1cardscursorlistSortFilter.md)
 - [Contentv1cardscursorlistSortSort](docs/Model/Contentv1cardscursorlistSortSort.md)
 - [Contentv1cardsupdateSizes](docs/Model/Contentv1cardsupdateSizes.md)
 - [Contentv1cardsuploadaddCards](docs/Model/Contentv1cardsuploadaddCards.md)
 - [Contentv1cardsuploadaddSizes](docs/Model/Contentv1cardsuploadaddSizes.md)
 - [CursorListBody](docs/Model/CursorListBody.md)
 - [DetailReportItem](docs/Model/DetailReportItem.md)
 - [Error](docs/Model/Error.md)
 - [ExcItem](docs/Model/ExcItem.md)
 - [IncomesItem](docs/Model/IncomesItem.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse20010Data](docs/Model/InlineResponse20010Data.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse20011Data](docs/Model/InlineResponse20011Data.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse20013](docs/Model/InlineResponse20013.md)
 - [InlineResponse20013Data](docs/Model/InlineResponse20013Data.md)
 - [InlineResponse20014](docs/Model/InlineResponse20014.md)
 - [InlineResponse20014Data](docs/Model/InlineResponse20014Data.md)
 - [InlineResponse20015](docs/Model/InlineResponse20015.md)
 - [InlineResponse20016](docs/Model/InlineResponse20016.md)
 - [InlineResponse20016Data](docs/Model/InlineResponse20016Data.md)
 - [InlineResponse20017](docs/Model/InlineResponse20017.md)
 - [InlineResponse20017Data](docs/Model/InlineResponse20017Data.md)
 - [InlineResponse20018](docs/Model/InlineResponse20018.md)
 - [InlineResponse20019](docs/Model/InlineResponse20019.md)
 - [InlineResponse20019Data](docs/Model/InlineResponse20019Data.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse20020](docs/Model/InlineResponse20020.md)
 - [InlineResponse20021](docs/Model/InlineResponse20021.md)
 - [InlineResponse20021Stocks](docs/Model/InlineResponse20021Stocks.md)
 - [InlineResponse20022](docs/Model/InlineResponse20022.md)
 - [InlineResponse20023](docs/Model/InlineResponse20023.md)
 - [InlineResponse20024](docs/Model/InlineResponse20024.md)
 - [InlineResponse20024Orders](docs/Model/InlineResponse20024Orders.md)
 - [InlineResponse20025](docs/Model/InlineResponse20025.md)
 - [InlineResponse20026](docs/Model/InlineResponse20026.md)
 - [InlineResponse20026Orders](docs/Model/InlineResponse20026Orders.md)
 - [InlineResponse20027](docs/Model/InlineResponse20027.md)
 - [InlineResponse20028](docs/Model/InlineResponse20028.md)
 - [InlineResponse20029](docs/Model/InlineResponse20029.md)
 - [InlineResponse20029Stickers](docs/Model/InlineResponse20029Stickers.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse20030](docs/Model/InlineResponse20030.md)
 - [InlineResponse20030Adverts](docs/Model/InlineResponse20030Adverts.md)
 - [InlineResponse20031](docs/Model/InlineResponse20031.md)
 - [InlineResponse20032](docs/Model/InlineResponse20032.md)
 - [InlineResponse20032Intervals](docs/Model/InlineResponse20032Intervals.md)
 - [InlineResponse20032Params](docs/Model/InlineResponse20032Params.md)
 - [InlineResponse20033](docs/Model/InlineResponse20033.md)
 - [InlineResponse2003Data](docs/Model/InlineResponse2003Data.md)
 - [InlineResponse2003DataCards](docs/Model/InlineResponse2003DataCards.md)
 - [InlineResponse2003DataCursor](docs/Model/InlineResponse2003DataCursor.md)
 - [InlineResponse2003DataSizes](docs/Model/InlineResponse2003DataSizes.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2004Data](docs/Model/InlineResponse2004Data.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2005Data](docs/Model/InlineResponse2005Data.md)
 - [InlineResponse2005Sizes](docs/Model/InlineResponse2005Sizes.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2007Data](docs/Model/InlineResponse2007Data.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2008Data](docs/Model/InlineResponse2008Data.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse2009Data](docs/Model/InlineResponse2009Data.md)
 - [InlineResponse201](docs/Model/InlineResponse201.md)
 - [MediaFileBody](docs/Model/MediaFileBody.md)
 - [MediaSaveBody](docs/Model/MediaSaveBody.md)
 - [MetaSgtinBody](docs/Model/MetaSgtinBody.md)
 - [Next](docs/Model/Next.md)
 - [Order](docs/Model/Order.md)
 - [OrderAddress](docs/Model/OrderAddress.md)
 - [OrderUser](docs/Model/OrderUser.md)
 - [OrdersItem](docs/Model/OrdersItem.md)
 - [OrdersStatusBody](docs/Model/OrdersStatusBody.md)
 - [OrdersStickersBody](docs/Model/OrdersStickersBody.md)
 - [ResponseBodyError400](docs/Model/ResponseBodyError400.md)
 - [ResponseBodyError403](docs/Model/ResponseBodyError403.md)
 - [SalesItem](docs/Model/SalesItem.md)
 - [StocksItem](docs/Model/StocksItem.md)
 - [StocksWarehouseBody](docs/Model/StocksWarehouseBody.md)
 - [StocksWarehouseBody1](docs/Model/StocksWarehouseBody1.md)
 - [StocksWarehouseBody2](docs/Model/StocksWarehouseBody2.md)
 - [Supply](docs/Model/Supply.md)
 - [SupplyOrder](docs/Model/SupplyOrder.md)
 - [UploadAddBody](docs/Model/UploadAddBody.md)
 - [V0CpmBody](docs/Model/V0CpmBody.md)
 - [V1BarcodesBody](docs/Model/V1BarcodesBody.md)
 - [V1DelBody](docs/Model/V1DelBody.md)
 - [V1InsBody](docs/Model/V1InsBody.md)
 - [V1PricesBody](docs/Model/V1PricesBody.md)
 - [V3SuppliesBody](docs/Model/V3SuppliesBody.md)

## Documentation For Authorization


## HeaderApiKey

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author



