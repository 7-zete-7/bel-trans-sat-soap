<?php

namespace Zete7\BelTransSat\Models;

/**
 * This class is generated from the following WSDL:
 * http://server-01.beltranssat.by:22899/ws/vrp?xsd=1
 */
class RouteChangeEditPointPositionRequestJaxb
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
     * solutionId
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $solutionId;

    /**
     * isDepot
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    public $isDepot;

    /**
     * prevPointId
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $prevPointId;

    /**
     * newLatitude
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var float
     */
    public $newLatitude;

    /**
     * newLongitude
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var float
     */
    public $newLongitude;

    /**
     * newReadyTime
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var float
     */
    public $newReadyTime;

    /**
     * newDueTime
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var float
     */
    public $newDueTime;

    /**
     * newServiceTime
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:double
     *
     * @var float
     */
    public $newServiceTime;

    /**
     * forced
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    public $forced;
}
