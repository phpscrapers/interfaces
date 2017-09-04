<?php

/*
 * This file is part of phpscrapers/interfaces
 *
 *  (c) Scott Wilcox <scott@dor.ky>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 */

namespace PhpScrapers\Interfaces;

/**
 * Interface ScraperInterface.
 */
interface ScraperInterface
{
    /**
     * @param $username
     * @param $password
     *
     * @return null
     */
    public function setLogin($username, $password) : null;

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
