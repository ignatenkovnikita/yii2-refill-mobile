Client for service refill mobile
================================
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