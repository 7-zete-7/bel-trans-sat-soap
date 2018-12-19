<?php

namespace ItCenter\BelTransSat\Models;

/**
 * This class is generated from the following WSDL:
 * http://server-01.beltranssat.by:22899/ws/vrp?xsd=1
 */
class VrpRouteEditRequestResultCode
{
    const __OK = 'OK';
    const __NEAREST_STREET_NOT_EXISTS = 'NEAREST_STREET_NOT_EXISTS';
    const __PROGRAM_ERROR = 'PROGRAM_ERROR';
    const __DVRPTW_NOT_ALLOW = 'DVRPTW_NOT_ALLOW';
    const __DVRPTW_WRONG_DATA = 'DVRPTW_WRONG_DATA';

    /**
     * _
     *
     * The property can have one of the following values:
     * - self::__OK (OK)
     * - self::__NEAREST_STREET_NOT_EXISTS (NEAREST_STREET_NOT_EXISTS)
     * - self::__PROGRAM_ERROR (PROGRAM_ERROR)
     * - self::__DVRPTW_NOT_ALLOW (DVRPTW_NOT_ALLOW)
     * - self::__DVRPTW_WRONG_DATA (DVRPTW_WRONG_DATA)
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $_;
}
