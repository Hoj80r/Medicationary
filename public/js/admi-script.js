// sidebar collapsing
$(document).ready(function(){
    $('#user-btn,#pod-btn,#ask-btn,#blog-btn,#web-btn').click(function(){
      $('.collap-data').removeClass('show')
    });
    //   chnage the add admin page img

    const addUserImg = document.querySelector('#add-userImg');

    const addUserImgIndex = document.querySelector('#customFile2');

    addUserImgIndex.addEventListener('change',(e) =>{
      var userNewImg = addUserImgIndex.files[0];

      var imageType = /image.*/;

            if (userNewImg.type.match(imageType)) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    addUserImg.innerHTML = "";

                    var img = new Image();
                    img.src = reader.result;
                    img.style.width = '200px';
                    img.className= 'rounded-circle';
                    img.setAttribute('alt','example placeholder');

                    addUserImg.appendChild(img);
                }

                reader.readAsDataURL(userNewImg);
                var imgStyle = document.querySelector('#add-userImg img');
                console.log(imgStyle);
            } else {
               alert('File not supported!');
            }

    } );
  });


