<?php

return array(
    // Site to crawl and create a sitemap for.
    // <Syntax> https://www.google.com/
    "SITE_URL" => "https://www.miastation.com/",

    // Boolean for crawling external links.
    "ALLOW_EXTERNAL_LINKS" => true,
    // Boolean for crawling external links.
    "FOLLOW_EXTERNAL_LINKS" => false,
    // Array of domain to allow
    // <Syntax> www.google.it
    "FOLLOW_EXTERNAL_DOMAINS" => array("www.rcproject.it"),

    // Boolean for crawling element id links.
    "ALLOW_ELEMENT_LINKS" => false,

    // If set the crawler will only index the anchor tags with the given id.
    // If you wish to crawl all links set the value to ""
    "CRAWL_ANCHORS_WITH_ID" => "",

    // Array with absolute links or keywords for the pages to skip when crawling the given SITE_URL.
    "KEYWORDS_TO_SKIP" => array(),

    // Location + filename where the sitemap will be saved.
    "SAVE_LOC" => "/var/www/html/miastation/sitemap.xml",

    // Static priority value for sitemap
    "PRIORITY" => 1,

    // Static update frequency
    "CHANGE_FREQUENCY" => "daily",

    // Date changed (today's date)
    "LAST_UPDATED" => date('Y-m-d'),
);
