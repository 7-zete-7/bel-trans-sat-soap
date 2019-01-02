<?php

namespace Zete7\BelTransSat;

use Zete7\BelTransSat\Models\AddPointRequest;
use Zete7\BelTransSat\Models\ChangeRouteInsertPointRequest;
use Zete7\BelTransSat\Models\GetAllRoutePointsRequest;
use Zete7\BelTransSat\Models\GetAllRoutesRequest;
use Zete7\BelTransSat\Models\GetCurrentPointsRequest;
use Zete7\BelTransSat\Models\GetPointStatusRequest;
use Zete7\BelTransSat\Models\GetRoutePointsRequest;
use Zete7\BelTransSat\Models\GetRoutesRequest;
use Zete7\BelTransSat\Models\GetSolutionRoutesRequest;
use Zete7\BelTransSat\Models\GetUpdatesRequest;
use Zete7\BelTransSat\Models\RemovePointRequest;
use Zete7\BelTransSat\Models\RestorePointRequest;
use Zete7\BelTransSat\Models\ServeRouteChangeAddRestRequest;
use Zete7\BelTransSat\Models\ServeRouteChangeChangeVehicleTimeRequest;
use Zete7\BelTransSat\Models\ServeRouteChangeEditPointPositionRequest;
use Zete7\BelTransSat\Models\ServeRouteChangeRemovePointRequest;
use Zete7\BelTransSat\Models\ServeRouteChangeRevertVehicleRequest;
use Zete7\BelTransSat\Models\ServeVrpRequest;
use Zete7\BelTransSat\Models\SetDriverToRouteRequest;
use Zete7\BelTransSat\Models\SetRouteLockedStatusRequest;
use Zete7\BelTransSat\Models\SetVehicleToRouteRequest;
use Zete7\BelTransSat\Models\UpdatePointRequest;
use SoapClient as BaseSoapClient;

/**
 * This class is generated from the following WSDL:
 * http://gps.beltranssat.by/vrp-rs/ws/vrp?wsdl
 */
class Vpr extends BaseSoapClient
{
    protected $classMap = array(
        'addPoint' => '\\Zete7\\BelTransSat\\Models\\AddPointRequest',
        'addPointResponse' => '\\Zete7\\BelTransSat\\Models\\AddPointResponse',
        'changeRouteInsertPoint' => '\\Zete7\\BelTransSat\\Models\\ChangeRouteInsertPointRequest',
        'changeRouteInsertPointResponse' => '\\Zete7\\BelTransSat\\Models\\ChangeRouteInsertPointResponse',
        'dataUpdates' => '\\Zete7\\BelTransSat\\Models\\DataUpdatesModel',
        'getAllRoutePoints' => '\\Zete7\\BelTransSat\\Models\\GetAllRoutePointsRequest',
        'getAllRoutePointsResponse' => '\\Zete7\\BelTransSat\\Models\\GetAllRoutePointsResponse',
        'getAllRoutes' => '\\Zete7\\BelTransSat\\Models\\GetAllRoutesRequest',
        'getAllRoutesResponse' => '\\Zete7\\BelTransSat\\Models\\GetAllRoutesResponse',
        'getCurrentPoints' => '\\Zete7\\BelTransSat\\Models\\GetCurrentPointsRequest',
        'getCurrentPointsResponse' => '\\Zete7\\BelTransSat\\Models\\GetCurrentPointsResponse',
        'getPointStatus' => '\\Zete7\\BelTransSat\\Models\\GetPointStatusRequest',
        'getPointStatusResponse' => '\\Zete7\\BelTransSat\\Models\\GetPointStatusResponse',
        'getRoutePoints' => '\\Zete7\\BelTransSat\\Models\\GetRoutePointsRequest',
        'getRoutePointsResponse' => '\\Zete7\\BelTransSat\\Models\\GetRoutePointsResponse',
        'getRoutes' => '\\Zete7\\BelTransSat\\Models\\GetRoutesRequest',
        'getRoutesResponse' => '\\Zete7\\BelTransSat\\Models\\GetRoutesResponse',
        'getSolutionRoutes' => '\\Zete7\\BelTransSat\\Models\\GetSolutionRoutesRequest',
        'getSolutionRoutesResponse' => '\\Zete7\\BelTransSat\\Models\\GetSolutionRoutesResponse',
        'getUpdates' => '\\Zete7\\BelTransSat\\Models\\GetUpdatesRequest',
        'getUpdatesResponse' => '\\Zete7\\BelTransSat\\Models\\GetUpdatesResponse',
        'removePoint' => '\\Zete7\\BelTransSat\\Models\\RemovePointRequest',
        'removePointResponse' => '\\Zete7\\BelTransSat\\Models\\RemovePointResponse',
        'restorePoint' => '\\Zete7\\BelTransSat\\Models\\RestorePointRequest',
        'restorePointResponse' => '\\Zete7\\BelTransSat\\Models\\RestorePointResponse',
        'serveRouteChangeAddRestRequest' => '\\Zete7\\BelTransSat\\Models\\ServeRouteChangeAddRestRequest',
        'serveRouteChangeAddRestRequestResponse' =>
            '\\Zete7\\BelTransSat\\Models\\ServeRouteChangeAddRestResponse',
        'serveRouteChangeChangeVehicleTimeRequest' =>
            '\\Zete7\\BelTransSat\\Models\\ServeRouteChangeChangeVehicleTimeRequest',
        'serveRouteChangeChangeVehicleTimeRequestResponse' =>
            '\\Zete7\\BelTransSat\\Models\\ServeRouteChangeChangeVehicleTimeResponse',
        'serveRouteChangeEditPointPositionRequest' =>
            '\\Zete7\\BelTransSat\\Models\\ServeRouteChangeEditPointPositionRequest',
        'serveRouteChangeEditPointPositionRequestResponse' =>
            '\\Zete7\\BelTransSat\\Models\\ServeRouteChangeEditPointPositionResponse',
        'serveRouteChangeRemovePointRequest' =>
            '\\Zete7\\BelTransSat\\Models\\ServeRouteChangeRemovePointRequest',
        'serveRouteChangeRemovePointRequestResponse' =>
            '\\Zete7\\BelTransSat\\Models\\ServeRouteChangeRemovePointResponse',
        'serveRouteChangeRevertVehicleRequest' =>
            '\\Zete7\\BelTransSat\\Models\\ServeRouteChangeRevertVehicleRequest',
        'serveRouteChangeRevertVehicleRequestResponse' =>
            '\\Zete7\\BelTransSat\\Models\\ServeRouteChangeRevertVehicleResponse',
        'serveVrpRequest' => '\\Zete7\\BelTransSat\\Models\\ServeVrpRequest',
        'serveVrpRequestResponse' => '\\Zete7\\BelTransSat\\Models\\ServeVrpResponse',
        'setDriverToRoute' => '\\Zete7\\BelTransSat\\Models\\SetDriverToRouteRequest',
        'setDriverToRouteResponse' => '\\Zete7\\BelTransSat\\Models\\SetDriverToRouteResponse',
        'setRouteLockedStatus' => '\\Zete7\\BelTransSat\\Models\\SetRouteLockedStatusRequest',
        'setRouteLockedStatusResponse' => '\\Zete7\\BelTransSat\\Models\\SetRouteLockedStatusResponse',
        'setVehicleToRoute' => '\\Zete7\\BelTransSat\\Models\\SetVehicleToRouteRequest',
        'setVehicleToRouteResponse' => '\\Zete7\\BelTransSat\\Models\\SetVehicleToRouteResponse',
        'updatePoint' => '\\Zete7\\BelTransSat\\Models\\UpdatePointRequest',
        'updatePointResponse' => '\\Zete7\\BelTransSat\\Models\\UpdatePointResponse',
        'updatedPointData' => '\\Zete7\\BelTransSat\\Models\\UpdatedPointData',
        'routeRoutePoint' => '\\Zete7\\BelTransSat\\Models\\RouteRoutePoint',
        'routePoint' => '\\Zete7\\BelTransSat\\Models\\RoutePoint',
        'customerDataJaxb' => '\\Zete7\\BelTransSat\\Models\\CustomerDataModel',
        'cost' => '\\Zete7\\BelTransSat\\Models\\CostModel',
        'good' => '\\Zete7\\BelTransSat\\Models\\GoodModel',
        'routeChangeAddRestRequestJaxb' => '\\Zete7\\BelTransSat\\Models\\RouteChangeAddRestRequestJaxb',
        'vrpRouteEditRequestResult' => '\\Zete7\\BelTransSat\\Models\\VrpRouteEditRequestResult',
        'route' => '\\Zete7\\BelTransSat\\Models\\RouteModel',
        'routeChangeRevertVehicleRequestJaxb' => '\\Zete7\\BelTransSat\\Models\\RouteChangeRevertVehicleRequestJaxb',
        'UpdatedPointData' => '\\Zete7\\BelTransSat\\Models\\UpdatedPointData',
        'routeChangeChangeVehicleTimeRequestJaxb' =>
            '\\Zete7\\BelTransSat\\Models\\RouteChangeChangeVehicleTimeRequestJaxb',
        'pointStatus' => '\\Zete7\\BelTransSat\\Models\\PointStatus',
        'routeChangeEditPointPositionRequestJaxb' =>
            '\\Zete7\\BelTransSat\\Models\\RouteChangeEditPointPositionRequestJaxb',
        'vrpRequestJaxb' => '\\Zete7\\BelTransSat\\Models\\VrpRequestJaxb',
        'vrpOptimizeRequestResult' => '\\Zete7\\BelTransSat\\Models\\VrpOptimizeRequestResult',
        'routeChangeRemovePointRequestJaxb' => '\\Zete7\\BelTransSat\\Models\\RouteChangeRemovePointRequestJaxb',
        'routeChangeInsertPointRequestJaxb' => '\\Zete7\\BelTransSat\\Models\\RouteChangeInsertPointRequestJaxb',
        'vrpRouteEditRequestResultCode' => '\\Zete7\\BelTransSat\\Models\\VrpRouteEditRequestResultCode',
        'routesChangesResultCode' => '\\Zete7\\BelTransSat\\Models\\RoutesChangesResultCode',
        'vrpRequestResultCode' => '\\Zete7\\BelTransSat\\Models\\VrpRequestResultCode',
    );

    /**
     * Constructor.
     *
     * @param string $wsdl    WSDL file
     * @param mixed  $options Options array
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
     * updatePoint
     *
     * @param \Zete7\BelTransSat\Models\CustomerDataModel $point
     *
     * @return bool
     * @throws \Exception
     */
    public function updatePoint($point)
    {
        $parameters = new UpdatePointRequest();
        $parameters->point = $point;

        /** @var \Zete7\BelTransSat\Models\UpdatePointResponse $result */
        $result = $this->__soapCall('updatePoint', array('parameters' => $parameters));
        if (!is_bool($result->return)) {
            throw new \Exception('Invalid response.');
        }

        return $result->return;
    }

    /**
     * removePoint
     *
     * @param string $id
     *
     * @return bool
     * @throws \Exception
     */
    public function removePoint($id)
    {
        $parameters = new RemovePointRequest();
        $parameters->id = $id;

        /** @var \Zete7\BelTransSat\Models\RemovePointResponse $result */
        $result = $this->__soapCall('removePoint', array('parameters' => $parameters));
        if (!is_bool($result->return)) {
            throw new \Exception('Invalid response.');
        }

        return $result->return;
    }

    /**
     * restorePoint
     *
     * @param string $id
     *
     * @return bool
     * @throws \Exception
     */
    public function restorePoint($id)
    {
        $parameters = new RestorePointRequest();
        $parameters->id = $id;

        /** @var \Zete7\BelTransSat\Models\RestorePointResponse $result */
        $result = $this->__soapCall('restorePoint', array('parameters' => $parameters));
        if (!is_bool($result->return)) {
            throw new \Exception('Invalid response.');
        }

        return $result->return;
    }

    /**
     * getPointStatus
     *
     * @param string $id
     *
     * @return \Zete7\BelTransSat\Models\PointStatus
     */
    public function getPointStatus($id)
    {
        $parameters = new GetPointStatusRequest();
        $parameters->id = $id;

        /** @var \Zete7\BelTransSat\Models\GetPointStatusResponse $result */
        $result = $this->__soapCall('getPointStatus', array('parameters' => $parameters));

        return $result->return;
    }

    /**
     * getCurrentPoints
     *
     * @return \Zete7\BelTransSat\Models\CustomerDataModel[]
     */
    public function getCurrentPoints()
    {
        $parameters = new GetCurrentPointsRequest();

        /** @var \Zete7\BelTransSat\Models\GetCurrentPointsResponse $result */
        $result = $this->__soapCall('getCurrentPoints', array('parameters' => $parameters));
        if (null === $result) {
            return array();
        } elseif (!is_array($result->point)) {
            return array($result->point);
        } else {
            return $result->point;
        }
    }

    /**
     * getSolutionRoutes
     *
     * @param int $solutionId
     *
     * @return \Zete7\BelTransSat\Models\RouteModel[]
     */
    public function getSolutionRoutes($solutionId)
    {
        $parameters = new GetSolutionRoutesRequest();
        $parameters->solutionId = $solutionId;

        /** @var \Zete7\BelTransSat\Models\GetSolutionRoutesResponse $result */
        $result = $this->__soapCall('getSolutionRoutes', array('parameters' => $parameters));
        if (null === $result->route) {
            return array();
        } elseif (!is_array($result->route)) {
            return array($result->route);
        } else {
            return $result->route;
        }
    }

    /**
     * getAllRoutes
     *
     * @return \Zete7\BelTransSat\Models\RouteModel[]
     */
    public function getAllRoutes()
    {
        $parameters = new GetAllRoutesRequest();

        /** @var \Zete7\BelTransSat\Models\GetAllRoutesResponse $result */
        $result = $this->__soapCall('getAllRoutes', array('parameters' => $parameters));
        if (null === $result->route) {
            return array();
        } elseif (!is_array($result->route)) {
            return array($result->route);
        } else {
            return $result->route;
        }
    }

    /**
     * getRoutePoints
     *
     * @param int $routeId
     * @param boolean $addDetailedData
     * @param boolean $addToken
     *
     * @return \Zete7\BelTransSat\Models\RoutePoint[]
     */
    public function getRoutePoints($routeId, $addDetailedData, $addToken)
    {
        $parameters = new GetRoutePointsRequest();
        $parameters->routeId = $routeId;
        $parameters->addDetailedData = $addDetailedData;
        $parameters->addToken = $addToken;

        /** @var \Zete7\BelTransSat\Models\GetRoutePointsResponse $result */
        $result = $this->__soapCall('getRoutePoints', array('parameters' => $parameters));
        if (null === $result->routePoint) {
            return array();
        } elseif (!is_array($result->routePoint)) {
            return array($result->routePoint);
        } else {
            return $result->routePoint;
        }
    }

    /**
     * getAllRoutePoints
     *
     * @param boolean $addDetailedData
     * @param boolean $addToken
     *
     * @return \Zete7\BelTransSat\Models\routeRoutePoint[]
     */
    public function getAllRoutePoints($addDetailedData, $addToken)
    {
        $parameters = new GetAllRoutePointsRequest();
        $parameters->addDetailedData = $addDetailedData;
        $parameters->addToken = $addToken;

        /** @var \Zete7\BelTransSat\Models\GetAllRoutePointsResponse $result */
        $result = $this->__soapCall('getAllRoutePoints', array('parameters' => $parameters));
        if (null === $result->routePoint) {
            return array();
        } elseif (!is_array($result->routePoint)) {
            return array($result->routePoint);
        } else {
            return $result->routePoint;
        }
    }

    /**
     * getUpdates
     *
     * @param string $routesDeliveryDate
     * @param string $routesLastTimestamp
     * @param string $pointsLastTimestamp
     * @param int $routeId
     *
     * @return \Zete7\BelTransSat\Models\DataUpdatesModel
     */
    public function getUpdates($routesDeliveryDate, $routesLastTimestamp, $pointsLastTimestamp, $routeId)
    {
        $parameters = new GetUpdatesRequest();
        $parameters->routesDeliveryDate = $routesDeliveryDate;
        $parameters->routesLastTimestamp = $routesLastTimestamp;
        $parameters->pointsLastTimestamp = $pointsLastTimestamp;
        $parameters->routeId = $routeId;

        /** @var \Zete7\BelTransSat\Models\GetUpdatesResponse $result */
        $result = $this->__soapCall('getUpdates', array('parameters' => $parameters));

        return $result->return;
    }

    /**
     * setVehicleToRoute
     *
     * @param int $routeId
     * @param string $vehicleId
     *
     * @return bool
     * @throws \Exception
     */
    public function setVehicleToRoute($routeId, $vehicleId)
    {
        $parameters = new SetVehicleToRouteRequest();
        $parameters->routeId = $routeId;
        $parameters->vehicleId = $vehicleId;

        /** @var \Zete7\BelTransSat\Models\SetVehicleToRouteResponse $result */
        $result = $this->__soapCall('setVehicleToRoute', array('parameters' => $parameters));
        if (!is_bool($result->return)) {
            throw new \Exception('Invalid response.');
        }

        return $result->return;
    }

    /**
     * setDriverToRoute
     *
     * @api
     *
     * @param int $routeId
     * @param string $driverId
     *
     * @return bool
     * @throws \Exception
     */
    public function setDriverToRoute($routeId, $driverId)
    {
        $parameters = new SetDriverToRouteRequest();
        $parameters->routeId = $routeId;
        $parameters->driverId = $driverId;

        /** @var \Zete7\BelTransSat\Models\SetDriverToRouteResponse $result */
        $result = $this->__soapCall('setDriverToRoute', array('parameters' => $parameters));
        if (!is_bool($result->return)) {
            throw new \Exception('Invalid response.');
        }

        return $result->return;
    }

    /**
     * setRouteLockedStatus
     *
     * @api
     *
     * @param int $routeId
     * @param boolean $locked
     *
     * @return bool
     * @throws \Exception
     */
    public function setRouteLockedStatus($routeId, $locked)
    {
        $parameters = new SetRouteLockedStatusRequest();
        $parameters->routeId = $routeId;
        $parameters->locked = $locked;

        /** @var \Zete7\BelTransSat\Models\SetRouteLockedStatusResponse $result */
        $result = $this->__soapCall('setRouteLockedStatus', array('parameters' => $parameters));
        if (!is_bool($result)) {
            throw new \Exception('Invalid response.');
        }

        return $result->return;
    }

    /**
     * changeRouteInsertPoint
     *
     * @param \Zete7\BelTransSat\Models\RouteChangeInsertPointRequestJaxb $request
     *
     * @return \Zete7\BelTransSat\Models\VrpRouteEditRequestResult
     */
    public function changeRouteInsertPoint($request)
    {
        $parameters = new ChangeRouteInsertPointRequest();
        $parameters->request = $request;

        /** @var \Zete7\BelTransSat\Models\ChangeRouteInsertPointResponse $result */
        $result = $this->__soapCall('changeRouteInsertPoint', array('parameters' => $parameters));

        return $result->return;
    }

    /**
     * serveRouteChangeRevertVehicleRequest
     *
     * @param \Zete7\BelTransSat\Models\RouteChangeRevertVehicleRequestJaxb $request
     *
     * @return \Zete7\BelTransSat\Models\VrpRouteEditRequestResult
     */
    public function serveRouteChangeRevertVehicleRequest($request)
    {
        $parameters = new ServeRouteChangeRevertVehicleRequest();
        $parameters->request = $request;

        /** @var \Zete7\BelTransSat\Models\ServeRouteChangeRevertVehicleResponse $result */
        $result = $this->__soapCall('serveRouteChangeRevertVehicleRequest', array('parameters' => $parameters));

        return $result->return;
    }

    /**
     * serveRouteChangeAddRestRequest
     *
     * @param \Zete7\BelTransSat\Models\RouteChangeAddRestRequestJaxb $request
     *
     * @return \Zete7\BelTransSat\Models\VrpRouteEditRequestResult
     */
    public function serveRouteChangeAddRestRequest($request)
    {
        $parameters = new ServeRouteChangeAddRestRequest();
        $parameters->request = $request;

        /** @var \Zete7\BelTransSat\Models\ServeRouteChangeAddRestResponse $result */
        $result = $this->__soapCall('serveRouteChangeAddRestRequest', array('parameters' => $parameters));

        return $result->return;
    }

    /**
     * serveRouteChangeChangeVehicleTimeRequest
     *
     * @param \Zete7\BelTransSat\Models\RouteChangeChangeVehicleTimeRequestJaxb $request
     *
     * @return \Zete7\BelTransSat\Models\VrpRouteEditRequestResult
     */
    public function serveRouteChangeChangeVehicleTimeRequest($request)
    {
        $parameters = new ServeRouteChangeChangeVehicleTimeRequest();
        $parameters->request = $request;

        /** @var \Zete7\BelTransSat\Models\ServeRouteChangeChangeVehicleTimeResponse $result */
        $result = $this->__soapCall('serveRouteChangeChangeVehicleTimeRequest', array('parameters' => $parameters));

        return $result->return;
    }

    /**
     * serveRouteChangeEditPointPositionRequest
     *
     * @param \Zete7\BelTransSat\Models\RouteChangeEditPointPositionRequestJaxb $request
     *
     * @return \Zete7\BelTransSat\Models\VrpRouteEditRequestResult
     */
    public function serveRouteChangeEditPointPositionRequest($request)
    {
        $parameters = new ServeRouteChangeEditPointPositionRequest();
        $parameters->request = $request;

        /** @var \Zete7\BelTransSat\Models\ServeRouteChangeEditPointPositionResponse $result */
        $result = $this->__soapCall('serveRouteChangeEditPointPositionRequest', array('parameters' => $parameters));

        return $result->return;
    }

    /**
     * serveVrpRequest
     *
     * @param \Zete7\BelTransSat\Models\VrpRequestJaxb $request
     *
     * @return \Zete7\BelTransSat\Models\VrpOptimizeRequestResult
     */
    public function serveVrpRequest($request)
    {
        $parameters = new ServeVrpRequest();
        $parameters->request = $request;

        /** @var \Zete7\BelTransSat\Models\ServeVrpResponse $result */
        $result = $this->__soapCall('serveVrpRequest', array('parameters' => $parameters));

        return $result->return;
    }

    /**
     * serveRouteChangeRemovePointRequest
     *
     * @param \Zete7\BelTransSat\Models\RouteChangeRemovePointRequestJaxb $request
     *
     * @return \Zete7\BelTransSat\Models\VrpRouteEditRequestResult
     */
    public function serveRouteChangeRemovePointRequest($request)
    {
        $parameters = new ServeRouteChangeRemovePointRequest();
        $parameters->request = $request;

        /** @var \Zete7\BelTransSat\Models\ServeRouteChangeRemovePointResponse $result */
        $result = $this->__soapCall('serveRouteChangeRemovePointRequest', array('parameters' => $parameters));

        return $result->return;
    }

    /**
     * addPoint
     *
     * @param \Zete7\BelTransSat\Models\CustomerDataModel $point
     *
     * @return bool
     * @throws \Exception
     */
    public function addPoint($point)
    {
        $parameters = new AddPointRequest();
        $parameters->point = $point;

        /** @var \Zete7\BelTransSat\Models\AddPointResponse $result */
        $result = $this->__soapCall('addPoint', array('parameters' => $parameters));
        if (!is_bool($result->return)) {
            throw new \Exception('Invalid response.');
        }

        return $result->return;
    }

    /**
     * getRoutes
     *
     * @param string $deliveryDate
     *
     * @return \Zete7\BelTransSat\Models\RouteModel[]
     */
    public function getRoutes($deliveryDate)
    {
        $parameters = new GetRoutesRequest();
        $parameters->deliveryDate = $deliveryDate;

        /** @var \Zete7\BelTransSat\Models\GetRoutesResponse $result */
        $result = $this->__soapCall('getRoutes', array('parameters' => $parameters));
        if (null === $result->route) {
            return array();
        } elseif (!is_array($result->route)) {
            return array($result->route);
        } else {
            return $result->route;
        }
    }
}
