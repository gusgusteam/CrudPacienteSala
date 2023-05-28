
<footer>
    <script src="{{asset('/librerias/jquery.slim.min.js')}}" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="{{asset('/librerias/bootstrap.bundle.min.js')}}" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- librerias de data table -->
    <script src="{{asset('/librerias/jquery-3.5.1.js')}}"></script>
    <script src="{{asset('/librerias/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/librerias/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('/librerias/dataTables.rowGroup.min.js')}}"></script> 
  
    <script type="text/javascript">
        function readImage (input) {
            if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
            }
        }
        $("#img_foto").change(function () {
            readImage(this);
        });



        $(function () {
        $('#example').DataTable({
        "paging": true,
        "lengthChange": true,//view nro
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "deferRender": true,//
        "retrieve": true,
        "processing": true,//
        language: {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
            "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
            "infoFiltered": "(Filtrado de _MAX_ total entradas)",
            "lengthMenu": "Mostrar _MENU_ entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
        });
  });






    </script>
</footer>

