<?php
    include 'db.php';
    if ($_REQUEST['edit_id'] != '') {
    $sel_sql = "SELECT * FROM student_data WHERE id = '$_REQUEST[edit_id]'";
    $run_sqle = mysqli_query($conn,$sel_sql);
    while ($rows = mysqli_fetch_assoc($run_sqle)) { ?>
    
            <div class="form-group">
				<label class="control-label col-md-2 ">Student Name</label>
				<div class="col-md-8">
					<input type="text" value="<?php echo $rows['student_name']?>" id="student_name" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2 ">Student Subject</label>
				<div class="col-md-3">
					<select id="student_subject" class="form-control">
					<?php
                     if ($rows['student_subject'] == 'Computer') {
                     	echo '
                     	
					<option value="Computer" selected>Computer</option>
					<option value="English">English</option>
					<option value="Hindi">Hindi</option>
					<option value="Marathi">Marathi</option>';
                     }elseif ($rows['student_subject'] == 'English') {
                     	echo '
                     	
					<option value="Computer" >Computer</option>
					<option value="English" selected>English</option>
					<option value="Hindi">Hindi</option>
					<option value="Marathi">Marathi</option>';
                     }elseif ($rows['student_subject'] == 'Hindi') {
                     	echo '

					<option value="Computer" >Computer</option>
					<option value="English" selected>English</option>
					<option value="Hindi">Hindi</option>
					<option value="Marathi">Marathi</option>';
                     }elseif ($rows['student_subject'] == 'Marathi') {
                     	echo '
                     	
					<option value="Computer" >Computer</option>
					<option value="English" selected>English</option>
					<option value="Hindi">Hindi</option>
					<option value="Marathi">Marathi</option>';
                     }
					?>
					
					</select>
				</div>
				<label class="control-label col-md-2 ">Student Fee</label>
				<div class="col-md-3">
					<input type="number" value="<?php echo $rows['student_fee']?>" id="student_fee"class="form-control">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-8 col-md-offset-2">
					<button class="btn btn-danger btn-block" onclick="ajax_request('add_new_record');">Edit Record</button>
				</div>

			</div>

  <?php }

    }  
?>           

            