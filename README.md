# wallet-example
Wallet example with Chain of Responsibility

Install dependencies (phpunit):

Composer
```shell script
composer install --ignore-platform-reqs
```
Or Docker
```shell script
docker run --rm --interactive --tty --volume $PWD:/app composer install --ignore-platform-reqs
```

Run:
```shell script
./vendor/bin/phpunit
```