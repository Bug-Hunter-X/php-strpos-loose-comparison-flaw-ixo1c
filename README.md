This repository demonstrates a common, yet subtle, bug in PHP related to the `strpos()` function and loose comparisons. The `strpos()` function, when used with loose comparison (`==`), can incorrectly identify matches at the beginning of the string as non-matches due to the fact that `false` (returned when the needle is not found) and `0` (returned when the needle is found at the beginning) are considered equal in loose comparison.

The `bug.php` file shows the buggy code, and `bugSolution.php` shows the corrected code using strict comparison (`===`).