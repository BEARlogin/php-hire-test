<?php

function gen($from, $to)
{
    for ($i = $from; $i < $to; $i++) {
        yield $i;
    }
    return $i;
}


function run($from = 0, $to = 5): array
{
    $res = [];
    $iterator = gen($from, $to);
    while ($iterator->current()) {
        array_push($res, $iterator->current());
        $iterator->next();
    }
    return $res;
}
