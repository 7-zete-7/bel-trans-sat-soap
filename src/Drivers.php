<?php

namespace ItCenter\BelTransSat;

use SoapClient as BaseSoapClient;
use ItCenter\BelTransSat\Models\DriverModel;
use ItCenter\BelTransSat\Models\AddDriverRequest;
use ItCenter\BelTransSat\Models\DeleteDriverRequest;
use ItCenter\BelTransSat\Models\GetDriverRequest;
use ItCenter\BelTransSat\Models\GetDriversIdsRequest;
use ItCenter\BelTransSat\Models\UpdateDriverRequest;

/**
 * This class is generated from the following WSDL:
 * http://gps.beltranssat.by/vrp-rs/ws/drivers?wsdl
 */
class Drivers extends BaseSoapClient
{
    protected $classMap = array(
        'addDriver' => '\\ItCenter\\BelTransSat\\Models\\AddDriverRequest',
        'addDriverResponse' => '\\ItCenter\\BelTransSat\\Models\\AddDriverResponse',
        'deleteDriver' => '\\ItCenter\\BelTransSat\\Models\\DeleteDriverRequest',
        'deleteDriverResponse' => '\\ItCenter\\BelTransSat\\Models\\DeleteDriverResponse',
        'getDriver' => '\\ItCenter\\BelTransSat\\Models\\GetDriverRequest',
        'getDriverResponse' => '\\ItCenter\\BelTransSat\\Models\\GetDriverResponse',
        'getDriversIds' => '\\ItCenter\\BelTransSat\\Models\\GetDriversIdsRequest',
        'getDriversIdsResponse' => '\\ItCenter\\BelTransSat\\Models\\GetDriversIdsResponse',
        'updateDriver' => '\\ItCenter\\BelTransSat\\Models\\UpdateDriverRequest',
        'updateDriverResponse' => '\\ItCenter\\BelTransSat\\Models\\UpdateDriverResponse',
        'driverJaxb' => '\\ItCenter\\BelTransSat\\Models\\DriverModel',
    );

    /**
     * Constructor.
     *
     * @param string $wsdl WSDL file
     * @param array(string=>mixed) $options Options array
     */
    public function __construct($wsdl, array $options = array())
    {
        if (!isset($options['classmap'])) {
            $options['classmap'] = $this->getClassMap();
        }

        parent::__construct($wsdl, $options);
    }

    public function getClassMap()
    {
        return $this->classMap;
    }

    /**
     * addDriver
     *
     * @api
     *
     * @param \ItCenter\BelTransSat\Models\DriverModel $driver
     *
     * @return \ItCenter\BelTransSat\Models\AddDriverResponse
     */
    public function addDriver(DriverModel $driver)
    {
        $parameters = new AddDriverRequest();
        $parameters->driver = $driver;

        return $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
    }

    /**
     * updateDriver
     *
     * @api
     *
     * @param \ItCenter\BelTransSat\Models\DriverModel $driver
     *
     * @return \ItCenter\BelTransSat\Models\UpdateDriverResponse
     */
    public function updateDriver(DriverModel $driver)
    {
        $parameters = new UpdateDriverRequest();
        $parameters->driver = $driver;

        return $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
    }

    /**
     * deleteDriver
     *
     * @api
     *
     * @param string $driverId
     *
     * @return \ItCenter\BelTransSat\Models\DeleteDriverResponse
     */
    public function deleteDriver($driverId)
    {
        $parameters = new DeleteDriverRequest();
        $parameters->driverId = $driverId;

        return $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
    }

    /**
     * getDriversIds
     *
     * @api
     *
     * @return \ItCenter\BelTransSat\Models\GetDriversIdsResponse
     */
    public function getDriversIds()
    {
        $parameters = new GetDriversIdsRequest();

        return $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
    }

    /**
     * getDriver
     *
     * @api
     *
     * @param string $driverId
     *
     * @return \ItCenter\BelTransSat\Models\GetDriverResponse
     */
    public function getDriver($driverId)
    {
        $parameters = new GetDriverRequest();
        $parameters->driverId = $driverId;

        return $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
    }
}
