<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bamboo Demand Calculator</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
	<style>
		body{
			font-family: 'Work Sans', sans-serif;
			line-height: 1.2;
		}
		h1 {
			font-size: 36px;
			margin-top: 10px;
			margin-bottom: 20px;
		}

        p {
            margin-top: 5px;
            margin-bottom: 5px;
        }
		.nav-tabs .nav-link {
		    color: #cfcfcf;
		    padding:5px 10px;
		    border-color: white;
		}
		.nav-tabs .nav-link:focus,.nav-tabs  .nav-link:hover {
			color: #cfcfcf;
		}
		.form-group {padding-bottom: 8px;margin-top:3px;}
		.background-alt {background:#efefef;}
		.bboxshadow {
			box-shadow: 4px 4px 13px 3px #efefef;
		}
		.costing-columns {
			border-radius: 10px;padding: 20px 20px 10px 20px;
			/*height: 100%;*/
		}
		.costing-columns h2 {
		    
		    font-size: 20px;
		padding: 5px 0;
			border-bottom: dashed 1px;
			border-top: dashed 1px;
			margin-bottom:10px ;}
		.costing-columns h3 {font-size: 18px;padding-bottom: 10px;}
		hr {color: #cdcdcd;margin: 5px 0 5px 0;}
  
		.input-group-text {
		    padding: 0 5px;
		}
		.fas.fa-info-circle {
			color: #8d8d8d;
			font-size: 14px;
		}
		.form-control {
			border: solid 1.5px #000;
			border-radius: 5px;
			background: #fefefe;
			border-radius: 3px;
		}
		.input-group-text {
			border: solid 1.5px #000;
			border-radius: 5px;
			background: #ededed;
			padding: 2px 8px;
			border-radius: 3px;
			background: #ffffff;
		}
		.bignumber {font-size: 42px;font-weight: 700;margin-bottom: 10px;}
		.mediumnumber {font-size: 24px;font-weight: 500;}

        
        
            .baminputctrl .input-group {
                width: 38%;
                float: right;
            }
            .baminputctrl label {
                width: 58%;
                float: left;
            }
            .baminputctrl .form-group {
                min-height: 40px;
            }
            
             .baminputctrl .form-control-sm {
                min-height: 24px;
                 height: 24px;
            }
             .baminputctrl .input-group-text {
                min-height: 24px;
                 height: 24px;font-size: 14px;
            }
            
            .btn-group{
    		    width:40%;
    		    float: right;
    		}
            .btn-group>.btn {
                border:solid 1px;
                    padding: 0px;
            }
             .btn-group>.btn.active {
                border:solid 2px #4e4e4e;
            }
            .nav-btns{
                font-size: 12px;
                padding: 8px;
            }
            .nav-btns.active{
                   border: solid 2px;
            }
               

            
        @media only screen and (max-width: 1024px) {
		    body{
    			font-size: 14px;
    		}
    		.btn-group>.btn{
    		    font-size: 12px;
    		    
    		}
    		
		    .bignumber {font-size: 24px;font-weight: 700;}
		    .mediumnumber {font-size: 18px;font-weight: 500;}
		    .nav-link{    font-size: 14px;}
		    .btn-group{
    		    width:100%;
    		}
		    .baminputctrl .input-group {
                width: 100%;
                float: right;
            }
            .baminputctrl label {
                width: 100%;
                float: left; 
                margin-top: 10px;
            }
            .nav-btns {
                 width:49%;
                float:left;
            }
        }
            

	</style>
<div class="calculator">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="text-center">
					bamboo demand calculator
				</h1>
			
			</div>
		</div>
		<div class="row mb-2">
		    <div class="col-lg-1 p-1">
		        <a href="https://bamboocalculator.com/" ><div class="costing-columns bboxshadow nav-btns mb-1">
		            Bamboo farming profit
		        </div></a>
		        <a href="https://bamboocalculator.com/bamboodemand/" ><div class="costing-columns bboxshadow nav-btns active">
		            bamboo demand
		        </div></a>
		    </div>
			<div class="col-lg-5 mb-3">
				<div class="costing-columns baminputctrl bboxshadow" style="height:100%;">
					<h2>Demand for switching over from fossil fuel</h2>
			        <div class="formbuilder-number form-group">
				        <label for="bio_ethanol_d" class="formbuilder-number-label">Bio Ethanol</label>
				        <div class="input-group">
						  	<input type="number" min="1" step="10" class="form-control form-control-sm" name="bio_ethanol_d" access="false" value="1900" id="bio_ethanol_d">
						  	<span class="input-group-text">Lakh Ton</span>
						</div>
				    </div>
				    <div class="formbuilder-number form-group">
				        <label for="bio_cng_d" class="formbuilder-number-label">Bio CNG</label>
				        <div class="input-group">
						  	<input type="number" min="1" class="form-control form-control-sm" name="bio_cng_d" access="false" value="1360" id="bio_cng_d">
						  	<span class="input-group-text">Lakh Ton</span>
						</div>
				    </div>
				    <div class="formbuilder-number form-group">
				        <label for="coal_repl_d" class="formbuilder-number-label">Coal Replacement</label>
				        <div class="input-group">
						  	<input type="number" min="1" class="form-control form-control-sm" name="coal_repl_d" access="false" value="9080" id="coal_repl_d">
						  	<span class="input-group-text">Lakh Ton</span>
						</div>
				    </div>
				    <div class="formbuilder-number form-group">
				        <label for="electricity_d" class="formbuilder-number-label">Electricity</label>
				        <div class="input-group">
						  	<input type="number" min="1" class="form-control form-control-sm" name="electricity_d" access="false" value="3500" id="electricity_d">
						  	<span class="input-group-text">Lakh Ton</span>
						</div>
				    </div>
				    <div class="formbuilder-number form-group">
				        <label for="bio_fuel_d" class="formbuilder-number-label">Bio Fuel</label>
				        <div class="input-group">
						  	<input type="number" min="1" class="form-control form-control-sm" name="bio_fuel_d" access="false" value="8040" id="bio_fuel_d">
						  	<span class="input-group-text">Lakh Ton</span>
						</div>
				    </div>
				    <div class="formbuilder-number form-group">
				        <label for="other_ind_d" class="formbuilder-number-label">Other Industries
				        <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="charcoal making, incense stick / Agarbatti making, sell to fruit growers, building contractors, furniture manufacturers, Paper mills, local traders/wholesalers and others"></i>
				        </label>
				        <div class="input-group">
						  	<input type="number" min="1" class="form-control form-control-sm" name="other_ind_d" access="false" value="4000" id="other_ind_d">
						  	<span class="input-group-text">Lakh Ton</span>
						</div>
				    </div>
				</div>
			</div>
			<div class="col-lg-6">
			    <div class="row">
            	    <div class="col-lg-12 mb-3">
            		    <div class="costing-columns mb-3"  style="background:#000;color:white;">
        				    <h2>Total Demand 
        				    </h2>
        				   	<p><span id="totaldemand" class="mediumnumber"></span> Lakh Ton </p><hr>
            	            <br>
            	            
        					<div class="row">
        						<div class="col-lg-12">
        					        <h2>Bamboo Plantation Needed 
        					        </h2>
        						</div>
            			    	<div class="formbuilder-number form-group mt-2">
            						<div class="input-group">
            							<span class="input-group-text">Assuming production upto</span>
            							<input type="number" min="1" class="form-control form-control-sm" name="production_ton_per_acre" access="false" value="40" id="production_ton_per_acre" step="1">
            							<span class="input-group-text">Ton per acre</span>
            						</div>
            				    </div>
            				    <p><span id="bamboo_plantation_needed" class="bignumber"></span> acres </p>
            				    <small>(Appx. <span id="bamboo_plantation_needed_lakhacres" class="smallnumber"></span> lakh acres)</p>
        				    </div> 		
                	     </div>
        		    </div>
		        </div>
		    </div>
        </div>
		<div class="row">
			<div class="col-lg-12" style="margin-top:100px;">
				<p class="text-center">developed by <a href="https://pratiksethia.com" target="_blank">pratiksethia.com</a>
				</p>
				<p class="text-center">for all the farmers and bamboo lovers!</p>
				<p class="text-center"><a href="https://wa.me/919904001599" target="_blank">whatsapp your suggestions or connect to collaborate</a></p>
				<p class="text-center"><small><a href="https://youtu.be/Rzj7nyzmhF4?t=495" target="_blank">Data taken from Dr N Bharathi's presentation on youtube</a></small></p>
				<p class="text-center"><small><a href="https://github.com/pratik/bamboocalculator" target="_blank">open source code on github</a></small></p><br>
			</div>
		</div>	   
	</div>
</div>




<script type="text/javascript">
	
	calculatebamboo();
	
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
	  return new bootstrap.Tooltip(tooltipTriggerEl)
	})

	$('.setalltozero').click(function(){
		$('.calculator :input').val(0);
	});

	$('.calculator :input').change(function(){
		calculatebamboo();
	});

function calculatebamboo() {
    
    var total_demand_lakh_ton =  parseFloat(~~$('#bio_ethanol_d').val())
    + parseFloat(~~$('#bio_cng_d').val())
    + parseFloat(~~$('#coal_repl_d').val())
    + parseFloat(~~$('#electricity_d').val())
    + parseFloat(~~$('#bio_fuel_d').val())
    + parseFloat(~~$('#other_ind_d').val());
    
    $('#totaldemand').html(Math.floor(total_demand_lakh_ton));
    
    var production_ton_per_acre = parseFloat(~~$('#production_ton_per_acre').val());
    
    var bamboo_plantation_needed = total_demand_lakh_ton/production_ton_per_acre;
    $('#bamboo_plantation_needed').html((bamboo_plantation_needed*100000));
    $('#bamboo_plantation_needed_lakhacres').html(Math.floor(bamboo_plantation_needed));
}

</script>

</body>
</html>