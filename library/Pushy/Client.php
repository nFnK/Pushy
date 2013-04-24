<?php
/**
 * Pushy: Pushover PHP Client
 *
 * @author    Michael Squires <sqmk@php.net>
 * @copyright Copyright (c) 2013 Michael K. Squires
 * @license   http://github.com/sqmk/Pushy/wiki/License
 */

namespace Pushy;

use Pushy\Transport\Http;
use Pushy\Transport\TransportInterface;
use Pushy\Command\CommandInterface;

/**
 * Client for Pushover
 */
class Client
{
    /**
     * API Token
     *
     * @var string
     */
    protected $apiToken;

    /**
     * Transport option (Http only for now)
     *
     * @var TransportInterface
     */
    protected $transport;

    /**
     * Instantiates messenger object
     *
     * @param string $apiToken API Token
     */
    public function __construct($apiToken)
    {
        $this->setApiToken($apiToken);
    }

    /**
     * Set API token
     *
     * @param string $apiToken API token
     *
     * @return self This object
     */
    public function setApiToken($apiToken)
    {
        $this->apiToken = (string) $apiToken;

        return $this;
    }

    /**
     * Send a message
     *
     * @param Message $message Message
     */
    public function sendMessage(Message $message)
    {
    }

    /**
     * Verify user
     *
     * @param User $user User
     */
    public function verifyUser(User $user)
    {
    }

    /**
     * Get transport
     *
     * @return TransportInterface Transport object
     */
    public function getTransport()
    {
        // Set transport if haven't already
        if (!$this->transport) {
            $this->setTransport(new Http);
        }

        return $this->transport;
    }

    /**
     * Set transport
     *
     * @param TransportInterface $transport Transport object
     *
     * @return self This object
     */
    public function setTransport(TransportInterface $transport)
    {
        $this->transport = $transport;

        return $this;
    }

    /**
     * Send command
     *
     * @param CommandInterface $command Command to send
     *
     * @return mixed Return value from command
     */
    public function sendCommand(CommandInterface $command)
    {
        return $command->send($this);
    }
}
