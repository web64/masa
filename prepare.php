<?php

file_put_contents( dirname(__FILE__) . "/src/data/tsv/no.tsv", 
    file_get_contents('https://raw.githubusercontent.com/olavski/afinn/master/afinn/data/AFINN-no-165.txt')
);