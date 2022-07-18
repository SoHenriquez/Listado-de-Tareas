
<!-- boostrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!-- fin bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<!-- Orden y filtro de datos de la tabla -->
<script>
        $(document).ready(function () {
    var table = $('#orden').DataTable({"bPaginate": false, "dom": '<lf<t>>'});

    
    $('#body tbody').on('click', 'tr', function () {
        var data = table.row(this).data();
        alert('You clicked on ' + data[0] + "'s row");
        
    });
});

</script>

<script>

  function fun(id){
    var ruta = '../partes/modal_modificar.php?id=' + id;
    console.log(ruta);
    $.get(ruta, function(data){
      $('#divModal').html(data);
      $('#modificar').modal('show');

    });
    
  }
</script>
<!-- AJAX -->
<!-- <script>
  $(document).ready(()=>{
    $(".del").click(()=>{
      var id = $(this).attr("id");

      var dataString = 'id='+ id;
      console.log(id);
      url = "../controlador/delete.php";
        $.ajax({
          type: "POST",
          url: url,
          data: dataString,
          success: (data)=>{
              $("#registro" + id).hide();
              $('resp').html(data);
          }
        });
    });
  });
</script> -->
  </body>
</html>