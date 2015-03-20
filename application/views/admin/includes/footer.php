<div id="footer">
    &nbsp;
</div><!-- End #footer -->
</div> <!-- End #main-content -->
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
	</script>
<script>
	!window.jQuery && document.write("<script src='/assets/admin/js/jquery.min.js'> <\/script>");
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/assets/admin/tag-it-master/js/tag-it.js" type="text/javascript" charset="utf-8"></script>

	<script src="/assets/admin/js/jquery.mousewheel-3.0.6.pack.js"></script>
	<script src="/assets/admin/js/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="/assets/admin/js/prueba/jquery.fancybox-media.js?v=1.0.6"></script>

	<script src="/assets/admin/js/codigos.js"></script>
	
<script type="text/javascript">
    $(document).ready(function() {
        $("#myTags").tagit();

        $('#singleFieldTags').tagit({
                availableTags: "php",
                // This will make Tag-it submit a single form value, as a comma-delimited field.
                singleField: true,
                singleFieldNode: $('#mySingleField')
            });



    });

    $(document).ready(get_imagen($( "#tipo_nota" ).val()));

    function get_imagen(id_imagen) {
           if (id_imagen!= "") {

              if( id_imagen == 1){
                $("#efecto4").attr({
                  "href":"/assets/admin/images/tipo_nota/nota1.jpg",
                  "title":"Nota con 1 imagen"
                });
                
                $("#nota").attr("src", "/assets/admin/images/tipo_nota/nota1_min.jpg");
                
              }

              else if( id_imagen == 2){
                $("#efecto4").attr({
                  "href":"/assets/admin/images/tipo_nota/nota2.jpg",
                  "title":"Nota con 2 imagenes"
                });
                
                $("#nota").attr("src", "/assets/admin/images/tipo_nota/nota2_min.jpg");                

              }

              else if( id_imagen == 3){
                $("#efecto4").attr({
                  "href":"/assets/admin/images/tipo_nota/nota3.jpg",
                  "title":"Nota con video"
                });
               
                $("#nota").attr("src", "/assets/admin/images/tipo_nota/nota3_min.jpg");
                

              }
               
               $("#img_nota").css("display", "inline");
               
           } else {
           		
                $("#img_nota").css("display", "none");
           }
       }







</script>

</body>
</html>