!function(e){"use strict";function a(){e("#contactForm").removeClass().addClass("shake animated").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){e(this).removeClass()})}function t(a,t){if(a)var n="h4 tada animated text-success";else var n="h4 text-danger";e("#msgSubmit").removeClass().addClass(n).text(t)}e("#contactForm").validator().on("submit",function(n){var s,i,o,m,r;n.isDefaultPrevented()?(a(),t(!1,"Did you fill in the form properly?")):(n.preventDefault(),s=e("#name").val(),i=e("#email").val(),o=e("#msg_subject").val(),m=e("#phone_number").val(),r=e("#message").val(),e.ajax({type:"POST",url:"assets/php/form-process.php",data:"name="+s+"&email="+i+"&msg_subject="+o+"&phone_number="+m+"&message="+r,success:function(n){"success"==n?(e("#contactForm")[0].reset(),t(!0,"Message Submitted!")):(a(),t(!1,n))}}))})}(jQuery);