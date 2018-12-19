<?php

namespace ItCenter\BelTransSat\Models;

/**
 * This class is generated from the following WSDL:
 * http://server-01.beltranssat.by:22899/ws/vrp?xsd=1
 */
class RoutesChangesResultCode
{
    const __OK = 'OK';
    const __PROGRAM_ERROR = 'PROGRAM_ERROR';

    /**
     * _
     *
     * The property can have one of the following values:
     * - self::__OK (OK)
     * - self::__PROGRAM_ERROR (PROGRAM_ERROR)
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $_;
}
