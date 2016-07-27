<?php

/**
 * Class NginxStatus
 */
class NginxStatus {
    /**
     * @var int
     */
    private $activeConnections = 0;

    /**
     * @var int
     */
    private $acceptedRequests = 0;

    /**
     * @var int
     */
    private $handledRequests = 0;

    /**
     * @var float
     */
    private $requestsPerConnection = 0.00;

    /**
     * @var int
     */
    private $statusReading = 0;

    /**
     * @var int
     */
    private $statusWriting = 0;

    /**
     * @var int
     */
    private $statusWaiting = 0;

    /**
     * @return int
     */
    public function getActiveConnections()
    {
        return $this->activeConnections;
    }

    /**
     * @param int $activeConnections
     * @return NginxStatus
     */
    public function setActiveConnections($activeConnections)
    {
        $this->activeConnections = $activeConnections;

        return $this;
    }

    /**
     * @return int
     */
    public function getAcceptedRequests()
    {
        return $this->acceptedRequests;
    }

    /**
     * @param int $acceptedRequests
     * @return NginxStatus
     */
    public function setAcceptedRequests($acceptedRequests)
    {
        $this->acceptedRequests = $acceptedRequests;

        return $this;
    }

    /**
     * @return int
     */
    public function getHandledRequests()
    {
        return $this->handledRequests;
    }

    /**
     * @param int $handledRequests
     * @return NginxStatus
     */
    public function setHandledRequests($handledRequests)
    {
        $this->handledRequests = $handledRequests;

        return $this;
    }

    /**
     * @return float
     */
    public function getRequestsPerConnection()
    {
        return number_format($this->requestsPerConnection, 3);
    }

    /**
     * @param float $requestsPerConnection
     * @return NginxStatus
     */
    public function setRequestsPerConnection($requestsPerConnection)
    {
        $this->requestsPerConnection = $requestsPerConnection;

        return $this;
    }

    /**
     * @return int
     */
    public function getStatusReading()
    {
        return $this->statusReading;
    }

    /**
     * @param int $statusReading
     * @return NginxStatus
     */
    public function setStatusReading($statusReading)
    {
        $this->statusReading = $statusReading;

        return $this;
    }

    /**
     * @return int
     */
    public function getStatusWriting()
    {
        return $this->statusWriting;
    }

    /**
     * @param int $statusWriting
     * @return NginxStatus
     */
    public function setStatusWriting($statusWriting)
    {
        $this->statusWriting = $statusWriting;

        return $this;
    }

    /**
     * @return int
     */
    public function getStatusWaiting()
    {
        return $this->statusWaiting;
    }

    /**
     * @param int $statusWaiting
     * @return NginxStatus
     */
    public function setStatusWaiting($statusWaiting)
    {
        $this->statusWaiting = $statusWaiting;

        return $this;
    }
}