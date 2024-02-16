<!DOCTYPE html>

<html data-wf-domain="frenzzy.webflow.io" data-wf-page="65771d45a01233ffd04fabda" data-wf-site="6577019a915bb98abc733614"
    lang="en">


<head>
    <meta charset="utf-8" />
    <title>Frenzzy</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="../css/frenzzy.webflow.33adfbd80.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/" rel="preconnect" />
    <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin="anonymous" />
    <script src="../js/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Manrope:200,300,regular,500,600,700,800"]
            },
        });
    </script>
    <script type="text/javascript">
        !(function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            (n.className += t + "js"),
            ("ontouchstart" in o ||
                (o.DocumentTouch && c instanceof DocumentTouch)) &&
            (n.className += t + "touch");
        })(window, document);
    </script>
    <link href="../images/6578292bacaaaf778474bdda_favicon.png" rel="shortcut icon" type="image/x-icon" />
    <link href="../images/6578292e454da728965cd378_webclip.png" rel="apple-touch-icon" />
    <script type="text/javascript">
        window.__WEBFLOW_CURRENCY_SETTINGS = {
            currencyCode: "USD",
            symbol: "$",
            decimal: ".",
            fractionDigits: 2,
            group: ",",
            template: '@{{ wf {
    "path": "symbol",
    "type": "PlainText"
} }} @{{ wf {
    "path": "amount",
    "type": "CommercePrice"
} }} @{{ wf {
    "path": "currencyCode",
    "type": "PlainText"
} }}',
            hideDecimalForWholeNumbers: false,
        };
    </script>
</head>

<body>
    <div class="header">
        <div class="w-layout-blockcontainer main-container w-container">
            <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease"
                data-easing2="ease" role="banner" class="header-inner w-nav">
                <a href="../index.html" class="logo w-inline-block"><img
                        src="../images/657863b7f0b946b4f8e8b45e_viber_image_2023-12-12_14-14-12-128.png" loading="lazy"
                        alt="" class="logo-img" /></a>
                <nav role="navigation" class="main-menu w-nav-menu">
                    <a href="../index.html" class="menu-item w-nav-link">Home</a><a href="../about.html"
                        class="menu-item w-nav-link">About</a><a href="/public/categories.html"
                        class="menu-item w-nav-link">categories</a><a href="/public/blog.html"
                        class="menu-item w-nav-link">posts</a><a href="/public/shop.html"
                        class="menu-item w-nav-link">shop</a><a href="/public/contact.html"
                        class="menu-item w-nav-link">contact</a>
                </nav>
                <div class="menu-button w-nav-button">
                    <div class="icon w-icon-nav-menu"></div>
                </div>
                <div data-open-product="" data-wf-cart-type="modal"
                    data-wf-cart-query="query Dynamo2 {
  database {
    id
    commerceOrder {
      comment
      extraItems {
        name
        pluginId
        pluginName
        price {
          value
          unit
          decimalValue
          string
        }
      }
      id
      startedOn
      statusFlags {
        hasDownloads
        hasSubscription
        isFreeOrder
        requiresShipping
      }
      subtotal {
        value
        unit
        decimalValue
        string
      }
      total {
        value
        unit
        decimalValue
        string
      }
      updatedOn
      userItems {
        count
        id
        product {
          id
          cmsLocaleId
          f__draft_0ht
          f__archived_0ht
          f_name_
          f_sku_properties_3dr {
            id
            name
            enum {
              id
              name
              slug
            }
          }
        }
        rowTotal {
          value
          unit
          decimalValue
          string
        }
        sku {
          cmsLocaleId
          f__draft_0ht
          f__archived_0ht
          f_main_image_4dr {
            url
            file {
              size
              origFileName
              createdOn
              updatedOn
              mimeType
              width
              height
              variants {
                origFileName
                quality
                height
                width
                s3Url
                error
                size
              }
            }
            alt
          }
          f_sku_values_3dr {
            property {
              id
            }
            value {
              id
            }
          }
          id
        }
        subscriptionFrequency
        subscriptionInterval
        subscriptionTrial
      }
      userItemsCount
    }
  }
  site {
    id
    commerce {
      businessAddress {
        country
      }
      defaultCountry
      defaultCurrency
      quickCheckoutEnabled
    }
  }
}
"
                    data-wf-page-link-href-prefix="" class="w-commerce-commercecartwrapper cart"
                    data-node-type="commerce-cart-wrapper">
                    <a class="w-commerce-commercecartopenlink cart-button w-inline-block" role="button"
                        aria-haspopup="dialog" aria-label="Open cart" data-node-type="commerce-cart-open-link"
                        href="#">
                        <div class="cart-text">Cart (</div>
                        <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItemsCount%22%7D%7D%5D"
                            class="w-commerce-commercecartopenlinkcount cart-quantity">
                            0
                        </div>
                        <div class="cart-text">)</div>
                    </a>
                    <div style="display: none"
                        class="w-commerce-commercecartcontainerwrapper w-commerce-commercecartcontainerwrapper--cartType-modal"
                        data-node-type="commerce-cart-container-wrapper">
                        <div data-node-type="commerce-cart-container" role="dialog"
                            class="w-commerce-commercecartcontainer">
                            <div class="w-commerce-commercecartheader">
                                <h4 class="w-commerce-commercecartheading">Your Cart</h4>
                                <a class="w-commerce-commercecartcloselink w-inline-block" role="button"
                                    aria-label="Close cart" data-node-type="commerce-cart-close-link"><svg
                                        width="16px" height="16px" viewBox="0 0 16 16">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g fill-rule="nonzero" fill="#333333">
                                                <polygon
                                                    points="6.23223305 8 0.616116524 13.6161165 2.38388348 15.3838835 8 9.76776695 13.6161165 15.3838835 15.3838835 13.6161165 9.76776695 8 15.3838835 2.38388348 13.6161165 0.616116524 8 6.23223305 2.38388348 0.616116524 0.616116524 2.38388348 6.23223305 8">
                                                </polygon>
                                            </g>
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="w-commerce-commercecartformwrapper">
                                <form style="display: none" class="w-commerce-commercecartform"
                                    data-node-type="commerce-cart-form">
                                    <script
                      type="text/x-wf-template"
                      id="wf-template-49119077-c847-1700-ed37-4d7f409c907f"
                    >
                      %3Cdiv%20class%3D%22w-commerce-commercecartitem%22%3E%3Cimg%20src%3D%22https%3A%2F%2Fassets-global.website-files.com%2Fplugins%2FBasic%2Fassets%2Fplaceholder.60f9b1840c.svg%22%20data-wf-bindings%3D%22%255B%257B%2522src%2522%253A%257B%2522type%2522%253A%2522ImageRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_main_image_4dr%2522%257D%257D%255D%22%20alt%3D%22%22%20class%3D%22w-commerce-commercecartitemimage%20w-dyn-bind-empty%22%2F%3E%3Cdiv%20class%3D%22w-commerce-commercecartiteminfo%22%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_name_%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartproductname%20w-dyn-bind-empty%22%3E%3C%2Fdiv%3E%3Cdiv%3EThis%20is%20some%20text%20inside%20of%20a%20div%20block.%3C%2Fdiv%3E%3Cscript%20type%3D%22text%2Fx-wf-template%22%20id%3D%22wf-template-49119077-c847-1700-ed37-4d7f409c9086%22%3E%253Cli%253E%253Cspan%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522PlainText%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D.name%252522%25257D%25257D%25255D%2522%253E%253C%252Fspan%253E%253Cspan%253E%253A%2520%253C%252Fspan%253E%253Cspan%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522CommercePropValues%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D%252522%25257D%25257D%25255D%2522%253E%253C%252Fspan%253E%253C%252Fli%253E%3C%2Fscript%3E%3Cul%20data-wf-bindings%3D%22%255B%257B%2522optionSets%2522%253A%257B%2522type%2522%253A%2522CommercePropTable%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%5B%5D%2522%257D%257D%252C%257B%2522optionValues%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_sku_values_3dr%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartoptionlist%22%20data-wf-collection%3D%22database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%22%20data-wf-template-id%3D%22wf-template-49119077-c847-1700-ed37-4d7f409c9086%22%3E%3Cli%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3C%2Fli%3E%3C%2Ful%3E%3Ca%20href%3D%22%23%22%20role%3D%22button%22%20data-wf-bindings%3D%22%255B%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20class%3D%22w-inline-block%22%20data-wf-cart-action%3D%22remove-item%22%20data-commerce-sku-id%3D%22%22%20aria-label%3D%22Remove%20item%20from%20cart%22%3E%3Cdiv%3ERemove%3C%2Fdiv%3E%3C%2Fa%3E%3C%2Fdiv%3E%3Cinput%20aria-label%3D%22Update%20quantity%22%20data-wf-bindings%3D%22%255B%257B%2522value%2522%253A%257B%2522type%2522%253A%2522Number%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522numberPrecision%2522%252C%2522params%2522%253A%255B%25220%2522%252C%2522numberPrecision%2522%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.count%2522%257D%257D%252C%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartquantity%22%20required%3D%22%22%20pattern%3D%22%5E%5B0-9%5D%2B%24%22%20inputMode%3D%22numeric%22%20type%3D%22number%22%20name%3D%22quantity%22%20autoComplete%3D%22off%22%20data-wf-cart-action%3D%22update-item-quantity%22%20data-commerce-sku-id%3D%22%22%20value%3D%221%22%2F%3E%3C%2Fdiv%3E
                    </script>
                                    <div class="w-commerce-commercecartlist"
                                        data-wf-collection="database.commerceOrder.userItems"
                                        data-wf-template-id="wf-template-49119077-c847-1700-ed37-4d7f409c907f">
                                        <div class="w-commerce-commercecartitem">
                                            <img src="https://assets-global.website-files.com/plugins/Basic/assets/placeholder.60f9b1840c.svg"
                                                data-wf-bindings="%5B%7B%22src%22%3A%7B%22type%22%3A%22ImageRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_main_image_4dr%22%7D%7D%5D"
                                                alt=""
                                                class="w-commerce-commercecartitemimage w-dyn-bind-empty" />
                                            <div class="w-commerce-commercecartiteminfo">
                                                <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_name_%22%7D%7D%5D"
                                                    class="w-commerce-commercecartproductname w-dyn-bind-empty"></div>
                                                <div>This is some text inside of a div block.</div>
                                                <script
                            type="text/x-wf-template"
                            id="wf-template-49119077-c847-1700-ed37-4d7f409c9086"
                          >
                            %3Cli%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3C%2Fli%3E
                          </script>
                                                <ul data-wf-bindings="%5B%7B%22optionSets%22%3A%7B%22type%22%3A%22CommercePropTable%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr[]%22%7D%7D%2C%7B%22optionValues%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_sku_values_3dr%22%7D%7D%5D"
                                                    class="w-commerce-commercecartoptionlist"
                                                    data-wf-collection="database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr"
                                                    data-wf-template-id="wf-template-49119077-c847-1700-ed37-4d7f409c9086">
                                                    <li>
                                                        <span
                                                            data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D.name%22%7D%7D%5D"></span><span>:
                                                        </span><span
                                                            data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D%22%7D%7D%5D"></span>
                                                    </li>
                                                </ul>
                                                <a href="#" role="button"
                                                    data-wf-bindings="%5B%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D"
                                                    class="w-inline-block" data-wf-cart-action="remove-item"
                                                    data-commerce-sku-id="" aria-label="Remove item from cart">
                                                    <div>Remove</div>
                                                </a>
                                            </div>
                                            <input aria-label="Update quantity"
                                                data-wf-bindings="%5B%7B%22value%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.count%22%7D%7D%2C%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D"
                                                class="w-commerce-commercecartquantity" required=""
                                                pattern="^[0-9]+$" inputmode="numeric" type="number"
                                                name="quantity" autocomplete="off"
                                                data-wf-cart-action="update-item-quantity" data-commerce-sku-id=""
                                                value="1" />
                                        </div>
                                    </div>
                                    <div class="w-commerce-commercecartfooter">
                                        <div aria-atomic="true" aria-live="polite"
                                            class="w-commerce-commercecartlineitem">
                                            <div>Subtotal</div>
                                            <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.subtotal%22%7D%7D%5D"
                                                class="w-commerce-commercecartordervalue"></div>
                                        </div>
                                        <div>
                                            <div data-node-type="commerce-cart-quick-checkout-actions"
                                                style="display: none">
                                                <a data-node-type="commerce-cart-apple-pay-button" role="button"
                                                    aria-label="Apple Pay" aria-haspopup="dialog"
                                                    style="
                              background-image: -webkit-named-image(
                                apple-pay-logo-white
                              );
                              background-size: 100% 50%;
                              background-position: 50% 50%;
                              background-repeat: no-repeat;
                            "
                                                    class="w-commerce-commercecartapplepaybutton" tabindex="0">
                                                    <div></div>
                                                </a><a data-node-type="commerce-cart-quick-checkout-button"
                                                    role="button" tabindex="0" aria-haspopup="dialog"
                                                    style="display: none"
                                                    class="w-commerce-commercecartquickcheckoutbutton"><svg
                                                        class="w-commerce-commercequickcheckoutgoogleicon"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="16"
                                                        height="16" viewBox="0 0 16 16">
                                                        <defs>
                                                            <polygon id="google-mark-a"
                                                                points="0 .329 3.494 .329 3.494 7.649 0 7.649">
                                                            </polygon>
                                                            <polygon id="google-mark-c"
                                                                points=".894 0 13.169 0 13.169 6.443 .894 6.443">
                                                            </polygon>
                                                        </defs>
                                                        <g fill="none" fill-rule="evenodd">
                                                            <path fill="#4285F4"
                                                                d="M10.5967,12.0469 L10.5967,14.0649 L13.1167,14.0649 C14.6047,12.6759 15.4577,10.6209 15.4577,8.1779 C15.4577,7.6339 15.4137,7.0889 15.3257,6.5559 L7.8887,6.5559 L7.8887,9.6329 L12.1507,9.6329 C11.9767,10.6119 11.4147,11.4899 10.5967,12.0469">
                                                            </path>
                                                            <path fill="#34A853"
                                                                d="M7.8887,16 C10.0137,16 11.8107,15.289 13.1147,14.067 C13.1147,14.066 13.1157,14.065 13.1167,14.064 L10.5967,12.047 C10.5877,12.053 10.5807,12.061 10.5727,12.067 C9.8607,12.556 8.9507,12.833 7.8887,12.833 C5.8577,12.833 4.1387,11.457 3.4937,9.605 L0.8747,9.605 L0.8747,11.648 C2.2197,14.319 4.9287,16 7.8887,16">
                                                            </path>
                                                            <g transform="translate(0 4)">
                                                                <mask id="google-mark-b" fill="#fff">
                                                                    <use xlink:href="#google-mark-a"></use>
                                                                </mask>
                                                                <path fill="#FBBC04"
                                                                    d="M3.4639,5.5337 C3.1369,4.5477 3.1359,3.4727 3.4609,2.4757 L3.4639,2.4777 C3.4679,2.4657 3.4749,2.4547 3.4789,2.4427 L3.4939,0.3287 L0.8939,0.3287 C0.8799,0.3577 0.8599,0.3827 0.8459,0.4117 C-0.2821,2.6667 -0.2821,5.3337 0.8459,7.5887 L0.8459,7.5997 C0.8549,7.6167 0.8659,7.6317 0.8749,7.6487 L3.4939,5.6057 C3.4849,5.5807 3.4729,5.5587 3.4639,5.5337"
                                                                    mask="url(#google-mark-b)"></path>
                                                            </g>
                                                            <mask id="google-mark-d" fill="#fff">
                                                                <use xlink:href="#google-mark-c"></use>
                                                            </mask>
                                                            <path fill="#EA4335"
                                                                d="M0.894,4.3291 L3.478,6.4431 C4.113,4.5611 5.843,3.1671 7.889,3.1671 C9.018,3.1451 10.102,3.5781 10.912,4.3671 L13.169,2.0781 C11.733,0.7231 9.85,-0.0219 7.889,0.0001 C4.941,0.0001 2.245,1.6791 0.894,4.3291"
                                                                mask="url(#google-mark-d)"></path>
                                                        </g>
                                                    </svg><svg class="w-commerce-commercequickcheckoutmicrosofticon"
                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" viewBox="0 0 16 16">
                                                        <g fill="none" fill-rule="evenodd">
                                                            <polygon fill="#F05022" points="7 7 1 7 1 1 7 1">
                                                            </polygon>
                                                            <polygon fill="#7DB902" points="15 7 9 7 9 1 15 1">
                                                            </polygon>
                                                            <polygon fill="#00A4EE" points="7 15 1 15 1 9 7 9">
                                                            </polygon>
                                                            <polygon fill="#FFB700" points="15 15 9 15 9 9 15 9">
                                                            </polygon>
                                                        </g>
                                                    </svg>
                                                    <div>Pay with browser.</div>
                                                </a>
                                            </div>
                                            <a href="../checkout.html" value="Continue to Checkout"
                                                class="w-commerce-commercecartcheckoutbutton checkout-button"
                                                data-loading-text="Hang Tight..."
                                                data-node-type="cart-checkout-button">Continue to Checkout</a>
                                        </div>
                                    </div>
                                </form>
                                <div class="w-commerce-commercecartemptystate">
                                    <div aria-label="This cart is empty" aria-live="polite">
                                        No items found.
                                    </div>
                                </div>
                                <div aria-live="assertive" style="display: none" data-node-type="commerce-cart-error"
                                    class="w-commerce-commercecarterrorstate">
                                    <div class="w-cart-error-msg"
                                        data-w-cart-quantity-error="Product is not available in this quantity."
                                        data-w-cart-general-error="Something went wrong when adding this item to the cart."
                                        data-w-cart-checkout-error="Checkout is disabled on this site."
                                        data-w-cart-cart_order_min-error="The order minimum was not met. Add more items to your cart to continue."
                                        data-w-cart-subscription_error-error="Before you purchase, please use your email invite to verify your address so we can send order updates.">
                                        Product is not available in this quantity.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-right-side">
                    <form action="https://frenzzy.webflow.io/search" class="search-div w-form">
                        <input class="search-field w-input" maxlength="256" name="query"
                            placeholder="type something" type="search" id="search" required="" /><input
                            type="submit" class="search-button w-button" value="Search" /><img
                            src="../images/65770624f4c813026b58f30c_search.png" loading="lazy" alt=""
                            class="image" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section class="blog-section">
        <div class="w-layout-blockcontainer main-container w-container">
            <div class="blog-list-wrapper w-dyn-list">
                <div role="list" class="blog-list w-dyn-items">
                    <div role="listitem" class="w-dyn-item">
                        <a data-w-id="0153d619-fff9-2092-fed2-be85c541f637"
                            href="../blog-posts/laugh-lounge-comedy-capers-and-chuckles.html"
                            class="blog-list-item w-inline-block"><img alt="" loading="lazy"
                                src="../images/65782fe7dec1e4824058c1d2_post16.jpg"
                                sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, (max-width: 991px) 94vw, (max-width: 1439px) 28vw, 416px"
                                srcset="
                    https://assets-global.website-files.com/65770570a2946a7c83492a9c/65782fe7dec1e4824058c1d2_post16-p-500.jpg 500w,
                    https://assets-global.website-files.com/65770570a2946a7c83492a9c/65782fe7dec1e4824058c1d2_post16-p-800.jpg 800w,
                    https://assets-global.website-files.com/65770570a2946a7c83492a9c/65782fe7dec1e4824058c1d2_post16.jpg       849w
                  "
                                class="blog-main-image" />
                            <div class="blog-meta">
                                <div class="category-text-style">Entertainment</div>
                                <div class="reading-time">5 min Read</div>
                                <img src="../images/65770613c4602911abe0fa5a_arrow.png" loading="lazy"
                                    style="opacity: 0" alt="" class="blog-meta-arrow" />
                            </div>
                            <h4 class="main-blog-title">
                                Laugh Lounge: Comedy Capers and Chuckles
                            </h4>
                        </a>
                    </div>
                    <div role="listitem" class="w-dyn-item">
                        <a data-w-id="0153d619-fff9-2092-fed2-be85c541f637"
                            href="../blog-posts/bookish-escapes-literary-worlds-explored.html"
                            class="blog-list-item w-inline-block"><img alt="" loading="lazy"
                                src="../images/65782fc68da4f65661c01ec6_post15.jpg"
                                sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, (max-width: 991px) 94vw, (max-width: 1439px) 28vw, 416px"
                                srcset="
                    https://assets-global.website-files.com/65770570a2946a7c83492a9c/65782fc68da4f65661c01ec6_post15-p-500.jpg 500w,
                    https://assets-global.website-files.com/65770570a2946a7c83492a9c/65782fc68da4f65661c01ec6_post15.jpg       849w
                  "
                                class="blog-main-image" />
                            <div class="blog-meta">
                                <div class="category-text-style">Entertainment</div>
                                <div class="reading-time">5 min Read</div>
                                <img src="../images/65770613c4602911abe0fa5a_arrow.png" loading="lazy"
                                    style="opacity: 0" alt="" class="blog-meta-arrow" />
                            </div>
                            <h4 class="main-blog-title">
                                Bookish Escapes: Literary Worlds Explored
                            </h4>
                        </a>
                    </div>
                    <div role="listitem" class="w-dyn-item">
                        <a data-w-id="0153d619-fff9-2092-fed2-be85c541f637"
                            href="../blog-posts/pop-culture-parade-trends-and-fandoms.html"
                            class="blog-list-item w-inline-block"><img alt="" loading="lazy"
                                src="../images/657831dd5362026d0f29a07a_post6.jpg"
                                sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, (max-width: 991px) 94vw, (max-width: 1439px) 28vw, 416px"
                                srcset="
                    https://assets-global.website-files.com/65770570a2946a7c83492a9c/657831dd5362026d0f29a07a_post6-p-500.jpg 500w,
                    https://assets-global.website-files.com/65770570a2946a7c83492a9c/657831dd5362026d0f29a07a_post6-p-800.jpg 800w,
                    https://assets-global.website-files.com/65770570a2946a7c83492a9c/657831dd5362026d0f29a07a_post6.jpg       849w
                  "
                                class="blog-main-image" />
                            <div class="blog-meta">
                                <div class="category-text-style">Entertainment</div>
                                <div class="reading-time">5 min Read</div>
                                <img src="../images/65770613c4602911abe0fa5a_arrow.png" loading="lazy"
                                    style="opacity: 0" alt="" class="blog-meta-arrow" />
                            </div>
                            <h4 class="main-blog-title">
                                Pop Culture Parade: Trends and Fandoms
                            </h4>
                        </a>
                    </div>
                    <div role="listitem" class="w-dyn-item">
                        <a data-w-id="0153d619-fff9-2092-fed2-be85c541f637"
                            href="../blog-posts/music-mosaic-harmony-across-genres.html"
                            class="blog-list-item w-inline-block"><img alt="" loading="lazy"
                                src="../images/657830e615a9a61836170fe6_post24.jpg"
                                sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, (max-width: 991px) 94vw, (max-width: 1439px) 28vw, 416px"
                                srcset="
                    https://assets-global.website-files.com/65770570a2946a7c83492a9c/657830e615a9a61836170fe6_post24-p-500.jpg 500w,
                    https://assets-global.website-files.com/65770570a2946a7c83492a9c/657830e615a9a61836170fe6_post24-p-800.jpg 800w,
                    https://assets-global.website-files.com/65770570a2946a7c83492a9c/657830e615a9a61836170fe6_post24.jpg       849w
                  "
                                class="blog-main-image" />
                            <div class="blog-meta">
                                <div class="category-text-style">Entertainment</div>
                                <div class="reading-time">5 min Read</div>
                                <img src="../images/65770613c4602911abe0fa5a_arrow.png" loading="lazy"
                                    style="opacity: 0" alt="" class="blog-meta-arrow" />
                            </div>
                            <h4 class="main-blog-title">
                                Music Mosaic: Harmony Across Genres
                            </h4>
                        </a>
                    </div>
                    <div role="listitem" class="w-dyn-item">
                        <a data-w-id="0153d619-fff9-2092-fed2-be85c541f637"
                            href="../blog-posts/cinematic-bliss-movie-magic-unveiled.html"
                            class="blog-list-item w-inline-block"><img alt="" loading="lazy"
                                src="../images/65782fe7dec1e4824058c1d2_post16.jpg"
                                sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, (max-width: 991px) 94vw, (max-width: 1439px) 28vw, 416px"
                                srcset="
                    https://assets-global.website-files.com/65770570a2946a7c83492a9c/65782fe7dec1e4824058c1d2_post16-p-500.jpg 500w,
                    https://assets-global.website-files.com/65770570a2946a7c83492a9c/65782fe7dec1e4824058c1d2_post16-p-800.jpg 800w,
                    https://assets-global.website-files.com/65770570a2946a7c83492a9c/65782fe7dec1e4824058c1d2_post16.jpg       849w
                  "
                                class="blog-main-image" />
                            <div class="blog-meta">
                                <div class="category-text-style">Entertainment</div>
                                <div class="reading-time">5 min Read</div>
                                <img src="../images/65770613c4602911abe0fa5a_arrow.png" loading="lazy"
                                    style="opacity: 0" alt="" class="blog-meta-arrow" />
                            </div>
                            <h4 class="main-blog-title">
                                Cinematic Bliss: Movie Magic Unveiled
                            </h4>
                        </a>
                    </div>
                    <div role="listitem" class="w-dyn-item">
                        <a data-w-id="0153d619-fff9-2092-fed2-be85c541f637"
                            href="../blog-posts/showtime-chronicles-entertainment-extravaganza.html"
                            class="blog-list-item w-inline-block"><img alt="" loading="lazy"
                                src="../images/65780db9b2717fab90626935_post8.jpg"
                                sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, (max-width: 991px) 94vw, (max-width: 1439px) 28vw, 416px"
                                srcset="
                    https://assets-global.website-files.com/65770570a2946a7c83492a9c/65780db9b2717fab90626935_post8-p-500.jpg 500w,
                    https://assets-global.website-files.com/65770570a2946a7c83492a9c/65780db9b2717fab90626935_post8-p-800.jpg 800w,
                    https://assets-global.website-files.com/65770570a2946a7c83492a9c/65780db9b2717fab90626935_post8.jpg       849w
                  "
                                class="blog-main-image" />
                            <div class="blog-meta">
                                <div class="category-text-style">Entertainment</div>
                                <div class="reading-time">5 min Read</div>
                                <img src="../images/65770613c4602911abe0fa5a_arrow.png" loading="lazy"
                                    style="opacity: 0" alt="" class="blog-meta-arrow" />
                            </div>
                            <h4 class="main-blog-title">
                                Showtime Chronicles: Entertainment Extravaganza
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer">
        <div class="inner-footer">
            <div class="w-layout-blockcontainer main-container w-container">
                <div id="w-node-dd3feab8-20cd-504e-dfab-1b390f44e31c-0f44e319"
                    class="w-layout-layout footer-grid wf-layout-layout">
                    <div id="w-node-dd3feab8-20cd-504e-dfab-1b390f44e31d-0f44e319"
                        class="w-layout-cell footer-grid-item">
                        <h4 class="footer-heading">contact</h4>
                        <a href="mailto:test@gmail.com?subject=Your%20Mail"
                            class="footer-email-and-phone w-inline-block"><img
                                src="../images/65770614cd2b36e1dd28e4e5_email.png" loading="lazy" alt=""
                                class="footer-emailphone-icon" />
                            <div class="text-block">hello@frenzy.webflow.io</div>
                        </a><a href="tel:+1231685496" class="footer-email-and-phone last-phone w-inline-block"><img
                                src="../images/657706159200194a881b726c_phone.png" loading="lazy" alt=""
                                class="footer-emailphone-icon" />
                            <div class="text-block">+5 (123) 456 789 0</div>
                        </a>
                    </div>
                    <div id="w-node-dd3feab8-20cd-504e-dfab-1b390f44e328-0f44e319"
                        class="w-layout-cell footer-grid-item">
                        <h4 class="footer-heading">socials</h4>
                        <div class="foot-socials">
                            <a href="http://www.facebook.com/" target="_blank"
                                class="social-link w-inline-block"><img
                                    src="../images/65770614b938b86ccc40e906_fb.png" loading="lazy" alt=""
                                    class="foot-social-link" /></a><a href="http://www.twitter.com/" target="_blank"
                                class="social-link w-inline-block"><img
                                    src="../images/65770633776ed826c66587fb_twitter.png" loading="lazy"
                                    alt="" class="foot-social-link" /></a><a
                                id="w-node-dd3feab8-20cd-504e-dfab-1b390f44e330-0f44e319"
                                href="http://www.instagram.com/" target="_blank"
                                class="social-link w-inline-block"><img
                                    src="../images/65770614fa7414b4fe17e9fc_insta.png" loading="lazy" alt=""
                                    class="foot-social-link" /></a><a href="http://www.youtube.com/" target="_blank"
                                class="social-link w-inline-block"><img
                                    src="../images/65770633051a676c022c42e8_you.png" loading="lazy" alt=""
                                    class="foot-social-link" /></a><a href="http://www.pinterest.com/"
                                target="_blank" class="social-link w-inline-block"><img
                                    src="../images/657706157f832e848a210b8e_pint.png" loading="lazy" alt=""
                                    class="foot-social-link" /></a>
                        </div>
                    </div>
                    <div id="w-node-dd3feab8-20cd-504e-dfab-1b390f44e336-0f44e319"
                        class="w-layout-cell footer-grid-item">
                        <h4 class="footer-heading">Newsletter</h4>
                        <p class="footer-text">
                            Stay ahead of the curve with our exclusive daily newsletter
                            directly in your inbox!
                        </p>
                        <div class="w-form">
                            <form id="email-form" name="email-form" data-name="Email Form" method="get"
                                class="form" data-wf-page-id="65771d45a01233ffd04fabda"
                                data-wf-element-id="dd3feab8-20cd-504e-dfab-1b390f44e33c">
                                <input class="subscribe-field w-input" maxlength="256" name="email-2"
                                    data-name="Email 2" placeholder="your e-mail" type="email" id="email-2"
                                    required="" /><input type="submit" data-wait="Please wait..."
                                    class="submit-button w-button" value="subscribe" />
                            </form>
                            <div class="w-form-done">
                                <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                                <div>
                                    Oops! Something went wrong while submitting the form.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-layout-blockcontainer main-container w-container">
            <div class="copyright">
                <div class="copyright-text">
                    © 2023  Frenzy - Webflow Template. Made by
                    <a href="#" class="copyright-text">Max Themes</a>
                </div>
                <a href="../utility-pages/license.html" class="copyright-text copyright-license">License</a>
            </div>
        </div>
    </div>
    <script src="../js/jquery-3.5.1.min.dc5e7f18c89dcc.js" type="text/javascript" integrity="" crossorigin="anonymous">
    </script>
    <script src="../js/webflow.4895eb839.js" type="text/javascript"></script>
</body>

</html>
