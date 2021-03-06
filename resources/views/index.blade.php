<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Responsive jQuery Shopping Basket</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- partial:index.partial.html -->
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Basket</title>
    </head>

    <body>
        <form role="form" method="POST" action="{{ url('/paypal-checkout') }}">
            {{ csrf_field() }}
            <main>
                <div class="basket">

                    <div class="basket-labels">
                        <ul>
                            <li class="item item-heading">Item</li>
                            <li class="price">Price</li>
                            <li class="quantity">Quantity</li>
                            <li class="subtotal">Subtotal</li>
                        </ul>
                    </div>
                    <div class="basket-product">
                        <div class="item">
                            <div class="product-image">
                                <img src="http://placehold.it/120x166" alt="Placholder Image 2" class="product-frame">
                            </div>
                            <div class="product-details">
                                <h1><strong><span class="item-quantity">4</span> x Eliza J</strong> Lace Sleeve Cuff
                                    Dress
                                </h1>
                                <p><strong>Navy, Size 18</strong></p>
                                <p>Product Code - 232321939</p>
                            </div>
                        </div>
                        <div class="price">26.00</div>
                        <input type="hidden" name="item1Value" value="26.00">
                        <input type="hidden" name="item1Name" value="4 x Eliza J Lace Sleeve Cuff Dress">
                        <input type="hidden" name="item1Description" value="Product Code - 232321939">
                        <div class="quantity">
                            <input type="number" name="item1Quantity" value="4" min="1" class="quantity-field">
                        </div>
                        <div class="subtotal">104.00</div>
                        <div class="remove">
                            <button>Remove</button>
                        </div>
                    </div>
                    <div class="basket-product">
                        <div class="item">
                            <div class="product-image">
                                <img src="http://placehold.it/120x166" alt="Placholder Image 2" class="product-frame">
                            </div>
                            <div class="product-details">
                                <h1><strong><span class="item-quantity">1</span> x Whistles</strong> Amella Lace Midi
                                    Dress
                                </h1>
                                <p><strong>Navy, Size 10</strong></p>
                                <p>Product Code - 232321939</p>
                            </div>
                        </div>
                        <div class="price">26.00</div>
                        <input type="hidden" name="item2Value" value="26.00">
                        <input type="hidden" name="item2Name" value="4 x Eliza J Lace Sleeve Cuff Dress">
                        <input type="hidden" name="item2Description" value="Product Code - 232321939">
                        <div class="quantity">
                            <input type="number" value="1" name="item2Quantity" min="1" class="quantity-field">
                        </div>
                        <div class="subtotal">26.00</div>
                        <div class="remove">
                            <button>Remove</button>
                        </div>
                    </div>

                </div>
                <aside>
                    <div class="summary">
                        <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
                        <div class="summary-subtotal">
                            <div class="subtotal-title">Subtotal</div>
                            <div class="subtotal-value final-value" id="basket-subtotal">130.00</div>
                            <div class="summary-promo hide">
                                <div class="promo-title">Promotion</div>
                                <div class="promo-value final-value" id="basket-promo"></div>
                            </div>
                        </div>
                        <div class="summary-total">
                            <div class="total-title">Total</div>
                            <div class="total-value final-value" id="basket-total">130.00</div>
                        </div>
                        <div class="summary-checkout">
                            <button type="submit" class="checkout-cta">Go to Secure Checkout</button>
                        </div>
                    </div>
                </aside>
            </main>
        </form>
    </body>

    </html>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src="{{ asset('js/script.js')}}"></script>
</body>

</html>
