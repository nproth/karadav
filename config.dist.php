<?php

namespace KaraDAV;

/**
 * Users file storage path
 * %s is replaced by the login name of the user
 */
const STORAGE_PATH = __DIR__ . '/data/%s';

/**
 * SQLite3 database file
 * This is where the users, app sessions and stuff will be stored
 */
const DB_FILE = __DIR__ . '/data/db.sqlite';

/**
 * WWW_URL is the complete URL of the root of this server
 *
 * This code auto-detects it as well as it can
 * But you may have to assign something static instead, for example:
 *
 * const WWW_URL = 'https://dav.website.example/';
 */
$https = (!empty($_SERVER['HTTPS']) || $_SERVER['SERVER_PORT'] == 443) ? 's' : '';
$name = $_SERVER['SERVER_NAME'];
$port = !in_array($_SERVER['SERVER_PORT'], [80, 443]) ? ':' . $_SERVER['SERVER_PORT'] : '';
$root = '/';

define('KaraDAV\WWW_URL', sprintf('http%s://%s%s%s', $https, $name, $port, $root));

/**
 * WOPI client discovery URL
 * eg. http://onlyoffice.domain.tld/hosting/discovery for OnlyOffice
 * If set to NULL, WOPI support is disabled
 */
const WOPI_DISCOVERY_URL = null;

/**
 * Path to a log file (eg. __DIR__ . '/debug.log')
 * This will log all HTTP requests and responses received by the server
 */
const LOG_FILE = null;

/**
 * Set to TRUE if you have X-SendFile module installed and configured
 * see https://tn123.org/mod_xsendfile/
 */
const ENABLE_XSENDFILE = false;
