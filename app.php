<?php

require_once 'classes/Product.php';
require_once 'classes/User.php';
require_once 'classes/Cart.php';

// Примеры пользователей
$user1 = new User(1, 'Иван', 30, 'student');
$user2 = new User(2, 'Мария', 65, 'pensioner');
$user3 = new User(3, 'Петр', 12, 'child');

// Примеры товаров
$product1 = new Product(1, 'Ноутбук', 'ABC123', 50000);
$product2 = new Product(2, 'Телефон', 'XYZ456', 30000);
$product3 = new Product(3, 'Книга', 'DEF789', 1000);

// Создание корзин для пользователей
$cart1 = new Cart();
$cart1->setUser($user1);
$cart1->addProduct($product1, 1);
$cart1->addProduct($product2, 1);
$cart1->addProduct($product3, 2);

$cart2 = new Cart();
$cart2->setUser($user2);
$cart2->addProduct($product1, 1);
$cart2->addProduct($product2, 1);
$cart2->addProduct($product3, 1);

$cart3 = new Cart();
$cart3->setUser($user3);
$cart3->addProduct($product1, 1);
$cart3->addProduct($product2, 1);

// Вычисление информации о корзинах
$cart1->applyStudentDiscount();
$cart2->applyPensionerDiscount();
$cart3->applyChildDiscount();

$cart1Info = calculateCartInfo($cart1);
$cart2Info = calculateCartInfo($cart2);
$cart3Info = calculateCartInfo($cart3);

// Вывод информации о корзинах
echo "**Корзина пользователя 1 ({$user1->getName()})**\n";
echo "Общая стоимость: {$cart1Info['totalPrice']}\n";
echo "Скидка: {$cart1Info['discountPercent']}%\n";
echo "Товары:\n";
foreach ($cart1Info['productsWithDiscount'] as $productInfo) {
    echo "{$productInfo['name']}: {$productInfo['priceWithDiscount']} (скидка: {$productInfo['discount']}%)\n";
}

echo "\n**Корзина пользователя 2 ({$user2->getName()})**\n";
echo "Общая стоимость: {$cart2Info['totalPrice']}\n";
echo "Скидка: {$cart2Info['discountPercent']}%\n";
echo "Товары:\n";
foreach ($cart2Info['productsWithDiscount'] as $productInfo) {
    echo "{$productInfo['name']}: {$productInfo['priceWithDiscount']} (скидка: {$productInfo['discount']}%)\n";
}

echo "\n**Корзина пользователя 3 ({$user3->getName()})**\n";
echo "Общая стоимость: {$cart3Info['totalPrice']}\n";
echo "Скидка: {$cart3Info['discountPercent']}%\n";
echo "Товары:\n";
foreach ($cart3Info['productsWithDiscount'] as $productInfo) {
    echo "{$productInfo['name']}: {$productInfo['priceWithDiscount']} (скидка: {$productInfo['discount']}%)\n";
}

// Функция для вычисления информации о корзине
function calculateCartInfo(Cart $cart): array {
    $totalPrice = $cart->getTotalPriceWithDiscount();
    $discountPercent = $cart->getDiscountPercent();
    $productsWithDiscount = [];

    foreach ($cart->getProductsWithDiscount() as $productWithDiscount) {
        $productsWithDiscount[] = [
            'name' => $productWithDiscount->getName(),
            'priceWithDiscount' => $productWithDiscount->getPriceWithDiscount(),
            'discount' => $productWithDiscount->getDiscountPercent(),
        ];
    }

    return [
        'totalPrice' => $totalPrice,
        'discountPercent' => $discountPercent,
        'productsWithDiscount' => $productsWithDiscount,
    ];
}
