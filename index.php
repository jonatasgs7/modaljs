<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal Pure Javascript</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/modal.css">

</head>

<body>

<!-- Button active modal -->
<button id="show-modal">Show modal</button>

<!-- Modal Structure -->    
<div class="modal">
    
    <div class="modal-overlay"></div>
    
    <div class="modal-container"> 
      <div class="modal-title">
          <h4>Title</h4>
          <div class="modal-close">
              x
          </div>
      </div>
      
      <div class="modal-body">
        <p>Modal content</p>
      </div>
    </div>
    
</div>
<!-- Fim da estrutura HTML do modal -->

<!-- Scripts -->
<script src="js/modal.js"></script>

</body>
</html>