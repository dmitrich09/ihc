<!DOCTYPE HTML>

<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</head>

<body>
    <div class="container">
      
<!--		<div class="ballon" style="width:90%; height:200px; color:black; overflow-x:unset" >
		   <div class="row" >
			   <div class="col-3">
			  <img src="/img/artist1.4bb9202a.jpg" background="color:black" class="rounded-circle" style="width:80px; height:80px">
			   </div>
			   <div class="col-9">
				   <h4 align="left">hhhhh</h4>
				   <p align="left">'+ this.events[id].info + '</p>
			   </div>
		   </div>
		  <div class="row">
			   <div class="col-12" align="left">
				   <h4>'+ this.events[id].name +'  in '+ this.events[id].address+ '</h4>
				  <h4>'+ this.events[id].address + '</h4>
				 
			  </div>
            </div>
		</div>  -->
		
		<button class="button btn btn-secondary">Click me</button>
		
		
		
    </div>
	
	<div class="modal fade modaltest" tabindex="-1" aria-labelledby="myModalLabel" id="myModal" aria-hidden="true" role="dialog">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title">Modal title</h5>
				<button type="button" class="close close_modaltest" data-dismiss="modal" aria-hidden="true" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<p>Modal body text goes here.</p>
			  </div>
			</div>
		  </div>
		</div>
	
</body>


</html>
<script>
   
   $('.button').on('click', function()
   { 
       $('.modaltest').attr('style','display:block; top: 30vh');
	   $('.modaltest').attr({'class' : 'modal fade in modaltest'});
	   $('body').attr({'class': 'modal-open'});
	   $('body').append('<div class="modal-backdrop fade in"></div>');
	   
   });
   
   $('.close_modaltest').on('click', function()
   {
	   $('.modaltest').attr('style="display: none"');
       $('.body').attr({'class' : ''});
	   $('.modal-backdrop').attr({'class' : ''}); 
	});
   

</script>
