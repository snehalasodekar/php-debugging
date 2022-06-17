<?php
declare(strict_types=1);



// === Exercise 1 ===
// Below we're defining a function, but it doesn't work when we run it.
// Look at the error you get, read it and it should tell you the issue...,
// sometimes, even your IDE can tell you what's wrong
echo "Exercise 1 starts here:";

function new_exercise() {
    $block = "<br/><hr/><br/><br/>Exercise \$x starts here:<br/>";
    echo $block;

}
new_exercise();


/**
 * Corrections : add function call.
 *               to display $x add \ before $ so it will not consider as variable
 */
?>