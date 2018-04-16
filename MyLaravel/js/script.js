//alert();
$(function(){

// ナビゲーションをクリック
$("a[href^='#']").click(function() {
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top - 100;

    // スムーススクロール
    $("body,html").animate({scrollTop:position}, 400, "swing");
    return false;
    });

    // プルダウンメニューをクリック
    $("#puldown_works").click(function() {
        $("body,html").animate({scrollTop:50}, 400, "swing");
    });
    $("#puldown_request").click(function() {
        $("body,html").animate({scrollTop:630}, 400, "swing");
    });
    $("#puldown_skill").click(function() {
        $("body,html").animate({scrollTop:1290}, 400, "swing");
    });
    $("#puldown_contact").click(function() {
        $("body,html").animate({scrollTop:2150}, 400, "swing");
    });   
});