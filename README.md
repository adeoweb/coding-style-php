# AdeoWeb Coding Standard

A set of AdeoWeb rules for [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer), built on PSR-12 and the [Slevomat Coding Standard](https://github.com/slevomat/coding-standard). An optional ruleset extends the base rules for Magento 2 projects.

## Installation

Require the package as a dev dependency:

```shell
composer require --dev adeoweb/adeo-coding-style-php
```

Then reference the ruleset from your project's `phpcs.xml`:

```xml
<?xml version="1.0"?>
<ruleset>
    <rule ref="./vendor/adeoweb/adeo-coding-style-php/src/AdeoWebCodingStandard/ruleset.xml"/>
    <arg name="extensions" value="php,phtml"/>
    <file>./src</file>
</ruleset>
```

### Magento projects

For Magento 2 projects, also require `magento/magento-coding-standard` and use the Magento-specific ruleset, which extends the base rules above with Magento-specific ones:

```xml
<?xml version="1.0"?>
<ruleset>
    <rule ref="./vendor/adeoweb/adeo-coding-style-php/src/AdeoWebCodingStandard/Magento/ruleset.xml"/>
    <arg name="extensions" value="php,phtml"/>
    <file>./app/code</file>
</ruleset>
```

## Usage

### Checking code style

```shell
./vendor/bin/phpcs
```

### Fixing issues automatically

`phpcbf` automatically fixes violations flagged as fixable, e.g. `PHPCBF CAN FIX THE [0-9]+ MARKED SNIFF VIOLATIONS AUTOMATICALLY`:

```shell
./vendor/bin/phpcbf app/code/MyAwesomeExtension
```

## Versioning

Releases are cut based on how a rule's message changes:

- **Patch** — a `WARNING`-level message changed: added, removed, or its parameters changed
- **Minor** — an `ERROR`-level message changed

See [CHANGELOG.md](CHANGELOG.md) for release history.

## License

[MIT](LICENSE)
