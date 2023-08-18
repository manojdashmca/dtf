<a href="pipe-dashboard" class="btn btn-info btn-sm mb-2">Home</a>
<div class="filter-wrapper-top">
                                    <div class="division-filter">
                                        <h2><span>Division : </span></h2>                                        
										<select name="division" id="divisions">
										<option value="" class="text-danger">Select Division</option>
										<?php for ($x = 0; $x < count($alldivisionname); $x++) { ?>
											<option value='<?= $alldivisionname[$x]->id ?>' <?= ($city == $alldivisionname[$x]->id) ? 'selected="selected"' : '' ?>><?= $alldivisionname[$x]->division_name ?></option>
										<?php } ?>                                
									</select>
                                    </div>
                                    <div class="city-filter">
                                        <h2><span>City :</span></h2>
                                        <select name="city" id="citys">
                                            <option value="">Select City</option>
                                            
                                        </select>
                                    </div>
                                </div> 
