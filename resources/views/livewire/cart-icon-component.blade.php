<div>
    <a href="cart.html" class="indicator__button" style="margin-top: 0.4rem;">
       <span class="indicator__area">
           <svg width="20px" height="20px">
               <use xlink:href="images/sprite.svg#cart-20"></use>
           </svg>
           <span class="indicator__value">{{ \Gloudemans\Shoppingcart\Facades\Cart::count() }}</span>
       </span>
    </a>
    <div class="indicator__dropdown">
        <!-- .dropcart -->
        <div class="dropcart dropcart--style--dropdown">
            <div class="dropcart__body">
                <div class="dropcart__products-list">
                    <div class="dropcart__product">
                        <div class="product-image dropcart__product-image">
                            <a href="product.html" class="product-image__body">
                                <img class="product-image__img"
                                     src="images/products/product-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="dropcart__product-info">
                            <div class="dropcart__product-name"><a
                                    href="product.html">Electric Planer Brandix
                                    KL370090G 300 Watts</a></div>
                            <ul class="dropcart__product-options">
                                <li>Color: Yellow</li>
                                <li>Material: Aluminium</li>
                            </ul>
                            <div class="dropcart__product-meta">
                                <span class="dropcart__product-quantity">2</span> ×
                                <span class="dropcart__product-price">$699.00</span>
                            </div>
                        </div>
                        <button type="button"
                                class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                            <svg width="10px" height="10px">
                                <use xlink:href="images/sprite.svg#cross-10"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="dropcart__product">
                        <div class="product-image dropcart__product-image">
                            <a href="product.html" class="product-image__body">
                                <img class="product-image__img"
                                     src="images/products/product-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="dropcart__product-info">
                            <div class="dropcart__product-name"><a
                                    href="product.html">Undefined Tool IRadix
                                    DPS3000SY 2700 watts</a></div>
                            <div class="dropcart__product-meta">
                                <span class="dropcart__product-quantity">1</span> ×
                                <span class="dropcart__product-price">$849.00</span>
                            </div>
                        </div>
                        <button type="button"
                                class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                            <svg width="10px" height="10px">
                                <use xlink:href="images/sprite.svg#cross-10"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="dropcart__product">
                        <div class="product-image dropcart__product-image">
                            <a href="product.html" class="product-image__body">
                                <img class="product-image__img"
                                     src="images/products/product-5.jpg" alt="">
                            </a>
                        </div>
                        <div class="dropcart__product-info">
                            <div class="dropcart__product-name"><a
                                    href="product.html">Brandix Router Power Tool
                                    2017ERXPK</a></div>
                            <ul class="dropcart__product-options">
                                <li>Color: True Red</li>
                            </ul>
                            <div class="dropcart__product-meta">
                                <span class="dropcart__product-quantity">3</span> ×
                                <span
                                    class="dropcart__product-price">$1,210.00</span>
                            </div>
                        </div>
                        <button type="button"
                                class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                            <svg width="10px" height="10px">
                                <use xlink:href="images/sprite.svg#cross-10"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="dropcart__totals">
                    <table>
                        <tr>
                            <th>Subtotal</th>
                            <td>$5,877.00</td>
                        </tr>
                        <tr>
                            <th>Shipping</th>
                            <td>$25.00</td>
                        </tr>
                        <tr>
                            <th>Tax</th>
                            <td>$0.00</td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td>$5,902.00</td>
                        </tr>
                    </table>
                </div>
                <div class="dropcart__buttons">
                    <a class="btn btn-secondary" href="cart.html">View Cart</a>
                    <a class="btn btn-primary" href="checkout.html">Checkout</a>
                </div>
            </div>
        </div>
        <!-- .dropcart / end -->
    </div>
</div>
