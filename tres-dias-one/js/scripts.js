$(document).ready(function(){

  //smooth scrolling for anchor links
  $("a[href^='#']").click(function(event) {
    event.preventDefault();
    var target = this.hash, $target = $(target);
    $('html, body').stop().animate({'scrollTop': $target.offset().top - 100}, 600, 'easeOutExpo', function () {
  //         window.location.hash = target;
    });
  });

  $('.login-nav').click(function(event){
    $('.login-drop-down').toggleClass('hidden');
    $('.login-drop-down').toggleClass('displayed');
    $('.login-nav li').first().toggleClass('selected');
  });

  //functions for faux pages
  $("a[rel='page']").click(function(event){
    event.preventDefault();
    selectNav($(this));
    var loc = '#page-' + $(this).attr('href');
    var target = loc, $target = $(target);
      $('html, body').stop().animate({'scrollTop': $target.offset().top}, 600, 'easeOutExpo', function () {
          window.location.hash = loc;
      });
  });

  //big-nav - for mobile
  $(".big-nav a[rel='page']").click(function(event){
    event.preventDefault();
    closeOverlay('#menu-overlay');
  });

  //setup overlays
  $("a[rel='overlay']").click(function(event){
    event.preventDefault();
    var idName = '#' + $(this).attr('href') + '-overlay';
    showOverlay(idName);
  });

  //to select nav item
  function selectNav(navItem){
    $('ul.nav li').removeClass('selected');
    if($(navItem).parent().attr("id") === "logo"){
      $('ul.nav li').first().addClass("selected");
    } else {
      var navLI = "." + $(navItem).attr("class");
      if($('ul.nav li a' + navLI).parent('li')){
        $('ul.nav li a' + navLI).parent('li').addClass('selected');
      }
    }
  }

  //to show/open overlays function
  function showOverlay(id){
    $("body").addClass('overlay-on');
    $(id).addClass('displayed');
    $(id).removeClass('hidden');
    $(id).removeClass('hiding');
    var closeBtnSelector = '#' + $(id).attr('id') + ' .overlay-content-container .close';
    $(closeBtnSelector).click(function(){
      closeOverlay(id);
    });
    $(document).keyup(function(e){
      if(e.keyCode === 27){
        closeOverlay(id);
      }
    });

  }

  //to close overlays
  function closeOverlay(id){
    $("body").removeClass('overlay-on');
    $(id).removeClass('displayed');
    $(id).addClass('hiding');
    $(id).one('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function(){
      $(id).addClass('hidden');
    });
    $('.login-nav li').first().removeClass('selected');
  }
});