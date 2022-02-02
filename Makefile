

update:
	rm -fr vendor
	composer update

test:
	php ./vendor/bin/phpunit tests

test-unit:
	php ./vendor/bin/phpunit tests --stop-on-failure
