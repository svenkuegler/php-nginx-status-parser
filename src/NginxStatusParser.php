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
        if(is_null($this->statusPage)) {
            throw new NginxStatusException("No status page defined", 1);
        }

        $this->statusPageContent = @file($this->statusPage);

        if($this->statusPageContent == false) {
            throw new NginxStatusException("Could not parse given page", 2);
        }
    }

    /**
     * @return NginxStatus
     */
    public function parse() {

        $result = new NginxStatus();

        return $result;
    }
}
