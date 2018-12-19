<?php

namespace ItCenter\BelTransSat\Models;

/**
 * This class is generated from the following WSDL:
 * http://server-01.beltranssat.by:22899/ws/vrp?xsd=1
 */
class GoodModel
{
    /**
     * goodsId
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $goodsId;

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
     * amount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var float
     */
    public $amount;

    /**
     * warehouse
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $warehouse;

    /**
     * cost
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var float
     */
    public $cost;

    /**
     * discount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var float
     */
    public $discount;

    /**
     * status
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $status;

    /**
     * comment
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $comment;

    /**
     * hasDebt
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    public $hasDebt;
}
