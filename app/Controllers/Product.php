<?php


namespace App\Controllers;


use App\Models\Product as ModelProduct;
use DateTime;
use DateTimeZone;
use PDO;

define('SQLITE_PATH', ROOTPATH . 'writable/sqlite');

class Product extends BaseController
{
    private PDO $sqlitePdo;

    public function __construct()
    {
        if (!is_dir(SQLITE_PATH)) {
            mkdir(SQLITE_PATH, 0777, true);
        }
        $this->sqlitePdo = new PDO('sqlite:' . SQLITE_PATH . '/product.sqlite3');
        $sCreateProductQuery = "
                CREATE TABLE IF NOT EXISTS product (
                    nProductSeq         INTEGER PRIMARY KEY AUTOINCREMENT,
                    dtCreateDateTime    TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP,
                    dtModifyDateTime    TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP,
                    sProductName        TEXT NOT NULL DEFAULT '',
                    nProductPrice       INTEGER NOT NULL DEFAULT 0
                );
            ";
        $this->sqlitePdo->exec($sCreateProductQuery);
    }

    public function index()
    {
        phpinfo();
        // return view('welcome_message');
    }

    public function add()
    {
        $productInfo = new ModelProduct();
        $dtNowDatetime = date_format((new DateTime('now', new DateTimeZone('Asia/Seoul'))), 'Y-m-d H:i:s');
        $productInfo->setCreateDateTime($dtNowDatetime);
        $productInfo->setModifyDateTime($dtNowDatetime);
        $productInfo->setProductName('product333');
        $productInfo->setProductPrice(394000);

        // insert
        $sAddQuery = "INSERT INTO product (dtCreateDateTime, dtModifyDateTime, sProductName, nProductPrice) VALUES (:dtCreateDateTime, :dtModifyDateTime, :sProductName, :nProductPrice)";
        $stmt = $this->sqlitePdo->prepare($sAddQuery);
        $stmt->bindParam(':dtCreateDateTime', $productInfo->getCreateDateTime());
        $stmt->bindParam(':dtModifyDateTime', $productInfo->getModifyDateTime());
        $stmt->bindParam(':sProductName', $productInfo->getProductName());
        $stmt->bindParam(':nProductPrice', $productInfo->getProductPrice(), PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
        echo 1111;
    }

}