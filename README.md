# Junbi

Junbi is a ready-to-go-everything-i-need-php-setup based on [Slim](http://slimframework.com).

## Key-Value Store

### Storing Data

```
$table = "users";
$key = "jan";
$value = array( "age" => 21);

Store::set( $table, $key, $value );
```

### Retrieving Data

```
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

All ```.ini``` files placed in the ```/app/config/```-directory get loaded upfront. And are accessible via ```Config::get();```.

```
$base_url = Config::get('application.base_url');
$base_url = Config::get('application.app_name');
``` 
In this case "application" refers to a config-file in the /app/config/ folder and "base_url" is a variable in the config-file.
