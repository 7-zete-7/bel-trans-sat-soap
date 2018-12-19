<?php

namespace ItCenter\BelTransSat;

use SoapClient as BaseSoapClient;
use ItCenter\BelTransSat\Models\AddVehicleRequest;
use ItCenter\BelTransSat\Models\DeleteVehicleRequest;
use ItCenter\BelTransSat\Models\GetAllVehiclesRequest;
use ItCenter\BelTransSat\Models\GetVehicleRequest;
use ItCenter\BelTransSat\Models\GetVehiclesIdsRequest;
use ItCenter\BelTransSat\Models\SetVehicleDriverRequest;
use ItCenter\BelTransSat\Models\SetVehicleWorkTimeRequest;
use ItCenter\BelTransSat\Models\SetVehicleZonesRequest;
use ItCenter\BelTransSat\Models\UpdateVehicleRequest;

/**
 * This class is generated from the following WSDL:
 * http://gps.beltranssat.by/vrp-rs/ws/vehicles?wsdl
 */
class Vehicles extends BaseSoapClient
{
    protected $classMap = array(
        'addVehicle' => 'ItCenter\\BelTransSat\\Models\\AddVehicleRequest',
        'addVehicleResponse' => 'ItCenter\\BelTransSat\\Models\\AddVehicleResponse',
        'deleteVehicle' => 'ItCenter\\BelTransSat\\Models\\DeleteVehicleRequest',
        'deleteVehicleResponse' => 'ItCenter\\BelTransSat\\Models\\DeleteVehicleResponse',
        'getAllVehicles' => 'ItCenter\\BelTransSat\\Models\\GetAllVehiclesRequest',
        'getAllVehiclesResponse' => 'ItCenter\\BelTransSat\\Models\\GetAllVehiclesResponse',
        'getVehicle' => 'ItCenter\\BelTransSat\\Models\\GetVehicleRequest',
        'getVehicleResponse' => 'ItCenter\\BelTransSat\\Models\\GetVehicleResponse',
        'getVehiclesIds' => 'ItCenter\\BelTransSat\\Models\\GetVehiclesIdsRequest',
        'getVehiclesIdsResponse' => 'ItCenter\\BelTransSat\\Models\\GetVehiclesIdsResponse',
        'setVehicleDriver' => 'ItCenter\\BelTransSat\\Models\\SetVehicleDriverRequest',
        'setVehicleDriverResponse' => 'ItCenter\\BelTransSat\\Models\\SetVehicleDriverResponse',
        'setVehicleWorkTime' => 'ItCenter\\BelTransSat\\Models\\SetVehicleWorkTimeRequest',
        'setVehicleWorkTimeResponse' => 'ItCenter\\BelTransSat\\Models\\SetVehicleWorkTimeResponse',
        'setVehicleZones' => 'ItCenter\\BelTransSat\\Models\\SetVehicleZonesRequest',
        'setVehicleZonesResponse' => 'ItCenter\\BelTransSat\\Models\\SetVehicleZonesResponse',
        'updateVehicle' => 'ItCenter\\BelTransSat\\Models\\UpdateVehicleRequest',
        'updateVehicleResponse' => 'ItCenter\\BelTransSat\\Models\\UpdateVehicleResponse',
        'vehicleJaxb' => 'ItCenter\\BelTransSat\\Models\\VehicleModel',
    );

    /**
     * Constructor.
     *
     * @param string               $wsdl    WSDL file
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
     * deleteVehicle
     *
     * @api
     *
     * @param string $vehicleId
     *
     * @return \ItCenter\BelTransSat\Models\DeleteVehicleResponse
     */
    public function deleteVehicle($vehicleId)
    {
        $parameters = new DeleteVehicleRequest();
        $parameters->vehicleId = $vehicleId;

        return $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
    }

    /**
     * getVehiclesIds
     *
     * @api
     *
     * @return \ItCenter\BelTransSat\Models\GetVehiclesIdsResponse
     */
    public function getVehiclesIds()
    {
        $parameters = new GetVehiclesIdsRequest();

        return $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
    }

    /**
     * addVehicle
     *
     * @api
     *
     * @param \ItCenter\BelTransSat\Models\VehicleModel $vehicle
     *
     * @return \ItCenter\BelTransSat\Models\AddVehicleResponse
     */
    public function addVehicle($vehicle)
    {
        $parameters = new AddVehicleRequest();
        $parameters->vehicle = $vehicle;

        return $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
    }

    /**
     * updateVehicle
     *
     * @api
     *
     * @param \ItCenter\BelTransSat\Models\VehicleModel $vehicle
     *
     * @return \ItCenter\BelTransSat\Models\UpdateVehicleResponse
     */
    public function updateVehicle($vehicle)
    {
        $parameters = new UpdateVehicleRequest();
        $parameters->vehicle = $vehicle;

        return $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
    }

    /**
     * setVehicleZones
     *
     * @api
     *
     * @param string $vehicleId
     * @param string $zoneIds
     *
     * @return \ItCenter\BelTransSat\Models\SetVehicleZonesResponse
     */
    public function setVehicleZones($vehicleId, $zoneIds)
    {
        $parameters = new SetVehicleZonesRequest();
        $parameters->vehicleId = $vehicleId;
        $parameters->zoneIds = $zoneIds;

        return $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
    }

    /**
     * setVehicleDriver
     *
     * @api
     *
     * @param string $vehicleId
     * @param string $driverId
     *
     * @return \ItCenter\BelTransSat\Models\SetVehicleDriverResponse
     */
    public function setVehicleDriver($vehicleId, $driverId)
    {
        $parameters = new SetVehicleDriverRequest();
        $parameters->vehicleId = $vehicleId;
        $parameters->driverId = $driverId;

        return $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
    }

    /**
     * getAllVehicles
     *
     * @api
     * @deprecated
     *
     * @return \ItCenter\BelTransSat\Models\GetAllVehiclesResponse
     */
    public function getAllVehicles()
    {
        $parameters = new GetAllVehiclesRequest();

        return $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
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
     * @return \ItCenter\BelTransSat\Models\SetVehicleWorkTimeResponse
     */
    public function setVehicleWorkTime($vehicleId, $workBeginTime, $workEndTime)
    {
        $parameters = new SetVehicleWorkTimeRequest();
        $parameters->vehicleId = $vehicleId;
        $parameters->workBeginTime = $workBeginTime;
        $parameters->workEndTime = $workEndTime;

        return $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
    }

    /**
     * getVehicle
     *
     * @api
     *
     * @param string $vehicleId
     *
     * @return \ItCenter\BelTransSat\Models\GetVehicleResponse
     */
    public function getVehicle($vehicleId)
    {
        $parameters = new GetVehicleRequest();
        $parameters->vehicleId = $vehicleId;

        return $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
    }
}
