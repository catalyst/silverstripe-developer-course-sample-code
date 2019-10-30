<?php
namespace YourName\ManagedEmails;
use SilverStripe\Admin\ModelAdmin;
use YourName\ManagedEmails\ManagedEmail;
class ManagedEmailAdmin extends ModelAdmin {
    private static $menu_title = 'Managed emails';
    private static $url_segment = 'managed-emails';
    private static $managed_models = [
        ManagedEmail::class
    ];
}
