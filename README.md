Mailchimp Bundle
===========

This bundle wrap the Mailchimp official PHP SDK for using inside Symfony as service.

This bundle uses V2 of Mailchimp API.

Installation:
-------------
Add this line to your composer.json "require" section:

### composer.json
```json
    "require": {
       ...
       "godisco/mailchimp-bundle": "*"
```

Add this to your AppKernel.php (in the registerBundles() section):

### app/AppKernel.php
```php
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        // ...
        new Oodle\KrumoBundle\OodleKrumoBundle()
    }
```


Usage:
------

Just request for the `mailchimp` service.

```php
$mailchimp = $container->get("mailchimp");
```

You can get your default list id by:
```php
$mailchimp->getDefualtList();
```