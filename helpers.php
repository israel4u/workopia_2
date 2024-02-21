<?php

/**
 * Get the base path
 * @param string $path
 * @return string
 */
function basePath($path = '')
{
  return __DIR__ . '/' . $path;
}

/**
 * Load view
 * @param string $name
 * @return void
 */
function loadView($name)
{
  $basePath = basePath("views/{$name}.view.php");

  if (file_exists($basePath)) {
    require $basePath;
  } else {
    echo "'{$name} not found!'";
  }
}

/**
 * Load Partials
 * @param string $name
 * @return void
 */
function loadPartial($name)
{
  $loadPartial = basePath("views/partials/{$name}.php");
  if (file_exists($loadPartial)) {
    require $loadPartial;
  } else {
    echo "'{$name}' not found!";
  }
}


/**
 * Inspect a value(s)
 * 
 * @param mixed $value
 * @return void
 */
function inspect($value)
{
  echo 'pre';
  var_dump($value);
  echo '</pre';
}

/**
 * Inspect a value(s) and die
 * 
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value)
{
  echo 'pre';
  die(var_dump($value));
  echo '</pre';
}
