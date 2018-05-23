\Amsterdan\BankCard
-----------

## 安装

编辑 composer.json 加入如下内容：

```json
{
  "repositories": [{
    "url": "git@github.com:amsterdan5/bankcard.git",
    "type": "git"
  }],
  "require": {
    "Amsterdan/bankcard": "dev-master"
  }
}
```

## 使用方法

```php

use Amsterdan\BankCard;

$info = BankCard::info('6225700000000000');
print_r($info);

```

## 输出结果

银行卡非法时输出空数组；

银行卡正确时输出：

```php
Array
(
    [bankCode] => CEB
    [bankName] => 中国光大银行
    [cardType] => CC
    [cardTypeName] => 信用卡
)
```
