<?php
/**
 * @Title Projeto para o teste de seleção
 * @Developement: Walderlan Sena <senawalderlan@gmail.com>
 * @source
 */

session_start();

require_once __DIR__.'/../vendor/autoload.php';

use App\SoftStore\System\Router\Router;

new Router();

