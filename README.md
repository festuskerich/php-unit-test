# Guid on how to setup and write unit tests in a php application

```bash
mkdir project-name
```

### Create the folders

```bash
cd project-name
mkdir src
mkdir test
touch composer.json
```

### Set up the composer file, under require you can specify the php version `"php": "^8.1"`

```json
{
    "name": "fkerich/phpunittestproject",
    "description": "",
    "type": "project",
    "license": "NONE",
    "authors": [
        {
            "name": "Festus Kerich",
            "email": "festuskerich@gmail.com"
        }
    ],
    "autoload": {
        "psr-4": {
            "phpunittestproject\\": [
                "src/"
            ]
        }
    },
    "require": {
        "php": "^8.1"
    },
    "require-dev": {
        "php-mock/php-mock-phpunit": "^2.7",
        "phpunit/php-code-coverage": "^10.1"
    }
}
```

### Add the php unit test dependecies on the `require-dev`

```json
        "php-mock/php-mock-phpunit": "^2.7",
        "phpunit/php-code-coverage": "^10.1"
```


