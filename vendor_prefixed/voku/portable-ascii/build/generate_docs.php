<?php /* This file has been prefixed by <PHP-Prefixer> for "Prefixed Illuminate package" */

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/vendor/autoload.php';

$readmeGenerator = new \PPP_L7\voku\PhpReadmeHelper\GenerateApi();
$readmeGenerator->templateMethod = <<<RAW
#### %name%
<a href="#voku-php-readme-class-methods">↑</a>
%description%

**Parameters:**
%params%

**Return:**
%return%

--------

RAW;
$readmeText = ($readmeGenerator)->generate(
    __DIR__ . '/../src/voku/helper/ASCII.php',
    __DIR__ . '/docs/base.md'
);

file_put_contents(__DIR__ . '/../README.md', $readmeText);
