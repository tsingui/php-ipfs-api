<?php

declare(strict_types=1);

/*
 * This file is part of the "php-ipfs" package.
 *
 * (c) Robert Schönthal <robert.schoenthal@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace IPFS\Api;

use IPFS\Annotation\Api as Endpoint;
use IPFS\Command\Command;

/**
 * @author Robert Schönthal <robert.schoenthal@gmail.com>
 * @autogenerated
 * @codeCoverageIgnore
 */
final class Pin implements Api
{
    /**
     * Pin objects to local storage.
     *
     * @Endpoint(name="pin:add")
     *
     * @param string $arg       path to object(s) to be pinned
     * @param bool   $recursive recursively pin the object linked to by the specified object(s)
     * @param bool   $progress  show progress
     *
     * @return Command
     */
    public function add(string $arg, bool $recursive = true, bool $progress = false): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * List objects pinned to local storage.
     *
     * @Endpoint(name="pin:ls")
     *
     * @param string $arg   path to object(s) to be listed
     * @param string $type  the type of pinned keys to list
     * @param bool   $quiet write just hashes of objects
     *
     * @return Command
     */
    public function ls(string $arg = null, string $type = 'all', bool $quiet = false): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Remove pinned objects from local storage.
     *
     * @Endpoint(name="pin:rm")
     *
     * @param string $arg       path to object(s) to be unpinned
     * @param bool   $recursive recursively unpin the object linked to by the specified object(s)
     *
     * @return Command
     */
    public function rm(string $arg, bool $recursive = true): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Update a recursive pin.
     *
     * @Endpoint(name="pin:update")
     *
     * @param string $arg   path to old object
     * @param string $arg1  path to new object to be pinned
     * @param bool   $unpin remove the old pin
     *
     * @return Command
     */
    public function update(string $arg, string $arg1, bool $unpin = true): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Verify that recursive pins are complete.
     *
     * @Endpoint(name="pin:verify")
     *
     * @param bool $verbose also write the hashes of non-broken pins
     * @param bool $quiet   write just hashes of broken pins
     *
     * @return Command
     */
    public function verify(bool $verbose = false, bool $quiet = false): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }
}
