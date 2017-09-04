<?php
namespace PhpScrapers\Interfaces;

/**
 * Interface ScraperInterface
 * @package PhpScapers\Interfaces
 */
interface ScraperInterface {
    /**
     * @param $username
     * @param $password
     * @return null
     */
    public function setLogin($username, $password) : void;

    /**
     * @return array
     */
    public function get() : array;

    /**
     * @return string
     */
    public function getMessage() : string;

    /**
     * @return string
     */
    public function getRaw() : string;

    /**
     * @return bool
     */
    public function isSuccessful() : bool;

    /**
     * @return bool
     */
    public function isFailure() : bool;
}