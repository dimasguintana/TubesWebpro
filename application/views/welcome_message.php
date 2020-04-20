<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title><?= $title ?></title>
	<link rel="icon" href="assets/bitmap.png">
</head>
<body>

	<nav class="navbar navbar-dark bg-dark">
	  <span class="navbar-brand mb-0 h1">Pasien</span>
	</nav>

	<center>
		<h1><?= $title ?></h1>
	</center>

	<div class="table-responsive container">
    	<table class="table table-dark table-hover table-bordered" id="dp" style="width: 100%">
      		<thead>
        		<tr>
		          <th>Username</th>
		          <th>Nama</th>
		          <th>Usia</th>
        		</tr>
      		</thead>
    	</table>
 	</div>

	<script type="text/javascript">
		$(document).ready(function() {
	    let table = $('#dp').DataTable({
	      "searching": false,
	      "ordering": true,
	      "order": [
	        [1, 'asc']
	      ],
	      "ajax": {
	        "url": "<?= base_url('Welcome/allPasien') ?>",
	        "type": "GET",
	        "dataSrc": ""
	      },
	      "columns": [{
	          "data": "username"
	        },
	        {
	          "data": "nama"
	        },
	        {
	          "data": "usia"
	        }
	      ]
	    });
	</script>

</body>
</html>