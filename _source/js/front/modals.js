//Bind Modal Click
bindModals();

function bindModals(){
  jQuery('a.modal-trigger').off('click');
  jQuery('a.modal-trigger').on('click', function(e){
    e.preventDefault();
    var modal = jQuery(jQuery(this).attr('data-modal-target'));
    var template = jQuery(this).attr('data-modal-template');
    modal.addClass('active');
    modal.find('.modal--container').html('<div class="modal--loader"></div>');
    jQuery.ajax({
      url: ajax_url,
      dataType: "html",
      data: {
        action: 'load_modal',
        template: template
      },
      type: 'POST',
      success: function(data){
        modal.find('.modal--container').html(data);
        jQuery('html, body').trigger('modalLoad');
      }
    });
  });
  jQuery('.modal').on('click', function(e){
    if(jQuery(e.target).hasClass('modal')){
      jQuery(this).removeClass('active');
    }
  });
}
