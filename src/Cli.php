<?php

namespace Hexlet\Cli;

use function cli\prompt;
use function cli\line;

function greeting()
{
    line('Welcome to the Brain Game!');
    $username = prompt('May I have your name?');
    line("Hello, %s", $username);
}
