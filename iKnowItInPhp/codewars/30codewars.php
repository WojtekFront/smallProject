<?php
// Create a function that accepts a parameter representing a name and returns the message: "Hello, <name> how are you doing today?".

function greet(string $name):string {
    $name = trim($name);
    $name = empty($name)? "unknown" : ucfirst($name);
    $name = htmlspecialchars($name, ENT_QUOTES | ENT_HTML5, 'UTF-8' );

    return "Hello, {$name} how are you doing today?";
}

echo(greet("woj"));