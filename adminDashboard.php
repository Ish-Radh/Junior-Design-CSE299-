
<?php
include('./admininclude/header.php');
?>


		<div class="col-sm-9 mt-5">
			<div class="row mx-5 text-center">
				<div class="col-sm-4 mt-5">
					<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
						<div class="card-header">Total Trips</div>
						<div class="card-body">
							<h4 class="card-title">5
							</h4>
							<a class="btn text-white" href="#">View</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 mt-5">
					<div class="card text-white bg-warning mb-3" style="max-width18rem;">
						<div class="card-header">Total Places</div>
						<div class="card-body">
							<h4 class="card-title">25
							</h4>
							<a class="btn text-white" href="Places.php">view</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 mt-5">
					<div class="card text-white bg-info mb-3" style="max-width18rem;">
						<div class="card-header">Total Bookings</div>
						<div class="card-body">
							<h4 class="card-title">3
							</h4>
							<a class="btn text-white" href="bookings.php">view</a>
						</div>
					</div>
				</div>
				<div class="mx- mt-5 text-center">

					<!---Table--->
					<p class="bg-dark text-white p-2">Booking List</p>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Booking ID</th>
								<th scope="col">Place</th>
								<th scope="col">User Email</th>
								<th scope="col">Booking Date Date</th>
								<th scope="col">Amount<th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">22</th>
								<td>Cox's Bazaar</td>
								<td>rehnuma@gmail.com</td>
								<td>26/06/2022</td>
								<td>10000.00</td>
								<td><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"> </i></button></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	</div><!--div row close from header-->
</div> <!--div container-fluid close from header-->

<?php
include('./admininclude/footer.php');
?>
