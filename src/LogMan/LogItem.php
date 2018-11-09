<?php

namespace LogMan;

class LogItem
{
    /** @var string */
    private $host;

    /** @var string */
    private $system;

    /** @var string */
    private $message;

    /** @var string */
    private $stackTrace;

    /** @var string */
    private $time;

    /**
     * @param string $host
     * @param string $system
     * @param string $message
     * @param string $stackTrace
     * @param string $time
     */
    public function __construct($host, $system, $message, $stackTrace, $time)
    {
        $this->host = $host;
        $this->system = $system;
        $this->message = $message;
        $this->stackTrace = $stackTrace;
        $this->time = $time;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return json_encode([
            'host' => $this->host,
            'system' => $this->system,
            'message' => $this->message,
            'stack_trace' => $this->stackTrace,
            'time' => $this->time,
        ]);
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getStackTrace()
    {
        return $this->stackTrace;
    }

    /**
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }
}