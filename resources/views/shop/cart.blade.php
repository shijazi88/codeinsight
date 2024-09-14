<!DOCTYPE html>
<html lang="en">

    <x-head headtitle='Cart'/>
    
    <body class="inner-page">

    <!-- ..:: rts header area start ::.. -->
    <x-header/>
    <!-- ..:: rts header area end ::.. -->

    <!-- ..:: rts breadcrumb area start-->
    <x-breadcrumb title='Cart' subtitle='Cart'/>
    <!-- ..:: rts breadcrumb area end ::.. -->

    <!-- ..:: rts cart area start ::.. -->
    <div class="rts-cart-area rts-section-gapTop">
        <div class="container">
            <div class="cart-area-inner">
                <div class="ms-woocommerce-cart-form-wrapper">
                    <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                        <thead>
                            <tr>
                                <th class="product-remove">&nbsp;</th>
                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="woocommerce-cart-form__cart-item cart_item">
                                <td class="product-remove">
                                    <a href="#" class="remove" aria-label="Remove this item" data-product_id="470" data-product_sku="161056">
                                        <svg viewBox="0 0 200 200" width="18" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M114,100l49-49a9.9,9.9,0,0,0-14-14L100,86,51,37A9.9,9.9,0,0,0,37,51l49,49L37,149a9.9,9.9,0,0,0,14,14l49-49,49,49a9.9,9.9,0,0,0,14-14Z">
                                            </path>
                                        </svg>
                                    </a>
                                </td>
                                <td class="product-thumbnail">
                                    <a>
                                        <img src="{{ asset('assets/images/feature/img-4.png') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">
                                    </a>
                                </td>
                                <td class="product-name" data-title="Product">
                                    <a >Bruno's Scribble</a>
                                </td>

                                <td class="product-price" data-title="Price">
                                    <span class="woocommerce-Price-amount amount">
                                            <bdi><span class="woocommerce-Price-currencySymbol">$</span>120.00</bdi>
                                    </span>
                                </td>
                                <td>
                                    <div class="cart-edit">
                                        <div class="quantity-edit">
                                            <button class="button"><i class="fal fa-minus minus"></i></button>
                                            <input type="text" class="input" value="3">
                                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                        </div>
                                    </div>
                                </td>
                                <td class="product-subtotal" data-title="Subtotal">
                                    <span class="woocommerce-Price-amount amount">
                                            <bdi><span class="woocommerce-Price-currencySymbol">$</span>120.00</bdi>
                                    </span>
                                </td>
                            </tr>
                            <tr class="woocommerce-cart-form__cart-item cart_item">
                                <td class="product-remove">
                                    <a href="#" class="remove" aria-label="Remove this item" data-product_id="476" data-product_sku="321736">
                                        <svg viewBox="0 0 200 200" width="18" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M114,100l49-49a9.9,9.9,0,0,0-14-14L100,86,51,37A9.9,9.9,0,0,0,37,51l49,49L37,149a9.9,9.9,0,0,0,14,14l49-49,49,49a9.9,9.9,0,0,0,14-14Z">
                                            </path>
                                        </svg>
                                    </a>
                                </td>
                                <td class="product-thumbnail">
                                    <a >
                                        <img src="{{ asset('assets/images/feature/img-5.png') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Shop Image">
                                    </a>
                                </td>
                                <td class="product-name" data-title="Product">
                                    <a >Chicha Morada</a>
                                </td>
                                <td class="product-price" data-title="Price">
                                    <span class="woocommerce-Price-amount amount">
                                            <bdi><span class="woocommerce-Price-currencySymbol">$</span>180.00</bdi>
                                    </span>
                                </td>
                                <td>
                                    <div class="cart-edit">
                                        <div class="quantity-edit">
                                            <button class="button"><i class="fal fa-minus minus"></i></button>
                                            <input type="text" class="input" value="3">
                                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                        </div>
                                    </div>
                                </td>
                                <td class="product-subtotal" data-title="Subtotal">
                                    <span class="woocommerce-Price-amount amount">
                                            <bdi><span class="woocommerce-Price-currencySymbol">$</span>180.00</bdi>
                                    </span>
                                </td>
                            </tr>
                            <tr class="woocommerce-cart-form__cart-item cart_item">
                                <td class="product-remove">
                                    <a href="#" class="remove" aria-label="Remove this item" data-product_id="478" data-product_sku="117652">
                                        <svg viewBox="0 0 200 200" width="18" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M114,100l49-49a9.9,9.9,0,0,0-14-14L100,86,51,37A9.9,9.9,0,0,0,37,51l49,49L37,149a9.9,9.9,0,0,0,14,14l49-49,49,49a9.9,9.9,0,0,0,14-14Z">
                                            </path>
                                        </svg>
                                    </a>
                                </td>
                                <td class="product-thumbnail">
                                    <a >
                                        <img src="{{ asset('assets/images/feature/img-6.png') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Shop Image">
                                    </a>
                                </td>
                                <td class="product-name" data-title="Product">
                                    <a >Prickly Pear Tonic</a>
                                </td>

                                <td class="product-price" data-title="Price">
                                    <span class="woocommerce-Price-amount amount">
                                            <bdi><span class="woocommerce-Price-currencySymbol">$</span>80.00</bdi>
                                    </span>
                                </td>
                                <td>
                                    <div class="cart-edit">
                                        <div class="quantity-edit">
                                            <button class="button"><i class="fal fa-minus minus"></i></button>
                                            <input type="text" class="input" value="3">
                                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                        </div>
                                    </div>
                                </td>
                                <td class="product-subtotal" data-title="Subtotal">
                                    <span class="woocommerce-Price-amount amount">
                                            <bdi><span class="woocommerce-Price-currencySymbol">$</span>80.00</bdi>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6" class="actions">
                                    <form class="woocommerce-cart-form" action="#" method="post">

                                        <div class="ms-actions-inner">
                                            <div class="coupon">
                                                <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code" required>
                                                <button type="submit" class="button rts-btn btn-primary" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-6 offset-md-6">
                            <div class="ms-cart-collaterals cart-collaterals">
                                <div class="ms-cart-totals cart_totals ">
                                    <h3>Cart Totals</h3>
                                    <table class="shop_table shop_table_responsive">
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td data-title="Subtotal">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi><span class="woocommerce-Price-currencySymbol">$</span>519.00</bdi>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr class="cart-subtotal">
                                                <th>Shipping</th>
                                                <td data-title="Subtotal">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <label for="shipping_method_0_free_shipping1">Free shipping</label>
                                                        <p class="woocommerce-shipping-destination">
                                                            Shipping to 
                                                            <strong>AL</strong>. 				
                                                        </p>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td data-title="Total">
                                                    <strong><span class="woocommerce-Price-amount amount">
                                                        <bdi><span class="woocommerce-Price-currencySymbol">$</span>519.00</bdi></span>
                                                    </strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="ms-proceed-to-checkout wc-proceed-to-checkout">
                                        <a href="{{ route('checkout') }}" class="rts-btn btn-primary"> Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts cart area end ::.. -->

    <!-- ..:: rts footer area start ::.. -->
    <x-footer/>
    <!-- ..:: rts footer area end ::.. -->

    <div id="anywhere-home" class="">
    </div>

    <!-- ..:: header style two ::.. -->
    <x-headerstyle/>
    <!-- ..:: header style two End ::.. -->

    <!-- ..:: rts backto top start ::.. -->
    <x-backtotop/>
    <!-- ..:: rts backto top end ::.. -->

    <!-- ..:: rts backto top start ::.. -->
    <x-script/>
    <!-- ..:: rts backto top end ::.. -->
     
</body>

</html>                   