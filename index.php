<?php
include __DIR__ . '/lib/tinyrouter.php';

function routeHook($input, $matches) {
  switch(gettype($input)) {
    case 'object':
      return $input($matches);
      break;
    case 'string':
      return render($input, $matches);
      break;
    case 'array':
      return call_user_func_array([$input[0], $input[1]], [$matches]);
      break;
  }
}

class routes {
  public static function load() {
    include path::get('routes', 'index.php');
  }
}