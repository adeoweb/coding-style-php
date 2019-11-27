# AdeoWeb Coding Standard

A set of AdeoWeb rules for [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) tool.

### Installation
To use within your project you can use:
1. Add our repo:
```
composer config repositories.adeoweb vcs https://dev.adeoweb.biz:8453/scm/m2m/adeo-coding-style-php.git
```
2. Add package:
````
composer require --dev adeoweb/adeo-coding-style-php
````
3. To add the code standard please include this into the `phpcs.xml` and modify it accordingly:
```
<?xml version="1.0"?>
<ruleset>
    <rule ref="./vendor/adeoweb/adeo-coding-style-php/standard/Magento/ruleset.xml"/>
    <file>./src</file>
</ruleset>
```

### Running
To run:
```
./vendor/bin/phpcs
```

### Fixing issues automatically
Also you can run `phpcbf` from the command-line to fix your code `MyAwesomeExtension` for warnings like
 "PHPCBF CAN FIX THE [0-9]+ MARKED SNIFF VIOLATIONS AUTOMATICALLY"
```
$ vendor/bin/phpcbf app/code/MyAwesomeExtension
``` 
