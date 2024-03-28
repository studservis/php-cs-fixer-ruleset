# Набор правил php-cs-fixer для Студсервис

## Install

```shell
composer require --dev studservis/php-cs-fixer-ruleset
```

## Usage

```php
<?php
// .php-cs-fixer.dist.php

$finder = PhpCsFixer\Finder::create()
    ->in([
        './application/',
        './tests/'
       );

$overridedProjectRules = [...];

return \StudService\PhpCsFixer\build_config($finder, $overridedProjectRules);
```
