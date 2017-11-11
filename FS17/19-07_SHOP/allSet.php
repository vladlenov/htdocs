<?php
session_start();

/**
 * @return array
 */
function getDbParams()
{
    return [
        'host' => 'localhost',
        'port' => 3306,
        'user' => 'root',
        'password' => '',
        'db' => 'rozetka'
    ];
}

/**
 * @return mysqli
 * Check connection
 */
function dbConnect()
{
    $params = getDbParams();
    $conn = mysqli_connect($params['host'], $params['user'], $params['password'], $params['db']);
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    return $conn;
}

/**
 * @return array
 */
function getCategories()
{
    $res = mysqli_query(dbConnect(), 'SELECT category_id, category_name, parent_id 
                                            FROM categories ORDER BY parent_id ASC'
    );
    $categories = [];
    while ($row = mysqli_fetch_assoc($res)) {
        if (!isset($row['parent_id'])) {
            $categories[$row['category_id']] = [
                'name' => $row['category_name'],
                'subcat' => []
            ];
        } else {
            $categories[$row['parent_id']]['subcat'][$row['category_id']] = $row['category_name'];
        }
    }
    ?>
    <pre><? print_r($categories); ?></pre><?
    return $categories;

}

//function getCategories() {
//    $categories = file_get_contents('categories.txt');
//    if (empty($categories)) : return [];
//    endif;
//    return unserialize();
//}

/** КАТЕГОРИИ
 * @param array $categories
 * @return array|mixed$categories
 */
function saveCategories(array $categories)
{
    file_put_contents('categories.txt', serialize($categories));
}


/**
 * @param $category
 * @return array
 * Анонимная функция (замыкание) наследует переменную $category из родительской области видимости.
 * Для этого мы её объявляем в конструкции use. Она обходит каждое значение массива getGoods,
 * передавая его в function ($i), и если она возвращает true, то оно возвращается в результирующий массив.
 */
function getGoodsByCategory($category)
{
    $sql = 'SELECT * FROM goods WHERE category_id = ' . $category;


    return array_filter(getGoods(), function ($i) use ($category) {
        return $i['category'] == $category;
    });
}

/**
 * @return возвращает из user.txt массив полльзователей (либо пустой)
 */
function getUsers()
{
    $data = unserialize(file_get_contents('user.txt'));
    if (!is_array($data) || empty($data)) {
        $data = [];
    }
    return $data;
}

/**
 * @param $name
 * @return возвращает массив имён пользователей (либо пустой)
 */
function getUser($name)
{
    $data = getUsers();
    return isset($data[$name]) ? $data[$name] : [];
}

/**
 * @param array $user сохраняет массив, полученный функцией getUsers в файл user.txt
 */
function saveUser(array $user)
{
    $users = getUsers();
    $users[$user['name']] = $user;
    file_put_contents('user.txt', serialize($users));
}

/**
 * @return bool
 */
function isAuth()
{
    return isset($_SESSION['user_name']);
    return isset($_SERVER['PHP_AUTH_USER']);

}

/**
 * @param $goodsId
 */
function putToBasket($goodsId)
{
    if (!isset($_SESSION['basket'])) {
        $_SESSION['basket'] = [];
    }
    array_push($_SESSION['basket'], $goodsId);
}

//function sumBusket()
//{
//    if(!isset($_SESSION['basket']) && !empty($_SESSION['basket'])) {
//        array_sum($_SESSION['basket'][])
//    }
//}

/**
 * @return int
 */
function getBasketCounter()
{
    return @count($_SESSION['basket']);
}

/** СОХРАНЕНИЕ ТОВАРОВ
 * @param array $items
 * @return array|mixed
 */
function saveGoods(array $items)
{
    file_put_contents('items.txt', serialize($items));
}

/** возвращает ассоциативный массив товаров
 * @return array|mixed
 */
//function getGoods()
//{
//    $items = file_get_contents('items.txt');
//    if (empty($items)) {
//        return [];
//    }
//    return unserialize($items);
//}

/**
 * @return array|null
 */
function getGoods()
{
    $goodsFromDb = mysqli_query(dbConnect(), 'SELECT product_id, product_name, product_descr, 
                                                           product_price, category_id
                                                    FROM goods');
    $items = mysqli_fetch_assoc($goodsFromDb);
    ?>
    <pre><? print_r($items); ?></pre><?
    if (empty($items)) {
        return [];
    }
    $items['id'] = $items['product_id'];
    unset($items['product_id']);
    $items['name'] = $items['product_name'];
    unset($items['product_name']);
    $items['description'] = $items['product_descr'];
    unset($items['product_descr']);
    $items['price'] = $items['product_price'];
    unset($items['product_price']);
    $items['category'] = $items['category_id'];
    unset($items['category_id']);

    ?>
    <pre><? print_r($items); ?></pre><?
    return $items;
}


