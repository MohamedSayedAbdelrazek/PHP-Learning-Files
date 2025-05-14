<?php

$video='https://youtu.be/x4f32i5lYH0?list=PLDoPjvoNmBAwP0emFTIiCNcySKz-mlZj7';

$parsedvideo=parse_url($video,PHP_URL_QUERY);
parse_str($parsedvideo,$myarray);
print_r($myarray);