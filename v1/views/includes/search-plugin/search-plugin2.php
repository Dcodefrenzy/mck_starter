<div  class="modal fade" id="search-box" tabindex="-1" role="dialog">
	<div style="" class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><i class="fa fa-search"></i> Attendout Search
				</h4>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
						class="sr-only">Close</span></button>
			</div>
			<div class="modal-body">
				<form id="myForm" role="form">
						<div class="form-group">
					<?php if(isset($_SESSION['id']) && $info['image_3'] !== NULL){

						$next = explode(',',$info['image_3']);
						// var_dump($next);
						if(in_array("1",$next)){ ?>
							<span><input type="radio" name="where" onchange="searchQuery(this.value)" value="authors" required> Authors |</span>
	            <span><input type="radio" name="where" onchange="searchQuery(this.value)" value="articles" required> Articles |</span>
								<span><input type="radio" name="where" onchange="searchQuery(this.value)" value="insights" required> Insights |</span>
			<?php		}
					if(in_array("2",$next)){ ?>
					      <span><input type="radio" name="where" onchange="searchQuery(this.value)" value="events" required> Events |</span>

				<?php	}
					if (in_array("3",$next)) { ?>
									<span><input type="radio" name="where" onchange="searchQuery(this.value)" value="trainings" required> Trainings |</span>
			<?php 		}
}else{
					?>
	<div class="form-group">
		<span><input type="radio" name="where" onchange="searchQuery(this.value)" value="authors" required> Authors |</span>
		<span><input type="radio" name="where" onchange="searchQuery(this.value)" value="articles" required> Articles |</span>
			<span><input type="radio" name="where" onchange="searchQuery(this.value)" value="insights" required> Insights |</span>
			<span><input type="radio" name="where" onchange="searchQuery(this.value)" value="events" required> Events |</span>
			<span><input type="radio" name="where" onchange="searchQuery(this.value)" value="trainings" required> Trainings |</span>
<?php } ?>

						<label for="message-text2" class="control-label">Search Keywords <span class="text-count"> </span>:</label>
						<div id='board2' class="form-group">

						</div>
						<input class="form-control" id="search-value" oninput="searchQuery1(this.value)" type="text" name="" required> <br>
					</div>
				</form>
			</div>
			<!-- <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary">Search</button>
			</div> -->
      <div class="modal-body">

					<div id='board' class="form-group">
						Result appears here
					</div>

			</div>
		</div>
	</div>
</div>

<script type="text/javascript">


  function searchQuery(value){
  var query = document.getElementById('search-value').value;
  if(!query){
    document.getElementById('myForm').reportValidity();
  }else {
    searchResult(value,query);
  }


  }
  function searchQuery1(value){

document.getElementById('myForm').reportValidity();
    var radioValue = document.querySelector('input[name="where"]:checked').value;

searchResult(radioValue,value);

  }
  function searchResult(data,query){
		if(data == "authors" ){
			document.getElementById('board2').innerHTML = '<p><strong>Note:</strong>Only authors who have posted at least ONE article show up on search</p>';
		}
		  document.getElementById('board').innerHTML = '<img src="lg.rotating-balls-spinner.gif" width="50" height="50" >';

    // console.log(id);

    var url = '/search';
    var method = 'POST';
    var params = 'data=' + data;
    params += '&query=' + query;
    executeSend(url,method,params,data);
  }

  function executeSend(url, method,params,data){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4){

        var res = xhr.responseText;
        // console.log(res);
        document.getElementById('board').innerHTML = res;
        // console.log(res['"'+'https://attendout.com/contest?id='+id+'"'].engagement.share_count);

      }
    }
    xhr.open(method, url, true);
    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    xhr.send(params);
  }
</script>
