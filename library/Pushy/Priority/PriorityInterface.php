<?php
/**
 * Pushy: Pushover PHP Client
 *
 * @author    Michael Squires <sqmk@php.net>
 * @copyright Copyright (c) 2013 Michael K. Squires
 * @license   http://github.com/sqmk/Pushy/wiki/License
 */

namespace Pushy\Priority;

/**
 * Interface for priorities
 */
interface PriorityInterface
{
    /**
     * Return code value for priority
     *
     * @return int Priority code
     */
    public function getCode();
}