<?php

namespace Zete7\BelTransSat\Models;

/**
 * This class is generated from the following WSDL:
 * http://server-01.beltranssat.by:22899/ws/vrp?xsd=1
 */
class RouteModel
{
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
     * driverId
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $driverId;

    /**
     * id
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $id;

    /**
     * lastModified
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:dateTime
     *
     * @var string
     */
    public $lastModified;

    /**
     * locked
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    public $locked;

    /**
     * userId
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $userId;

    /**
     * vehicleId
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $vehicleId;
}
