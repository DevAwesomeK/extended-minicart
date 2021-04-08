# Mage2 Module Vendor ExtendedMinicart

    ``vendor/module-extendedminicart``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Demo

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Vendor`
 - Enable the module by running `php bin/magento module:enable Vendor_ExtendedMinicart`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require vendor/module-extendedminicart`
 - enable the module by running `php bin/magento module:enable Vendor_ExtendedMinicart`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - Display to Customer Group (checkout/sidebar/minicart_display_customer_group)


## Specifications

 - Helper
	- Vendor\ExtendedMinicart\Helper\Data


## Attributes



