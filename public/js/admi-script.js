// sidebar collapsing
$(document).ready(function(){
    $('#user-btn,#pod-btn,#ask-btn,#blog-btn,#web-btn').click(function(){
      $('.collap-data').removeClass('show')
    });
  });

  // upload file
  $('.file-upload').file_upload();


    // in users page
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
})
