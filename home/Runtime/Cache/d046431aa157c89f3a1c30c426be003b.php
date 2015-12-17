<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>商城首页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Suity Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="__PUBLIC__/home/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="__PUBLIC__/home/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--webfont-->
    <link href='http://fonts.useso.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="__PUBLIC__/home/js/jquery-1.11.1.min.js"></script>
    <script>$(document).ready(function(c) {
        $('.alert-close').on('click', function(c){
            $('.message').fadeOut('slow', function(c){
                $('.message').remove();
            });
        });
    });
    </script>
    <script>$(document).ready(function(c) {
        $('.alert-close1').on('click', function(c){
            $('.message1').fadeOut('slow', function(c){
                $('.message1').remove();
            });
        });
    });
    </script>
    <script>$(document).ready(function(c) {
        $('.alert-close2').on('click', function(c){
            $('.message2').fadeOut('slow', function(c){
                $('.message2').remove();
            });
        });
    });
    </script>
</head>
<body>
<div class="index-banner">
    <div class="container">
        <div class="header_top">
            <div class="logo">
                <a href="index.html"><img src="__PUBLIC__/home/images/logo.png" alt=""/></a>
            </div>
            <div class="header-bottom-right">
                <ul class="icon1 sub-icon1 profile_img">
                    <li><a class="active-icon c1" href="#">购物车 </a><div class="rate">3</div>
                        <ul class="sub-icon1 list">
                            <h3></h3>新品速递</h3>
                            <div class="shopping_cart">
                                <div class="cart_box">
                                    <div class="message">
                                        <div class="alert-close"> </div>
                                        <div class="list_img"><img src="__PUBLIC__/home/images/1.jpg" class="img-responsive" alt=""/></div>
                                        <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
		                             $12.00</span></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="cart_box">
                                    <div class="message1">
                                        <div class="alert-close1"> </div>
                                        <div class="list_img"><img src="__PUBLIC__/home/images/2.jpg" class="img-responsive" alt=""/></div>
                                        <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
		                             $12.00</span></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="cart_box1">
                                    <div class="message2">
                                        <div class="alert-close2"> </div>
                                        <div class="list_img"><img src="__PUBLIC__/home/images/3.jpg" class="img-responsive" alt=""/></div>
                                        <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
		                             $12.00</span></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="total">
                                <div class="total_left">购物车金额合计 : </div>
                                <div class="total_right">$250.00</div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="login_buttons">
                                <div class="check_button"><a href="checkout.html">安全退出</a></div>
                                <div class="login_button"><a href="login.html">登录</a></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </ul>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="menu">
                <a href="#" class="right_bt" id="activator"><img src="__PUBLIC__/home/images/menu.png" alt=""/></a>
                <div class="box" id="box">
                    <div class="box_content_center">
                        <div class="menu_box_list">
                            <ul>
                                <li><a href="index.html">新品推荐</a></li>
                                <li class="active"><a href="sales.html">所有分类</a></li>
                                <li><a href="sales.html">收藏</a></li>
                                <li><a href="about.html">关于本店</a></li>
                                <li><a href="contact.html">商品列表</a></li>
                            </ul>
                        </div>
                        <a class="boxclose" id="boxclose"><img src="__PUBLIC__/home/images/close.png" alt=""/></a>
                    </div>
                </div>
                <script type="text/javascript">
                    var $ = jQuery.noConflict();
                    $(function() {
                        $('#activator').click(function(){
                            $('#box').animate({'left':'0px'},500);
                        });
                        $('#boxclose').click(function(){
                            $('#box').animate({'left':'-1300px'},500);
                        });
                    });
                    $(document).ready(function(){

                        //Hide (Collapse) the toggle containers on load
                        $(".toggle_container").hide();

                        //Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
                        $(".trigger").click(function(){
                            $(this).toggleClass("active").next().slideToggle("slow");
                            return false; //Prevent the browser jump to the link anchor
                        });

                    });
                </script>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="wmuSlider example1">
        <article style="position: absolute; width: 100%; opacity: 0;">
            <div class="banner-wrap">
                <h1>广告1</h1>
            </div>
        </article>
        <article style="position: absolute; width: 100%; opacity: 0;">
            <div class="banner-wrap">
                <h1>广告2</h1>
            </div>
        </article>
        <article style="position: absolute; width: 100%; opacity: 0;">
            <div class="banner-wrap">
                <h1>广告3</h1>
            </div>
        </article>
    </div>
    <script src="__PUBLIC__/home/js/jquery.wmuSlider.js"></script>
    <script>
        $('.example1').wmuSlider();
    </script>
</div>
<div class="content_top">
    <div class="container">
        <div class="col-md-3">
            <ul class="menu1">
                <li class="item1"><a href="#" class="">快速搭配<img class="arrow-img" src="__PUBLIC__/home/images/arrow.png" alt=""/> </a>
                    <ul class="cute" style="display: none; overflow: hidden;">
                        <li class="subitem1"><a href="single.html">型男套装 </a></li>
                        <li class="subitem2"><a href="single.html">美女套装</a></li>
                        <li class="subitem3"><a href="single.html">配件</a></li>
                    </ul>
                </li>
            </ul>
            <!--initiate accordion-->
            <script type="text/javascript">
                $(function() {
                    var menu1_ul = $('.menu1> li > ul'),
                            menu1_a  = $('.menu1 > li > a');
                    menu1_ul.hide();
                    menu1_a.click(function(e) {
                        e.preventDefault();
                        if(!$(this).hasClass('active')) {
                            menu1_a.removeClass('active');
                            menu1_ul.filter(':visible').slideUp('normal');
                            $(this).addClass('active').next().stop(true,true).slideDown('normal');
                        } else {
                            $(this).removeClass('active');
                            $(this).next().stop(true,true).slideUp('normal');
                        }
                    });

                });
            </script>
            <div class="box1">
                <ul class="box1_list">
                    <li><a href="#">男士</a></li>
                    <li><a href="#">女士</a></li>
                    <li><a href="#">鞋子</a></li>
                    <li><a href="#">配件</a></li>
                    <li><a href="#">手表</a></li>
                </ul>
            </div>
            <ul class="box2_list">
                <li><a href="#">美特斯邦威</a></li>
                <li><a href="#">森马</a></li>
            </ul>
       
        </div>
        <div class="col-md-9 content_right">
            <div class="client_box">
                <ul class="clients">
                    <li><img src="__PUBLIC__/home/images/c1.png" class="img-responsive" alt=""/></li>
                    <li><img src="__PUBLIC__/home/images/c2.png" class="img-responsive" alt=""/></li>
                    <li><img src="__PUBLIC__/home/images/c3.png" class="img-responsive" alt=""/></li>
                    <li><img src="__PUBLIC__/home/images/c4.png" class="img-responsive" alt=""/></li>
                </ul>
            </div>
            <div class="content_right-box">
                <div class="col-md-8">
                    <div class="grid1">
                        <h5>Watches</h5>
                        <div class="view view-first">
                            <img src="__PUBLIC__/home/images/pic1.jpg" class="img-responsive" alt=""/>
                            <a href="single.html"><div class="mask">
                                <h3>Quick Look</h3>
                                <p>-----Or----</p>
                                <h4>Add To Basket</h4>
                            </div></a>
                        </div>
                        <h6>$499</h6>
                    </div>
                    <div class="grid1 box4">
                        <h5>T-Shirt with print</h5>
                        <div class="view view-first">
                            <img src="__PUBLIC__/home/images/pic2.jpg" class="img-responsive" alt=""/>
                            <a href="single.html"><div class="mask mask1">
                                <h3>Quick Look</h3>
                                <p>-----Or----</p>
                                <h4>Add To Basket</h4>
                            </div></a>
                        </div>
                        <h6>$59</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="single.html"><div class="grid2">
                        <div class="view view-first">
                            <img src="__PUBLIC__/home/images/pic3.jpg" class="img-responsive" alt=""/>
                            <h5>Cap</h5>
                            <h6>$55</h6>
                        </div>
                    </a></div>
                <a href="single.html"><div class="grid2 span_1">
                    <div class="view view-first">
                        <img src="__PUBLIC__/home/images/pic4.jpg" class="img-responsive" alt=""/>
                        <h5>Glasses</h5>
                        <h6>$244</h6>
                    </div>
                </div></a>
                <a href="single.html"> <div class="grid2 span_1">
                    <div class="view view-first">
                        <img src="__PUBLIC__/home/images/pic5.jpg" class="img-responsive" alt=""/>
                        <h5>Shoes</h5>
                        <h6>$199</h6>
                    </div>
                </div></a>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="box3">
            <div class="col-md-4">
                <a href="single.html"> <div class="grid3 view view-first">
                    <img src="__PUBLIC__/home/images/pic6.jpg" class="img-responsive" alt=""/>
                </div></a>
            </div>
            <div class="col-md-4">
                <a href="single.html"><div class="grid3  view view-first">
                    <img src="__PUBLIC__/home/images/pic7.jpg" class="img-responsive" alt=""/>
                </div></a>
            </div>
            <div class="col-md-4">
                <a href="single.html"><div class="grid3 view view-first">
                    <img src="__PUBLIC__/home/images/pic8.jpg" class="img-responsive" alt=""/>
                </div></a>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="box4">
            <div class="col-md-6">
                <div class="grid1">
                    <h5>Shoes</h5>
                    <div class="view view-first">
                        <img src="__PUBLIC__/home/images/pic9.jpg" class="img-responsive" alt=""/>
                        <a href="single.html"><div class="mask mask2">
                            <h3>Quick Look</h3>
                            <p>-----Or----</p>
                            <h4>Add To Basket</h4>
                        </div></a>
                    </div>
                    <h6>$199</h6>
                </div>
            </div>
            <div class="col-md-6">
                <div class="grid1">
                    <h5>Purse</h5>
                    <div class="view view-first">
                        <img src="__PUBLIC__/home/images/pic10.jpg" class="img-responsive" alt=""/>
                        <a href="single.html"><div class="mask mask2">
                            <h3>Quick Look</h3>
                            <p>-----Or----</p>
                            <h4>Add To Basket</h4>
                        </div></a>
                    </div>
                    <h6>$295</h6>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
</div>
<div class="footer">
    <div class="container">
        <img src="__PUBLIC__/home/images/f_logo.png" alt=""/>
        <p><a href="mailto:info@mycompany.com">info(at)suity.com</a></p>
        <div class="copy">
            <p>Copyright &copy; 2015.Company name All rights reserved.</p>
        </div>
        <ul class="social">
            <li><a href="#"> <i class="fb"> </i> </a></li>
            <li><a href="#"> <i class="tw"> </i> </a></li>
        </ul>
    </div>
</div>
</body>
</html>