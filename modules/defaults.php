<?php

// DO NOT MODIFY THIS FILE
// Please head to the config.sample.php
// and follow the instructions

// ----------- General Variables -----------

// Currency 'nano' or 'banano' or 'ananos'
$currency = 'ananos';

// Theme of your Node Monitor
// Nano Themes:   'dark' or 'light'
// Banano Themes: 'banano' or 'banano-dark'
// Ananos Themes: 'ananos' or 'ananos-dark'
$themeChoice = 'ananos-dark';

// Choice of block explorer
// Nano Explorers:      'ninja', 'nanocrawler'
// Nano Beta Explorers: 'nanocrawler-beta'
// Banano Explorers:    'bananocreeper', 'bananolooker', 'yellowspyglass'
// Ananos Explorers:    'nanexplorer'
$blockExplorer = 'nanexplorer';

// Choice of widget
// Options: 'qr', 'natricon', 'monkey'
$widgetType = 'qr';

// autorefresh interval for the status webpage in seconds
$autoRefreshInSeconds = 5;

// Name of your node (default: your hostname)
$nanoNodeName = gethostname();

// Location of your node
$nodeLocation = NULL;

// A welcome message shown on top
$welcomeMsg = '';

// ----------- Cache Engine -----------

// The cache engine allows for caching of RPC calls to reduce load on your Nano node.

// Duration in seconds between cache invalidation, i.e. RPC calls to the node
$cacheTimeToLive = 30;

// Possible options for "engine" are:
//    - NULL (no caching)
//    - "files" (caches to file; kind of slow)
//    - "apc" (APC cache; requires extension; fast)
//      - Options: 'ttl' => cache time in seconds
//    - "apcu" (APCu cache; requires extension; fast)
//      - Options: 'ttl' => cache time in seconds

$cache = [
   "engine" => "files",
   "options" => ["ttl" => $cacheTimeToLive]
];

// ----------- Nano Node Variables -----------

// IP address for RPC (default: 127.0.0.1)
$nanoNodeRPCIP   = '[::1]';

// IP address for RPC (default: 7076)
// Nano nodes typically use port 7076.
// Banano nodes typically use port 7072.
// Ananos nodes typically use port 7176.
$nanoNodeRPCPort = '7176';

// Account of this node
$nanoNodeAccount = NULL;

// Donation account for maintaining this node
$nanoDonationAccount = $nanoNodeAccount;

// Number of decimal places to display Nano balances, i.e.
$nanoNumDecimalPlaces = 0;

// ----------- Monitoring -----------

// Uptimerobot.com API key for external monitoring
$uptimerobotApiKey = '';

// Google Analytics Tracking ID.
$googleAnalyticsId = '';

// ----------- Social -----------
$socials = array();
