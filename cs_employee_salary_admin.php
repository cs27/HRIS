
<?php foreach($employee_salary_data as $row):?>

<?php include 'cs_top_employee_navigation.php';?>
 <?php 
 
 echo form_open('cs_user_admin/cs_employee_salary_admin/create/'.$row['employee_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));
 
 ?>
<div class="row">

<div class="col-md-12">
		
		<div class="panel panel-info" data-collapsed="0">
			
			<!-- panel head -->
			<div class="panel-heading">
				<div class="panel-title"><?php echo get_phrase('salary_payment_details');?></div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<!-- panel body -->
			<div class="panel-body">
       <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('pay_grades');?></label>
                    <div class="col-sm-5">
                        <select id="pg" name="cs_pay_grades_id" class="form-control" style="width:100%;">
                      <option value=""><?php echo get_phrase('select_grade');?></option>
                        <?php 
                            $res1 = $this->db->get('cs_pay_grades')->result_array();
                            foreach($res1 as $row1):
                            ?>
                        <option value="<?php echo $row1['cs_pay_grades_id'];?>"
                                    <?php if($row['cs_pay_grades_id']==$row1['cs_pay_grades_id'])echo 'selected';?>><?php echo $row1['name'];?></option>
                        <?php
                            endforeach;
                            ?>
                      </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('tax_type');?></label>
                    <div class="col-sm-5">
                      <select name="cs_tax_type_id" class="form-control" style="width:100%;">
                      <option value=""><?php echo get_phrase('select_method');?></option>
                        <option value="1" <?php if($row['cs_tax_type_id'] == '1')echo 'selected';?>><?php echo get_phrase('net');?></option>
                        <option value="2" <?php if($row['cs_tax_type_id'] == '2')echo 'selected';?>><?php echo get_phrase('gross');?></option>
                        <option value="3" <?php if($row['cs_tax_type_id'] == '3')echo 'selected';?>><?php echo get_phrase('gross_up');?></option>
                      </select>
                    </div>
                  </div>
			</div>
		</div>
	</div>
</div>








<div class="row">

<div class="col-md-12">
		
		<div class="panel panel-info" data-collapsed="0">
			
			<!-- panel head -->
			<div class="panel-heading">
				<div class="panel-title"><?php echo get_phrase('all_earnings');?></div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<!-- panel body -->
			<div class="panel-body">
         
				
				
 <?php 
                            $salcom = $this->db->get_where('cs_salary_component', array('salary_type'=>1))->result_array();
                            foreach($salcom as $row_salcom):
							$namanya = $this->cs_model->getUrlFriendlyString($row_salcom['name']);
                            ?>
                  <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo $row_salcom['name'];?></label>
                    <div class="col-sm-5">
                      <input type="text" class="all_earning form-control" name="<?php echo $namanya;?>" value="<?php echo $row[$namanya];?>"/>
                    </div>
                  </div>
                  <?php
                            endforeach;
                            ?>

			</div>
			
		</div>
		
	</div>

</div>



<div class="row">

<div class="col-md-12">
		
		<div class="panel panel-info" data-collapsed="0">
			
			<!-- panel head -->
			<div class="panel-heading">
				<div class="panel-title"><?php echo get_phrase('all_deductions');?></div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<!-- panel body -->
			<div class="panel-body">
         
				
				

                
                <?php 
                            $salcom = $this->db->get_where('cs_salary_component', array('salary_type'=>2))->result_array();
                            foreach($salcom as $row_salcom):
							$namanya = $this->cs_model->getUrlFriendlyString($row_salcom['name']);
                            ?>
                  <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo $row_salcom['name'];?></label>
                    <div class="col-sm-5">
                      <input type="text" class="all_earning form-control" name="<?php echo $namanya;?>" value="<?php echo $row[$namanya];?>"/>
                    </div>
                  </div>
                  <?php
                            endforeach;
                            ?>

			</div>
			
		</div>
		
	</div>

</div>


<div class="row">

<div class="col-md-12">
		
		<div class="panel panel-info" data-collapsed="0">
			
			<!-- panel head -->
			<div class="panel-heading">
				<div class="panel-title"><?php echo get_phrase('tax');?></div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<!-- panel body -->
			<div class="panel-body">
         
				
				

                  <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('pph');?></label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" name="final_pph" value="<?php echo $row['pph'];?>" id="final_pph"/>
                      
                    </div>
                </div>
			</div>
			
		</div>
		
	</div>

</div>


 </form>




<?php endforeach;?>
<!-----  DATA TABLE EXPORT CONFIGURATIONS -----> 

