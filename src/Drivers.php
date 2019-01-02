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
     * @param mixed[] $options Options array
     */
    public function __construct($wsdl, array $options = array())
    {
        if (!isset($options['classmap'])) {
            $options['classmap'] = $this->getClassMap();
        }

        parent::__construct($wsdl, $options);
    }

    /**
     * @return string[]
     */
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
     * @return bool
     * @throws \Exception
     */
    public function addDriver(DriverModel $driver)
    {
        $parameters = new AddDriverRequest();
        $parameters->driver = $driver;

        /** @var \Zete7\BelTransSat\Models\AddDriverResponse $result */
        $result = $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
        if (!is_bool($result->return)) {
            throw new \Exception('Invalid response.');
        }

        return $result->return;
    }

    /**
     * updateDriver
     *
     * @api
     *
     * @param \Zete7\BelTransSat\Models\DriverModel $driver
     *
     * @return bool
     * @throws \Exception
     */
    public function updateDriver(DriverModel $driver)
    {
        $parameters = new UpdateDriverRequest();
        $parameters->driver = $driver;

        /** @var \Zete7\BelTransSat\Models\UpdateDriverResponse $result */
        $result = $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
        if (!is_bool($result->return)) {
            throw new \Exception('Invalid response.');
        }

        return $result->return;
    }

    /**
     * deleteDriver
     *
     * @api
     *
     * @param string $driverId
     *
     * @return bool
     * @throws \Exception
     */
    public function deleteDriver($driverId)
    {
        $parameters = new DeleteDriverRequest();
        $parameters->driverId = $driverId;

        /** @var \Zete7\BelTransSat\Models\DeleteDriverResponse $result */
        $result = $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
        if (!is_bool($result->return)) {
            throw new \Exception('Invalid response.');
        }

        return $result->return;
    }

    /**
     * getDriversIds
     *
     * @api
     *
     * @return string[]
     */
    public function getDriversIds()
    {
        $parameters = new GetDriversIdsRequest();

        /** @var \Zete7\BelTransSat\Models\GetDriversIdsResponse $result */
        $result = $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
        if (null === $result->driverId) {
            return array();
        } elseif (!is_array($result->driverId)) {
            return array($result->driverId);
        } else {
            return $result->driverId;
        }
    }

    /**
     * getDriver
     *
     * @api
     *
     * @param string $driverId
     *
     * @return \Zete7\BelTransSat\Models\DriverModel
     */
    public function getDriver($driverId)
    {
        $parameters = new GetDriverRequest();
        $parameters->driverId = $driverId;

        /** @var \Zete7\BelTransSat\Models\GetDriverResponse $result */
        $result = $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));

        return $result->driver;
    }
}
