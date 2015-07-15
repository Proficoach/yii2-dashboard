# Testing

run all tests from this folder - `yii2-dashboard/tests/`.


## Install

Install codeception globally

```
composer global require "codeception/codeception=2.0.*"
```

## Build

Build codeception when the config changes.

```
~/.composer/vendor/bin/codecept build
```

## Migrate

```
php codeception/_app/yii migrate/up --interactive=0
php codeception/_app/yii migrate/up --migrationPath=../src/migrations --interactive=0
```

Note: The default configuration assumes the presence of an `dashboard_test` database and a user `travis` (no password).

## Helpful Commands

run tests with verbose output

```
~/.composer/vendor/bin/codecept run --debug --fail-fast
```

run tests with code coverage

```
~/.composer/vendor/bin/codecept run --coverage-html --coverage-xml
```

run single test

```
~/.composer/vendor/bin/codecept run functional EntryViewCept.php
```

run a php webserver

```
php -S 0.0.0.0:88 -t codeception/_app/web/
```

## Useful Links

- https://github.com/yiisoft/yii2-codeception
- https://github.com/yiisoft/yii2-app-basic/tree/master/tests
- https://github.com/dektrium/yii2-user/tree/master/tests
- https://github.com/bcdennis/laravel-ci-configs/blob/master/codeception-travis-scrutinizer/
