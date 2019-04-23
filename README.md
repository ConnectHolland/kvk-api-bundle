[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ConnectHolland/kvk-api-bundle/badges/quality-score.png?b=master&s=22d7d456cfe3dedc0f4ff0921512b0b0f08cf460)](https://scrutinizer-ci.com/g/ConnectHolland/kvk-api-bundle/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/ConnectHolland/kvk-api-bundle/badges/coverage.png?b=master&s=901b47ddc83e624076c860bd3f28813d6a12365e)](https://scrutinizer-ci.com/g/ConnectHolland/kvk-api-bundle/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/ConnectHolland/kvk-api-bundle/badges/build.png?b=master&s=b9debb5650bf235964f295f1741e36650bff2fff)](https://scrutinizer-ci.com/g/ConnectHolland/kvk-api-bundle/build-status/master)

# KvK Api bundle for Symfony
## Installation
```bash
composer require connectholland/kvk-api-bundle
```

## Configuration
Configure your KvK API Bundle with the following possible configurations
```yaml
ch_kvk_api:
    uri: 'https://api.kvk.nl:443/'
    api_key: ~
    use_testing_account: true # KvK provides a test account (testourapis) with a limited dataset.
```
