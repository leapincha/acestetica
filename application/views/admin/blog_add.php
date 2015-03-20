<script type="text/javascript">

    $().ready(function() {
        $("#frmData").validate({
            messages: {
                categoria: "Requerida",
                titulo: "Requerido",
                descripcion: "Requerido",
                localidad: "Requerida",
                general_disponibles: "Requerida",
                numeradas_disponibles: "Requerida",
                general_precio: "Requerido",
                numeradas_precio: "Requerido",
                artista: "Requerido"
            }
        });

        $('#frmData').submit(function() {
            if($(this).valid())
            {
                return true;
            }

            return false;
        });
    });

    $(function() {
        $( "#fecha" ).datepicker({
            dateFormat: 'dd/mm/yy'
        });
    });

     
   
</script>


<div id="main-content"> <!-- Main Content Section with everything -->


    

    <div class="content-box"><!-- Start Content Box -->

        <div class="content-box-header">

            <h3>Agregar Nueva Entrada al Blog</h3>

            <div class="clear"></div>

        </div> <!-- End .content-box-header -->

        <div class="content-box-content">
                <form action="<?= base_url(); ?>admin/blog/agregar" method="post" id="frmData" name="frmData" enctype="multipart/form-data">
                    <input type="hidden" id="save" name="save" />
                    <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
                        <?php if(!empty($mensaje)): ?>
                        <div class="notification <?= $mensaje_class ?> png_bg">
                            <a class="close" href="#"><img alt="close" title="Cerrar ésta notificación" src="/assets/admin/images/icons/cross_grey_small.png"></a>
                            <div>
                                <?= $mensaje ?>
                            </div>
			</div>
                        <?php endif; ?>
                        
                        <p>
                            <label>Tipo de Nota*</label>
                            <select id="tipo_nota" name="tipo_nota" class="text-input required" onchange="get_imagen(this.value)">
                            <option value="">Seleccionar Tipo de nota</option>
                            <?php foreach ($tipo_nota as $tipo): ?>
                                <option value="<?= $tipo->id_nota ?>"><?= $tipo->nota ?></option>
                            <?php endforeach ?>
                            </select>
                            <div id="img_nota" style="display:none">
                            <a id="efecto4" rel="gallery1" title="Nota con 1 imagen" id="imagen_nota">
                                <img id="nota">
                            </a>
                            </div>
                        </p>
                        <p>
                            <label>Título*</label>
                            <input class="text-input small-input required" id="titulo" name="titulo" />
                        </p>
                        
                        <p>
                            <label>Categoría*</label>
                            <select id="categoria" name="categoria" class="text-input required">
                                <option value="">Seleccionar Categoría</option>
                                <?php foreach ($categorias as $categoria): ?>
                                <option value="<?= $categoria->id_categoria ?>"><?= $categoria->categoria ?></option>
                                <?php endforeach ?>
                            </select>
                        </p>
                        
                        <p>
                            <label>Nota*</label>
                            <textarea class="text-input textarea required" id="nota" name="nota"></textarea>
                        </p>

                        <p>
                            <label>Imagen*</label>
                            <input type="file" name="Imagen"/>
                            
                        </p>

                        <p>
                            <label>Fuente</label>
                            <input class="text-input required" id="localidad" name="localidad" />
                        </p>
                        <p>
                            <label>Fecha</label>
                            <input class="text-input required" id="fecha" name="fecha" />
                        </p>
                        <p>
                            <label>Autor*</label>
                            <select id="autor" name="autor" class="text input required">
                                <option value="">Seleccionar Autor</option>
                                <?php foreach ($autores as $autor): ?>
                                <option value="<?= $autor->id_autor?>"><?= $autor->autor ?></option>
                                <?php endforeach ?>
                            </select>
                        </p>
                        
                        <p>
                            
                                <label>Tags</label>
                                
                               
               
                                    <input type="hidden" name="tags" id="mySingleField" value="Apple, Orange" disabled="true"> <!-- only disabled for demonstration purposes -->
                                   
                        <ul id="singleFieldTags"></ul>

                        <ul id="myTags">
    <!-- Existing list items will be pre-added to the tags -->
                        <li>Tag1</li>
                        
                        </ul>
                             
                                
                            
                        </p>
                        
                        <p>
                            <label>Video URL(Vimeo/Youtube)</label>
                            <input class="text-input small-input required" id="url_video" name="url_video" />
                        </p>
                        <p>
                            <label>Fecha</label>
                            <input class="text-input required" id="fecha" name="fecha" readonly />
                        </p>
                        
                        <p>
                            <input class="button" type="submit" value="Guardar" />
                        </p>

                    </fieldset>

                    <div class="clear"></div><!-- End .clear -->

                </form>

        </div> <!-- End .content-box-content -->

    </div> 
