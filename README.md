[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ConnectHolland/kvk-api-bundle/badges/quality-score.png?b=master&s=22d7d456cfe3dedc0f4ff0921512b0b0f08cf460)](https://scrutinizer-ci.com/g/ConnectHolland/kvk-api-bundle/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/ConnectHolland/kvk-api-bundle/badges/coverage.png?b=master&s=901b47ddc83e624076c860bd3f28813d6a12365e)](https://scrutinizer-ci.com/g/ConnectHolland/kvk-api-bundle/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/ConnectHolland/kvk-api-bundle/badges/build.png?b=master&s=b9debb5650bf235964f295f1741e36650bff2fff)](https://scrutinizer-ci.com/g/ConnectHolland/kvk-api-bundle/build-status/master)

# KvK Api bundle for Symfony
## Installation
```bash
composer require connectholland/kvk-api-bundle
```

## Environment variables
The environment variables for this bundle are:
- CH_KVK_API_URI: `https://api.kvk.nl:443/`
- CH_KVK_API_USERNAME: `The username to access the API`
- CH_KVK_API_PASSWORD: `The password to access the API`

## API

### Generate classes
```bash
rm -Rf API/Client/; \
./vendor/bin/jane-openapi generate -c Resources/config/openapi; \
./vendor/bin/php-cs-fixer fix --allow-risky=yes API/Client/
```

### Test account
Username: testourapis
Password: testourapis
