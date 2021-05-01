//Bind the main menu and panes
bindMainMenu();

//Cause main menu to switch out panes
function bindMainMenu(){

  //When a main menu tab is clicked
  $('#main-menu').off('click', 'a.pane-btn') //Protect click function
  $('#main-menu').on('click', 'a.pane-btn', function(e){

    e.preventDefault() //nofollow

    if($(this).hasClass('active')) return false; //Don't do anything on active

    var tag = $(this).attr('data-tag'); //Get the tag of the pane being selected
    var link = $(this).attr('href') //Get push state link

    //Deactive current pane and button
    $(this).closest('ul').find('a.pane-btn').removeClass('active'); //Remove active button
    $('.panes .pane.active').removeClass('active'); //Remove active pane

    //Activate new pane and button
    $(this).addClass('active');
    $('.panes .pane[data-pane="'+tag+'"]').addClass('active'); //Activate new pane

    //Change Push State
    window.history.pushState({href: link}, '', link);

    //Remove was-active class after the animation is done
    setTimeout(function(){
      $('.panes .pane.was-active').removeClass('was-active');
    }, 500);

  });
}
