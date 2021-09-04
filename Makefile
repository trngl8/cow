SHELL := /bin/bash

setup:
	composer install
.PHONY: setup

tests:
	php vendor/bin/phpunit CowTest.php
.PHONY: tests