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
});