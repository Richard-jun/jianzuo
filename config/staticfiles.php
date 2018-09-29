<?php

// 前台静态文件路径
const HOME = '/static/home';
const CSS  = '/static/home/css';
const JS   = '/static/home/js';
const IMG  = '/static/home/images';

// 后台静态文件路径
const ADMIN     = '/static/admin';
const ADMIN_CSS = '/static/admin/css';
const ADMIN_JS  = '/static/admin/js';
const ADMIN_IMG = '/static/admin/images';

// 文件上传路径
const UPLOAD_PATH = '/uploads/';


/*
$path = UPLOAD_PATH.date('Y_m_d');
if(!file_exists($path)) {
    mkdir($path);
}

 ***************
 * 封装文件上传类
 * *************

*/