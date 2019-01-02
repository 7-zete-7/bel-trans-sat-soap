<?php

namespace Zete7\BelTransSat;

use SoapClient as BaseSoapClient;
use Zete7\BelTransSat\Models\AddVehicleRequest;
use Zete7\BelTransSat\Models\DeleteVehicleRequest;
use Zete7\BelTransSat\Models\GetAllVehiclesRequest;
use Zete7\BelTransSat\Models\GetVehicleRequest;
use Zete7\BelTransSat\Models\GetVehiclesIdsRequest;
use Zete7\BelTransSat\Models\SetVehicleDriverRequest;
use Zete7\BelTransSat\Models\SetVehicleWorkTimeRequest;
use Zete7\BelTransSat\Models\SetVehicleZonesRequest;
use Zete7\BelTransSat\Models\UpdateVehicleRequest;

/**
 * This class is generated from the following WSDL:
 * http://gps.beltranssat.by/vrp-rs/ws/vehicles?wsdl
 */
class Vehicles extends BaseSoapClient
{
    protected $classMap = array(
        'addVehicle' => 'Zete7\\BelTransSat\\Models\\AddVehicleRequest',
        'addVehicleResponse' => 'Zete7\\BelTransSat\\Models\\AddVehicleResponse',
        'deleteVehicle' => 'Zete7\\BelTransSat\\Models\\DeleteVehicleRequest',
        'deleteVehicleResponse' => 'Zete7\\BelTransSat\\Models\\DeleteVehicleResponse',
        'getAllVehicles' => 'Zete7\\BelTransSat\\Models\\GetAllVehiclesRequest',
        'getAllVehiclesResponse' => 'Zete7\\BelTransSat\\Models\\GetAllVehiclesResponse',
        'getVehicle' => 'Zete7\\BelTransSat\\Models\\GetVehicleRequest',
        'getVehicleResponse' => 'Zete7\\BelTransSat\\Models\\GetVehicleResponse',
        'getVehiclesIds' => 'Zete7\\BelTransSat\\Models\\GetVehiclesIdsRequest',
        'getVehiclesIdsResponse' => 'Zete7\\BelTransSat\\Models\\GetVehiclesIdsResponse',
        'setVehicleDriver' => 'Zete7\\BelTransSat\\Models\\SetVehicleDriverRequest',
        'setVehicleDriverResponse' => 'Zete7\\BelTransSat\\Models\\SetVehicleDriverResponse',
        'setVehicleWorkTime' => 'Zete7\\BelTransSat\\Models\\SetVehicleWorkTimeRequest',
        'setVehicleWorkTimeResponse' => 'Zete7\\BelTransSat\\Models\\SetVehicleWorkTimeResponse',
        'setVehicleZones' => 'Zete7\\BelTransSat\\Models\\SetVehicleZonesRequest',
        'setVehicleZonesResponse' => 'Zete7\\BelTransSat\\Models\\SetVehicleZonesResponse',
        'updateVehicle' => 'Zete7\\BelTransSat\\Models\\UpdateVehicleRequest',
        'updateVehicleResponse' => 'Zete7\\BelTransSat\\Models\\UpdateVehicleResponse',
        'vehicleJaxb' => 'Zete7\\BelTransSat\\Models\\VehicleModel',
    );

    /**
     * Constructor.
     *
     * @param string  $wsdl    WSDL file
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
     * deleteVehicle
     *
     * @api
     *
     * @param string $vehicleId
     *
     * @return bool
     * @throws \Exception
     */
    public function deleteVehicle($vehicleId)
    {
        $parameters = new DeleteVehicleRequest();
        $parameters->vehicleId = $vehicleId;

        /** @var \Zete7\BelTransSat\Models\DeleteVehicleResponse $result */
        $result = $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
        if (!is_bool($result->return)) {
            throw new \Exception('Invalid response.');
        }

        return $result->return;
    }

    /**
     * getVehiclesIds
     *
     * @api
     *
     * @return string[]
     */
    public function getVehiclesIds()
    {
        $parameters = new GetVehiclesIdsRequest();

        /** @var \Zete7\BelTransSat\Models\GetVehiclesIdsResponse $result */
        $result = $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
        if (null === $result->vehicleId) {
            return array();
        } elseif (!is_array($result->vehicleId)) {
            return array($result->vehicleId);
        } else {
            return $result->vehicleId;
        }
    }

    /**
     * addVehicle
     *
     * @api
     *
     * @param \Zete7\BelTransSat\Models\VehicleModel $vehicle
     *
     * @return bool
     * @throws \Exception
     */
    public function addVehicle($vehicle)
    {
        $parameters = new AddVehicleRequest();
        $parameters->vehicle = $vehicle;

        /** @var \Zete7\BelTransSat\Models\AddVehicleResponse $result */
        $result = $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
        if (!is_bool($result)) {
            throw new \Exception('Invalid response.');
        }

        return $result->return;
    }

    /**
     * updateVehicle
     *
     * @api
     *
     * @param \Zete7\BelTransSat\Models\VehicleModel $vehicle
     *
     * @return bool
     * @throws \Exception
     */
    public function updateVehicle($vehicle)
    {
        $parameters = new UpdateVehicleRequest();
        $parameters->vehicle = $vehicle;

        /** @var \Zete7\BelTransSat\Models\UpdateVehicleResponse $result */
        $result = $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
        if (!is_bool($result->return)) {
            throw new \Exception('Invalid response.');
        }

        return $result->return;
    }

    /**
     * setVehicleZones
     *
     * @api
     *
     * @param string $vehicleId
     * @param string $zoneIds
     *
     * @return bool
     * @throws \Exception
     */
    public function setVehicleZones($vehicleId, $zoneIds)
    {
        $parameters = new SetVehicleZonesRequest();
        $parameters->vehicleId = $vehicleId;
        $parameters->zoneIds = $zoneIds;

        /** @var \Zete7\BelTransSat\Models\SetVehicleZonesResponse $result */
        $result = $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
        if (!is_bool($result->return)) {
            throw new \Exception('Invalid response.');
        }

        return $result->return;
    }

    /**
     * setVehicleDriver
     *
     * @api
     *
     * @param string $vehicleId
     * @param string $driverId
     *
     * @return bool
     * @throws \Exception
     */
    public function setVehicleDriver($vehicleId, $driverId)
    {
        $parameters = new SetVehicleDriverRequest();
        $parameters->vehicleId = $vehicleId;
        $parameters->driverId = $driverId;

        /** @var \Zete7\BelTransSat\Models\SetVehicleDriverResponse $result */
        $result = $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
        if (!is_bool($result->return)) {
            throw new \Exception('Invalid response');
        }

        return $result->return;
    }

    /**
     * getAllVehicles
     *
     * @api
     * @deprecated
     *
     * @return \Zete7\BelTransSat\Models\VehicleModel[]
     */
    public function getAllVehicles()
    {
        $parameters = new GetAllVehiclesRequest();

        /** @var \Zete7\BelTransSat\Models\GetAllVehiclesResponse $result */
        $result = $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
        if (null === $result->return) {
            return array();
        } elseif (!is_array($result->return)) {
            return array($result->return);
        } else {
            return $result->return;
        }
    }

    /**
     * setVehicleWorkTime
     *
     * @api
     *
     * @param string $vehicleId
     * @param int $workBeginTime
     * @param int $workEndTime
     *
     * @return bool
     * @throws \Exception
     */
    public function setVehicleWorkTime($vehicleId, $workBeginTime, $workEndTime)
    {
        $parameters = new SetVehicleWorkTimeRequest();
        $parameters->vehicleId = $vehicleId;
        $parameters->workBeginTime = $workBeginTime;
        $parameters->workEndTime = $workEndTime;

        /** @var \Zete7\BelTransSat\Models\SetVehicleWorkTimeResponse $result */
        $result = $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
        if (!is_bool($result->return)) {
            throw new \Exception('Invalid reponse.');
        }

        return $result->return;
    }

    /**
     * getVehicle
     *
     * @api
     *
     * @param string $vehicleId
     *
     * @return \Zete7\BelTransSat\Models\VehicleModel
     */
    public function getVehicle($vehicleId)
    {
        $parameters = new GetVehicleRequest();
        $parameters->vehicleId = $vehicleId;

        /** @var \Zete7\BelTransSat\Models\GetVehicleResponse $result */
        $result = $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));

        return $result->vehicle;
    }
}
