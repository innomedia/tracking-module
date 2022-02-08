<?php

namespace Tracking\Extensions;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextareaField;
use SilverStripe\ORM\DataExtension;

class TrackingSiteConfigExtension extends DataExtension {
    /**
     * Database fields
     * @var array
     */
    private static $db = array(
        'TrackingCode' => 'Text',
        'CookieConsentCode'  =>'Text'
    );
    /**
     * Update Fields
     * @return FieldList
     */
    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab(
            'Root.SEO',
            TextareaField::create(
                'TrackingCode',
                'Code für das Tracking'
            )->setDescription('z.B. für Google Analytics')
        );
        $fields->addFieldToTab(
            'Root.SEO',
            TextareaField::create(
                'CookieConsentCode',
                'Code für den Cookie Hinweis'
            )->setDescription('z.B. für den Cookie Consent von Usercentrics')
        );
        return $fields;
    }
}