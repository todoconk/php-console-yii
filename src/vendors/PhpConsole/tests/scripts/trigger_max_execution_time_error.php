<?php

set_time_limit(2);

sleep(2);
// sometime web-servers just ignore sleep() command
$start = time();
while(time() - $start < 2) {
	mt_rand();
}
