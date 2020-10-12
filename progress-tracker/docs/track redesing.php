<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/site.css">
    <link rel="stylesheet" href="styles/progress-tracker.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="scripts/site.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
    .card{
      width: 100%;
    }
    .modal-header {
    background: #13314C;
    color: white;
}
.modal-body{
      background: #EFEFEF;
}

    </style>
</head>
<body>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="startTrack">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg">
    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title "  id="print_track_id">Track Id : </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

 <div class="container  d-flex justify-content-center">

        <ul class="progress-tracker progress-tracker--vertical" id="track_data_table">
           
        </ul>

    </div>
    </div>

     
     
    </div>
  </div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){



   
    
    
    $("#startTrack").on('click', function(){
      //  var SendInfo= { SendInfo: "fetch"};

      //   $.ajax({
      //       type: 'post',
      //       url: 'fetch_data.php',
      //       data: JSON.stringify(SendInfo),
      //       contentType: "application/json; charset=utf-8",
      //       traditional: true,
      //       success: function (data) {
      //          console.log(data)
      //       }
      //   });


        $.ajax({
            type: 'POST',
            url: 'fetch_data.php',
            data: {
              track_id : "sdfsdfsf"
            },
            dataType: "json",
            beforeSend: function(){
               console.log('sending');
                
            },
            error:function(e){
                console.log(e)
                console.log("failed")
            },
            success: function(resp){
                console.log(resp);
                Object.size = function(obj) {
                      var size = 0, key;
                      for (key in obj) {
                          if (obj.hasOwnProperty(key)) size++;
                      }
                      return size;
                  };

                  // Get the size of an object
                  var size = Object.size(resp);
                  $("#track_data_table").html('')
                  $("#print_track_id").text("")
                  $("#print_track_id").text("Track id : "+resp[0].product_id)
                  for (let i = 0; i < size; i++) {
                    console.log(resp[i])
                     $("#track_data_table").append("<li class='progress-step is-complete'><div class='progress-text text-right'><h5 class='progress-title' >"+resp[i].date+"</h4>"+resp[i].time+"</div><div class='progress-marker'></div><div class='card ml-3 mt-2'><div class='card-body'><h5 class='card-title'>"+resp[i].track_title+"</h5><p class='card-text'>"+resp[i].track_address+"</p></div></div></li>")
                  }
                
                // $("#track_data_table").append("<li class='progress-step is-complete'><div class='progress-text text-right'><h5 class='progress-title'>Feb 04, 2020</h4>03:24 PM</div><div class='progress-marker'></div><div class='card ml-3 mt-3'><div class='card-body'><h5 class='card-title'>Special title treatment</h5><p class='card-text'>With supporting text below as a natural lead-in to additional content.</p></div></div></li>")
            }
        });
    });
    
  
});


</script>

</body>
</html>