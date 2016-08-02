<?php foreach($employee_info as $row):?>

<?php include 'cs_top_employee_navigation.php';?>


  
     <div class="col-sm-12">
       <div class="row">
      <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/cs_modal_edit_employee_job_admin/<?php echo $row['employee_id'];?>');" class="btn btn-primary pull-right"><i class="entypo-pencil"></i><?php echo get_phrase('edit');?></a>
      
      
      <?php $check_termination = count($this->db->get_where('cs_termination' , array('employee_id' => $row['employee_id']) )->result_array()); 
	  
	  if ($check_termination >= 1) { ?>
      
      
      <a style="display:none;" class="btn btn-primary pull-right" href="<?php echo base_url();?>index.php?cs_user_admin/cs_employee_termination_admin/activate/<?php echo $row['employee_id'];?>"><i class="entypo-trash"></i><?php echo get_phrase('activate_employee');?></a>
     
      
   
      <a style="display:none;" href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/cs_modal_edit_termination_admin/<?php echo $row['employee_id'];?>');" class="btn btn-primary pull-right"><i class="entypo-pencil"></i><?php echo get_phrase('terminated_on : ').  $this->cs_model->get_termination_date ('cs_termination', $row['employee_id']);?></a>
     
		  <?php } else { ?>
          
			   <a  style="display:none;" href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/cs_modal_add_termination_admin/<?php echo $row['employee_id'];?>');" class="btn btn-primary pull-left"><i class="entypo-pencil"></i><?php echo get_phrase('terminate_employment');?></a>
      
			 <?php }; ?>
	  
     </div> </div>
     
      
      <div class="row">
      <div class="col-sm-6">
      <table class="table table-condensed table-bordered table-hover table-striped">
          <tbody>
            <tr>
              <td><?php echo get_phrase('job_title');?></td>
              <td><strong><?php echo $this->cs_model->get_type_name_by_id('cs_job_title',$row['cs_job_title_id']);?></strong></td>
            </tr>
            <tr>
              <td><?php echo get_phrase('employment_status');?></td>
              <td><strong><?php echo $this->cs_model->get_type_name_by_id('cs_employement_status',$row['cs_employement_status_id']);?></strong></td>
            </tr>
            <tr>
              <td><?php echo get_phrase('job_category');?></td>
              <td><strong><?php echo $this->cs_model->get_type_name_by_id('cs_job_categories',$row['cs_job_categories_id']);?></strong></td>
            </tr>
               <tr>
              <td><?php echo get_phrase('sub_unit');?></td>
              <td><strong><?php echo $this->cs_model->get_type_name_by_id('cs_job_sub_unit',$row['cs_job_sub_unit_id']);?></strong></td>
            </tr>
               <tr>
              <td><?php echo get_phrase('work_shift');?></td>
              <td><strong><?php echo $this->cs_model->get_type_name_by_id('cs_work_shift_management',$row['cs_work_shift_management_id']);?></strong></td>
            </tr>
            <tr>
              <td><?php echo get_phrase('joined_date');?></td>
              <td><strong><?php echo $row['joined_date'];?></strong></td>
            </tr>
            <tr>
              <td><?php echo get_phrase('class_grade');?></td>
              <td><strong><?php echo $this->cs_model->get_type_name_by_id('cs_class_grade',$row['cs_class_grade_id']);?></strong></td>
            </tr>
            
          
            <tr>
              <td><?php echo get_phrase('location');?></td>
              <td><strong><?php echo $this->cs_model->get_type_name_by_id('cs_location',$row['cs_location_id']);?></strong></td>
            </tr>
            
               <tr>
              <td><?php echo get_phrase('start_date');?></td>
              <td><strong><?php echo $this->cs_model->get_type_start_date_by_empid('cs_contract',$row['employee_id']);?></strong></td>
            </tr>
            <tr>
              <td><?php echo get_phrase('end_date');?></td>
              <td><strong><?php echo $this->cs_model->get_type_end_date_by_empid('cs_contract',$row['employee_id']);?></strong></td>
            </tr>
         
           
           
        </tbody>
        </table>
      </div>
      
      </div>
      
    
  
 



<?php endforeach;?>
