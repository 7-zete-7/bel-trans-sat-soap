<?php

namespace Zete7\BelTransSat\Models;

/**
 * This class is generated from the following WSDL:
 * http://server-01.beltranssat.by:22899/ws/vehicles?xsd=1
 */
class VehicleModel
{
    /**
     * id
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $id = null;

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
     * mark
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $mark;

    /**
     * number
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $number;

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
     * weightCapacity
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var float
     */
    public $weightCapacity;

    /**
     * volumeCapacity
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var float
     */
    public $volumeCapacity;

    /**
     * maxPoints
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $maxPoints;

    /**
     * kmCost
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var float
     */
    public $kmCost;

    /**
     * hourCost
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var float
     */
    public $hourCost;

    /**
     * beltollCost
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var float
     */
    public $beltollCost;

    /**
     * workBeginTime
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $workBeginTime;

    /**
     * workEndTime
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $workEndTime;

    /**
     * imei
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $imei = null;

    /**
     * driverId
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $driverId = null;

    /**
     * depotId
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $depotId = null;
}
