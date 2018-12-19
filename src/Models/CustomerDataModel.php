<?php

namespace ItCenter\BelTransSat\Models;

/**
 * This class is generated from the following WSDL:
 * http://server-01.beltranssat.by:22899/ws/vrp?xsd=1
 */
class CustomerDataModel
{
    /**
     * latitude
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var double
     */
    public $latitude;

    /**
     * longitude
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var double
     */
    public $longitude;

    /**
     * weight
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var double
     */
    public $weight;

    /**
     * volume
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var double
     */
    public $volume;

    /**
     * readyTime
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $readyTime;

    /**
     * dueTime
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $dueTime;

    /**
     * serviceTime
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $serviceTime;

    /**
     * id
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $id;

    /**
     * name
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $name;

    /**
     * address
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $address;

    /**
     * label
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $label;

    /**
     * text1
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $text1;

    /**
     * text2
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $text2;

    /**
     * text3
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $text3;

    /**
     * text4
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $text4;

    /**
     * text5
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $text5;

    /**
     * extData
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $extData;

    /**
     * orderNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $orderNumber;

    /**
     * phoneNumbers
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $phoneNumbers;

    /**
     * costs
     *
     * The property has the following characteristics/restrictions:
     *
     * @var \ItCenter\BelTransSat\Models\CostWrapper[]
     */
    public $costs;

    /**
     * zoneId
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $zoneId;

    /**
     * radius
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $radius;

    /**
     * deliveryDate
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:dateTime
     *
     * @var string
     */
    public $deliveryDate;

    /**
     * priority
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $priority;

    /**
     * insertionPriority
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $insertionPriority;

    /**
     * goods
     *
     * The property has the following characteristics/restrictions:
     *
     * @var \ItCenter\BelTransSat\Models\GoodWrapper[]
     */
    public $goods;
}
