<?php

use SilverStripe\Control\Controller;
use SilverStripe\Dev\Debug;
use SilverStripe\ORM\DataExtension;
use SilverStripe\SiteConfig\SiteConfig;

class TrackingPageExtension extends DataExtension{

    public function MetaTags(&$tags){
        $siteConfig = SiteConfig::current_site_config();
        $tags .= $siteConfig->CookieConsentCode;
        $tags .= $siteConfig->TrackingCode;
    }
}