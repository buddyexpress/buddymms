<?php

echo bframework_view_page(array(
'body' => bframework_view(bframework_get_approot_path().'template/apiadd'),
'title' => bframework_print('api:add')
));
