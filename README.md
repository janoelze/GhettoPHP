# Junbi
================

Junbi is a ready-to-go-everything-i-need-php-setup based on [Slim](http://slimframework.com).

## Key-Value Store

### Storing Data

```
$app = new Slim();

$table = "users";
$key = "jan";
$value = array( "age" => 21);

Store::set( $table, $key, $value );
```

### Retrieving Data

```
$app = new Slim();

$table = "users";
$key = "jan";

Store::get( $table, $key );
```

## LESS Parsing

Define In- and Output paths for LESS files.

```
$app = new Slim();

$app->less->compile('assets/style/source.less','assets/style/style.css');
```

## Configuration files

All ```.ini``` files placed in the ```/app/conf/```-directory get loaded upfront. And are accessible via ```$app->config```.

```
$app = new Slim();

$template_path = $app->conf['template_path'];
``` 
