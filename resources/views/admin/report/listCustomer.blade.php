<table class="table table-hover table-striped table-condensed" id="report_info">
	<thead>
		<tr>
			<th class="th_name">Customer Name</th>
			<th>Project</th>
			<th>Username</th>
			<th class="th_center">Time</th>
			<th class="th_center">Total Time</th>
		</tr>
	</thead>

	<tbody>
		@foreach($report as $key => $value)
			<tr>
				<td>{{ $value->customer_name }}</td>
				<td class="projects_name">{{ $value->projects_name }}</td>
				<td>{{ $value->firstname }} {{ $value->lastname }}</td>
				<td class="total_working_time"> {{ $value->total_working_time}} </td>
				@foreach($report2 as $key2 => $value2)
					@if($value->ID == $value2->customers_ID)
						<td class="total_time">{{ $value2->total_time }}</td>
					@endif
				@endforeach
			</tr>
		@endforeach
	</tbody>
</table>

<style type="text/css">
	.total_time{
		text-align: center; 
		color:#3333ff; 
		font-weight: bold;
	}
	.total_working_time{
		text-align: center;
	}
	.th_center{
		text-align: center; 
		width: 10%;
	}
	.th_name{
		width: 35%;
	}
	thead{
		background: #ccefff; 
		font-size: 15px;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		var span = 1;
	   	var prevTD = "";
	   	var prevTDVal = "";

	   	// gom dong cua cot dau tien
	  	$("#report_info tbody tr td:first-child").each(function() { //for each first td in every tr
	      	var $this = $(this);
	      	if ($this.text() == prevTDVal) { // check value of previous td text
	         	span++;
	         	if (prevTD != "") {
	            	prevTD.attr("rowspan", span); // add attribute to previous td
	            	$this.remove(); // remove current td
	         	}
	      	} else {
	         	prevTD     = $this; // store current td 
	         	prevTDVal  = $this.text();
	         	span       = 1;
	      	}
	   	});

	  	// gom dong cua cot cuoi cung
	   	$("#report_info tbody tr td:last-child").each(function() { //for each first td in every tr
	      	var $this = $(this);
	      	if ($this.text() == prevTDVal) { // check value of previous td text
	         	span++;
	         	if (prevTD != "") {
	            	prevTD.attr("rowspan", span); // add attribute to previous td
	            	$this.remove(); // remove current td
	         	}
	      	} else {
	         	prevTD     = $this; // store current td 
	         	prevTDVal  = $this.text();
	         	span       = 1;
	      	}
	   	});

	   	// gom dong cua cot thu 2
	   	$("#report_info tbody tr td.projects_name").each(function() { //for each first td in every tr
	      	var $this = $(this);
	      	if ($this.text() == prevTDVal) { // check value of previous td text
	         	span++;
	         	if (prevTD != "") {
	            	prevTD.attr("rowspan", span); // add attribute to previous td
	            	$this.remove(); // remove current td
	         	}
	      	} else {
	         	prevTD     = $this; // store current td 
	         	prevTDVal  = $this.text();
	         	span       = 1;
	      	}
	   	});

	})

	
</script>