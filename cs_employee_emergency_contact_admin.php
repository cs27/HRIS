<?php foreach($employee_info as $row):?>

<?php include 'cs_top_employee_navigation.php';?>

            <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/cs_modal_add_employee_emergency_contact_admin/<?php echo $row['employee_id'];?>');" 
            	class="btn btn-primary pull-right">
                <i class="entypo-plus-circled"></i>
            	<?php echo get_phrase('add_new_emergency_contact');?>
                </a> 
                <br><br>
               <table class="table table-bordered datatable" id="table_export">
                    <thead>
                        <tr>
                           
                            <th><div><?php echo get_phrase('name');?></div></th>
                            <th><div><?php echo get_phrase('relationship');?></div></th>
                            <th><div><?php echo get_phrase('home_phone');?></div></th>
                            <th><div><?php echo get_phrase('work_phone');?></div></th>
                            <th><div><?php echo get_phrase('mobile_phone');?></div></th>
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($employee_ec as $row2):?>
                        <tr>
                            <td><?php echo $row2['name'];?></td>
                            <td><?php echo $this->cs_model->get_type_name_by_id('cs_family_status',$row2['relation']);?></td>
                            <td><?php echo $row2['home_phone'];?></td>
                            <td><?php echo $row2['work_phone'];?></td>
                            <td><?php echo $row2['mobile'];?></td>
                            <td>
                                
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Action <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                  
                                    
                                     
                                         
                        
                                        
                                        <!-- EMPLOYEE EDITING LINK -->
                                        <li>
                                        	<a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/cs_modal_edit_employee_emergency_contact_admin/<?php echo $row2['cs_emergency_contact_id'];?>');">
                                            	<i class="entypo-pencil"></i>
													<?php echo get_phrase('edit');?>
                                               	</a>
                                        				</li>
                                        <li class="divider"></li>
                                        
                                        <!-- EMPLOYEE DELETION LINK -->
                                        <li>
                                        	<a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?cs_user_admin/cs_employee_emergency_contact_admin/delete/<?php echo $row2['cs_emergency_contact_id'];?>/<?php echo $row['employee_id'];?>');">
                                            	<i class="entypo-trash"></i>
													<?php echo get_phrase('delete');?>
                                               	</a>
                                        				</li>
                                    </ul>
                                </div>
                                
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>


<?php endforeach;?>
<!-----  DATA TABLE EXPORT CONFIGURATIONS ----->                      
<script type="text/javascript">

	jQuery(document).ready(function($)
	{
		

		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
			"oTableTools": {
				"aButtons": [
					
					{
						"sExtends": "xls",
						"mColumns": [1,2]
					},
					{
						"sExtends": "pdf",
						"mColumns": [1,2]
					},
					{
						"sExtends": "print",
						"fnSetText"	   : "Press 'esc' to return",
						"fnClick": function (nButton, oConfig) {
							datatable.fnSetColumnVis(0, false);
							datatable.fnSetColumnVis(3, false);
							
							this.fnPrint( true, oConfig );
							
							window.print();
							
							$(window).keyup(function(e) {
								  if (e.which == 27) {
									  datatable.fnSetColumnVis(0, true);
									  datatable.fnSetColumnVis(3, true);
								  }
							});
						},
						
					},
				]
			},
			
		});
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
		
</script>

  
