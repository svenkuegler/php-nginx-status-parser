<?php

/**
 * Class NginxStatusParser
 */
class NginxStatusParser {

    /**
     * @var null|string
     */
    private $statusPage = null;

    /**
     * @var null|array
     */
    private $statusPageContent = null;

    /**
     * NginxStatusParser constructor.
     * @param string|null $statusPage
     */
    function __construct($statusPage = null)
    {
        if(!is_null($statusPage)) {
            $this->statusPage = $statusPage;
            $this->loadStatusPage();
        }
    }

    /**
     * @throws NginxStatusException
     */
    private function loadStatusPage() {
        $this->statusPageContent = @file($this->statusPage);

        if($this->statusPageContent == false) {
            throw new NginxStatusException("Could not parse given page", 1);
        }
    }

    /**
     * @return NginxStatus
     * @throws NginxStatusException
     */
    public function parse() {

        $result = new NginxStatus();

        if(!count($this->statusPageContent) == 4) {
            throw new NginxStatusException("Result seems to be invalid!", 2);
        }

        $tmpRow = array();
        for($i=0; $i<count($this->statusPageContent); $i++) {
            preg_match($this->getRegex()[$i], $this->statusPageContent[$i], $tmpRow[$i]);
        }

        $result->setActiveConnections($tmpRow[0][1]);

        $result->setAcceptedRequests($tmpRow[2][1]);
        $result->setHandledRequests($tmpRow[2][3]);
        $result->setRequestsPerConnection($tmpRow[2][1] / $tmpRow[2][3]);

        $result->setStatusReading($tmpRow[3][1]);
        $result->setStatusWriting($tmpRow[3][2]);
        $result->setStatusWaiting($tmpRow[3][3]);

        return $result;
    }

    /**
     * @return array
     */
    private function getRegex() {
        return array(
            "/Active connections\: ([0-9]+)/i",
            "/server accepts handled requests/i",
            "/ ([0-9]+) ([0-9]+) ([0-9]+)/i",
            "/Reading: ([0-9]+) Writing: ([0-9]+) Waiting: ([0-9]+)/i",
        );
    }
}
