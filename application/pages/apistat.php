<?php

echo bframework_view_page(array(
'body' => bframework_view(bframework_get_approot_path().'template/apistat'),
'title' => bframework_print('api:stat')
));
