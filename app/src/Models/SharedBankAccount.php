<?php
use SilverStripe\Security\Member;
use SilverStripe\ORM\DataObject;
use SilverStripe\ORM\FieldType\DBDatetime;

class SharedBankAccount extends DataObject
{
    private static $table_name = 'SharedBankAccount';

    private static $db = [
        'VerifiedDate' => 'Datetime'
    ];

    private static $has_one = [
        'Owner' => Member::class,
        'Account' => BankAccount::class
    ];

    private static $summary_fields = [
        'Account.AccountNumber',
        'VerifiedDate'
    ];

    public function onBeforeWrite()
    {
        parent::onBeforeWrite();
        $this->VerifiedDate = $this->LastEdited;
    }
}
