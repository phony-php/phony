<div align="center">

[![Phony Logo](.github/asset/phony-logo.png)](https://github.com/phonyland/phony)
</div>

<div align="center">

[![Latest Version on Packagist](https://img.shields.io/packagist/v/phonyland/phony.svg?style=flat-square)](https://packagist.org/packages/phonyland/phony)
[![Total Downloads](https://img.shields.io/packagist/dt/phonyland/phony.svg?style=flat-square)](https://packagist.org/packages/phonyland/phony)
![Packagist](https://img.shields.io/packagist/l/phonyland/phony)
[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2Fphonyland%2Fphony.svg?type=shield)](https://app.fossa.com/projects/git%2Bgithub.com%2Fphonyland%2Fphony?ref=badge_shield)

</div>

<div align="center">

![Tests](https://github.com/phonyland/phony/workflows/Tests/badge.svg)
[![Bugs](https://sonarcloud.io/api/project_badges/measure?project=phonyland_phony&metric=bugs)](https://sonarcloud.io/dashboard?id=phonyland_phony)
[![Coverage](https://sonarcloud.io/api/project_badges/measure?project=phonyland_phony&metric=coverage)](https://sonarcloud.io/dashboard?id=phonyland_phony)
[![Lines of Code](https://sonarcloud.io/api/project_badges/measure?project=phonyland_phony&metric=ncloc)](https://sonarcloud.io/dashboard?id=phonyland_phony)

</div> 

<div align="center">

[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=phonyland_phony&metric=alert_status)](https://sonarcloud.io/dashboard?id=phonyland_phony)
[![Maintainability Rating](https://sonarcloud.io/api/project_badges/measure?project=phonyland_phony&metric=sqale_rating)](https://sonarcloud.io/dashboard?id=phonyland_phony)
[![Reliability Rating](https://sonarcloud.io/api/project_badges/measure?project=phonyland_phony&metric=reliability_rating)](https://sonarcloud.io/dashboard?id=phonyland_phony)
[![Security Rating](https://sonarcloud.io/api/project_badges/measure?project=phonyland_phony&metric=security_rating)](https://sonarcloud.io/dashboard?id=phonyland_phony)
[![Technical Debt](https://sonarcloud.io/api/project_badges/measure?project=phonyland_phony&metric=sqale_index)](https://sonarcloud.io/dashboard?id=phonyland_phony)

</div> 

<div align="center">

[![Open Source Love](https://badges.frapsoft.com/os/v3/open-source.svg?v=102)](https://github.com/ellerbrock/open-source-badge/)

</div> 

### This package is in active development and not production ready.

**Phony** is a `PHP` package that can generate a wide range of fake data.

**Phony** is heavily inspired by Perl's [Data::Faker](http://search.cpan.org/~jasonk/Data-Faker-0.07/), 
Ruby's [Faker](https://github.com/faker-ruby/faker), [ffaker](https://github.com/ffaker/ffaker) and 
PHP's [Faker](https://github.com/fzaninotto/Faker).
 
**Phony** requires `PHP` >= `7.4`.

## 🚀 Installation

You can install the package via composer:

```console
composer require phonyland/phony
```

## 🙌 Usage

```php
<?php

use Phonyland\Phony;

$🙃 = new Phony('en');

$🙃->address->city;                  // => "Imogeneborough"

$🙃->📫->city;                       // => "Imogeneborough"

$🙃->alphabet->uppercase_letter;     // => "P"

$🙃->🔤->uppercase_letter;           // => "P"

$🙃->ancient->god;                   // => "Zeus"

$🙃->📜->god;                        // => "Zeus"

$🙃->coin->flip;                     // => "Heads"

$🙃->currency->name;                 // => "Swedish Krona"

$🙃->person->name;                   // => "Tyshawn Johns Sr."
```

## Fakes

### Standard

- [$🙃->address](doc/default/address.md)
- [$🙃->alphabet](doc/default/alphabet.md)
- [$🙃->ancient](doc/default/ancient.md)
- [$🙃->artist](doc/default/artist.md)
- [$🙃->coin](doc/default/coin.md)
- [$🙃->cosmere](doc/default/cosmere.md)
- [$🙃->currency](doc/default/currency.md)
- [$🙃->person](doc/default/person.md)
- [$🙃->slack_emoji](doc/default/slack_emoji.md)

## 🐛 Testing

```console
composer test
```

## 📖 Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## 🤝 Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## 🔒  Security

If you discover any security related issues, please email phony@deligoz.me instead of using the issue tracker.

## 🎉 Credits

- [Yunus Emre Deligöz](https://github.com/deligoez)
- [All Contributors](../../contributors)

## 📄 License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2Fphonyland%2Fphony.svg?type=large)](https://app.fossa.com/projects/git%2Bgithub.com%2Fphonyland%2Fphony?ref=badge_large)
