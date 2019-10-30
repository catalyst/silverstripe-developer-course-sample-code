<?php
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextField;
class LandingPage extends Page {
    private static $db = [
        'SpecialContentHeadline' => "Varchar(64)",
        "SpecialContent" => "HTMLText"
    ];
    private static $has_one = [];
    private static $belongs_to = [];
    private static $has_many = [];
    private static $many_many = [];
    private static $belongs_many_many = [];
    private static $many_many_extraFields = [];
    private static $description = 'For each main section of the website';
    private static $singular_name = 'Landing page';
    private static $plural_name = 'Landing pages';
    private static $table_name = 'LandingPage';
    private static $summary_fields = [];
    private static $searchable_fields = [];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab(
            'Root.SpecialContent',
            [
                TextField::create('SpecialContentHeadline'),
                HTMLEditorField::create('SpecialContent')
            ]
        );

        return $fields;
    }
}
