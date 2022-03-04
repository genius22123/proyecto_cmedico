<script src="{{asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('plugins/sweetalerts/sweetalert2.min.js')}}"></script>
<script src="{{asset('plugins/sweetalerts/custom-sweetalert.js')}}"></script>

<script>
    $(document).ready(function() {
        App.init();
    });
</script>
      

{{-- <script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('plugins/flatpickr/flatpickr.js')}}"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> --}}

<!-- END GLOBAL MANDATORY SCRIPTS -->

{{-- <script src="{{asset('plugins/table/datatable/datatables.js')}}"></script> --}}
{{-- <script>
   
    c3 = $('#style-3').DataTable({
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
    "<'table-responsive'tr>" +
    "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "zeroRecords": "Nothing found - sorry",
            "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
            "sInfo": "Mostrando pagina _PAGE_ de _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Buscar..",
            "sZeroRecords": "Ninguna coincidencia encontrada",
           "sLengthMenu": "Mostrando _MENU_ registros por pagina",
        },
        
        "stripeClasses": [],
        "lengthMenu": [5, 10, 20, 50],
        "pageLength": 5
    });

    multiCheck(c3);
</script> --}}
 {{--  <script>
      $("#date,#date2").flatpickr({ static : true });
  </script> --}}
{{-- 
  <script>
      var f2 = flatpickr(document.getElementById('date'), {
        dateFormat: "d-m-Y",
    static : true,
  
});
  </script> --}}
  
  @livewireScripts

  <script>
    window.livewire.on('cliente-agregado',msg=>{
        $('#themodal').modal('hide')
    })
</script>
<script>
    window.livewire.on('documento-agregado',msg=>{
        $('#themodal').modal('hide')
    })
</script>
<script>
    window.livewire.on('tramite-agregado',msg=>{
        $('#themodal').modal('hide')
    })
</script>
<script>
    window.livewire.on('cliente-editado',msg=>{
        $('#editmodal').modal('hide')
    })
</script>
<script>
    window.livewire.on('tramite-editado',msg=>{
        $('#editmodal').modal('hide')
    })
</script>
<script>
    window.livewire.on('documento-editado',msg=>{
        $('#editmodal').modal('hide')
    })
</script>
<script>
    Livewire.on('alert',function(message){
    
       swal({
     title: 'Exelente',
     text: message,
     type: 'success',
     padding: '2em'
   })

    });
</script>
<script>
    Livewire.on('alert-edit',function(message){
    
       swal({
     title: 'Exelente',
     text: message,
     type: 'success',
     padding: '2em'
   })

    });
</script>