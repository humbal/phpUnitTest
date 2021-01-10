# phpUnitTest

This tutorial is used to learn PHPUnit Test.
Version: 8.5

Install PHPUnit using composer
composer.json
	{
        "require-dev": {
            "phpunit/phpunit": "^8"
        },
        "autoload": {
            "classmap": [
                "src/"
            ]
        }
    }

composer --autoload-dump



PHPUnit Test command

$ /Applications/DevDesktop/php7_3_x64/bin/php ./vendor/bin/phpunit tests


Agile Style Test Result
$ ./vendor/bin/php tests —color —testdox

Generate file for Agile style
$ ./vendor/bin/php tests —color —testdox[-html | -text | -xml] test_result[.html | .txt | .xml]

$ reset && ./vendor/bin/php tests —color


Most Common Assertion



References:
https://phpunit.de/
https://www.udemy.com/course/phpunit-unit-selenium-testing-for-php-developers/