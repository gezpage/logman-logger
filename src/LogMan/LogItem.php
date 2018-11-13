<?php

namespace LogMan;

class LogItem
{
    /** @var string */
    private $env;

    /** @var string */
    private $host;

    /** @var string */
    private $system;

    /** @var string */
    private $logLevel;

    /** @var string */
    private $message;

    /** @var string */
    private $stackTrace;

    /** @var string */
    private $time;

    /** @var array */
    private $context;

    /**
     * @param string $env
     * @param string $host
     * @param string $system
     * @param string $logLevel
     * @param string $message
     * @param string $stackTrace
     * @param string $time
     * @param string $context
     */
    public function __construct($env, $host, $system, $logLevel, $message, $stackTrace, $time, array $context = [])
    {
        $this->env = $env;
        $this->host = $host;
        $this->system = $system;
        $this->logLevel = $logLevel;
        $this->message = $message;
        $this->stackTrace = $stackTrace;
        $this->time = $time;
        $this->context = $context;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return json_encode($this->toArray());
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'env' => $this->env,
            'host' => $this->host,
            'system' => $this->system,
            'log_level' => $this->logLevel,
            'message' => $this->message,
            'stack_trace' => $this->stackTrace,
            'time' => $this->time,
            'context' => $this->context,
        ];
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

    /**
     * @return string
     */
    public function getEnv()
    {
        return $this->env;
    }

    /**
     * @return string
     */
    public function getLogLevel()
    {
        return $this->logLevel;
    }

    /**
     * @return array
     */
    public function getContext()
    {
        return $this->context;
    }
}