<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="scripts/site.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <style>
    nav.navbar {
      background: #13314C;
    }
    a {
    color: white;
    text-decoration: none;
    background-color: transparent;
}
.btn {
    color: black;
    background-color: #F7BE3D;
}
.card-header {
  background-color: #13314c;
    color: white;
}
.card-body{
  background: #1fb5c78a;
}
.list-group-item {
  background-color: transparent;
}
.modal-header {
    background: #13314C;
    color: white;
}
  </style>
</head>

<body>

  <!-- nav bar stuff -->
  <nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">New Orders </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Delivered</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
        
      </ul>
    </div>
  </nav>
  <!-- nav bar stuff end -->

  <div class="container mt-5">

    <div class="row">
      <!--row stated -->
      <!-- search bar stuff -->

      <div class="input-group mb-3 col-9">
        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2">search</button>

        </div>
      </div><!-- search bar stuff end -->

      <!-- add new order button -->
      <div class="col-3 text-center " data-toggle="modal" data-target="#exampleModal">
        <button type="button" class="btn">Add New Order</button>

      </div>
      <!-- end -->
    </div> <!-- row end -->

    <!-- order details -->
    <div id="order_details" >



    </div>
    <!-- end -->

  </div>


  <!-- model for add new order -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Order</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- form for add new order -->
          <!-- <form id="uploadForm"> -->
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Product id</label>
            <input type="text" name="product_id" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Destinaton address</label>
            <input type="text" name="destination_address" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Initial Address</label>
            <input type="text" name="initial_address" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">client Phone number</label>
            <input type="text" name="client_phone_number" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Estimated Cost</label>
            <input type="text" name="estimated_cost" class="form-control" id="exampleInputPassword1">
          </div>
          <button type="submit" name="short_details_submitted" class="btn" id="short_details_submit"> Submit</button>
          <!-- </form>end -->


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div><!-- end -->












  <!-- model for order update -->
  <div class="modal fade" id="orderupdatemodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="model_order_id"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- order data table -->
          <table class="table" id="single_fetch_table">
            <thead id="table_header">
              <!-- <tr>
      <th scope="col">#</th>
      <th scope="col">track title</th>
      <th scope="col">track address</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Active</th>
    </tr> -->
            </thead>
            <tbody id="table_body">
              <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr> -->
            </tbody>
          </table>
          <!-- order table end -->

          <!-- form for order update -->
          <div id="form_for_update_order_address">
            <div class="form-group">
              <label for="exampleInputEmail1">Track Title</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="track_title" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Track address</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="track_address">
            </div>
            <button type="submit" class="btn" id="upate_btn_order_address">Submit</button>

          </div>


          <!-- form for order update end -->


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn">Add To Delivered</button>
        </div>
      </div>
    </div>
  </div>
  <!--  -->


  <!-- model  for sure it user wanted to add to delivered or not -->
<div class="modal fade" id="addtodelivered" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure Wanted?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary" id="addTodelivered_sure">Yes</button>
      </div>
    </div>
  </div>
</div>

  <!-- end deleired or not -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script>
    var get_order_id = "hassan";

    $(document).ready(function() {
//add_to_delivered addTodelivered_sure
 $('body').on('click', '#add_to_delivered', function() {
        get_order_id = $(this).data("order-id");
        // console.log(get_order_id);
        
      });

$('body').on('click', '#addTodelivered_sure', function() {
        $.ajax({
          type: 'POST',
          url: 'add_to_delivered.php',
          data: {
            add_to_delivered: true,
            product_id: get_order_id,
          },
          dataType: "json",
          beforeSend: function() {
            console.log('sending');

          },
          error: function(e) {
            console.log(e)
            console.log("failed")
          },
          success: function(resp) {
             console.log(resp)
            if (resp.status == "success") {
                $('#'+get_order_id).remove();
                $('#addtodelivered').modal('hide');
            }
          }
        });

        
      });



      // update order with new reached address
      $('#form_for_update_order_address').on('click', '#upate_btn_order_address', function() {
        console.log(get_order_id);
        $.ajax({
          type: 'POST',
          url: 'single_update.php',
          data: {
            update_track: true,
            product_id: get_order_id,
            track_title: $('input[name=track_title]').val(),
            track_address: $('input[name=track_address]').val(),
          },
          dataType: "json",
          beforeSend: function() {
            console.log('sending');

          },
          error: function(e) {
            console.log(e)
            console.log("failed")
          },
          success: function(resp) {
            // console.log(resp)
            if (resp.status == "success") {

              $('input[name=track_title]').val("");
              $('input[name=track_address]').val("");



              var table_body = '<tr><th scope="row">' + resp.response.id + '</th><td>' + resp.response.track_title + '</td><td>' + resp.response.track_address + '</td><td>' + resp.response.date + '</td><td>' + resp.response.time + '</td><td>' + resp.response.active + '</td></tr>';
              $("#table_body").append(table_body);

            }
          }
        });
      });



      // fetch single track data into the table
      $('#order_details').on('click', '#btn_for_update_order', function() {
        get_order_id = $(this).data("order-id");
        $.ajax({
          type: 'POST',
          url: 'fetch_single_track_data.php',
          data: {
            track_id: get_order_id
          },
          dataType: "json",
          beforeSend: function() {
            console.log('sending');

          },
          error: function(e) {
            console.log(e)
            console.log("failed")
          },
          success: function(resp) {
            Object.size = function(obj) {
              var size = 0,
                key;
              for (key in obj) {
                if (obj.hasOwnProperty(key)) size++;
              }
              return size;
            };

            // Get the size of an object
            var size = Object.size(resp);
            // console.log(resp)
            $("#model_order_id").text("");
            $("#model_order_id").text("Order id : " + get_order_id);
            $('#table_header').html("");
            var table_head = '<tr><th scope="col">#</th><th scope="col">track title</th><th scope="col">track address</th><th scope="col">Date</th><th scope="col">Time</th><th scope="col">Active</th></tr>';
            $('#table_header').append(table_head);
            $('#table_body').html("");
            for (var i = 0; i < size; i++) {
              var table_body = '<tr><th scope="row">' + resp[i].id + '</th><td>' + resp[i].track_title + '</td><td>' + resp[i].track_address + '</td><td>' + resp[i].date + '</td><td>' + resp[i].time + '</td><td>' + resp[i].active + '</td></tr>';
              $("#table_body").append(table_body);
            }


          }
        });
      });






      //  insert new order short details
      $("#short_details_submit").on('click', function() {
        $.ajax({
          type: 'POST',
          url: 'insert_sort_details.php',
          data: {
            short_details_submitted: true,
            email: $('input[name=email]').val(),
            product_id: $('input[name=product_id]').val(),
            destination_address: $('input[name=destination_address]').val(),
            initial_address: $('input[name=initial_address]').val(),
            client_phone_number: $('input[name=client_phone_number]').val(),
            estimated_cost: $('input[name=estimated_cost]').val(),
          },
          dataType: "json",
          beforeSend: function() {
            //  console.log('sending');

          },
          error: function(e) {
            console.log(e)
            console.log("failed")
          },
          success: function(resp) {
            console.log(resp)
            if (resp.status == "success") {
              console.log(resp)
              var resp = resp.response;
              create_table_for_update();
              // var data = '<div class="card mt-2"><div class="card-header d-flex justify-content-between"> <span id="order_id">' + resp.product_id + '</span>  <button class="btn " data-toggle="modal" data-target="#orderupdatemodel" data-order-id="' + resp.product_id + '" id="btn_for_update_order">Update</button></div><div class="card-body"><!-- <h5 class="card-title"></h5> --><p class="card-text"><!--details list  --><ul class="list-group list-group-flush"><li class="list-group-item">Last Updated At : Utterpradesh</li><li class="list-group-item">Destination : ' + resp.destinaton_address + '</li><li class="list-group-item">Intial Address : ' + resp.initial_address + '</li><li class="list-group-item">Cost : ' + resp.estimated_cost + '</li><li class="list-group-item">Email : ' + resp.email + '</li></ul><!-- end --><div class="text-right mt-2"><a href="#" class="btn " id="hass">Go somewhere</a></div></div></div>';
               var data = '<div class="card mt-3 w-75 mx-auto"><div class="card-header d-flex justify-content-between"> <span id="order_id">' + resp.product_id + '</span> <div id="modal_btn_here"> <button class="btn mr-2" data-toggle="modal" data-target="#orderupdatemodel" data-order-id="' + resp.product_id + '" id="btn_for_update_order">Update</button><button class="btn" id="add_to_delivered" data-order-id="' + resp.product_id + '">Add To Delivered</button></div></div><div class="card-body"><!-- <h5 class="card-title"></h5> --><p class="card-text"><!--details list  --><ul class="list-group list-group-flush"><li class="list-group-item">Last Updated At : Utterpradesh</li><li class="list-group-item">Destination : ' + resp.destinaton_address + '</li><li class="list-group-item">Intial Address : ' + resp.initial_address + '</li><li class="list-group-item">Cost : ' + resp.estimated_cost + '</li><li class="list-group-item">Email : ' + resp.email + '</li></ul><!-- end --></div></div>';
         
              $("#order_details").prepend(data)
              $('#exampleModal').modal('hide');
            }
          }
        });


        // insert new table for order update
        function create_table_for_update() {
          $.ajax({
            type: 'POST',
            url: 'create_table_for_update.php',
            data: {
              create_new_update_table: true,
              product_id: $('input[name=product_id]').val(),
            },
            dataType: "json",
            beforeSend: function() {


            },
            error: function(e) {
              console.log(e)

            },
            success: function(resp) {
              if (resp.status == "success") {
                single_update();
              }
            }
          });

        }

        function single_update() {
          $.ajax({
            type: 'POST',
            url: 'single_update.php',
            data: {
              update_track: true,
              product_id: $('input[name=product_id]').val(),
              track_address: $('input[name=initial_address]').val(),
              track_title: $('input[name=initial_address]').val()
            },
            dataType: "json",
            beforeSend: function() {
              //  console.log('sending');

            },
            error: function(e) {
              console.log(e)
              console.log("failed")
            },
            success: function(resp) {
              //  console.log(resp)


              // refrence id = 40ASDF
              $('input[name=email]').val("")
              $('input[name=product_id]').val("")
              $('input[name=destination_address]').val("")
              $('input[name=initial_address]').val("")
              $('input[name=client_phone_number]').val("")
              $('input[name=estimated_cost]').val("")
            }
          });
        }

      });




      // fetch all order
      $.ajax({
        type: 'POST',
        url: 'fetch_sort_details.php',
        data: {
          fetch_short_details: true
        },
        dataType: "json",
        beforeSend: function() {
          console.log('sending');

        },
        error: function(e) {
          console.log(e)
          console.log("failed")
        },
        success: function(resp) {
          // console.log(resp)
          Object.size = function(obj) {
            var size = 0,
              key;
            for (key in obj) {
              if (obj.hasOwnProperty(key)) size++;
            }
            return size;
          };

          // Get the size of an object
          var size = Object.size(resp);
          // console.log(resp)
        
          for (let i = 0; i < size; i++) {
            if(resp[i].status == "NO"){
               var data = '<div class="card mt-3 w-75 mx-auto" id=' + resp[i].product_id + '><div class="card-header d-flex justify-content-between"> <span id="order_id">' + resp[i].product_id + '</span> <div id="modal_btn_here"> <button class="btn mr-2" data-toggle="modal" data-target="#orderupdatemodel" data-order-id="' + resp[i].product_id + '" id="btn_for_update_order">Update</button><button class="btn" id="add_to_delivered" data-toggle="modal" data-target="#addtodelivered" data-order-id="' + resp[i].product_id + '">Add To Delivered</button></div></div><div class="card-body"><!-- <h5 class="card-title"></h5> --><p class="card-text"><!--details list  --><ul class="list-group list-group-flush"><li class="list-group-item">Last Updated At : Utterpradesh</li><li class="list-group-item">Destination : ' + resp[i].destinaton_address + '</li><li class="list-group-item">Intial Address : ' + resp[i].initial_address + '</li><li class="list-group-item">Cost : ' + resp[i].estimated_cost + '</li><li class="list-group-item">Email : ' + resp[i].email + '</li></ul><!-- end --></div></div>';
            //  var data = '<div class="card mt-2"><div class="card-header d-flex justify-content-between"> <span id="order_id">'+resp[i].product_id+'</span>  <button class="btn btn-primary" data-toggle="modal" data-target="#orderupdatemodel" data-order-id="'+resp[i].product_id+'" id="btn_for_update_order">Update</button></div><div class="card-body"><!-- <h5 class="card-title"></h5> --><p class="card-text"><!--details list  --><ul class="list-group list-group-flush"><li class="list-group-item">Last Updated At : Utterpradesh</li><li class="list-group-item">Destination : '+ resp[i].destinaton_address+'</li><li class="list-group-item">Intial Address : '+ resp[i].initial_address+'</li><li class="list-group-item">Cost : '+ resp[i].estimated_cost +'</li><li class="list-group-item">Email : '+ resp[i].email+'</li></ul><!-- end --><div class="text-right mt-2"><a href="#" class="btn btn-primary" id="hass">Add To Delivired</a></div></div></div>';
                 
              $("#order_details").append(data)
            }
            

          }

        }
      });

    });
  </script>
</body>

</html>