The solution is to use strict comparison (`===`) instead of loose comparison (`==`).  Strict comparison checks both the value and the type. This avoids the issue where `false` and `0` are treated as equal.

```php
<?php
$haystack = "hello world";
$needle = "hello";
if (strpos($haystack, $needle) === false) {
    echo "Needle not found";
} else {
    echo "Needle found";
}
?>
```