<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', function() {
    echo 'Hello Brick!';
});

Macaw::dispatch();
