/**
 * Created by isonz@qq.com on 2017/12/13.
 */

(function ($) {

    $("#header .weixinqrcode").hover(function () {
        $("#weixinQRcode").show();
    },function () {
        $("#weixinQRcode").hide();
    });

    $("#page-content .about-left ul li a").click(function () {
        showAboutContent($(this));
    });



    function scrollTop(){return $("html, body").animate({scrollTop: 0},"slow"),!1}
    function scrollBottom(){return $("html, body").animate({scrollTop: $(document).height()},"slow"),!1}
    toastr.options = {
        "closeButton": false, //是否显示关闭按钮
        "debug": false, //是否使用debug模式
        "positionClass": "toast-top-center",//弹出窗的位置
        "showDuration": "300",//显示的动画时间
        "hideDuration": "1000",//消失的动画时间
        "timeOut": "5000", //展现时间
        "extendedTimeOut": "1000",//加长展示时间
        "showEasing": "swing",//显示时的动画缓冲方式
        "hideEasing": "linear",//消失时的动画缓冲方式
        "showMethod": "fadeIn",//显示时的动画方式
        "hideMethod": "fadeOut" //消失时的动画方式
    };



    var _intervalID = null;
    function show_img()
    {
        var _bodies = $("#banners a");
        if(_bodies.length < 1) return false;

        $("#banners").append('<dl id="slide_b" class="clearfix"><dt class="hover"></dt></dl>');
        for(var i=1; i<_bodies.length; i++) $("#slide_b").append('<dt class=""></dt>');
        _bodies.eq(0).show();
        var defaultOpts = { interval: 8000, fadeInTime: 300, fadeOutTime: 0 };
        var _slide_b = $("dl#slide_b");
        _slide_b.css("margin-left",-(_slide_b.width()/2)+"px");

        var _titles = $("dl#slide_b dt");
        var _count = _titles.length;
        var _current = 0;
        var stop = function () { window.clearInterval(_intervalID);};
        var slide = function (opts) {
            if (opts) {
                _current = opts.current || 0;
            } else {
                _current = (_current >= (_count - 1)) ? 0 : (++_current);
            };
            _bodies.filter(":visible").fadeOut(defaultOpts.fadeOutTime, function () {
                _bodies.eq(_current).fadeIn(defaultOpts.fadeInTime,function(){
                    //$("#banners").css({'background':'url("'+_bodies.eq(_current).attr("src")+'") center center no-repeat', "background-size":"cover"});
                }).css("display","block");
                _bodies.removeClass("cur").eq(_current).addClass("cur");
                var wwidth = $(window).width();
                var bwidth = _bodies.width();
                if(bwidth > wwidth) _bodies.css('margin-left', -(bwidth-wwidth)/2+'px');
            });
            _titles.removeClass("hover").eq(_current).addClass("hover");
        };
        var go = function () {
            stop();
            _intervalID = window.setInterval(function () { slide(); }, defaultOpts.interval);
        };
        var itemMouseOver = function (target, items) {
            stop();
            var i = $.inArray(target, items);
            slide({ current: i });
        };
        _titles.hover(function () { if ($(this).attr('class') != 'cur') { itemMouseOver(this, _titles); } else { stop(); } }, go);
        _bodies.hover(stop, go);

        go();
    }
    var show_img2 = function()
    {
        var _bodies = $("#banners2 img");
        if(_bodies.length < 1) return false;

        $("#banners2").append('<dl id="slide_b2" class="clearfix"><dt class="hover"></dt></dl>');
        for(var i=1; i<_bodies.length; i++) $("#slide_b2").append('<dt class=""></dt>');
        _bodies.eq(0).show();
        var defaultOpts = { interval: 8000, fadeInTime: 300, fadeOutTime: 0 };
        var _slide_b = $("dl#slide_b2");
        _slide_b.css("margin-left",-(_slide_b.width()/2)+"px");

        var _titles = $("dl#slide_b2 dt");
        var _count = _titles.length;
        var _current = 0;
        var stop = function () { window.clearInterval(_intervalID);};
        var slide = function (opts) {
            if (opts) {
                _current = opts.current || 0;
            } else {
                _current = (_current >= (_count - 1)) ? 0 : (++_current);
            };
            _bodies.filter(":visible").fadeOut(defaultOpts.fadeOutTime, function () {
                _bodies.eq(_current).fadeIn(defaultOpts.fadeInTime,function(){
                    $("#banners2").css('background','url("'+_bodies.eq(_current).attr("src")+'") center center no-repeat');
                }).css("display","block");
                _bodies.removeClass("cur").eq(_current).addClass("cur");
                var wwidth = $(window).width();
                var bwidth = _bodies.width();
                if(bwidth > wwidth) _bodies.css('margin-left', -(bwidth-wwidth)/2+'px');
            });
            _titles.removeClass("hover").eq(_current).addClass("hover");
        };
        var go = function () {
            stop();
            _intervalID = window.setInterval(function () { slide(); }, defaultOpts.interval);
        };
        var itemMouseOver = function (target, items) {
            stop();
            var i = $.inArray(target, items);
            slide({ current: i });
        };
        _titles.hover(function () { if ($(this).attr('class') != 'cur') { itemMouseOver(this, _titles); } else { stop(); } }, go);
        _bodies.hover(stop, go);

        go();
    }


    var breadcrumb_html = '';
    function showAboutContent(obj) {
        $(".about-content").hide();
        $("#"+obj.attr("data")).show();
        obj.parent().parent().children().each(function () {
            $(this).removeClass("active");
        });
        obj.parent().addClass("active");

        if(breadcrumb_html.length < 1) breadcrumb_html = $("#page-content .breadcrumb-container ul").html();
        var html = breadcrumb_html+'<li><a href="#">'+obj.text()+'</a></li>';
        $("#page-content .breadcrumb-container ul").html(html);
    }

    if('undefined' !== typeof(banners)){
        $("#banners").html(banners);
        show_img();
    }
})(jQuery);