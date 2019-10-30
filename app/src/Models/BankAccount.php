<?php
use SilverStripe\Security\Member;
use SilverStripe\ORM\DataObject;
class BankAccount extends DataObject {
    private static $db = [
        'AccountNumber' => 'Varchar(21)'
    ];
    private static $belongs_many_many = [
        'Owners' => Member::class
    ];

    private static $summary_fields = [
        'AccountNumber',
    ];
}
