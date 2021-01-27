<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="generator" content="WordPress 5.4.2" />
    <meta name="generator" content="WooCommerce 4.2.2" />


    <meta property='og:site_name' content='Etchy' />
    <meta property='og:locale' content='en_US' />
    <meta property='og:description' content='Etchy is a contemporary, boldly designed theme for modern print shop and printing company websites. It&#039;s packed with a wide selection of beautiful premade home and inner page templates for easy print shop website creation. ' />
    <meta property='og:title' content='Etchy - Print Shop' />
    <meta property='og:type' content='website' />
    <meta property='og:image' content='https://etchy.qodeinteractive.com/wp-content/uploads/2020/07/open_graph_1200x630_etchy.jpg' />
    <meta property='og:image:width' content='1200' />
    <meta property='og:image:height' content='630' />
    <meta name='twitter:card' content='summary' />
    <meta name='twitter:title' content='Etchy - Print Shop' />
    <meta name='twitter:image' content='https://etchy.qodeinteractive.com/wp-content/uploads/2020/07/open_graph_1200x630_etchy.jpg' />
    <meta name='twitter:description' content='Etchy is a contemporary, boldly designed theme for modern print shop and printing company websites. It&#039;s packed with a wide selection of beautiful premade home and inner page templates for easy print shop website creation. ' />


    <script data-cfasync="false" data-pagespeed-no-defer>//<![CDATA[
        var dataLayer_content = {"pagePostType":"product"};
        dataLayer.push( dataLayer_content );//]]>
    </script>
    <script data-cfasync="false">//<![CDATA[
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.'+'js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KLJLSX7');//]]>
    </script>

    <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
    <meta name="generator" content="Powered by Slider Revolution 6.2.15 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <meta name="msapplication-TileImage" content="https://etchy.qodeinteractive.com/wp-content/uploads/2020/06/cropped-Favicon_-270x270.png" />
    <script type="text/javascript">function setREVStartSize(e){
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
                e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
                if(e.layout==="fullscreen" || e.l==="fullscreen")
                    newh = Math.max(e.mh,window.RSIH);
                else{
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
                    e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide>=pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide>=pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
                    var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
                    newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
                document.getElementById(e.c).height = newh+"px";
                window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";
            } catch(e){
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };</script>
    <style type="text/css" id="wp-custom-css">
        .qodef-footer-hover {
            transition: color .25s ease-out;
        }

        #qodef-page-footer #qodef-page-footer-bottom-area a:hover .qodef-footer-hover {
            color: #fff;
        }

        .page-id-7 .qodef-accordion,
        .page-id-1908 .qodef-accordion{
            min-height: 397px;
        }		</style>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="archive post-type-archive post-type-archive-product theme-etchy qode-framework-1.1.2 woocommerce woocommerce-page woocommerce-no-js qodef-age-verification--opened qodef-back-to-top--enabled  qodef-content-grid-1400 qodef-header--standard qodef-header-appearance--none qodef-mobile-header--standard qodef-drop-down-second--full-width qodef-drop-down-second--animate-height etchy-core-1.0 etchy-1.0 qodef-sidebar--enabled qodef-header-standard--left qodef-search--covers-header elementor-default" itemscope itemtype="https://schema.org/WebPage">
<?php $this->beginBody() ?>
<div id="qodef-page-wrapper" class="">
    <div id="qodef-top-area">
        <div class="qodef-widget-holder qodef-top-area-left">
            <div id="text-2" class="widget widget_text qodef-top-bar-widget">
                <div class="textwidget">
                    <p><span style="font-size: 14px; color: #ffffffbf;">call us:</span>   <span style="font-size: 13px;"><strong><a class="qodef-underline-link" style="letter-spacing: 0.3px;" href="tel:1566771244422887">156-677-124-442-2887</a><br />
</strong></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="qodef-widget-holder qodef-top-area-right">
            <div id="text-3" class="widget widget_text qodef-top-bar-widget">
                <div class="textwidget">
                    <p><span style="font-size: 14px; color: #ffffffbf;">follow us:</span>   <span style="font-size: 13px; letter-spacing: 0.03em;"><strong><a class="qodef-underline-link" href="" target="_blank" rel="noopener noreferrer">FB.</a>   <a class="qodef-underline-link" href="" target="_blank" rel="noopener noreferrer">TW.</a>   <a class="qodef-underline-link" href="" target="_blank" rel="noopener noreferrer">IG.</a></strong></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
<div class="wrap">


    <header id="qodef-page-header">
        <div id="qodef-page-header-inner">
            <a itemprop="url" class="qodef-header-logo-link qodef-height--set" href="" style="height:25px" rel="home">
                <img width="180" height="50" src="<?=\yii\helpers\Url::to(["../shop/wp-content/uploads/2020/06/logo_dark-1.png"], true)?>" class="qodef-header-logo-image qodef--main" alt="logo main" itemprop="image" />
                <img width="180" height="50" src="<?=\yii\helpers\Url::to(["../shop/wp-content/uploads/2020/06/logo_dark-1.png"], true)?>" class="qodef-header-logo-image qodef--dark" alt="logo dark" itemprop="image" />
                <img width="180" height="50" src="<?=\yii\helpers\Url::to(["../shop/wp-content/uploads/2020/06/logo_light-1.png"], true)?>" class="qodef-header-logo-image qodef--light" alt="logo light" itemprop="image" />
            </a>
            <nav class="qodef-header-navigation" role="navigation" aria-label="Top Menu">
                <ul id="menu-main-menu-1" class="menu">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9 qodef-menu-item--narrow"><a href=""><span class="qodef-menu-item-text">HOME</span></a>
                    </li>

                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-11 qodef-menu-item--narrow"><a href="#"><span class="qodef-menu-item-text">SHOP</span></a>
                        <div class="qodef-drop-down-second">
                            <div class="qodef-drop-down-second-inner">
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item current_page_item menu-item-327"><a href="#"><span class="qodef-menu-item-text">Product List</span></a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-329"><a href=""><span class="qodef-menu-item-text">Product Single</span></a>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-342"><a href="#"><span class="qodef-menu-item-text">Shop Layouts</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-376"><a href=""><span class="qodef-menu-item-text">Three Columns</span></a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-375"><a href=""><span class="qodef-menu-item-text">Four Columns</span></a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-374"><a href=""><span class="qodef-menu-item-text">Five Columns wide</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-330"><a href="#"><span class="qodef-menu-item-text">Shop Pages</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-331"><a href=""><span class="qodef-menu-item-text">My Account</span></a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-333"><a href=""><span class="qodef-menu-item-text">Cart</span></a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-332"><a href=""><span class="qodef-menu-item-text">Checkout</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12 qodef-menu-item--narrow"><a href="#"><span class="qodef-menu-item-text">PORTFOLIO</span></a>

                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-13 qodef-menu-item--narrow"><a href="#"><span class="qodef-menu-item-text">BLOG</span></a>
                    </li>
                </ul>
            </nav>
            <div class="qodef-widget-holder">
                <div id="etchy_core_search_opener-3" class="widget widget_etchy_core_search_opener qodef-header-widget-area-one" data-area="header-widget-one">
                    <a href="javascript:void(0)" class="qodef-opener-icon qodef-m qodef-source--icon-pack qodef-search-opener">
                            <span class="qodef-m-icon qodef--open">
<span class="qodef-icon-elegant-icons icon_search"></span> </span>
                        <span class="qodef-search-opener-text">Search</span>
                    </a>
                </div>
                <div id="etchy_core_woo_dropdown_cart-3" class="widget widget_etchy_core_woo_dropdown_cart qodef-header-widget-area-one" data-area="header-widget-one">
                    <div class="qodef-woo-dropdown-cart qodef-m" style="padding: 0px 0px 0px 10px">
                        <div class="qodef-woo-dropdown-cart-inner qodef-m-inner">
                            <a itemprop="url" class="qodef-m-opener" href="https://etchy.qodeinteractive.com/cart/">
                                <span class="qodef-m-opener-text">Cart</span>
                                <span class="qodef-m-opener-count">(0)</span>
                            </a>
                            <div class="qodef-m-dropdown">
                                <div class="qodef-m-dropdown-inner">
                                    <p class="qodef-m-posts-not-found qodef-grid-item">No products in the cart.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="https://etchy.qodeinteractive.com/" class="qodef-search-cover-form" method="get">
            <div class="qodef-m-inner">
                <input type="text" placeholder="Type here..." name="s" class="qodef-m-form-field" autocomplete="off" required />
                <a href="javascript:void(0)" class="qodef-opener-icon qodef-m qodef-source--icon-pack qodef-m-close">
                        <span class="qodef-m-icon qodef--open">
						<span class="qodef-icon-elegant-icons icon_close"></span> </span>
                </a>
            </div>
        </form>
    </header>
    <header id="qodef-page-mobile-header">
        <div id="qodef-page-mobile-header-inner">
            <a itemprop="url" class="qodef-mobile-header-logo-link" href="" style="height:25px" rel="home">
                <img width="180" height="50" src="<?=\yii\helpers\Url::to(["../shop/wp-content/uploads/2020/06/logo_dark-1.png"], true)?>" class="qodef-header-logo-image qodef--main" alt="logo main" itemprop="image" />
                <img width="180" height="50" src="<?=\yii\helpers\Url::to(["../shop/wp-content/uploads/2020/06/logo_light-1.png"], true)?>" class="qodef-header-logo-image qodef--dark" alt="logo dark" itemprop="image" />
                <img width="180" height="50" src="<?=\yii\helpers\Url::to(["../shop/wp-content/uploads/2020/06/logo_light-1.png"], true)?>" class="qodef-header-logo-image qodef--light" alt="logo light" itemprop="image" />
            </a><a class="qodef-mobile-header-opener" href="#"><span class="qodef-icon-font-awesome fa fa-bars"></span></a>
            <nav class="qodef-mobile-header-navigation" role="navigation" aria-label="Mobile Menu">
                <ul id="menu-main-menu-3" class="qodef-content-grid">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9 qodef-menu-item--narrow"><a href="#"><span class="qodef-menu-item-text">HOME</span></a>

                    </li>

                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-11 qodef-menu-item--narrow"><a href="#"><span class="qodef-menu-item-text">SHOP</span></a>
                        <div class="qodef-drop-down-second">
                            <div class="qodef-drop-down-second-inner">
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item current_page_item menu-item-327"><a href="#"><span class="qodef-menu-item-text">Product List</span></a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-329"><a href=""><span class="qodef-menu-item-text">Product Single</span></a>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-342"><a href="#"><span class="qodef-menu-item-text">Shop Layouts</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-376"><a href=""><span class="qodef-menu-item-text">Three Columns</span></a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-375"><a href=""><span class="qodef-menu-item-text">Four Columns</span></a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-374"><a href=""><span class="qodef-menu-item-text">Five Columns wide</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-330"><a href="#"><span class="qodef-menu-item-text">Shop Pages</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-331"><a href=""><span class="qodef-menu-item-text">My Account</span></a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-333"><a href=""><span class="qodef-menu-item-text">Cart</span></a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-332"><a href=""><span class="qodef-menu-item-text">Checkout</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12 qodef-menu-item--narrow"><a href="#"><span class="qodef-menu-item-text">PORTFOLIO</span></a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-13 qodef-menu-item--narrow"><a href="#"><span class="qodef-menu-item-text">BLOG</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div >
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

    <footer id="qodef-page-footer" class="qodef--uncover">
        <div id="qodef-page-footer-top-area">
            <div id="qodef-page-footer-top-area-inner" class="qodef-content-full-width">
                <div class="qodef-grid qodef-layout--columns qodef-responsive--custom qodef-col-num--4 qodef-col-num--1024--2 qodef-col-num--768--2 qodef-col-num--680--1 qodef-col-num--480--1">
                    <div class="qodef-grid-inner clear">
                        <div class="qodef-grid-item">
                            <div id="media_image-3" class="widget widget_media_image" data-area="footer_top_area_column_1">
                                <a href="">
                                    <img width="90" height="25" src="<?=\yii\helpers\Url::to(["../shop/wp-content/uploads/2020/06/logo_light_footer-1.png"], true)?>" class="image wp-image-3580  attachment-full size-full" alt="a" style="max-width: 100%; height: auto;" />
                                </a>
                            </div>
                            <div id="text-4" class="widget widget_text" data-area="footer_top_area_column_1">
                                <div class="textwidget">
                                    <p style="color: #ffffff; max-width: 300px; margin-bottom: -32px;">Get a modern, boldly designed website for your print company today! We made Etchy so you can achieve that with ease.</p>
                                </div>
                            </div>
                            <div id="text-5" class="widget widget_text" data-area="footer_top_area_column_1">
                                <div class="textwidget">
                                    <p><span style="font-size: 13px; letter-spacing: 0.03em;"><strong><a class="qodef-underline-link" style="color: #ffffff;" href="" target="_blank" rel="noopener noreferrer">FB.</a>   <a class="qodef-underline-link" style="color: #ffffff;" href="https://twitter.com/QodeInteractive" target="_blank" rel="noopener noreferrer">TW.</a>   <a class="qodef-underline-link" style="color: #ffffff;" href="https://www.instagram.com/qodeinteractive/" target="_blank" rel="noopener noreferrer">IG.</a></strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="qodef-grid-item">
                            <div id="text-8" class="widget widget_text" data-area="footer_top_area_column_2">
                                <h5 class="qodef-widget-title">Useful links</h5>
                                <div class="textwidget">
                                    <div style="margin-bottom: 14px;">
                                        <p style="color: #ffffff; margin-bottom: -3px;"><a class="qodef-underline-link" href="">About us</a>
                                        </p>
                                        <p style="color: #ffffff; margin-bottom: -3px;"><a class="qodef-underline-link" href="">What we do</a>
                                        </p>
                                        <p style="color: #ffffff; margin-bottom: -3px;"><a class="qodef-underline-link" href="">Pricing plans</a>
                                        </p>
                                        <p style="color: #ffffff; margin-bottom: -3px;"><a class="qodef-underline-link" href="">Contact us</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="qodef-grid-item">
                            <div id="text-6" class="widget widget_text" data-area="footer_top_area_column_3">
                                <h5 class="qodef-widget-title">Contact us</h5>
                                <div class="textwidget">
                                    <p style="color: #ffffff; margin-bottom: -3px;"><a class="qodef-underline-link" href="" target="_blank"
                                                                                       rel="noopener noreferrer">New York, NY 10013</a>
                                    </p>
                                    <p style="color: #ffffff; margin-bottom: -3px;"><a class="qodef-underline-link" href="tel:31555122579">(315) 5512-2579 </a>
                                    </p>
                                    <p style="color: #ffffff; margin-bottom: -17px;"><a class="qodef-underline-link" href="mailto:etchy@qode.com">etchy@qode.com</a>
                                    </p>
                                </div>
                            </div>
                            <div id="etchy_core_contact_form_7-2" class="widget widget_etchy_core_contact_form_7" data-area="footer_top_area_column_3">
                                <div class="qodef-contact-form-7">
                                    <div role="form" class="wpcf7" id="wpcf7-f3316-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response" aria-live="polite"></div>
                                        <form action="#wpcf7-f3316-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                            <div style="display: none;">
                                                <input type="hidden" name="_wpcf7" value="3316" />
                                                <input type="hidden" name="_wpcf7_version" value="5.1.9" />
                                                <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f3316-o1" />
                                                <input type="hidden" name="_wpcf7_container_post" value="0" />
                                            </div>
                                            <div class="qodef-subscribe-form qodef-narrow qodef-form-light" style="margin-bottom: 19px;">
                                                <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Get weekly newsletters" /></span>
                                                <br
                                                />
                                                <button type="submit" class="wpcf7-form-control wpcf7-submit qodef-button qodef-m qodef-subscribe-icon"></button>
                                            </div>
                                            <div class="wpcf7-response-output wpcf7-display-none" aria-hidden="true"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="qodef-grid-item">
                            <div id="etchy_core_instagram_list-2" class="widget widget_etchy_core_instagram_list" data-area="footer_top_area_column_4">
                                <h5 class="qodef-widget-title">Instagram</h5>
                                <div class="qodef-shortcode qodef-m qodef-instagram-in-footer qodef-instagram-list qodef-gutter--tiny qodef-col-num--4">
                                    <div id="sb_instagram" class="sbi sbi_col_4  sbi_width_resp" style="padding-bottom: 10px;width: 100%;" data-feedid="sbi_17841436867168442#4" data-res="auto" data-cols="4" data-num="4" data-shortcode-atts="{&quot;0&quot;:&quot;4&quot;,&quot;1&quot;:&quot;4&quot;,&quot;2&quot;:&quot;5&quot;,&quot;3&quot;:&quot;px&quot;,&quot;4&quot;:&quot;auto&quot;,&quot;num&quot;:&quot;4&quot;,&quot;cols&quot;:&quot;4&quot;,&quot;imagepadding&quot;:&quot;5&quot;,&quot;imagepaddingunit&quot;:&quot;px&quot;,&quot;showheader&quot;:&quot;&quot;,&quot;showfollow&quot;:&quot;&quot;,&quot;showbutton&quot;:&quot;&quot;,&quot;imageres&quot;:&quot;auto&quot;}">
                                        <div id="sbi_images" style="padding: 5px;">
                                            <div class="sbi_item sbi_type_image sbi_new sbi_transition" id="sbi_17867910370828368" data-date="1591697185">
                                                <div class="sbi_photo_wrap">
                                                    <a class="sbi_photo" href="" target="_blank" rel="noopener nofollow" data-full-res="https://scontent-den4-1.cdninstagram.com/v/t51.2885-15/103694612_151883466447656_3350925670064981618_n.jpg?_nc_cat=106&#038;ccb=2&#038;_nc_sid=8ae9d6&#038;_nc_ohc=NuX5od2QRBQAX8C7eKb&#038;_nc_ht=scontent-den4-1.cdninstagram.com&#038;oh=fcf851067bb24f9397161c96053f67f0&#038;oe=5FEBE2F5"
                                                       data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-den4-1.cdninstagram.com\/v\/t51.2885-15\/103694612_151883466447656_3350925670064981618_n.jpg?_nc_cat=106&amp;ccb=2&amp;_nc_sid=8ae9d6&amp;_nc_ohc=NuX5od2QRBQAX8C7eKb&amp;_nc_ht=scontent-den4-1.cdninstagram.com&amp;oh=fcf851067bb24f9397161c96053f67f0&amp;oe=5FEBE2F5&quot;,&quot;150&quot;:&quot;https:\/\/www.instagram.com\/p\/CBNdsJtAHbR\/media\/?size=t&quot;,&quot;320&quot;:&quot;https:\/\/www.instagram.com\/p\/CBNdsJtAHbR\/media\/?size=m&quot;,&quot;640&quot;:&quot;https:\/\/scontent-den4-1.cdninstagram.com\/v\/t51.2885-15\/103694612_151883466447656_3350925670064981618_n.jpg?_nc_cat=106&amp;ccb=2&amp;_nc_sid=8ae9d6&amp;_nc_ohc=NuX5od2QRBQAX8C7eKb&amp;_nc_ht=scontent-den4-1.cdninstagram.com&amp;oh=fcf851067bb24f9397161c96053f67f0&amp;oe=5FEBE2F5&quot;}">
                                                        <span class="sbi-screenreader">Instagram post 17867910370828368</span>
                                                        <img src="<?=\yii\helpers\Url::to(["../shop/wp-content/plugins/instagram-feed/img/placeholder.png"], true)?>" alt="Instagram post 17867910370828368">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="sbi_item sbi_type_image sbi_new sbi_transition" id="sbi_17856303886996632" data-date="1591697171">
                                                <div class="sbi_photo_wrap">
                                                    <a class="sbi_photo" href="" target="_blank" rel="noopener nofollow" data-full-res="https://scontent-den4-1.cdninstagram.com/v/t51.2885-15/103159128_147652996841341_4843062784409844829_n.jpg?_nc_cat=107&#038;ccb=2&#038;_nc_sid=8ae9d6&#038;_nc_ohc=GwMh95KH0mAAX9KHfX8&#038;_nc_ht=scontent-den4-1.cdninstagram.com&#038;oh=23312ea6a815da177f2e910a25823580&#038;oe=5FEED509"
                                                       data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-den4-1.cdninstagram.com\/v\/t51.2885-15\/103159128_147652996841341_4843062784409844829_n.jpg?_nc_cat=107&amp;ccb=2&amp;_nc_sid=8ae9d6&amp;_nc_ohc=GwMh95KH0mAAX9KHfX8&amp;_nc_ht=scontent-den4-1.cdninstagram.com&amp;oh=23312ea6a815da177f2e910a25823580&amp;oe=5FEED509&quot;,&quot;150&quot;:&quot;https:\/\/www.instagram.com\/p\/CBNdqXBAHcZ\/media\/?size=t&quot;,&quot;320&quot;:&quot;https:\/\/www.instagram.com\/p\/CBNdqXBAHcZ\/media\/?size=m&quot;,&quot;640&quot;:&quot;https:\/\/scontent-den4-1.cdninstagram.com\/v\/t51.2885-15\/103159128_147652996841341_4843062784409844829_n.jpg?_nc_cat=107&amp;ccb=2&amp;_nc_sid=8ae9d6&amp;_nc_ohc=GwMh95KH0mAAX9KHfX8&amp;_nc_ht=scontent-den4-1.cdninstagram.com&amp;oh=23312ea6a815da177f2e910a25823580&amp;oe=5FEED509&quot;}">
                                                        <span class="sbi-screenreader">Instagram post 17856303886996632</span>
                                                        <img src="<?=\yii\helpers\Url::to(["../shop/wp-content/plugins/instagram-feed/img/placeholder.png"], true)?>" alt="Instagram post 17856303886996632">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="sbi_item sbi_type_image sbi_new sbi_transition" id="sbi_18064366948217999" data-date="1591697156">
                                                <div class="sbi_photo_wrap">
                                                    <a class="sbi_photo" href="" target="_blank" rel="noopener nofollow" data-full-res="https://scontent-den4-1.cdninstagram.com/v/t51.2885-15/102564731_292750045107030_886224886295664529_n.jpg?_nc_cat=104&#038;ccb=2&#038;_nc_sid=8ae9d6&#038;_nc_ohc=b0vnaKCzM_AAX81b_aH&#038;_nc_ht=scontent-den4-1.cdninstagram.com&#038;oh=f1a603cef0a7ad08b693348746a40e85&#038;oe=5FEE51CF"
                                                       data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-den4-1.cdninstagram.com\/v\/t51.2885-15\/102564731_292750045107030_886224886295664529_n.jpg?_nc_cat=104&amp;ccb=2&amp;_nc_sid=8ae9d6&amp;_nc_ohc=b0vnaKCzM_AAX81b_aH&amp;_nc_ht=scontent-den4-1.cdninstagram.com&amp;oh=f1a603cef0a7ad08b693348746a40e85&amp;oe=5FEE51CF&quot;,&quot;150&quot;:&quot;https:\/\/www.instagram.com\/p\/CBNdogLgdrH\/media\/?size=t&quot;,&quot;320&quot;:&quot;https:\/\/www.instagram.com\/p\/CBNdogLgdrH\/media\/?size=m&quot;,&quot;640&quot;:&quot;https:\/\/scontent-den4-1.cdninstagram.com\/v\/t51.2885-15\/102564731_292750045107030_886224886295664529_n.jpg?_nc_cat=104&amp;ccb=2&amp;_nc_sid=8ae9d6&amp;_nc_ohc=b0vnaKCzM_AAX81b_aH&amp;_nc_ht=scontent-den4-1.cdninstagram.com&amp;oh=f1a603cef0a7ad08b693348746a40e85&amp;oe=5FEE51CF&quot;}">
                                                        <span class="sbi-screenreader">Instagram post 18064366948217999</span>
                                                        <img src="<?=\yii\helpers\Url::to(["shop/wp-content/uploads/2020/05/shop-image2-600x563.jpg"], true)?>../wp-content/plugins/instagram-feed/img/placeholder.png" alt="Instagram post 18064366948217999">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="sbi_item sbi_type_image sbi_new sbi_transition" id="sbi_18090071095199025" data-date="1591697141">
                                                <div class="sbi_photo_wrap">
                                                    <a class="sbi_photo" href="" target="_blank" rel="noopener nofollow" data-full-res="https://scontent-den4-1.cdninstagram.com/v/t51.2885-15/102679041_162919841906016_2982437358122407872_n.jpg?_nc_cat=101&#038;ccb=2&#038;_nc_sid=8ae9d6&#038;_nc_ohc=1Udrt134Gk0AX-aoWL0&#038;_nc_ht=scontent-den4-1.cdninstagram.com&#038;oh=7b97efdc49ae9f1d3efca14d443183ec&#038;oe=5FECC786"
                                                       data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-den4-1.cdninstagram.com\/v\/t51.2885-15\/102679041_162919841906016_2982437358122407872_n.jpg?_nc_cat=101&amp;ccb=2&amp;_nc_sid=8ae9d6&amp;_nc_ohc=1Udrt134Gk0AX-aoWL0&amp;_nc_ht=scontent-den4-1.cdninstagram.com&amp;oh=7b97efdc49ae9f1d3efca14d443183ec&amp;oe=5FECC786&quot;,&quot;150&quot;:&quot;https:\/\/www.instagram.com\/p\/CBNdmxqgsvJ\/media\/?size=t&quot;,&quot;320&quot;:&quot;https:\/\/www.instagram.com\/p\/CBNdmxqgsvJ\/media\/?size=m&quot;,&quot;640&quot;:&quot;https:\/\/scontent-den4-1.cdninstagram.com\/v\/t51.2885-15\/102679041_162919841906016_2982437358122407872_n.jpg?_nc_cat=101&amp;ccb=2&amp;_nc_sid=8ae9d6&amp;_nc_ohc=1Udrt134Gk0AX-aoWL0&amp;_nc_ht=scontent-den4-1.cdninstagram.com&amp;oh=7b97efdc49ae9f1d3efca14d443183ec&amp;oe=5FECC786&quot;}">
                                                        <span class="sbi-screenreader">Instagram post 18090071095199025</span>
                                                        <img src="<?=\yii\helpers\Url::to(["shop/wp-content/uploads/2020/05/shop-image2-600x563.jpg"], true)?>../wp-content/plugins/instagram-feed/img/placeholder.png" alt="Instagram post 18090071095199025">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="sbi_load">
                                        </div>
                                        <span class="sbi_resized_image_data" data-feed-id="sbi_17841436867168442#4" data-resized="{&quot;17867910370828368&quot;:{&quot;id&quot;:&quot;103694612_151883466447656_3350925670064981618_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17856303886996632&quot;:{&quot;id&quot;:&quot;103159128_147652996841341_4843062784409844829_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18064366948217999&quot;:{&quot;id&quot;:&quot;102564731_292750045107030_886224886295664529_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18090071095199025&quot;:{&quot;id&quot;:&quot;102679041_162919841906016_2982437358122407872_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}}}">
											</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="qodef-page-footer-bottom-area">
            <div id="qodef-page-footer-bottom-area-inner" class="qodef-content-full-width">
                <div class="qodef-grid qodef-layout--columns qodef-responsive--custom qodef-col-num--2 qodef-col-num--680--1 qodef-col-num--480--1">
                    <div class="qodef-grid-inner clear">
                        <div class="qodef-grid-item">
                            <div id="text-7" class="widget widget_text" data-area="footer_bottom_area_column_1">
                                <div class="textwidget">
                                    <p><a style="color: #a0a0a0; font-size: 14px;" href="" target="_blank" rel="noopener noreferrer">© Copyright<span class="qodef-footer-hover"> Qode Interactive</span> 2020</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="qodef-grid-item">
                            <div id="media_image-4" class="widget widget_media_image" data-area="footer_bottom_area_column_2">
                                <img width="342" height="29" src="<?=\yii\helpers\Url::to(["../shop/wp-content/uploads/2020/06/footer-img-1.png"], true)?>" class="image wp-image-1318  attachment-full size-full" alt="a" style="max-width: 100%; height: auto;" srcset="<?=\yii\helpers\Url::to(["../shop/wp-content/uploads/2020/06/footer-img-1.png 342w"], true)?>, <?=\yii\helpers\Url::to(["../shop/wp-content/uploads/2020/06/footer-img-1-300x25.png 300w"], true)?>"
                                     sizes="(max-width: 342px) 100vw, 342px" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a id="qodef-back-to-top" href="" class="qodef-button qodef-btn-wave-hover qodef-type--filled">
            <span class="qodef-back-to-top-icon">
<span class="qodef-icon-linea-icons icon-arrows-up"></span> </span>

    </a>
</div>
<div class="rbt-toolbar" data-theme="Etchy" data-featured="" data-button-position="63%" data-button-horizontal="right" data-button-alt="no"></div>

<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KLJLSX7" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script type="text/javascript">
    var sbiajaxurl = "https://etchy.qodeinteractive.com/wp-admin/admin-ajax.php";
</script>
<script type="text/javascript">
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {
        "apiSettings": {
            "root": "https:\/\/etchy.qodeinteractive.com\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
        },
        "cached": "1"
    };
    /* ]]> */
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
