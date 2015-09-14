<?php

function index_index() {
    $data = array();
    $data['template_file'] = 'index/index.php';

    render('layout.php', $data);
}
