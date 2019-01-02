<?php

namespace Zete7\BelTransSat\Models;

/**
 * This class is generated from the following WSDL:
 * http://server-01.beltranssat.by:22899/ws/vrp?xsd=1
 */
class VrpOptimizeRequestResult
{
    /**
     * code
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:vrpRequestResultCode
     *
     * @var \Zete7\BelTransSat\Models\VrpRequestResultCode
     */
    public $code;

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
     * routeIds
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: 
     *
     * @var 
     */
    public $routeIds;

    /**
     * routeId
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int[]
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
}
