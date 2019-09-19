
<button class="btn btn-warning" id="btn">sand</button>
<div id="re"></div>
 <?php
  $js= <<<JS
  $('#btn').on('click',function() {
    
  })
  $(document).ready(function() {
    $.ajax({
    url: 'show',
           type: 'GET',
           // dataType: 'html',
           date:{test:'123'},
           success: function (jahongir) {
               // $('div#main-content').html(data);
               $('#re').html(jahongir);
           },
           error:function() {
             alert('ERROR!');
           }
    })
  })
JS;
  $this->registerjs($js);

 ?>