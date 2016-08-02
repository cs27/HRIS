<?php foreach($employee_info as $row):?>

<?php include 'cs_top_employee_navigation.php';?>


  
     <div class="col-sm-12">
       <div class="row">
      <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/cs_modal_edit_employee_profile_admin/<?php echo $row['employee_id'];?>');" class="btn btn-primary pull-right"><i class="entypo-pencil"></i><?php echo get_phrase('edit');?></a>
     </div> </div>
     
      
      <div class="row">
      <div class="col-sm-6">
      <table class="table table-condensed table-bordered table-hover table-striped">
          <tbody>
            <tr>
              <td><?php echo get_phrase('employee_id');?></td>
              <td><strong><?php echo $row['employee_id'];?></strong></td>
            </tr>
            <tr>
              <td><?php echo get_phrase('full_name');?></td>
              <td><strong><?php echo $row['name'];?></strong></td>
            </tr>
            <tr>
              <td><?php echo get_phrase('date_of_birth');?></td>
              <td><strong><?php echo $row['birth_place'].', '. $row['birth_date'];?></strong></td>
            </tr>
            <tr>
              <td><?php echo get_phrase('religion');?></td>
              <td><strong><?php if($row['religion'] == '1'){echo get_phrase('budha');} else if ($row['religion'] == '2') {echo get_phrase('hindu');}else if ($row['religion'] == '3') {echo get_phrase('islam');}else if ($row['religion'] == '4') {echo get_phrase('katolik');}else if ($row['religion'] == '5') {echo get_phrase('kristen');};?></strong></td>
            </tr>
            <tr>
              <td><?php echo get_phrase('gender');?></td>
              <td><strong><?php if($row['gender'] == '1'){echo get_phrase('male');} else if ($row['gender'] == '2') {echo get_phrase('female');};?></strong></td>
            </tr>
              <tr>
              <td><?php echo get_phrase('marital_status');?></td>
              <td><strong><?php echo  $this->cs_model->get_type_name_by_id('cs_employee_ptkp', $row['marital_status']);?></strong></td>
            </tr>
           
           
          </tbody>
        </table>
      </div>
      <div class="col-sm-6">
      <table class="table table-condensed table-bordered table-hover table-striped">
          <tbody>
            <tr>
              <td><?php echo get_phrase('NIDN');?></td>
              <td><strong><?php echo $row['nidn'];?></strong></td>
            </tr>
             <tr>
              <td><?php echo get_phrase('license_number');?></td>
              <td><strong><?php echo $row['ktp_number'];?></strong></td>
            </tr>
            <tr>
              <td><?php echo get_phrase('license_expired_date');?></td>
              <td><strong><?php echo $row['ktp_expired_date'];?></strong></td>
            </tr>
            <tr>
              <td><?php echo get_phrase('nationality');?></td>
              <td><strong><?php echo $this->cs_model->get_type_name_country('cs_country',$row['nationality']);?></strong></td>
            </tr>
            <tr>
              <td><?php echo get_phrase('blood_type');?></td>
              <td><strong><?php echo $row['blood_type'];?></strong></td>
            </tr>
         
            <tr>
              <td><?php echo get_phrase('email');?></td>
              <td><strong><?php echo $row['email'];?></strong></td>
            </tr>
           
         
           
          </tbody>
        </table>
      </div>
      </div>
      
    
  
 



<?php endforeach;?>
