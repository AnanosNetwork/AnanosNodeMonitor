<?php

// FIRST USE
// Please copy this file as config.php

// To edit a config uncomment the line, otherwise
// defaults will be used for each variable.

// ----------- General Variables -----------

// To switch between monitoring Nano / Banano nodes,
// set $currency, $themeChoice, and $blockExplorer to
// corresponding Nano / Banano values.

// Currency 'nano' or 'banano' or 'nano-beta' or 'paw' or 'ananos'
// $currency = 'ananos';

// Theme of your Node Monitor
// Nano Themes:   'dark' or 'light'
// Banano Themes: 'banano' or 'banano-dark'
// PAW Themes: 'paw'
// Ananos Themes: 'ananos' or 'ananos-dark'
// $themeChoice = 'ananos-dark';

// Choice of block explorer
// Nano Explorers:      'ninja', 'nanocrawler'
// Nano Beta Explorers: 'nanocrawler-beta'
// Banano Explorers:    'bananocreeper', 'bananolooker', 'yellowspyglass'
// PAW Explorers:       'tracker'
// Ananos Explorers: nanexplorer
// $blockExplorer = 'nanexplorer';

// Choice of widget
// Options: 'qr', 'natricon', 'monkey', 'paw'
// $widgetType = 'qr';

// Autorefresh interval for the status webpage in seconds
// $autoRefreshInSeconds = 5;

// Name of your node (default: your hostname)
// $nanoNodeName = '';

// Location of your node
// $nodeLocation = 'Germany';

// A welcome message shown on top
// $welcomeMsg = 'Welcome to Ananos Node Monitor';

// ----------- Cache Engine -----------

// The cache engine allows for caching of RPC calls to reduce load on your Nano node.

// Duration in seconds between cache invalidation, i.e. RPC calls to the node
// $cacheTimeToLive = 30;

// Possible options for "engine" are:
//    - NULL (no caching)
//    - "files" (caches to file; kind of slow)
//    - "apc" (APC cache; requires extension; fast)
//      - Options: 'ttl' => cache time in seconds
//    - "apcu" (APCu cache; requires extension; fast)
//      - Options: 'ttl' => cache time in seconds
//    - "redis" (Redis cache; requires extension; fast)
//      - Options:
//        - 'host' => optional; address of the Redis host (defaults to localhost)
//        - 'port' => optional; port for the Redis host (defaults to 6379)
//        - 'redis' => optional; an instantiated Redis instance (replaces use of host/port)
//        - 'ttl' => optional; cache time in seconds

// $cache = [
//   "engine" => "files",
//   "options" => ["ttl" => $cacheTimeToLive]
// ];

// ----------- Node Variables -----------

// IP address for RPC (default: [::1])
// $nanoNodeRPCIP   = 'localhost';

// Port for RPC (default: 7076)
// Nano nodes typically use port 7076.
// Nano Beta nodes typically use port 55000.
// Banano nodes typically use port 7072.
// Ananos nodes typically use port 7176
// $nanoNodeRPCPort = '7176';

// Account of this node
// $nanoNodeAccount = 'ana_1qtj3urhp6q8inbm6zzt96gerg7d4umdxq3rx8be7rh8ycjzi1e3q9oym9iu';

// Donation account for maintaining this node
// $nanoDonationAccount = 'ana_1qtj3urhp6q8inbm6zzt96gerg7d4umdxq3rx8be7rh8ycjzi1e3q9oym9iu';

// Number of decimal places to display Nano balances, i.e.
// $nanoNumDecimalPlaces = 2;

// ----------- Analytics -----------

// Google Analytics Tracking ID, leave blank to disable Google Analytics.
// $googleAnalyticsId = '';

// ----------- Social -----------

// Add your social accounts
// Tutorial: https://github.com/NanoTools/nanoNodeMonitor/wiki/Social-Accounts
// $socials['reddit'] = 'https://www.reddit.com/user/NANOFAN1337/';
