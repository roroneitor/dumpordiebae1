$(function(){

  (function(){

    var Proyecto = {
      onReady : function(){

        $('#addModulo').click(function(e){
          var titulo = $("#modulo").val();
          var coincide = false;
          $("#modulo").val('');

          if ($.trim(titulo) != '') {
            var liActivo = '';

            $('.modulosLista li:not(.hide, .empty)').each(function(index, el) {
              var texto = $(el).find('span:first').html() .toLowerCase();

              if (texto == titulo.toLowerCase()) {
                coincide = true;
                liActivo = $(el);

                $(el).addClass('list-group-item-danger');
              }
            });

            setTimeout(function(){
              liActivo.removeClass('list-group-item-danger');
            }, 1500);

            if (coincide == false) {
              if ($('.modulosLista li.active').length == 1) {
                $('.modulosLista li.active input').attr('data-modulo-titulo', titulo);
                $('.modulosLista li.active span:first').html(titulo);
                $('.modulosLista li.active').removeClass('active');
              }else{
                var $clon = $('.modulosLista li.clone').clone();

                $('.modulosLista li:first').addClass('hide');

                $clon.find('span:first').html(titulo);
                $clon.find('input:first').attr('data-modulo-titulo', titulo);
                $clon.removeClass('clone hide');
                $clon.appendTo('.modulosLista');
              }
            }else{
              $.notify('Se ha detectado un modulo con el mismo nombre.', {
                type: 'danger', placement: {
                  from: "top",
                  align: "center"
                }
              });
            }
          }else{
            $.notify('indique un titulo al modulo.', {
              type: 'warning', placement: {
                from: "top",
                align: "center"
              }
            });
          }
        });

        $(document).on('click', '.moduleUpdate', function(){
          $('.modulosLista li.active').removeClass('active');
          $(this).parents('li').addClass('active');
          $("#modulo").val($(this).parents('li.active').find('input').attr('data-modulo-titulo'));
        });

        $(document).on('click', '.moduleDelete', function(){
          $(this).parents('li').addClass('active');
          if (confirm("Deseas removerlo de la lista?")) {
            $(this).parents('li').remove();

            if ($('.modulosLista li:not(.hide)').length == 0) {
              $('.modulosLista li.hide:first').removeClass('hide');
            }
          }
        });

        $('#saveBtn').click(function(event) {
          Proyecto.submit();
        });

        /**********************************************************************/

        $('.btn-delete').on('click', function(e) {
          if(confirm('¿Está seguro de borrar este proyecto?')) {
            $(this).parents('form:first').submit();
          }
        });

        $(document).on('click', '.addTask',  function(e){
          e.preventDefault();
          console.log($(this).attr('data-id'));

          $('#modalTask').modal();
        });
      },

      parametros: function(){
        var cad = "";

        var modulos = [];

        $('li:not(.hide) input[name="modulo[]"]').each(function(index, el) {
          modulos.push({id: $(el).attr('data-modulo-id'), titulo: $(el).attr('data-modulo-titulo'), nuevo: $(el).attr('data-new')});
        });

        cad = "&modulo="+JSON.stringify(modulos);
        var info = {
          route: $('form:last').attr('action'),
          _method: $('input[name="_method"]').val(),
          data : $('form:last').serialize()+"&_token="+$('input[name="_token"]').val()+cad
        };

        return info;
      },

      submit: function(){
        var info = this.parametros();

        $.ajax({
          url: info.route,
          type: info._method,
          // dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
          data: info.data,
          beforeSend: function(){
            $('.has-error').removeClass('has-error');
          },
          error: function(errors) {

            if (errors.responseJSON == false) {
              $.notify('Debes crear al menos un modulo!',
              {
                type: 'danger', placement: {
              		from: "top",
              		align: "center"
              	}
              });
            }else{
              $.notify('Se ha encontrado uno o mas campos vacios.!', {
                type: 'danger', placement: {
              		from: "top",
              		align: "center"
              	}
              });

              $.each(errors.responseJSON.errors , function(index, el) {
                $('#'+index).parents('div.form-group').addClass('has-error');
              });
            }
          },
          success: function(response) {
            alert('Guardado');
          }
        });
      }
    };


    Proyecto.onReady();
  })();

});
