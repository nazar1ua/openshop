<?php

// Версія | Version
const VERSION = '1.0.0';

// Налаштування | Configuration
if (is_file('config.php')) {
    require_once 'config.php';
}

// Встановлення | Install
if (!defined('DIR_APPLICATION')) {
    header('Location: install/index.php');
    exit;
}

// Запуск | Startup
require_once DIR_SYSTEM . 'startup.php';
