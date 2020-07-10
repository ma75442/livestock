<div class="row">
	
    <div class="col-12 col-sm-6 col-md-6 col-xl-4">
		<div class="card">
			<div class="card-body">
				<div class="chartjs-size-monitor">
					<div class="chartjs-size-monitor-expand">
						<div class=""></div>
					</div>
					<div class="chartjs-size-monitor-shrink">
						<div class=""></div>
					</div>
				</div>
				<a href="<?php echo site_url('admin/type/index'); ?>"><h4 class="card-title">Types of Animals Present</h4></a>
				<div class="d-flex justify-content-between align-items-center">
					<h2 class="text-dark font-18 mb-0">total</h2>
					<div
						class="text-success font-weight-bold d-flex justify-content-between align-items-center">
						<i class="fa fa-arrow-right mr-1"></i> <span><?php $result = $this->db->from("type")->count_all_results(); echo $result;?>
                            </span>
					</div>
				</div>
			</div>
		</div>
	</div>
    
    <div class="col-12 col-sm-6 col-md-6 col-xl-4">
		<div class="card">
			<div class="card-body">
				<div class="chartjs-size-monitor">
					<div class="chartjs-size-monitor-expand">
						<div class=""></div>
					</div>
					<div class="chartjs-size-monitor-shrink">
						<div class=""></div>
					</div>
				</div>
				<a href="<?php echo site_url('admin/animal/index'); ?>"><h4 class="card-title">Numbers of Animals Present</h4></a>
				<div class="d-flex justify-content-between align-items-center">
					<h2 class="text-dark font-18 mb-0">total</h2>
					<div
						class="text-success font-weight-bold d-flex justify-content-between align-items-center">
						<i class="fa fa-arrow-right mr-1"></i> <span><?php $result = $this->db->from("animal")->count_all_results(); echo $result;?>
                            </span>
					</div>
				</div>
			</div>
		</div>
</div>
    
    <div class="col-12 col-sm-6 col-md-6 col-xl-4">
		<div class="card">
			<div class="card-body">
				<div class="chartjs-size-monitor">
					<div class="chartjs-size-monitor-expand">
						<div class=""></div>
					</div>
					<div class="chartjs-size-monitor-shrink">
						<div class=""></div>
					</div>
				</div>
				<a hef="<?php echo site_url('admin/health_issues/index'); ?>"><h4 class="card-title">Number of health_issues</h4></a>
				<div class="d-flex justify-content-between align-items-center">
					<h2 class="text-dark font-18 mb-0">total</h2>
					<div
						class="text-success font-weight-bold d-flex justify-content-between align-items-center">
						<i class="fa fa-arrow-right mr-1"></i> <span><?php $result = $this->db->from("health_issues")->count_all_results(); echo $result;?>
                            </span>
					</div>
				</div>
			</div>
		</div>
	</div>
    
</div>
<div class="col-12 col-sm-12 col-md-12 col-xl-6">
		<div class="card">
			<div class="card-body">
				<div class="chartjs-size-monitor">
					<div class="chartjs-size-monitor-expand">
						<div class=""></div>
					</div>
					<div class="chartjs-size-monitor-shrink">
						<div class=""></div>
					</div>
				</div>
				<h4 class="card-title">Space Management</h4>
				<form>
Total area : <input type="text" id="firstNumber" />
<input type="text" id="s" placeholder="square meter" disabled/><br>
<br>For:
<input type="button" onClick="multiplyBy()" Value="Cow" />
<input type="button" onClick="divideBy()" Value="Goat" />
<input type="button" onClick="multiplyy()" Value="Buffalo" />

</form>
<p>In Covered Area Number is : <br>
<span id = "result"></span>

<p>In Open Area Number is : <br>
<span id = "r1"></span>
				<!-- <div class="d-flex justify-content-between align-items-center">
					<h2 class="text-dark font-18 mb-0">total</h2>
					<div
						class="text-success font-weight-bold d-flex justify-content-between align-items-center">
						<i class="fa fa-arrow-right mr-1"></i> <span
							class=" text-extra-small">
                            <a href="">View</a>
                            </span>
					</div>
				</div> -->
			</div>
		</div>
	</div>
    
</div>

<script>
	function multiplyBy()
{
        num1 = document.getElementById("firstNumber").value;
		n1 = (3.5+0.075);
		num2= 1+ num1 / n1;
		
       
        document.getElementById("result").innerHTML =Math.round(num2);
		document.getElementById("r1").innerHTML =Math.round(num2/2);
}

function divideBy() 
{ 
        num1 = document.getElementById("firstNumber").value;
		n1 = 1+0.0050;
       num2= 1+ num1 / n1;

document.getElementById("result").innerHTML =Math.round(num2);
document.getElementById("r1").innerHTML =Math.round(num2/2);
}
function multiplyy() 
{ 
        num1 = document.getElementById("firstNumber").value;
		n1 = 4+0.01;
        num2= 1+ num1 / n1;
document.getElementById("result").innerHTML =Math.round(num2);
document.getElementById("r1").innerHTML =Math.round(num2/2);
}
</script>