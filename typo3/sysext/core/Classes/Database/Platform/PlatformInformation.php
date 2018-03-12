<?php
declare(strict_types=1);

namespace TYPO3\CMS\Core\Database\Platform;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Platforms\MySqlPlatform;
use Doctrine\DBAL\Platforms\PostgreSqlPlatform;
use Doctrine\DBAL\Platforms\SqlitePlatform;
use Doctrine\DBAL\Platforms\SQLServerPlatform;

/**
 * Helper to handle platform specific details
 *
 * @internal
 */
class PlatformInformation
{
    /**
     * @var array
     */
    protected static $identifierLimits = [
        'mysql' => 63,
        'postgresql' => 63,
        'sqlserver' => 128,
        'sqlite' => 1024, // arbitrary limit, SQLite is only limited by the total statement length
    ];

    /**
     * @var array
     */
    protected static $bindParameterLimits = [
        'mysql' => 65535,
        'postgresql' => 34464,
        'sqlserver' => 2100,
        'sqlite' => 999,
    ];

    /**
     * Return information about the maximum supported length for a SQL identifier.
     *
     * @param \Doctrine\DBAL\Platforms\AbstractPlatform $platform
     * @return int
     * @internal
     */
    public static function getMaxIdentifierLength(AbstractPlatform $platform): int
    {
        $platformName = static::getPlatformIdentifier($platform);

        return self::$identifierLimits[$platformName];
    }

    /**
     * Return information about the maximum number of bound parameters supported on this platform
     *
     * @param \Doctrine\DBAL\Platforms\AbstractPlatform $platform
     * @return int
     * @internal
     */
    public static function getMaxBindParameters(AbstractPlatform $platform): int
    {
        $platformName = static::getPlatformIdentifier($platform);

        return self::$bindParameterLimits[$platformName];
    }

    /**
     * Return the platform shortname to use as a lookup key
     *
     * @param \Doctrine\DBAL\Platforms\AbstractPlatform $platform
     * @return string
     * @throws \RuntimeException
     * @internal
     */
    protected static function getPlatformIdentifier(AbstractPlatform $platform): string
    {
        if ($platform instanceof MySqlPlatform) {
            return 'mysql';
        }
        if ($platform instanceof PostgreSqlPlatform) {
            return 'postgresql';
        }
        if ($platform instanceof SQLServerPlatform) {
            return 'sqlserver';
        }
        if ($platform instanceof SqlitePlatform) {
            return 'sqlite';
        }
        throw new \RuntimeException(
                'Unsupported Databaseplatform "' . get_class($platform) . '" detected in PlatformInformation',
                1500958070
            );
    }
}
