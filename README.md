<br />
<h1 align="center">ShipShop</h1>

<h2 align="center">:rocket: Your Sylius storefront is live within 30 minutes!</h2>

<br />

This template builds a Sylius application for Platform.sh, which can be used as a starting point for developing complex e-commerce applications.

Sylius is a modern e-commerce solution for PHP, based on Symfony Framework.

## How to Install the project locally
You can check the documentation to [install locally](./README_local_installation.md)

## How to deploy the project on Platform.sh

You can check the project documentation to deploy on Platform.sh  [deploy on Platform.sh](./README_deploy_in_prod.md)


## Features

- Sylius 1.12
- PHP 8.1
- MySQL 10.2
- Automatic TLS certificates
- composer-based build

## Post-install

By default, Sylius ignores the `composer.lock` file in Git. Once you have deployed the template, it is a good idea to remove `composer.lock` from `.gitignore` and commit it, so that you can benefit from repeatable builds on Platform.sh.

## Customization

The following changes have been made relative to a plain Sylius 1.11 project.  If using this project as a reference for your own existing project, replicate the changes below to your project.

* The `.platform.app.yaml`, `.platform/services.yaml`, and `.platform/routes.yaml` files have been added.  These provide Platform.sh-specific configuration and are present in all projects on Platform.sh.  You may customize them as you see fit.
* An additional Composer library, [`platformsh/symfonyflex-bridge`](https://github.com/platformsh/symfonyflex-bridge), has been added.  It automatically maps Platform.sh's environment variables to Symfony environment variables where possible.  It leverages the [`platformsh/config-reader`](https://github.com/platformsh/config-reader-php) library.

## Resources

- [Sylius](https://sylius.com)
- [Sylius documentation](https://docs.sylius.com/en/latest/)
- [Platform.sh deployment docs](https://docs.sylius.com/en/latest/cookbook/deployment/platform-sh.html)
- [Sylius Plus installation guide](https://docs.sylius.com/en/latest/cookbook/deployment/platform-sh.html#how-to-deploy-sylius-plus-to-platform-sh)
- [Cron jos and additional tips](https://docs.sylius.com/en/latest/cookbook/deployment/platform-sh.html#dive-deeper)
- [PHP on Platform.sh](https://docs.platform.sh/languages/php.html)
