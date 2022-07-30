<?php

$prompt = ":X:> ";
$ans = null;

echo "Welcome to Xacker's calculator!\n";

while ($line = readline($prompt)) {
    $line = trim($line);
    if ($line === 'quit' || $line === 'exit' || $line === 'q' || $line === 'x') {
        break;
    }

    readline_add_history($line);
    if (strrchr($line, ';') !== ';') {
        $line .= ';';
    }

    $line = "\$ans = " . $line;

    try {
        eval($line);
    } catch (\Throwable $e) {
        echo $e->getMessage() . PHP_EOL;
        continue;
    }
    if (is_integer($ans)) {
        xackprint($ans);
    } else {
        echo $ans . PHP_EOL;
    }
}

function xackprint(int $num): void
{
    printf("D: %20d H: %016x B: %064b O: %022o\n", $num, $num, $num, $num);
}
