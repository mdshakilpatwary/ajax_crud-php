<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 mt-5 border border-success p-3">
				<div class="message "></div>
				<div class="form-group">
					<label for="nam">Your Name</label>
					<input id="nam" type="text" class= "form-control pt-2 name" placeholde="Enter Your Name">
				</div>
				<div class="form-group">
					<label for="phn">Phone Number</label>
					<input id="phn" type="text" class= "form-control pt-2 phone" placeholde="Enter Your Number">
				</div>
				<div class="form-group">
					<label for="mail">Email Address</label>
					<input id="mail" type="email" class= " form-control pt-2 email" placeholde="Enter Your Email">
				</div>
				<div class="form-group pt-2">
					<select class="status p-2 form-control" >
						<option value="0">----Status----</option>
						<option value="1">Active</option>
						<option value="2">Inactive</option>
					</select>
				</div>
				<div class="form-group mt-3">
					<button class="btn btn-success save" id="">Send</button>
				</div>
			</div>
			<div class="col-md-8 mt-5 border border-success p-3">
				<div><p class="text-center display-6">Student Information</p></div>
				<table class="table" bordar="1">
					<thead>
						<tr>
							<th>SI</th>
							<th>Name</th>
							<th>Phone</th>
							<th>Email</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody class="myTable">
						
							
					</tbody>
					<tfoot>
					<tr>
							<th>SI</th>
							<th>Name</th>
							<th>Phone</th>
							<th>Email</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
	<div class="check">check</div>
	
    <script src="https://kit.fontawesome.com/69daba5133.js" crossorigin="anonymous"></script>
	<script src="jquery-3.7.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<script src="ajax.js"></script>
</body>
</html>