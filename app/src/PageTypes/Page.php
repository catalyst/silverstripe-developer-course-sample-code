<?php

use CWP\CWP\PageTypes\BasePage;
use SilverStripe\Forms\TextareaField;

class Page extends BasePage
{
    private static $db = [
        'Intro' => 'Varchar(255)',
    ];

    public function getCMSFields()
    {
        // Get parent fields.
        $fields = parent::getCMSFields();

        // Add intro before the content.
        $fields->addFieldToTab(
            'Root.Main',
            TextareaField::create('Intro', 'Intro'),
            'Content'
        );

        // Return the fields.
        return $fields;
    }

    //fetch a list of all homepage objects, and return the first one
    public function FirstHomePage()
    {
        $homepage = HomePage::get()->first();

        return $homepage;
    }

    //get all pages, sorted by most recently edited first
    public function MostRecentlyEditedPage() {

        return Page::get()->sort('LastEdited DESC');

    }


    //get 10 most recently edited pages, with titles that:
    //* Start with A
    //* do not end with S
    public function MostRecentlyEditedPageThatStartWithAandDontEndWithS($count = 10) {
        return Page::get()
            ->filter('Title:StartsWith', 'A')
            ->exclude('Title:EndsWith', 'S')
            ->sort('LastEdited DESC')
            ->limit($count);
    }

    //get page with ID#12
    public function PageID12() {
        return Page::get()->byID(12);
    }

    //get all of the QuickLinks on the homepage we queried earlier
    public function HomePageQuickLinks()
    {
        $quicklinks = $homepage->QuickLinks();
        return $quicklinks;
    }


    //demonstrate chaining from previous methods
    //get the quicklinks count using another method
    public function HomePageQuickLinksCount()
    {
        //the ORM has not actually executed a query yet, we're building up to a
        //result
        $quicklinks = $this->HomePageQuickLinks();

        //the final query is actually executed here
        return $quicklinks->Count();
    }

    public function getCurrentDateTime()
    {
      return DBDatetime::now();
    }
}
