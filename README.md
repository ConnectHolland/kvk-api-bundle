[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ConnectHolland/kvk-api-bundle/badges/quality-score.png?b=master&s=22d7d456cfe3dedc0f4ff0921512b0b0f08cf460)](https://scrutinizer-ci.com/g/ConnectHolland/kvk-api-bundle/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/ConnectHolland/kvk-api-bundle/badges/coverage.png?b=master&s=901b47ddc83e624076c860bd3f28813d6a12365e)](https://scrutinizer-ci.com/g/ConnectHolland/kvk-api-bundle/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/ConnectHolland/kvk-api-bundle/badges/build.png?b=master&s=b9debb5650bf235964f295f1741e36650bff2fff)](https://scrutinizer-ci.com/g/ConnectHolland/kvk-api-bundle/build-status/master)

# KvK API bundle for Symfony
This is a symfony bundle for the API of Kamer van Koophandel.

## Installation
```bash
composer require connectholland/kvk-api-bundle
```

## Configuration
The following configuration can be made
```yaml
ch_kvk_api:
    uri: 'https://api.kvk.nl:443/'
    api_key: ~
    use_testing_account: true # KvK provides a test account (testourapis) with a limited dataset.
```

## Usage
See https://developers.kvk.nl/documentation for documentation about the API

## Certificates

Current certificates are in ./Resources/apicerts 

Copy the crt files to /usr/local/share/ca-certificates/
cp ./Resources/apicerts/*.crt /usr/local/share/ca-certificates/

Check if the following files exist in /usr/local/share/ca-certificates/:
QuoVadis_PKIoverheid_Private_Services_CA_-_G1.crt
Staat_der_Nederlanden_Private_Root_CA_-_G1.crt
Staat_der_Nederlanden_Private_Services_CA_-_G1.crt

Update the trusted certificates:
update-ca-certificates

Test everything works:
curl https://ssltest.kvk.nl/
