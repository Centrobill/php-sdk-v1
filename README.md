## Requirements
- PHP 7.4+
- extensions json, curl, intl

## Installation

To install the package using composer, add the repository location to your **composer.json** file. You can do this either by using a CLI command or by manually editing the **composer.json** file.

Using CLI:

    composer config repositories.centrobill/php-sdk-v1 vcs https://github.com/centrobill/php-sdk-v1

Adding manually:

    {
        ...
        "repositories": [
            {
                "type": "vcs",
                "url": "https://github.com/centrobill/php-sdk-v1"
            }
        ]
        ...
    }

Next, install the package by running:

    composer require centrobill/php-sdk-v1

The package will be installed under the **vendor** folder.

## Documentation
To learn more about the API endpoints and their usage, please refer to the official Centrobill API documentation:
https://readme.centrobill.com/docs

## Package usage

To view different usages of API endpoints, please refer to the **example** folder.

## Contact
In case you are missing some crucial information about your account, please contact our Sales or Account manager at Centrobill:
https://centrobill.com
