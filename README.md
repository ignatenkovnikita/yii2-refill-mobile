Client for service refill mobile
================================
[![Latest Stable Version](https://poser.pugx.org/ignatenkovnikita/yii2-refill-mobile/v/stable)](https://packagist.org/packages/ignatenkovnikita/yii2-refill-mobile) [![Total Downloads](https://poser.pugx.org/ignatenkovnikita/yii2-refill-mobile/downloads)](https://packagist.org/packages/ignatenkovnikita/yii2-refill-mobile) [![Latest Unstable Version](https://poser.pugx.org/ignatenkovnikita/yii2-refill-mobile/v/unstable)](https://packagist.org/packages/ignatenkovnikita/yii2-refill-mobile) [![License](https://poser.pugx.org/ignatenkovnikita/yii2-refill-mobile/license)](https://packagist.org/packages/ignatenkovnikita/yii2-refill-mobile)
Client for service refill mobile

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist ignatenkovnikita/yii2-refill-mobile "*"
```

or add

```
"ignatenkovnikita/yii2-refill-mobile": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Add this to your main configuration's components array:

```php
'refillMobile' => [
            'class' =>  \ignatenkovnikita\refillmobile\ClientRefill::className(),
            'url' => your_url,
            'user' => your_user,
            'pass' => your_pass,
            'actionId' => your_actionId

        ],
```
Typical component usage
-----------------------
```php
Yii::$app->refillMobile->state(your_id);
Yii::$app->refillMobile->refill(7 your_phone, your summ);
```
