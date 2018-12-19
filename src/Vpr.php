<?php

namespace ItCenter\BelTransSat;

use ItCenter\BelTransSat\Models\AddPointRequest;
use ItCenter\BelTransSat\Models\ChangeRouteInsertPointRequest;
use ItCenter\BelTransSat\Models\GetAllRoutePointsRequest;
use ItCenter\BelTransSat\Models\GetAllRoutesRequest;
use ItCenter\BelTransSat\Models\GetCurrentPointsRequest;
use ItCenter\BelTransSat\Models\GetPointStatusRequest;
use ItCenter\BelTransSat\Models\GetRoutePointsRequest;
use ItCenter\BelTransSat\Models\GetRoutesRequest;
use ItCenter\BelTransSat\Models\GetSolutionRoutesRequest;
use ItCenter\BelTransSat\Models\GetUpdatesRequest;
use ItCenter\BelTransSat\Models\RemovePointRequest;
use ItCenter\BelTransSat\Models\RestorePointRequest;
use ItCenter\BelTransSat\Models\ServeRouteChangeAddRestRequest;
use ItCenter\BelTransSat\Models\ServeRouteChangeChangeVehicleTimeRequest;
use ItCenter\BelTransSat\Models\ServeRouteChangeEditPointPositionRequest;
use ItCenter\BelTransSat\Models\ServeRouteChangeRemovePointRequest;
use ItCenter\BelTransSat\Models\ServeRouteChangeRevertVehicleRequest;
use ItCenter\BelTransSat\Models\ServeVrpRequest;
use ItCenter\BelTransSat\Models\SetDriverToRouteRequest;
use ItCenter\BelTransSat\Models\SetRouteLockedStatusRequest;
use ItCenter\BelTransSat\Models\SetVehicleToRouteRequest;
use ItCenter\BelTransSat\Models\UpdatePointRequest;
use \SoapClient as BaseSoapClient;

/**
 * This class is generated from the following WSDL:
 * http://gps.beltranssat.by/vrp-rs/ws/vrp?wsdl
 */
class Vpr extends BaseSoapClient
{
    protected $classMap = array(
        'addPoint' => '\\ItCenter\\BelTransSat\\Models\\AddPointRequest',
        'addPointResponse' => '\\ItCenter\\BelTransSat\\Models\\AddPointResponse',
        'changeRouteInsertPoint' => '\\ItCenter\\BelTransSat\\Models\\ChangeRouteInsertPointRequest',
        'changeRouteInsertPointResponse' => '\\ItCenter\\BelTransSat\\Models\\ChangeRouteInsertPointResponse',
        'dataUpdates' => '\\ItCenter\\BelTransSat\\Models\\DataUpdatesModel',
        'getAllRoutePoints' => '\\ItCenter\\BelTransSat\\Models\\GetAllRoutePointsRequest',
        'getAllRoutePointsResponse' => '\\ItCenter\\BelTransSat\\Models\\GetAllRoutePointsResponse',
        'getAllRoutes' => '\\ItCenter\\BelTransSat\\Models\\GetAllRoutesRequest',
        'getAllRoutesResponse' => '\\ItCenter\\BelTransSat\\Models\\GetAllRoutesResponse',
        'getCurrentPoints' => '\\ItCenter\\BelTransSat\\Models\\GetCurrentPointsRequest',
        'getCurrentPointsResponse' => '\\ItCenter\\BelTransSat\\Models\\GetCurrentPointsResponse',
        'getPointStatus' => '\\ItCenter\\BelTransSat\\Models\\GetPointStatusRequest',
        'getPointStatusResponse' => '\\ItCenter\\BelTransSat\\Models\\GetPointStatusResponse',
        'getRoutePoints' => '\\ItCenter\\BelTransSat\\Models\\GetRoutePointsRequest',
        'getRoutePointsResponse' => '\\ItCenter\\BelTransSat\\Models\\GetRoutePointsResponse',
        'getRoutes' => '\\ItCenter\\BelTransSat\\Models\\GetRoutesRequest',
        'getRoutesResponse' => '\\ItCenter\\BelTransSat\\Models\\GetRoutesResponse',
        'getSolutionRoutes' => '\\ItCenter\\BelTransSat\\Models\\GetSolutionRoutesRequest',
        'getSolutionRoutesResponse' => '\\ItCenter\\BelTransSat\\Models\\GetSolutionRoutesResponse',
        'getUpdates' => '\\ItCenter\\BelTransSat\\Models\\GetUpdatesRequest',
        'getUpdatesResponse' => '\\ItCenter\\BelTransSat\\Models\\GetUpdatesResponse',
        'removePoint' => '\\ItCenter\\BelTransSat\\Models\\RemovePointRequest',
        'removePointResponse' => '\\ItCenter\\BelTransSat\\Models\\RemovePointResponse',
        'restorePoint' => '\\ItCenter\\BelTransSat\\Models\\RestorePointRequest',
        'restorePointResponse' => '\\ItCenter\\BelTransSat\\Models\\RestorePointResponse',
        'serveRouteChangeAddRestRequest' => '\\ItCenter\\BelTransSat\\Models\\ServeRouteChangeAddRestRequest',
        'serveRouteChangeAddRestRequestResponse' =>
            '\\ItCenter\\BelTransSat\\Models\\ServeRouteChangeAddRestResponse',
        'serveRouteChangeChangeVehicleTimeRequest' =>
            '\\ItCenter\\BelTransSat\\Models\\ServeRouteChangeChangeVehicleTimeRequest',
        'serveRouteChangeChangeVehicleTimeRequestResponse' =>
            '\\ItCenter\\BelTransSat\\Models\\ServeRouteChangeChangeVehicleTimeResponse',
        'serveRouteChangeEditPointPositionRequest' =>
            '\\ItCenter\\BelTransSat\\Models\\ServeRouteChangeEditPointPositionRequest',
        'serveRouteChangeEditPointPositionRequestResponse' =>
            '\\ItCenter\\BelTransSat\\Models\\ServeRouteChangeEditPointPositionResponse',
        'serveRouteChangeRemovePointRequest' =>
            '\\ItCenter\\BelTransSat\\Models\\ServeRouteChangeRemovePointRequest',
        'serveRouteChangeRemovePointRequestResponse' =>
            '\\ItCenter\\BelTransSat\\Models\\ServeRouteChangeRemovePointResponse',
        'serveRouteChangeRevertVehicleRequest' =>
            '\\ItCenter\\BelTransSat\\Models\\ServeRouteChangeRevertVehicleRequest',
        'serveRouteChangeRevertVehicleRequestResponse' =>
            '\\ItCenter\\BelTransSat\\Models\\ServeRouteChangeRevertVehicleResponse',
        'serveVrpRequest' => '\\ItCenter\\BelTransSat\\Models\\ServeVrpRequest',
        'serveVrpRequestResponse' => '\\ItCenter\\BelTransSat\\Models\\ServeVrpResponse',
        'setDriverToRoute' => '\\ItCenter\\BelTransSat\\Models\\SetDriverToRouteRequest',
        'setDriverToRouteResponse' => '\\ItCenter\\BelTransSat\\Models\\SetDriverToRouteResponse',
        'setRouteLockedStatus' => '\\ItCenter\\BelTransSat\\Models\\SetRouteLockedStatusRequest',
        'setRouteLockedStatusResponse' => '\\ItCenter\\BelTransSat\\Models\\SetRouteLockedStatusResponse',
        'setVehicleToRoute' => '\\ItCenter\\BelTransSat\\Models\\SetVehicleToRouteRequest',
        'setVehicleToRouteResponse' => '\\ItCenter\\BelTransSat\\Models\\SetVehicleToRouteResponse',
        'updatePoint' => '\\ItCenter\\BelTransSat\\Models\\UpdatePointRequest',
        'updatePointResponse' => '\\ItCenter\\BelTransSat\\Models\\UpdatePointResponse',
        'updatedPointData' => '\\ItCenter\\BelTransSat\\Models\\UpdatedPointData',
        'routeRoutePoint' => '\\ItCenter\\BelTransSat\\Models\\RouteRoutePoint',
        'routePoint' => '\\ItCenter\\BelTransSat\\Models\\RoutePoint',
        'customerDataJaxb' => '\\ItCenter\\BelTransSat\\Models\\CustomerDataModel',
        'cost' => '\\ItCenter\\BelTransSat\\Models\\CostModel',
        'good' => '\\ItCenter\\BelTransSat\\Models\\GoodModel',
        'routeChangeAddRestRequestJaxb' => '\\ItCenter\\BelTransSat\\Models\\RouteChangeAddRestRequestJaxb',
        'vrpRouteEditRequestResult' => '\\ItCenter\\BelTransSat\\Models\\VrpRouteEditRequestResult',
        'route' => '\\ItCenter\\BelTransSat\\Models\\RouteModel',
        'routeChangeRevertVehicleRequestJaxb' => '\\ItCenter\\BelTransSat\\Models\\RouteChangeRevertVehicleRequestJaxb',
        'UpdatedPointData' => '\\ItCenter\\BelTransSat\\Models\\UpdatedPointData',
        'routeChangeChangeVehicleTimeRequestJaxb' =>
            '\\ItCenter\\BelTransSat\\Models\\RouteChangeChangeVehicleTimeRequestJaxb',
        'pointStatus' => '\\ItCenter\\BelTransSat\\Models\\PointStatus',
        'routeChangeEditPointPositionRequestJaxb' =>
            '\\ItCenter\\BelTransSat\\Models\\RouteChangeEditPointPositionRequestJaxb',
        'vrpRequestJaxb' => '\\ItCenter\\BelTransSat\\Models\\VrpRequestJaxb',
        'vrpOptimizeRequestResult' => '\\ItCenter\\BelTransSat\\Models\\VrpOptimizeRequestResult',
        'routeChangeRemovePointRequestJaxb' => '\\ItCenter\\BelTransSat\\Models\\RouteChangeRemovePointRequestJaxb',
        'routeChangeInsertPointRequestJaxb' => '\\ItCenter\\BelTransSat\\Models\\RouteChangeInsertPointRequestJaxb',
        'vrpRouteEditRequestResultCode' => '\\ItCenter\\BelTransSat\\Models\\VrpRouteEditRequestResultCode',
        'routesChangesResultCode' => '\\ItCenter\\BelTransSat\\Models\\RoutesChangesResultCode',
        'vrpRequestResultCode' => '\\ItCenter\\BelTransSat\\Models\\VrpRequestResultCode',
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
     * updatePoint
     *
     * @param \ItCenter\BelTransSat\Models\CustomerDataModel $point
     *
     * @return \ItCenter\BelTransSat\Models\UpdatePointResponse
     */
    public function updatePoint($point)
    {
        $parameters = new UpdatePointRequest();
        $parameters->point = $point;

        return $this->__soapCall('updatePoint', array('parameters' => $parameters));
    }

    /**
     * removePoint
     *
     * @param string $id
     *
     * @return \ItCenter\BelTransSat\Models\RemovePointResponse
     */
    public function removePoint($id)
    {
        $parameters = new RemovePointRequest();
        $parameters->id = $id;

        return $this->__soapCall('removePoint', array('parameters' => $parameters));
    }

    /**
     * restorePoint
     *
     * @param string $id
     *
     * @return \ItCenter\BelTransSat\Models\RestorePointResponse
     */
    public function restorePoint($id)
    {
        $parameters = new RestorePointRequest();
        $parameters->id = $id;

        return $this->__soapCall('restorePoint', array('parameters' => $parameters));
    }

    /**
     * getPointStatus
     *
     * @param string $id
     *
     * @return \ItCenter\BelTransSat\Models\GetPointStatusResponse
     */
    public function getPointStatus($id)
    {
        $parameters = new GetPointStatusRequest();
        $parameters->id = $id;

        return $this->__soapCall('getPointStatus', array('parameters' => $parameters));
    }

    /**
     * getCurrentPoints
     *
     * @return \ItCenter\BelTransSat\Models\GetCurrentPointsResponse
     */
    public function getCurrentPoints()
    {
        $parameters = new GetCurrentPointsRequest();

        return $this->__soapCall('getCurrentPoints', array('parameters' => $parameters));
    }

    /**
     * getSolutionRoutes
     *
     * @param int $solutionId
     *
     * @return \ItCenter\BelTransSat\Models\GetSolutionRoutesResponse
     */
    public function getSolutionRoutes($solutionId)
    {
        $parameters = new GetSolutionRoutesRequest();
        $parameters->solutionId = $solutionId;

        return $this->__soapCall('getSolutionRoutes', array('parameters' => $parameters));
    }

    /**
     * getAllRoutes
     *
     * @return \ItCenter\BelTransSat\Models\GetAllRoutesResponse
     */
    public function getAllRoutes()
    {
        $parameters = new GetAllRoutesRequest();

        return $this->__soapCall('getAllRoutes', array('parameters' => $parameters));
    }

    /**
     * getRoutePoints
     *
     * @param int $routeId
     * @param boolean $addDetailedData
     * @param boolean $addToken
     *
     * @return \ItCenter\BelTransSat\Models\GetRoutePointsResponse
     */
    public function getRoutePoints($routeId, $addDetailedData, $addToken)
    {
        $parameters = new GetRoutePointsRequest();
        $parameters->routeId = $routeId;
        $parameters->addDetailedData = $addDetailedData;
        $parameters->addToken = $addToken;

        return $this->__soapCall('getRoutePoints', array('parameters' => $parameters));
    }

    /**
     * getAllRoutePoints
     *
     * @param boolean $addDetailedData
     * @param boolean $addToken
     *
     * @return \ItCenter\BelTransSat\Models\GetAllRoutePointsResponse
     */
    public function getAllRoutePoints($addDetailedData, $addToken)
    {
        $parameters = new GetAllRoutePointsRequest();
        $parameters->addDetailedData = $addDetailedData;
        $parameters->addToken = $addToken;

        return $this->__soapCall('getAllRoutePoints', array('parameters' => $parameters));
    }

    /**
     * getUpdates
     *
     * @param string $routesDeliveryDate
     * @param string $routesLastTimestamp
     * @param string $pointsLastTimestamp
     * @param int $routeId
     *
     * @return \ItCenter\BelTransSat\Models\GetUpdatesResponse
     */
    public function getUpdates($routesDeliveryDate, $routesLastTimestamp, $pointsLastTimestamp, $routeId)
    {
        $parameters = new GetUpdatesRequest();
        $parameters->routesDeliveryDate = $routesDeliveryDate;
        $parameters->routesLastTimestamp = $routesLastTimestamp;
        $parameters->pointsLastTimestamp = $pointsLastTimestamp;
        $parameters->routeId = $routeId;

        return $this->__soapCall('getUpdates', array('parameters' => $parameters));
    }

    /**
     * setVehicleToRoute
     *
     * @param int $routeId
     * @param string $vehicleId
     *
     * @return \ItCenter\BelTransSat\Models\SetVehicleToRouteResponse
     */
    public function setVehicleToRoute($routeId, $vehicleId)
    {
        $parameters = new SetVehicleToRouteRequest();
        $parameters->routeId = $routeId;
        $parameters->vehicleId = $vehicleId;

        return $this->__soapCall('setVehicleToRoute', array('parameters' => $parameters));
    }

    /**
     * setDriverToRoute
     *
     * @param int $routeId
     * @param string $driverId
     *
     * @return \ItCenter\BelTransSat\Models\SetDriverToRouteResponse
     */
    public function setDriverToRoute($routeId, $driverId)
    {
        $parameters = new SetDriverToRouteRequest();
        $parameters->routeId = $routeId;
        $parameters->driverId = $driverId;

        return $this->__soapCall('setDriverToRoute', array('parameters' => $parameters));
    }

    /**
     * setRouteLockedStatus
     *
     * @param int $routeId
     * @param boolean $locked
     *
     * @return \ItCenter\BelTransSat\Models\SetRouteLockedStatusResponse
     */
    public function setRouteLockedStatus($routeId, $locked)
    {
        $parameters = new SetRouteLockedStatusRequest();
        $parameters->routeId = $routeId;
        $parameters->locked = $locked;

        return $this->__soapCall('setRouteLockedStatus', array('parameters' => $parameters));
    }

    /**
     * changeRouteInsertPoint
     *
     * @param \ItCenter\BelTransSat\Models\RouteChangeInsertPointRequestJaxb $request
     *
     * @return \ItCenter\BelTransSat\Models\ChangeRouteInsertPointResponse
     */
    public function changeRouteInsertPoint($request)
    {
        $parameters = new ChangeRouteInsertPointRequest();
        $parameters->request = $request;

        return $this->__soapCall('changeRouteInsertPoint', array('parameters' => $parameters));
    }

    /**
     * serveRouteChangeRevertVehicleRequest
     *
     * @param \ItCenter\BelTransSat\Models\RouteChangeRevertVehicleRequestJaxb $request
     *
     * @return \ItCenter\BelTransSat\Models\ServeRouteChangeRevertVehicleResponse
     */
    public function serveRouteChangeRevertVehicleRequest($request)
    {
        $parameters = new ServeRouteChangeRevertVehicleRequest();
        $parameters->request = $request;

        return $this->__soapCall('serveRouteChangeRevertVehicleRequest', array('parameters' => $parameters));
    }

    /**
     * serveRouteChangeAddRestRequest
     *
     * @param \ItCenter\BelTransSat\Models\RouteChangeAddRestRequestJaxb $request
     *
     * @return \ItCenter\BelTransSat\Models\ServeRouteChangeAddRestResponse
     */
    public function serveRouteChangeAddRestRequest($request)
    {
        $parameters = new ServeRouteChangeAddRestRequest();
        $parameters->request = $request;

        return $this->__soapCall('serveRouteChangeAddRestRequest', array('parameters' => $parameters));
    }

    /**
     * serveRouteChangeChangeVehicleTimeRequest
     *
     * @param \ItCenter\BelTransSat\Models\RouteChangeChangeVehicleTimeRequestJaxb $request
     *
     * @return \ItCenter\BelTransSat\Models\ServeRouteChangeChangeVehicleTimeResponse
     */
    public function serveRouteChangeChangeVehicleTimeRequest($request)
    {
        $parameters = new ServeRouteChangeChangeVehicleTimeRequest();
        $parameters->request = $request;

        return $this->__soapCall('serveRouteChangeChangeVehicleTimeRequest', array('parameters' => $parameters));
    }

    /**
     * serveRouteChangeEditPointPositionRequest
     *
     * @param \ItCenter\BelTransSat\Models\RouteChangeEditPointPositionRequestJaxb $request
     *
     * @return \ItCenter\BelTransSat\Models\ServeRouteChangeEditPointPositionResponse
     */
    public function serveRouteChangeEditPointPositionRequest($request)
    {
        $parameters = new ServeRouteChangeEditPointPositionRequest();
        $parameters->request = $request;

        return $this->__soapCall('serveRouteChangeEditPointPositionRequest', array('parameters' => $parameters));
    }

    /**
     * serveVrpRequest
     *
     * @param \ItCenter\BelTransSat\Models\VrpRequestJaxb $request
     *
     * @return \ItCenter\BelTransSat\Models\ServeVrpResponse
     */
    public function serveVrpRequest($request)
    {
        $parameters = new ServeVrpRequest();
        $parameters->request = $request;

        return $this->__soapCall('serveVrpRequest', array('parameters' => $parameters));
    }

    /**
     * serveRouteChangeRemovePointRequest
     *
     * @param \ItCenter\BelTransSat\Models\RouteChangeRemovePointRequestJaxb $request
     *
     * @return \ItCenter\BelTransSat\Models\ServeRouteChangeRemovePointResponse
     */
    public function serveRouteChangeRemovePointRequest($request)
    {
        $parameters = new ServeRouteChangeRemovePointRequest();
        $parameters->request = $request;

        return $this->__soapCall('serveRouteChangeRemovePointRequest', array('parameters' => $parameters));
    }

    /**
     * addPoint
     *
     * @param \ItCenter\BelTransSat\Models\CustomerDataModel $point
     *
     * @return \ItCenter\BelTransSat\Models\AddPointResponse
     */
    public function addPoint($point)
    {
        $parameters = new AddPointRequest();
        $parameters->point = $point;

        return $this->__soapCall('addPoint', array('parameters' => $parameters));
    }

    /**
     * getRoutes
     *
     * @param string $deliveryDate
     *
     * @return \ItCenter\BelTransSat\Models\GetRoutesResponse
     */
    public function getRoutes($deliveryDate)
    {
        $parameters = new GetRoutesRequest();
        $parameters->deliveryDate = $deliveryDate;

        return $this->__soapCall('getRoutes', array('parameters' => $parameters));
    }
}
