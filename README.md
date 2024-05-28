## Intstallation

To install package using composer first add repository location to the **composer.json** either by adding it using cli command or just adding mannually to **composer.json**

Using cli:

    composer config repositories.centrobill/php-sdk-v1 vcs https://github.com/centrobill/php-sdk-v1

Adding mannually:

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

Next install package by running:

    composer require centrobill/php-sdk-v1

Package will be installed under vendor folder


## Using package

To view different usage of API endpoints please refer to **example** folder