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
