<?php
include('./admininclude/header.php');
?>

<div class="col-sm-9 mt-5">
	<!---Table--->

	<p class="bg-dark text-white p-2">List of Places</p>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Serial No.</th>
				<th scope="col">Place</th>
				<th scope="col">Visitor No.</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>Cox's Bazaar</td>
				<td>26</td>
				<td>
				<button
					type="submit"
					class="btn bt-info mr-3"
					name="view"
					value="View"
					>
					<i class="fas fa-pen"></i>
				</button>
				<button 
					type="submit"
					class="btn btn-secondery"
					name="delete"
					value="Delete"
					>
					<i class="far fa-trash-alt"></i>
				</button>
			</td>
			</tr>
		</tbody>
	</table>
</div>
<!---div row close from header---->

<div>
	<a class="btn btn-danger box" href="./addPlace.php"> <i class="fas fa-plus fa-2x"></i>
	</a>
</div>


<?php
include('./admininclude/footer.php');
?>
