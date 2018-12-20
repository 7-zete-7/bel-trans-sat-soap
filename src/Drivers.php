<?php

namespace Zete7\BelTransSat;

use SoapClient as BaseSoapClient;
use Zete7\BelTransSat\Models\DriverModel;
use Zete7\BelTransSat\Models\AddDriverRequest;
use Zete7\BelTransSat\Models\DeleteDriverRequest;
use Zete7\BelTransSat\Models\GetDriverRequest;
use Zete7\BelTransSat\Models\GetDriversIdsRequest;
use Zete7\BelTransSat\Models\UpdateDriverRequest;

/**
 * This class is generated from the following WSDL:
 * http://gps.beltranssat.by/vrp-rs/ws/drivers?wsdl
 */
class Drivers extends BaseSoapClient
{
    protected $classMap = array(
        'addDriver' => '\\Zete7\\BelTransSat\\Models\\AddDriverRequest',
        'addDriverResponse' => '\\Zete7\\BelTransSat\\Models\\AddDriverResponse',
        'deleteDriver' => '\\Zete7\\BelTransSat\\Models\\DeleteDriverRequest',
        'deleteDriverResponse' => '\\Zete7\\BelTransSat\\Models\\DeleteDriverResponse',
        'getDriver' => '\\Zete7\\BelTransSat\\Models\\GetDriverRequest',
        'getDriverResponse' => '\\Zete7\\BelTransSat\\Models\\GetDriverResponse',
        'getDriversIds' => '\\Zete7\\BelTransSat\\Models\\GetDriversIdsRequest',
        'getDriversIdsResponse' => '\\Zete7\\BelTransSat\\Models\\GetDriversIdsResponse',
        'updateDriver' => '\\Zete7\\BelTransSat\\Models\\UpdateDriverRequest',
        'updateDriverResponse' => '\\Zete7\\BelTransSat\\Models\\UpdateDriverResponse',
        'driverJaxb' => '\\Zete7\\BelTransSat\\Models\\DriverModel',
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
     * @param \Zete7\BelTransSat\Models\DriverModel $driver
     *
     * @return \Zete7\BelTransSat\Models\AddDriverResponse
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
     * @param \Zete7\BelTransSat\Models\DriverModel $driver
     *
     * @return \Zete7\BelTransSat\Models\UpdateDriverResponse
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
     * @return \Zete7\BelTransSat\Models\DeleteDriverResponse
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
     * @return \Zete7\BelTransSat\Models\GetDriversIdsResponse
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
     * @return \Zete7\BelTransSat\Models\GetDriverResponse
     */
    public function getDriver($driverId)
    {
        $parameters = new GetDriverRequest();
        $parameters->driverId = $driverId;

        return $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
    }
}
