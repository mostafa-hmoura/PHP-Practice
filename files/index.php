<?php

mkdir('Storage');

touch('Storage/index.txt');

unlink('Storage/index.txt');    

rmdir('Storage');

?>