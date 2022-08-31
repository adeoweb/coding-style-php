# AdeoWeb Coding Standard

A set of AdeoWeb rules for [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) tool.

### Installation
To use within your project you can use:
1. Add package:
````shell script
$ composer require --dev adeoweb/adeo-coding-style-php
````
2. To add the code standard please include this into the `phpcs.xml` and modify it accordingly:
```xml
<?xml version="1.0"?>
<ruleset>
    <rule ref="./vendor/adeoweb/adeo-coding-style-php/standard/Magento/ruleset.xml"/>
    <file>./src</file>
</ruleset>
```

### Running
To run:
```shell script
$ ./vendor/bin/phpcs
```

### Fixing issues automatically
Also you can run `phpcbf` from the command-line to fix your code `MyAwesomeExtension` for warnings like
 "PHPCBF CAN FIX THE [0-9]+ MARKED SNIFF VIOLATIONS AUTOMATICALLY"
```shell script
$ vendor/bin/phpcbf app/code/MyAwesomeExtension
``` 

### Versions
Releases are made when there is a:
 - Patch: messages of type WARNING has changed: it was added, removed, parameters changed
 - Minor: the message of type ERROR has been changed
