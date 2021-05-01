//Bind the Group About Page
bindGroupPage();

function bindGroupPage(){
  jQuery('.group-page-switcher').on('click', function(e){
    e.preventDefault();
    jQuery('.group-page').removeClass('active');
    jQuery('#about-group-2').addClass('active');
  });
}
