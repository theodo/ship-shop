# Description: Makefile for the Symfony project

start:
	docker-compose up -d
	symfony server:start

stop:
	symfony server:stop
	docker-compose down

install:
	composer install

clear:
	bin/console cache:clear

create-migration:
	bin/console doctrine:migrations:diff

migrate:
	bin/console doctrine:migrations:migrate --no-interaction

test:
	bin/phpunit

php-cs-fixer-fix:
	$(DISABLE_XDEBUG) vendor/bin/php-cs-fixer fix -v

phpstan-check:
	if [ ! -d "var/cache/dev" ]; then bin/console cache:warmup; fi
	$(DISABLE_XDEBUG) vendor/bin/phpstan --memory-limit=-1 analyse

security-check:
	$(DISABLE_XDEBUG) symfony check:security

doctrine-schema-check:
	$(DISABLE_XDEBUG) bin/console doctrine:schema:validate

check-php:
	@php_version=$(php -v | head -n 1 | awk '{print $2}') && \
	required_php_version=$(grep "php" composer.json | awk '{print $2}' | tr -d '",') && \
	if [ "$$php_version" != "$$required_php_version" ]; then \
		echo "Error: Required PHP version $$required_php_version but found $$php_version."; \
		exit 1; \
	fi


first-install: check-php install
	bin/console sylius:install
