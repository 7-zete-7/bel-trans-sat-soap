<?php

namespace ItCenter\BelTransSat\Models;

/**
 * This class is generated from the following WSDL:
 * http://server-01.beltranssat.by:22899/ws/vrp?xsd=1
 */
class RoutePoint
{
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
     * orderNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $orderNumber;

    /**
     * arrivalTime
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:dateTime
     *
     * @var string
     */
    public $arrivalTime;

    /**
     * timeToNext
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var float
     */
    public $timeToNext;

    /**
     * distanceToNext
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var float
     */
    public $distanceToNext;

    /**
     * beltollDistanceToNext
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var float
     */
    public $beltollDistanceToNext;

    /**
     * token
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $token;

    /**
     * detailedData
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:customerDataJaxb
     *
     * @var \ItCenter\BelTransSat\Models\CustomerDataModel
     */
    public $detailedData;
}
