<?php

$params = array(
'body' => bframework_view(bframework_get_approot_path().'template/login'),
'title' => bframework_print('login:login')
);
echo bframework_view_page($params , 'login');
