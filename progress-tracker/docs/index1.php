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
</head>
<body>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">




         <div class="container separator">

        <ul class="progress-tracker progress-tracker--vertical">
          <li class="progress-step is-complete">
            <div class="progress-marker"></div>
            <div class="progress-text">
              <h4 class="progress-title">Step 1</h4>
              dgfdfgdfgdfgdfgdf dfgdfsg
            </div>
          </li>

          <li class="progress-step is-complete">
            <div class="progress-marker"></div>
            <div class="progress-text">
              <h4 class="progress-title">Step 2</h4>
              Summary text explaining this step to the user
            </div>
          </li>

          <li class="progress-step is-active" aria-current="step">
            <div class="progress-marker"></div>
            <div class="progress-text">
              <h4 class="progress-title">Step 3</h4>
              Summary text explaining this step to the user
            </div>
          </li>

          <li class="progress-step">
            <div class="progress-marker"></div>
            <div class="progress-text">
              <h4 class="progress-title">Step 4</h4>
              Summary text explaining this step to the user
            </div>
          </li>

          <li class="progress-step">
            <div class="progress-marker"></div>
            <div class="progress-text">
              <h4 class="progress-title">Step 5</h4>
              Summary text explaining this step to the user
            </div>
          </li>
        </ul>        
      
      </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  
  
  
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>