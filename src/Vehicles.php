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
     * @return \Zete7\BelTransSat\Models\DeleteVehicleResponse
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
     * @return \Zete7\BelTransSat\Models\GetVehiclesIdsResponse
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
     * @param \Zete7\BelTransSat\Models\VehicleModel $vehicle
     *
     * @return \Zete7\BelTransSat\Models\AddVehicleResponse
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
     * @param \Zete7\BelTransSat\Models\VehicleModel $vehicle
     *
     * @return \Zete7\BelTransSat\Models\UpdateVehicleResponse
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
     * @return \Zete7\BelTransSat\Models\SetVehicleZonesResponse
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
     * @return \Zete7\BelTransSat\Models\SetVehicleDriverResponse
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
     * @return \Zete7\BelTransSat\Models\GetAllVehiclesResponse
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
     * @return \Zete7\BelTransSat\Models\SetVehicleWorkTimeResponse
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
     * @return \Zete7\BelTransSat\Models\GetVehicleResponse
     */
    public function getVehicle($vehicleId)
    {
        $parameters = new GetVehicleRequest();
        $parameters->vehicleId = $vehicleId;

        return $this->__soapCall(__FUNCTION__, array('parameters' => $parameters));
    }
}
