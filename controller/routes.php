<?php
include_once 'config/static.php';
include_once 'controller/main.php';
include_once 'function/main.php';

# GET
Router::url('/', 'get', function () { return view('home'); });
Router::url('dashboard', 'get', 'ComicController::index');
Router::url('comic/add', 'get', 'ComicController::add');
Router::url('comic/edit', 'get', 'ComicController::edit');
Router::url('comic/remove', 'get', 'ComicController::hapus');


# POST

Router::url('comic/insert', 'post', 'ComicController::saveAdd');
Router::url('comic/update', 'post', 'ComicController::saveEdit');

new Router();