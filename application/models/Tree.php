<?php

/**
 * Created by PhpStorm.
 * User: Кисена
 * Date: 12.08.2016
 * Time: 22:47
 */
class Tree extends Model
{
    private $host = 'localhost';
    private $db = 'test';
    private $charset = 'utf8';
    private $user = 'root';
    private $pass = '';
    private $pdo = null;

    /**
     * Tree constructor.
     */
    public function __construct()
    {
        $this->initDB();
    }

    public function getData($params = [])
    {
        $dbRecords = $this->pdo->query('select * from tree')->fetchAll(PDO::FETCH_UNIQUE);
        $tree = $this->prepareData($dbRecords);

        $data = [
            'tree' => $tree,
            'firstSelection' => $this->getFirstSelection(),
            'secondSelection' => $this->getSecondSelection()
        ];
        return $data;
    }

    private function initDB()
    {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        $opt = array(
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
        $this->pdo = new PDO($dsn, $this->user, $this->pass, $opt);
    }

    private function prepareData($data)
    {
        $tree = [];
        foreach ($data as $key => $value) {
            if ($value['parent'] == 0) {
                $tree[$key] = $value;
                unset($data[$key]);
                $this->setChildren($key, $data, $tree[$key]);
            }
        }

        return $tree;
    }

    private function setChildren($parentKey, &$data, &$parentNode)
    {
        foreach ($data as $key => $value) {
           if ($value['parent'] == $parentKey) {
               $children = $data[$key];
               unset($data[$key]);
               $this->setChildren($key, $data, $children);
               $parentNode['children'][$key] = $children;
           }
        }
    }

    public function getFirstSelection()
    {
        $query = 'SELECT name
                    FROM tree
                    WHERE parent = 0
                      AND id IN
                        (SELECT parent
                         FROM
                           (SELECT parent,
                                   count(parent) children_count
                            FROM tree
                            GROUP BY parent) AS counts
                         WHERE children_count >= 3)';

        $names = $this->pdo->query($query)->fetchAll(PDO::FETCH_COLUMN);
        return $names;
    }

    public function getSecondSelection()
    {
        $query = 'SELECT name
                    FROM tree
                    WHERE parent IN
                        (SELECT id
                         FROM tree
                         WHERE parent IN
                             (SELECT id
                              FROM tree
                              WHERE parent = 0))
                      AND NOT (id IN
                                 (SELECT DISTINCT parent
                                  FROM tree))';

        $names = $this->pdo->query($query)->fetchAll(PDO::FETCH_COLUMN);
        return $names;
    }
}