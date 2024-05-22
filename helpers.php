<?php

/** Get the base path 
 * @param string $path
 * @return string
 */

function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}


/**
 * Load a View
 * @param string $name
 * @param array $data
 * @param void
 */

function loadView($name, $data = [])
{
    $viewpath =  basePath("views/{$name}.view.php");

    if (file_exists($viewpath)) {
        extract($data);
        require $viewpath;
    } else {
        echo "View {$name} not found";
    };
}


/**
 * Load a Partial
 * @param string $name
 * @param void
 */

function loadPartial($name)
{
    $partialPath = basePath("views/partials/{$name}.php");
    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partials {$name} not found";
    };
}

/**
 * Inspect Value(s)
 * @param mixed $value
 * @return void
 */

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}




/**
 * Inspect Value(s) and DIE
 * @param mixed $value
 * @return void
 */

function inspectAndDie($value)
{
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}

/**
 * Format Salary
 * @param string $salary
 * @return string
 */
function formatSalary($salary)
{
   return '$' . number_format(floatval($salary),2, '.', ',');
}
