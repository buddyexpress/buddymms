<?php

echo bframework_view_page(array(
'body' => bframework_view(bframework_get_approot_path().'template/mails'),
'title' => bframework_print('list:mails')
));
