<?php
/**
 * This constant defines in which environment the application is running. Defaults to 'prod', meaning production environment.
 * You may define this constant in the bootstrap script. The value could be 'prod' (production), 'dev' (development), 'test', 'staging', etc.
 */
defined('YII_ENV') or define('YII_ENV', $_ENV['ENV'] ?? 'prod');
/**
 * Whether the the application is running in production environment
 */
defined('YII_ENV_PROD') or define('YII_ENV_PROD', YII_ENV === 'prod');
/**
 * Whether the the application is running in development environment
 */
defined('YII_ENV_DEV') or define('YII_ENV_DEV', YII_ENV === 'dev');
/**
 * Whether the the application is running in testing environment
 */
defined('YII_ENV_TEST') or define('YII_ENV_TEST', YII_ENV === 'test');

/**
 * This constant defines whether the application should be in debug mode or not.
 * Enabled in `dev` by default.
 */
defined('YII_DEBUG') or define('YII_DEBUG', YII_ENV_DEV);
