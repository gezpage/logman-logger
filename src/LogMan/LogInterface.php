<?php

namespace LogMan;

interface LogInterface
{
    /**
     * @return string
     */
    public function __toString();

    /**
     * @return array
     */
    public function toArray();

    /**
     * @return string
     */
    public function getEnv();

    /**
     * @return string
     */
    public function getHost();

    /**
     * @return string
     */
    public function getSystem();

    /**
     * @return string
     */
    public function getLogLevel();

    /**
     * @return string
     */
    public function getMessage();

    /**
     * @return string
     */
    public function getStackTrace();

    /**
     * @return string
     */
    public function getTime();

    /**
     * @return array
     */
    public function getContext();
}