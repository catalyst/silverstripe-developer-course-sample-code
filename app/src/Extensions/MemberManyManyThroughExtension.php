<?php

use SilverStripe\ORM\DataExtension;
class MemberManyManyThroughExtension extends DataExtension{
    private static $many_many = [
        'VerifiedBankAccounts' => [
            'through' => SharedBankAccount::class,
            'from' => 'Owner',
            'to' => 'Account'
        ]
    ];
}
