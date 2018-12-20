<?php

namespace Zete7\BelTransSat\Models;

/**
 * This class is generated from the following WSDL:
 * http://server-01.beltranssat.by:22899/ws/vrp?xsd=1
 */
class UpdatedPointData
{
    /**
     * routeId
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $routeId;

    /**
     * pointId
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $pointId;

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
     * status
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $status;

    /**
     * status
     *
     * The property has the following characteristics/restrictions:
     *
     * @var \Zete7\BelTransSat\Models\CostModel[]
     */
    public $costs;

    /**
     * discount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var double
     */
    public $discount;

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
     * distanceCan
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var double
     */
    public $distanceCan;

    /**
     * goods
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:sequence of tns:good
     *
     * @var \Zete7\BelTransSat\Models\GoodModel[]
     */
    public $goods;

    /**
     * photoIds
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:sequence of xs:string
     *
     * @var array(array('photoId' => string))
     */
    public $photoIds;

    /**
     * lastModified
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:dateTime
     *
     * @var string
     */
    public $lastModified;
}
