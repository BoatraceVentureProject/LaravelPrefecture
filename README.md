# Laravel Prefecture in the Boatrace Venture Project

[![Latest Stable Version](https://poser.pugx.org/bvp/laravel-prefecture/v/stable)](https://packagist.org/packages/bvp/laravel-prefecture)
[![Latest Unstable Version](https://poser.pugx.org/bvp/laravel-prefecture/v/unstable)](https://packagist.org/packages/bvp/laravel-prefecture)
[![License](https://poser.pugx.org/bvp/laravel-prefecture/license)](https://packagist.org/packages/bvp/laravel-prefecture)

## Installation
```bash
composer require bvp/laravel-prefecture
```

## Usage
```php
$collection = \Prefecture::byId(13);
// $collection = prefecture()->byId(13);
// $collection = app('prefecture')->byId(13);
var_dump($collection->get('id')); // int(13)
var_dump($collection->get('name')); // string(9) "東京都"
var_dump($collection->get('short_name')); // string(6) "東京"
var_dump($collection->get('hiragana_name')); // string(18) "とうきょうと"
var_dump($collection->get('katakana_name')); // string(18) "トウキョウト"
var_dump($collection->get('english_name')); // string(5) "tokyo"

$collection = \Prefecture::byName('東京都');
// $collection = prefecture()->byName('東京都');
// $collection = app('prefecture')->byName('東京都');
var_dump($collection->get('id')); // int(13)
var_dump($collection->get('name')); // string(9) "東京都"
var_dump($collection->get('short_name')); // string(6) "東京"
var_dump($collection->get('hiragana_name')); // string(18) "とうきょうと"
var_dump($collection->get('katakana_name')); // string(18) "トウキョウト"
var_dump($collection->get('english_name')); // string(5) "tokyo"

$collection = \Prefecture::byShortName('東京');
// $collection = prefecture()->byShortName('東京');
// $collection = app('prefecture')->byShortName('東京');
var_dump($collection->get('id')); // int(13)
var_dump($collection->get('name')); // string(9) "東京都"
var_dump($collection->get('short_name')); // string(6) "東京"
var_dump($collection->get('hiragana_name')); // string(18) "とうきょうと"
var_dump($collection->get('katakana_name')); // string(18) "トウキョウト"
var_dump($collection->get('english_name')); // string(5) "tokyo"

$collection = \Prefecture::byHiraganaName('とうきょうと');
// $collection = prefecture()->byHiraganaName('とうきょうと');
// $collection = app('prefecture')->byHiraganaName('とうきょうと');
var_dump($collection->get('id')); // int(13)
var_dump($collection->get('name')); // string(9) "東京都"
var_dump($collection->get('short_name')); // string(6) "東京"
var_dump($collection->get('hiragana_name')); // string(18) "とうきょうと"
var_dump($collection->get('katakana_name')); // string(18) "トウキョウト"
var_dump($collection->get('english_name')); // string(5) "tokyo"

$collection = \Prefecture::byKatakanaName('トウキョウト');
// $collection = prefecture()->byKatakanaName('トウキョウト');
// $collection = app('prefecture')->byKatakanaName('トウキョウト');
var_dump($collection->get('id')); // int(13)
var_dump($collection->get('name')); // string(9) "東京都"
var_dump($collection->get('short_name')); // string(6) "東京"
var_dump($collection->get('hiragana_name')); // string(18) "とうきょうと"
var_dump($collection->get('katakana_name')); // string(18) "トウキョウト"
var_dump($collection->get('english_name')); // string(5) "tokyo"

$collection = \Prefecture::byEnglishName('tokyo');
// $collection = prefecture()->byEnglishName('tokyo');
// $collection = app('prefecture')->byEnglishName('tokyo');
var_dump($collection->get('id')); // int(13)
var_dump($collection->get('name')); // string(9) "東京都"
var_dump($collection->get('short_name')); // string(6) "東京"
var_dump($collection->get('hiragana_name')); // string(18) "とうきょうと"
var_dump($collection->get('katakana_name')); // string(18) "トウキョウト"
var_dump($collection->get('english_name')); // string(5) "tokyo"
```

## License
Laravel Prefecture in the Boatrace Venture Project is open source software licensed under the [MIT license](LICENSE).
