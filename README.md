# VestaCP API <img height="40"  src="https://cloud.githubusercontent.com/assets/5102591/25568951/b69285b4-2e15-11e7-9bd1-c91a04fb7f97.png">

Forked from - [github-tabuna/VestaAPI](https://github.com/tabuna/VestaAPI)

Powerful API client hosting VestaCP for Laravel


<p align="center">
<a href="https://packagist.org/packages/saiashirwadinformatia/vesta-cp-api"><img src="https://poser.pugx.org/saiashirwadinformatia/vesta-cp-api/v/stable"/></a>
<a href="https://packagist.org/packages/saiashirwadinformatia/vesta-cp-api"><img src="https://poser.pugx.org/saiashirwadinformatia/vesta-cp-api/downloads"/></a>
<a href="https://packagist.org/packages/saiashirwadinformatia/vesta-cp-api"><img src="https://poser.pugx.org/saiashirwadinformatia/vesta-cp-api/license"/></a>
</p>


## Installation


### Via Composer

Going your project directory on shell and run this command: 

```sh
$ composer require saiashirwadinformatia/vesta-cp-api
```

Publication

```sh
$ php artisan vendor:publish --provider="VestaCP\Providers\VestaServiceProvider"
```

Generate new API key

```bash
$ bash /usr/local/vesta/bin/v-generate-api-key
```

List Existing API Key's

```bash
$ ls -l /usr/local/vesta/data/keys/
```

## Usage

	
Simple usage
```php
use VestaCP\Facades\Vesta;

$backups = Vesta::server('default')->listUserBackups();
$accounts = Vesta::server('default')->listUserAccount();

```

# LICENSE

[GPL-3.0](LICENSE)