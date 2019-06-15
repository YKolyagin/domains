<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.06.2019
 * Time: 23:23
 */

namespace app\controllers;

use app\model\Products;

class ApiController extends Controller
{
    public function actionCatalog()
    {
        $page = $_GET['page'] ?? 0;
        $page++;
        $limit = $page * 2;
        $products = Products::getLimit(0, $limit);
        header('Content-Type: application/json');
        echo json_encode(['products' => $products], JSON_UNESCAPED_UNICODE);
    }

}