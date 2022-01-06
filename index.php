<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>bamboo farming profit calculator</title>
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
					bamboo farming profit calculator
				</h1>
			
			</div>
		</div>
		<div class="row mb-2">
		    <div class="col-lg-1 p-1">
		        <a href="https://bamboocalculator.com/" ><div class="costing-columns bboxshadow nav-btns active mb-1">
		            Bamboo farming profit
		        </div></a>
		        <a href="https://bamboocalculator.com/bamboodemand/" >
		        <div class="costing-columns bboxshadow nav-btns">
		            bamboo demand
		        </div></a>
		    </div>
		    
			<div class="col-lg-5 mb-3">
				<div class="costing-columns baminputctrl bboxshadow" style="height:100%;">
					<h2>Plant Graph Population</h2>
			         <div class="formbuilder-number form-group field-land_size">
				        <label for="land_size" class="formbuilder-number-label">Land Area</label>
				        <div class="input-group">
						  	<input type="number" min="1" class="form-control form-control-sm" name="land_size" access="false" value="1" id="land_size" required="required" aria-required="true">
						  	<span class="input-group-text">acre</span>
						</div>
				    </div>
				    <script>
                        jQuery(document).ready(function($) {
                          // Get click event, assign button to var, and get values from that var
                          $('#aBtnGroup button').on('click', function() {
                            var thisBtn = $(this);
                            
                            thisBtn.addClass('active').siblings().removeClass('active');
                            var btnText = thisBtn.text();
                            var btnValue = thisBtn.val();
                            // console.log(thisBtn.data('row'));
                            // console.log(thisBtn.data('plant'));
                            
                            $('#plants_per_row').val(thisBtn.data('row'));
                            $('#plants_per_column').val(thisBtn.data('plant'));
                            calculatebamboo();
                          });
               
                        });
				    </script>
				    <div class="formbuilder-number form-group field-land_density">
				        <label for="land_density" class="formbuilder-number-label">Plantation Density presets
				            <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="Low Density plantation is recommended by NBM. 180-250 plants per acre for large species and 350-425 plants per acre for smaller species."></i>
				        </label>
				        <div class="btn-group" id="aBtnGroup" style="">
				            <button type="button" value="H" data-row="12" data-plant="6" class="btn btn-default">High</button>
                            <button type="button" value="M" data-row="14" data-plant="8" class="btn btn-default">Medium</button>
                            <button type="button" value="L" data-row="16" data-plant="10" class="btn btn-default active">Low</button>
						</div>
				    </div>
				    <div class="formbuilder-number form-group field-plants_per_row">
				        <label for="plants_per_row" class="formbuilder-number-label">Distance between row to row</label>
				        <div class="input-group">
						  	<input type="number" min="0" class="form-control form-control-sm" name="plants_per_row" access="false" value="16" id="plants_per_row" required="required" aria-required="true">
						  	<span class="input-group-text">Feet</span>
						</div>
				    </div>
				    <div class="formbuilder-number form-group field-plants_per_column">
				        <label for="plants_per_column" class="formbuilder-number-label">Distance between plant to plant</label>
				        <div class="input-group">
						  	<input type="number" min="0" class="form-control form-control-sm" name="plants_per_column" access="false" value="10" id="plants_per_column" required="required" aria-required="true">
						  	<span class="input-group-text">Feet</span>
						</div>
				    </div>
				    <div class="text-end">
				    	<small>TOTAL PLANTS (CLUMPS)</small><p id="totalplants" class="bignumber" style="border-radius:5px;">0</p>
				    </div>
				    
				    
				    <!---->
				    
				    <h2>One Time Investment <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Costs incurred once during setting up the farm"></i></h2>
			      	<div class="formbuilder-number form-group field-onetime_sapling">
				        <label for="onetime_sapling" class="formbuilder-number-label">One Sapling Cost
				        <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="Seed ~ ₹15-25, <br>Tissue Culture ~ ₹30-60, <br>Rhizome based ~ ₹100-120<br><hr>Govt. Subsidy ~ 50-70% upto ₹120<br><hr>Free Saplings available at Govt. Nurseries"></i>	    	
						</label>
						<div class="input-group rupeewrapper">
						  	<span class="input-group-text rupee">₹</span>
							<input type="number" min="0" class="form-control form-control-sm" name="onetime_sapling" access="false" value="50" id="onetime_sapling" step="5">
						</div>
				    </div>
				    <div class="formbuilder-number form-group field-onetime_drip">
				        <label for="onetime_drip" class="formbuilder-number-label">Drip Irrigation Installation
				            <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="₹20,000-50,000 per acre<br><hr>Govt. Subsidy ~ 50-70%"></i>
				        </label>
				        <div class="input-group rupeewrapper">
						  	<span class="input-group-text rupee">₹</span>
						  	<input type="number" min="0" class="form-control form-control-sm" name="onetime_drip" access="false" value="25000" id="onetime_drip" step="1000">
						  	<span class="input-group-text">per acre</span>
						</div>
				    </div>
				     <div class="formbuilder-number form-group field-onetime_labour">
				        <label for="onetime_labour" class="formbuilder-number-label">Labour
				        	<i class="fas fa-info-circle " data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="Land prep, pit digging & refilling, planting, etc. <br> Assuming: 5days x 2people x ₹300 per day = ₹3000"></i>
				        </label>
				        <div class="input-group rupeewrapper">
						  	<span class="input-group-text rupee">₹</span>
						  	<input type="number" min="0" class="form-control form-control-sm" name="onetime_labour" access="false" value="3000" id="onetime_labour" step="100">
						  	<span class="input-group-text">per acre</span>
						</div>
				    </div>
				    <div class="formbuilder-number form-group field-onetime_fencing">
				        <label for="onetime_fencing" class="formbuilder-number-label">Fencing Costs
				        <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="₹20,000-70,000 per acre for cement pole/steel wire. As you increase land area, decrease the cost as the fencing is done only on border permimeters<br>
				        bio-fences (thorny cacti, bamboo poles, wild trees, windbreaker plants, etc) can be used to cut costs, protect from animals and conserve soil moisture at the same time."></i>
				        </label>
				        <div class="input-group rupeewrapper">
						  	<span class="input-group-text rupee">₹</span>
						  	<input type="number" min="0" class="form-control form-control-sm" name="onetime_fencing" access="false" value="0" id="onetime_fencing" step="1000">
						  	<span class="input-group-text">per acre</span>
						</div>
						
				    </div>
				    <div class="formbuilder-number form-group field-onetime_overhead">
				        <label for="onetime_overhead" class="formbuilder-number-label">Additional Overhead Expenses
				        <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="May include costs of transport , electricals, drainage systems, storage, building wells/water storage, power related installations, office electronics, machines, tools or any other overheads"></i>
				        </label>
				        <div class="input-group rupeewrapper">
							<span class="input-group-text rupee">₹</span>
						    <input type="number" min="0" class="form-control form-control-sm" name="onetime_overhead" access="false" value="2000" id="onetime_overhead" step="100">
						    <span class="input-group-text">per acre</span>
				    	</div>
				    </div>
				    
				    <!---->
				    <br>
				    	<h2>Yearly Investment 
			    		<i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Yearly costs required for fertilizer, irrigation, labour, etc. - including first year"></i></h2>
			    	<div class="row">
			    		<div class="col-lg-12">
			    			<div class="formbuilder-number form-group field-yearly_fertilizer_required">
						        <label for="yearly_fertilizer_required" class="formbuilder-number-label">Fertilizer applied</label>
						        <div class="input-group">
								    <input type="number" min="0" class="form-control form-control-sm" name="yearly_fertilizer_required" access="false" value="0.2" id="yearly_fertilizer_required" step="0.1">
								    <span class="input-group-text">kg per plant</span>
						    	</div>
						    </div>
						     <div class="formbuilder-number form-group field-fertilizer_per_kg">
						        <label for="fertilizer_per_kg" class="formbuilder-number-label">Fertilizer cost 
						        <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="Ranges from ₹20-50 (Solid fertilizers) or ₹80-150(liquid fertilizers) based on Quality/Type.<br><hr>Test your soil nutrition levels befor purchasing."></i>
						        </label>
						        <div class="input-group rupeewrapper">
								  	<span class="input-group-text rupee">₹</span>
								    <input type="number" min="0" class="form-control form-control-sm" name="fertilizer_per_kg" access="false" value="80" id="fertilizer_per_kg">
								    <span class="input-group-text">per kg</span>
						    	</div>
						    </div>
						    
						    <div class="formbuilder-number form-group field-yearly_manure_required">
						        <label for="yearly_manure_required" class="formbuilder-number-label">Manure applied</label>
						        <div class="input-group">
								    <input type="number" min="0" class="form-control form-control-sm" name="yearly_manure_required" access="false" value="20" id="yearly_manure_required">
								    <span class="input-group-text">kg per plant</span>
						    	</div>
						    </div>
						    <div class="formbuilder-number form-group field-manure_per_kg">
						        <label for="manure_per_kg" class="formbuilder-number-label">Manure cost
						        <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="Ranges from ₹2-5. <br><hr>Bamboo leaves can be decomposted using earthworms to create manure for free."></i>
						        </label>
						        <div class="input-group rupeewrapper">
								  	<span class="input-group-text rupee">₹</span>
								    <input type="number" min="0" class="form-control form-control-sm" name="manure_per_kg" access="false" value="2" id="manure_per_kg">
								    <span class="input-group-text">per kg</span>
						    	</div>
						    </div>
						    <p class="text-end">
						        <small>Total Fertilizer Cost per plant: <b>₹<span class="fertcost"></span></b> </small><br>
						        <small>Total Manure Cost per plant: <b>₹<span class="mancost"></span></b></small> 
						    </p>
			    		</div>
			    		<div class="col-lg-12">
			    			<div class="formbuilder-number form-group field-yearly_labor">
						        <label for="yearly_labor" class="formbuilder-number-label">Labour 
						        	<i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="top" title="Removing weeds, Harvesting, pruning, caretaking, etc. <br> Assuming: 3days per year x 2people x ₹300 per day = ₹1800"></i>
						        </label>
						        <div class="input-group rupeewrapper">
									<span class="input-group-text rupee">₹</span>
								    <input type="number" min="0" class="form-control form-control-sm" name="yearly_labor" access="false" value="1800" id="yearly_labor" step="100">
								    <span class="input-group-text">per acre</span>
						    	</div>
						    </div>
						    <div class="formbuilder-number form-group field-yearly_electricity">
						        <label for="yearly_electricity" class="formbuilder-number-label">Electricity / Irrigation</label>
						        <div class="input-group rupeewrapper">
									<span class="input-group-text rupee">₹</span>
								    <input type="number" min="0" class="form-control form-control-sm" name="yearly_electricity" access="false" value="1500" id="yearly_electricity" step="100">
								    <span class="input-group-text">per acre</span>
						    	</div>
						    </div>
					      	<div class="formbuilder-number form-group field-yealy_land_cost">
						        <label for="yealy_land_cost" class="formbuilder-number-label">Land Rent/Lease/EMI</label>
						        <div class="input-group rupeewrapper">
									<span class="input-group-text rupee">₹</span>
								    <input type="number" min="0" placeholder="Rent(if on lease).. else leave empty" class="form-control form-control-sm" name="yealy_land_cost" access="false" value="0" id="yealy_land_cost" step="1000">
								    <span class="input-group-text">per acre</span>
						    	</div>
						    </div>
						    <div class="formbuilder-number form-group field-yearly_overhead">
						        <label for="yearly_overhead" class="formbuilder-number-label">Additional Overhead Expenses
				        		<i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="May include pest control costs, harveting or transport to market, 3rd party services, etc"></i>
				        		</label>
						        <div class="input-group rupeewrapper">
									<span class="input-group-text rupee">₹</span>
								    <input type="number" min="0" class="form-control form-control-sm" name="yearly_overhead" access="false" value="0" id="yearly_overhead" step="100">
								    <span class="input-group-text">per acre</span>
						    	</div>
						    </div>
			    		</div>
			    	</div>
				    
				</div>
			</div>
			<div class="col-lg-6">
			      <div class="row">
        
            		    <div class="col-lg-12 mb-3">
            		        <div class="costing-columns mb-3"  style="background:#000;color:white;">
                    				    <h2>Investment <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="keeps decreasing after first few years"></i>
                    				    </h2>
                    				    
                    				   	<p> 1<sup>st</sup> Year : ₹<span id="totalinvestment" class="mediumnumber"></span> once </p><hr>
                    				   	<p> 2<sup>nd</sup> Year Onwards: ₹<span id="yearlyinvestment" class="mediumnumber"></span> per year </p>
                    				   	<!-- <button class="setalltozero">Set to Zero</button> -->
                    	            <br>
                    	            
                					<div class="row">
                						<div class="col-lg-12">
                						<h2>Revenue (4<sup>th</sup> year onwards)
                							<i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="Can be sold to fruit growers, building contractors, incense stick / Agarbatti makers , charcoal making, furniture manufacturers, Paper mills, biomass plants for ethanol, bakkal(roofing) in Pan cultivation, cane product makers, local traders/wholesalers and others"></i>
                						</h2>
                
                						</div>
                					</div>
                					<ul class="nav nav-tabs" id="myTab" role="tablist">
                					  <li class="nav-item" role="presentation">
                					    <button class="nav-link active" id="sellbyquantity-tab" data-bs-toggle="tab" data-bs-target=".sellbyquantity" type="button" role="tab" aria-controls="sellbyquantity" aria-selected="true">Sell by Quantity</button>
                					  </li>
                					  <li class="nav-item" role="presentation">
                					    <button class="nav-link" id="sellbyweight-tab" data-bs-toggle="tab" data-bs-target=".sellbyweight" type="button" role="tab" aria-controls="sellbyweight" aria-selected="false">Sell by Weight</button>
                					  </li>
                					</ul>
                					<div class="tab-content baminputctrl">
                						<div class="tab-pane active sellbyquantity " id="sellbyquantity" role="tabpanel" aria-labelledby="sellbyquantity-tab">
                							<div class="row">
                								<div class=col-lg-12>
                									<div class="formbuilder-number form-group field-revenue_number_of_poles_per_plant mt-3">
                								        <label for="revenue_number_of_poles_per_plant" class="formbuilder-number-label">Poles per plant per year
                								         <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="Approximately 6-7 poles in 4th year, <br>7-10 poles in 5th year, <br>10-15 poles from 6th year onwards"></i>  	    	
                								         </label>	
                										<div class="input-group">
                											<input type="number" min="0" class="form-control form-control-sm" name="revenue_number_of_poles_per_plant" access="false" value="8" id="revenue_number_of_poles_per_plant" step="1">
                											<span class="input-group-text">culms</span>
                										</div>
                								    </div>
                								</div>
                								<div class=col-lg-12>
                									<div class="formbuilder-number form-group field-revenue_per_culm ">
                								        <label for="revenue_per_culm" class="formbuilder-number-label">Market price per Pole
                								        <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="12-15ft Poles can be sold ranging ₹30-150 depending on the quality, treatment done and market requirements."></i>  	
                										</label> 
                										<div class="input-group rupeewrapper">
                										  	<span class="input-group-text rupee">₹</span>
                											<input type="number" min="0" class="form-control form-control-sm" name="revenue_per_culm" access="false" value="50" id="revenue_per_culm" step="1">
                										</div>
                								    </div>
                								</div>
                							</div><hr>
                						    <p>Revenue per year, if you sell by quantity: <br>₹<span class="revenue_year_4_sell_by_qty mediumnumber"></span></p>
                					 	</div>
                						<div class="tab-pane sellbyweight"  id="sellbyweight" role="tabpanel" aria-labelledby="sellbyweight-tab">
                							<div class="row">
                								<div class=col-lg-12>
                									<div class="formbuilder-number form-group field-revenue_weight_per_pole mt-3">
                									        <label for="revenue_weight_per_pole" class="formbuilder-number-label">Avg. Weight per plant (6-8poles | 25-30kg each)</label>		    	
                										<div class="input-group">
                											<input type="number" min="0" class="form-control form-control-sm" name="revenue_weight_per_pole" access="false" value="200" id="revenue_weight_per_pole" step="10">
                											<span class="input-group-text">kg</span>
                										</div>
                								    </div>
                								</div>
                								<div class=col-lg-12>
                									<div class="formbuilder-number form-group field-revenue_per_ton ">
                								        <label for="revenue_per_ton" class="formbuilder-number-label">Market price per Ton (1000kg)</label>		    	
                										<div class="input-group rupeewrapper">
                										  	<span class="input-group-text rupee">₹</span>
                											<input type="number" min="0" class="form-control form-control-sm" name="revenue_per_ton" access="false" value="2500" id="revenue_per_ton" step="100">
                										</div>
                								    </div>
                								</div>
                							</div>
                							<hr>
                						    <p>Revenue per year, if you sell by Weight: <br>₹<span class="revenue_year_4_sell_by_weight mediumnumber"></span></p>
                						</div>
                					</div>
                					
                					<br>
                					  <p>Setting up primary processing center (Bamboo pole treatment plant, Bamboo Charcoal/activated carbon unit, Graded/Treated Bamboo storage facilities, etc) along with your commercial plantation will fetch 2-4x revenue. Research the market online/offline to get the current market rates.</p>
                                    <br><br>
                					
                					<h2>Bamboo Farming Profit <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="These calculations are linear. Profit increases exponentialy with time with decreasing Investment/maintenance and increased revenue each year due to more poles produced each year. Value addition to bamboo can create 3x-10x more income."></i>  
                					</h2>
                    			    	<div class="formbuilder-number form-group field-years-net-profit mt-2">
                    						<div class="input-group">
                    							<span class="input-group-text">upto</span>
                    							<input type="number" min="1" class="form-control form-control-sm" name="years-net-profit" access="false" value="40" id="years-net-profit" step="1">
                    							<span class="input-group-text">years</span>
                    						</div>
                    				    </div>
                    				
                    				<div class="row">
                    			    	<div class="col-12 bqtab" style="">
                    			    		<b>Based on Quantity</b><hr>
                    			    		<p>Lifetime Revenue <br><span class="mediumnumber">+ </span> ₹<span class="profit_revenue_qty mediumnumber"></span></p>
                    			    		<p>Lifetime Investment <br><span class="mediumnumber">&ndash; </span> ₹<span class="profit_investment mediumnumber"></span></p><hr>
                    			    		<p>Total Profit/Loss <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title=" = (Revenue - Investments)"></i><br>₹<span class="profit_by_qty bignumber"></span></p><hr>
                    			    		<div class="row">
                    					    	<div class="col-lg-4">
                    					    		<p>Profit per year <br>₹<span class="unitcalc_profit_per_year mediumnumber"></span></p>
                    					    	</div>
                    					    	<div class="col-lg-4">
                    					    		<p>Profit per Month <br>₹<span class="unitcalc_profit_per_month mediumnumber"></span></p>
                    					    	</div>
                    					    	<div class="col-lg-4">
                    					    	</div>
                    					    </div>
                    					    <hr>
                    					    <div class="row">
                    					    	<div class="col-lg-4">
                    					    		<p>Investment per Plant <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title=" = (Total Investment/ Total Plants)"></i>  <br>₹<span class="unitcalc_investment_per_plant mediumnumber"></span></p>
                    					    	</div>
                    					    	<div class="col-lg-4">
                    					    		<p>Revenue per Plant <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title=" = (Total Revenue/ Total Plants)"></i>  <br>₹<span class="unitcalc_revenue_per_plant mediumnumber"></span></p>
                    					    	</div>
                    					    	<div class="col-lg-4">
                    					    		<p>Profit per Plant <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title=" = (Total Profit/Total Plants)"></i>  <br>₹<span class="unitcalc_profit_per_plant mediumnumber"></span></p>
                    					    	</div>
                    					    </div>
                    			    	</div>
                    			   
                    			    
                    			    	<div class="col-12 bwtab" style="display:none;">
                    			    		<b>Based on Weight</b><hr> 
                    			    		<p>Lifetime Revenue <br><span class="mediumnumber">+ </span> ₹<span class="profit_revenue_weight mediumnumber"></span></p>
                    			    		<p>Lifetime Investment <br><span class="mediumnumber">&ndash; </span> ₹<span class="profit_investment mediumnumber"></span></p><hr>
                    			    		<p>Total Profit/Loss <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title=" = (Revenue - Investments)"></i> <br>₹<span class="profit_by_weight bignumber"></span></p><hr>
                    			    		<div class="row">
                    					    	<div class="col-lg-4">
                    					    		<p>Profit per year <br>₹<span class="unitcalc_profit_per_year_weight mediumnumber"></span></p>
                    					    	</div>
                    					    	<div class="col-lg-4">
                    					    		<p>Profit per Month <br>₹<span class="unitcalc_profit_per_month_weight mediumnumber"></span></p>
                    					    	</div>
                    					    	<div class="col-lg-4">
                    					    	</div>
                    					    </div>	
                    					    <div class="row">
                    					    	<div class="col-lg-4">
                    					    		<p>Investment per Plant <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title=" = (Total Investment/ Total Plants)"></i>  <br>₹<span class="unitcalc_investment_per_plant_weight mediumnumber"></span></p>
                    					    	</div>
                    					    	<div class="col-lg-4">
                    					    		<p>Revenue per Plant <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title=" = (Total Revenue/ Total Plants)"></i>  <br>₹<span class="unitcalc_revenue_per_plant_weight mediumnumber"></span></p>
                    					    	</div>
                    					    	<div class="col-lg-4">
                    					    		<p>Profit per Plant <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title=" = (Total Profit/Total Plants)"></i>  <br>₹<span class="unitcalc_profit_per_plant_weight mediumnumber"></span></p>
                    					    	</div>
                    					    </div>
                    			    	</div>
                    
                    			    </div>
            			    
                				</div> 		
                    	      		
            			
            			</div>
        		  </div>
		    </div>
		
	        
		</div>

		<div class="row">
			<div class="col-lg-12">
				<p class="text-center">developed by <a href="https://pratiksethia.com" target="_blank">pratiksethia.com</a>
				</p>
				<p class="text-center">for all the farmers and bamboo lovers!</p>
				<p class="text-center"><a href="https://wa.me/919904001599" target="_blank">whatsapp your suggestions or connect to collaborate</a></p>
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
	
	
	$('#sellbyquantity-tab').click(function(){
		$('.bqtab').show();
		$('.bwtab').hide();
	});
	
	$('#sellbyweight-tab').click(function(){
		$('.bqtab').hide();
		$('.bwtab').show();
	});



function calculatebamboo() {
		// calculate total plants per acre
	var plantsperacre = Math.floor(43560/ ( parseInt($('#plants_per_column').val()) * 
												 parseInt($('#plants_per_row').val())      ));
	var totallandarea = parseFloat($('#land_size').val());

	var totalplants = Math.floor(plantsperacre*totallandarea);
   	$('#totalplants').html(totalplants);

   	// calculate yearly Investment
   	var fertcost = parseFloat($('#yearly_fertilizer_required').val()) * parseInt($('#fertilizer_per_kg').val());
   	fertcost = fertcost ? fertcost: 0;
   	$('.fertcost').html(fertcost);
   	var mancost = parseFloat($('#yearly_manure_required').val()) * parseInt($('#manure_per_kg').val());
   	mancost = mancost ? mancost: 0;
   	$('.mancost').html(mancost);
   	var ylaborcost = parseInt($('#yearly_labor').val()) ? parseInt($('#yearly_labor').val()) : 0;
   	var yeleccost = parseInt($('#yearly_electricity').val()) ? parseInt($('#yearly_electricity').val()) : 0;
   	var ylandcost = parseInt($('#yealy_land_cost').val()) ? parseInt($('#yealy_land_cost').val()) : 0;
   	var yoverheadcost = parseInt($('#yearly_overhead').val()) ? parseInt($('#yearly_overhead').val()) : 0;
   	var yearlyinvestment   = 	(totalplants * (fertcost + mancost)) + 
   							(totallandarea * (ylaborcost + yeleccost + ylandcost + yoverheadcost ));
	$('#yearlyinvestment').html(yearlyinvestment.toLocaleString('en-IN'));


	// calculate one time Investment
	var osaplingcost = parseInt($('#onetime_sapling').val()) ? parseInt($('#onetime_sapling').val()) : 0;
	var odripcost = parseInt($('#onetime_drip').val()) ? parseInt($('#onetime_drip').val()) : 0;
	var ofencingcost = parseInt($('#onetime_fencing').val()) ? parseInt($('#onetime_fencing').val()) : 0;
	var olabourcost = parseInt($('#onetime_labour').val()) ? parseInt($('#onetime_labour').val()) : 0;
	var ooverheadcost = parseInt($('#onetime_overhead').val()) ? parseInt($('#onetime_overhead').val()) : 0;
	var xyearofinvestment = parseInt($('#years-net-profit').val()) ? parseInt($('#years-net-profit').val()) : 0;

   	var onetimeinvestment  = 	(totalplants*osaplingcost) + (totallandarea * (odripcost + ofencingcost + olabourcost + ooverheadcost));
   	var xyearofinvestment_1 = (yearlyinvestment*xyearofinvestment)+onetimeinvestment;

   	$('#onetimeinvestment').html(onetimeinvestment.toLocaleString('en-IN'));
   	$('#totalinvestment').html((yearlyinvestment+onetimeinvestment).toLocaleString('en-IN'));
   	$('.profit_investment').html(xyearofinvestment_1.toLocaleString('en-IN'));

	//revenue
	var rrevenue_per_culm = parseInt($('#revenue_per_culm').val()) ? parseInt($('#revenue_per_culm').val()) : 0; //50rs
	var rrevenue_number_of_poles_per_plant = parseInt($('#revenue_number_of_poles_per_plant').val()) ? parseInt($('#revenue_number_of_poles_per_plant').val()) : 0; //7
   	var revenue_year_4_sell_by_qty = totalplants * rrevenue_number_of_poles_per_plant * rrevenue_per_culm;
   	$('.revenue_year_4_sell_by_qty').html(revenue_year_4_sell_by_qty.toLocaleString('en-IN'));
   	var revenue_year_4_to_10 = revenue_year_4_sell_by_qty*(xyearofinvestment-3);
   	if(revenue_year_4_to_10 < 1 ) {
   	    revenue_year_4_to_10 = 0;
   	}
   	$('.profit_revenue_qty').html(revenue_year_4_to_10.toLocaleString('en-IN'));

	var rrevenue_weight_per_pole = parseInt($('#revenue_weight_per_pole').val()) ? parseInt($('#revenue_weight_per_pole').val()) : 0; //15kg
	var rrevenue_per_ton = parseFloat($('#revenue_per_ton').val()) ? parseFloat($('#revenue_per_ton').val()) : 0; //2500
   	var revenue_year_4_sell_by_weight = totalplants * rrevenue_weight_per_pole * rrevenue_per_ton * 0.001;
   	$('.revenue_year_4_sell_by_weight').html(revenue_year_4_sell_by_weight.toLocaleString('en-IN'));
   	var revenue_year_4_to_10_weight = revenue_year_4_sell_by_weight*(xyearofinvestment-3);
   	if(revenue_year_4_to_10_weight < 1 ) {
   	    revenue_year_4_to_10_weight = 0;
   	}
   	$('.profit_revenue_weight').html(revenue_year_4_to_10_weight.toLocaleString('en-IN'));
   	
   	// profits
	var profit_by_qty = revenue_year_4_to_10 - xyearofinvestment_1;
   	$('.profit_by_qty').html(profit_by_qty.toLocaleString('en-IN'));
   	var profit_by_weight = revenue_year_4_to_10_weight - xyearofinvestment_1;
   	$('.profit_by_weight').html(profit_by_weight.toLocaleString('en-IN'));


   	// profits per year
   	var unitcalc_profit_per_year = Math.round(profit_by_qty/xyearofinvestment);
   	$('.unitcalc_profit_per_year').html(unitcalc_profit_per_year.toLocaleString('en-IN'));
   	var unitcalc_profit_per_year_weight = Math.round(profit_by_weight/xyearofinvestment);
   	$('.unitcalc_profit_per_year_weight').html(unitcalc_profit_per_year_weight.toLocaleString('en-IN'));

   	// profits per month
   	var unitcalc_profit_per_month = Math.round(unitcalc_profit_per_year/12);
   	$('.unitcalc_profit_per_month').html(unitcalc_profit_per_month.toLocaleString('en-IN'));
   	var unitcalc_profit_per_month_weight = Math.round(unitcalc_profit_per_year_weight/12);
   	$('.unitcalc_profit_per_month_weight').html(unitcalc_profit_per_month_weight.toLocaleString('en-IN'));

   	// profits per plant
   	var unitcalc_profit_per_plant = Math.round(profit_by_qty/totalplants);
   	$('.unitcalc_profit_per_plant').html(unitcalc_profit_per_plant.toLocaleString('en-IN'));
   	var unitcalc_profit_per_plant_weight = Math.round(profit_by_weight/totalplants);
   	$('.unitcalc_profit_per_plant_weight').html(unitcalc_profit_per_plant_weight.toLocaleString('en-IN'));
   	
   	//Investment per plant
   	var unitcalc_investment_per_plant = Math.round(xyearofinvestment_1/totalplants);
   	$('.unitcalc_investment_per_plant').html(unitcalc_investment_per_plant.toLocaleString('en-IN'));
   	$('.unitcalc_investment_per_plant_weight').html(unitcalc_investment_per_plant.toLocaleString('en-IN'));
   	
   	// Revenue per plant
   	var unitcalc_revenue_per_plant = Math.round(revenue_year_4_to_10/totalplants);
   	$('.unitcalc_revenue_per_plant').html(unitcalc_revenue_per_plant.toLocaleString('en-IN'));
   	var unitcalc_revenue_per_plant_weight = Math.round(revenue_year_4_to_10_weight/totalplants);
   	$('.unitcalc_revenue_per_plant_weight').html(unitcalc_revenue_per_plant_weight.toLocaleString('en-IN'));

}

</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9QQ2635NX8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-9QQ2635NX8');
</script>
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2766870,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
</body>
</html>