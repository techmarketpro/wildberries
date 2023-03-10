<?php
/**
 * ExcItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Wildberries\Client
 * @author   Wildberries Codegen team
 * @link     https://github.com/Wildberries-api/Wildberries-codegen
 */

/**
 * API продавца
 *
 * # Общее описание <style> .version {   border: 0.1rem #b3b3b3 solid;   background-color: #F9F9F9;   color: #32329FE6;   height: 25px;   width: 150px;   text-align: center }, </style> <style> .warning {   border: 1.6rem #b3b3b3 solid;   background-color: #F9F9F9;   color: #247706;   text-align: center } </style> <style> .langChange {   text-align: left;   padding: 2px 222px 2px 18px; } </style>  Wildberries API предоставляет продавцам возможность управления магазином и получения оперативной и статистической информации по протоколу HTTP RestAPI. <br> Описание API предоставляется в формате [Wildberries](https://Wildberries.io/) (Open API) и может быть использовано для импорта в другие инструменты (такие как PostMan) или генерации клиентского кода на различных языках программирования с помощью [Wildberries CodeGen](https://Wildberries.io/tools/Wildberries-codegen/)  <ul> <li> Описание в оригинальном Wildberries-формате <a href=\"/Wildberries\">Wildberries</a> <li> OpenAPI-файл <a href=\"/Wildberries.yaml\">Wildberries.yaml</a> </ul>  <br> Для ручной проверки API вы можете использовать: <ul> <li> Под ОС Windows - [PostMan](https://www.postman.com/) <li> Под ОС Linux - [curl](https://curl.se/)  </ul> <br>  ## Поддержка Техническая поддержка осуществляется через диалоги в личном кабинете продавца. При создании нового обращения в техподдержку используйте категорию API. <br> Новости и изменения, касающиеся API, публикуются в [новостной ленте Wildberries](https://seller.wildberries.ru/news). <br> Также готовятся к публикации Release Notes по API на сайте.  После их выхода будет сделан соответствующий анонс. <br> <br> <br>  ## Авторизация Авторизация осуществляется по токенам API, которые  владелец личного кабинета (главный пользователь) самостоятельно  генерирует в разделе   [Профиль --> Настройки --> Доступ к новому API](https://seller.wildberries.ru/supplier-settings/access-to-new-api). <br>Обратите внимание, что токен отображается ТОЛЬКО в момент создания. Его надо сохранить, потому что больше его отобразить будет нельзя. <br>Созданный токен следует добавлять в каждый запрос, прибавляя к запросу заголовок (http-header) формата `Authorization: .........`. <br> <br>Внимание! Изменился домен для методов статистики, актуальный: https://statistics-api.wildberries.ru <br> <br> <br> ## Форматы ### Дата и время Во всех методах API статистики дата и время передаются в формате [RFC3339](https://datatracker.ietf.org/doc/html/rfc3339).  <br> В большинстве случаев вы можете передать дату или дату со временем. Если время не указано, оно принимается равным 00:00:00. Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает часовой пояс UTC. При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br> Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul> <br> ## Обновления #### 2023.02.14 v1.8    Добавлено описание API рекомендаций #### 2023.01.13 v1.7    Добавлено описание API рекламы #### 2022.12.21 v1.6 Добавлена инструкция по загрузке статистики в Excel #### 2022.12.15 v1.5  Новая авторизация для методов API статистики 2022.12.15 в v1.5: #### 2022.10.31 v1.4  Метод будет отключен 2022.10.31 в v1.4: <ul> <li> `/content/v1/cards/list` </ul>  #### 2022.09.20 v1.2  В связи с переходом на новое API Контента старые методы будут отключены. К их числу относятся: <ul> <li> `/card/_*` <li> `/api/v1/config/_*` <li> `/api/v1/directory/_*` </ul> Данные методы теперь возвращают код 404.  Новое API Контента описано в данном документе в разделах Контент / * <br> <br>
 *
 * OpenAPI spec version: 1.8
 * 
 * Generated by: https://github.com/Wildberries-api/Wildberries-codegen.git
 * Wildberries Codegen version: 3.0.41
 */
/**
 * NOTE: This class is auto generated by the Wildberries code generator program.
 * https://github.com/Wildberries-api/Wildberries-codegen
 * Do not edit the class manually.
 */

namespace Wildberries\Client\Model;

use \ArrayAccess;
use \Wildberries\Client\ObjectSerializer;

/**
 * ExcItem Class Doc Comment
 *
 * @category Class
 * @package  Wildberries\Client
 * @author   Wildberries Codegen team
 * @link     https://github.com/Wildberries-api/Wildberries-codegen
 */
class ExcItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $WildberriesModelName = 'ExcItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $WildberriesTypes = [
        'id' => 'int',
'finished_price' => 'float',
'operation_type_id' => 'int',
'fiscal_dt' => '\DateTime',
'doc_number' => 'int',
'fn_number' => 'string',
'reg_number' => 'string',
'excise' => 'string',
'date' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $WildberriesFormats = [
        'id' => null,
'finished_price' => null,
'operation_type_id' => null,
'fiscal_dt' => 'date-time',
'doc_number' => null,
'fn_number' => null,
'reg_number' => null,
'excise' => null,
'date' => 'date-time'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function WildberriesTypes()
    {
        return self::$WildberriesTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function WildberriesFormats()
    {
        return self::$WildberriesFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'finished_price' => 'finishedPrice',
'operation_type_id' => 'operationTypeId',
'fiscal_dt' => 'fiscalDt',
'doc_number' => 'docNumber',
'fn_number' => 'fnNumber',
'reg_number' => 'regNumber',
'excise' => 'excise',
'date' => 'date'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'finished_price' => 'setFinishedPrice',
'operation_type_id' => 'setOperationTypeId',
'fiscal_dt' => 'setFiscalDt',
'doc_number' => 'setDocNumber',
'fn_number' => 'setFnNumber',
'reg_number' => 'setRegNumber',
'excise' => 'setExcise',
'date' => 'setDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'finished_price' => 'getFinishedPrice',
'operation_type_id' => 'getOperationTypeId',
'fiscal_dt' => 'getFiscalDt',
'doc_number' => 'getDocNumber',
'fn_number' => 'getFnNumber',
'reg_number' => 'getRegNumber',
'excise' => 'getExcise',
'date' => 'getDate'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$WildberriesModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['finished_price'] = isset($data['finished_price']) ? $data['finished_price'] : null;
        $this->container['operation_type_id'] = isset($data['operation_type_id']) ? $data['operation_type_id'] : null;
        $this->container['fiscal_dt'] = isset($data['fiscal_dt']) ? $data['fiscal_dt'] : null;
        $this->container['doc_number'] = isset($data['doc_number']) ? $data['doc_number'] : null;
        $this->container['fn_number'] = isset($data['fn_number']) ? $data['fn_number'] : null;
        $this->container['reg_number'] = isset($data['reg_number']) ? $data['reg_number'] : null;
        $this->container['excise'] = isset($data['excise']) ? $data['excise'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Внутренний код операции
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets finished_price
     *
     * @return float
     */
    public function getFinishedPrice()
    {
        return $this->container['finished_price'];
    }

    /**
     * Sets finished_price
     *
     * @param float $finished_price Цена товара с учетом НДС
     *
     * @return $this
     */
    public function setFinishedPrice($finished_price)
    {
        $this->container['finished_price'] = $finished_price;

        return $this;
    }

    /**
     * Gets operation_type_id
     *
     * @return int
     */
    public function getOperationTypeId()
    {
        return $this->container['operation_type_id'];
    }

    /**
     * Sets operation_type_id
     *
     * @param int $operation_type_id Тип операции (`1` - продажа, `2` - возврат)
     *
     * @return $this
     */
    public function setOperationTypeId($operation_type_id)
    {
        $this->container['operation_type_id'] = $operation_type_id;

        return $this;
    }

    /**
     * Gets fiscal_dt
     *
     * @return \DateTime
     */
    public function getFiscalDt()
    {
        return $this->container['fiscal_dt'];
    }

    /**
     * Sets fiscal_dt
     *
     * @param \DateTime $fiscal_dt Время фискализации. Передается с указанием часового пояса.
     *
     * @return $this
     */
    public function setFiscalDt($fiscal_dt)
    {
        $this->container['fiscal_dt'] = $fiscal_dt;

        return $this;
    }

    /**
     * Gets doc_number
     *
     * @return int
     */
    public function getDocNumber()
    {
        return $this->container['doc_number'];
    }

    /**
     * Sets doc_number
     *
     * @param int $doc_number Номер фискального документа
     *
     * @return $this
     */
    public function setDocNumber($doc_number)
    {
        $this->container['doc_number'] = $doc_number;

        return $this;
    }

    /**
     * Gets fn_number
     *
     * @return string
     */
    public function getFnNumber()
    {
        return $this->container['fn_number'];
    }

    /**
     * Sets fn_number
     *
     * @param string $fn_number Номер фискального накопителя
     *
     * @return $this
     */
    public function setFnNumber($fn_number)
    {
        $this->container['fn_number'] = $fn_number;

        return $this;
    }

    /**
     * Gets reg_number
     *
     * @return string
     */
    public function getRegNumber()
    {
        return $this->container['reg_number'];
    }

    /**
     * Sets reg_number
     *
     * @param string $reg_number Регистрационный номер ККТ
     *
     * @return $this
     */
    public function setRegNumber($reg_number)
    {
        $this->container['reg_number'] = $reg_number;

        return $this;
    }

    /**
     * Gets excise
     *
     * @return string
     */
    public function getExcise()
    {
        return $this->container['excise'];
    }

    /**
     * Sets excise
     *
     * @param string $excise Акциз (он же киз)
     *
     * @return $this
     */
    public function setExcise($excise)
    {
        $this->container['excise'] = $excise;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date Дата появления данных в системе. Передается с указанием часового пояса.
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange] 
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange] 
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange] 
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
