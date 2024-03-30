// sidebar collapsing
$(document).ready(function(){
    $('#user-btn,#pod-btn,#ask-btn,#blog-btn,#web-btn').click(function(){
      $('.collap-data').removeClass('show')
    });
  });

  // upload file
  $('.file-upload').file_upload();



