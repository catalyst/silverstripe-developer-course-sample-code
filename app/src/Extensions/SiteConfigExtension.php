<?php
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\TextField;
class SiteConfigExtension extends DataExtension
{
    private static $db = [
        'CopyrightStatement' => 'Varchar(80)'
    ];
    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab(
            'Root.Main',
            TextField::create('CopyrightStatement')
        );
    }

    public function DisplayCopyright()
    {
        return $this->owner->Title . ' ' .$this->owner->CopyrightStatement;
    }
}
