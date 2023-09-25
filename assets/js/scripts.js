(function(){
  document.addEventListener("DOMContentLoaded", function(evt) {
    $('body').on("click",".jsToggleMenu",{},function(evt){
      var menuEl = $(".nav");
      if(menuEl.hasClass("is-active")){
        $("body").removeClass("stop-scrolling");
        menuEl.removeClass("is-active");
        menuEl.find(".header__menu-btn").removeClass("header__menu-btn--closed");
      }else{
        $("body").addClass("stop-scrolling");
        menuEl.addClass("is-active");
        menuEl.find(".header__menu-btn").addClass("header__menu-btn--closed");
      }
    });
  });
})(jQuery);
