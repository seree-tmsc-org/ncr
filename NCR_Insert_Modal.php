<div class="modal fade" id="insert_modal" tabindex="-1" role="dialog">
	<!--<div class="modal-dialog modal-lg" role="document">-->
		<div class="modal-content">		
			<div class="modal-header" style='background-color:hsl(275,100%,40%);'>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" style='color:white;'>Insert Mode: [Insert by <?php echo $user_emp_code; ?>]</h4>
			</div>

			<div class="modal-body" style='background-color:white; '>
				<form class="form-horizontal">
					<fieldset>

						<!-- Form Name -->
						<legend>NCR Request</legend>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="textinput">NCR No</label>
							<div class="col-md-1">
								<input id="textinput" name="textinput" type="text" class="form-control input-md">
								<span class="help-block">หมายเลข NCR</span>
							</div>
						</div>

						<!-- date picker-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="textinput">วันที่เปิด NC</label>
							<div class="col-md-1">

								<input id="datepicker" width="150" />
							</div>
						</div>

						<!-- Select Basic -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="selectbasic">สถานที่พบ NC</label>
							<div class="col-md-4">
								<select id="selectbasic" name="selectbasic" class="form-control">
									<option value="1">WH-UU</option>
									<option value="2">WH-IR</option>
									<option value="3">QC-IRW</option>
									<option value="4">QC-IRS</option>
									<option value="5">QC-UU</option>
									<option value="6">QC-RM</option>
									<option value="7">PD-IRW</option>
									<option value="8">PD-IRS</option>
									<option value="9">PD-UU</option>
									<option value="10">QA</option>
									<option value="10">QA&QC</option>
									<option value="10">RD-IRW</option>
									<option value="10">RD-IRS</option>
									<option value="10">RD-UU</option>
									<option value="10">PLANNER</option>
									<option value="10">SALE-IRW</option>
									<option value="10">SALE-IRS</option>
									<option value="10">SALE-UU</option>
									<option value="10">PURCHASE</option>
									<option value="10">RD&PLANNER</option>

								</select>
								<span class="help-block">เลือกหน่วยงานที่เปิด NC</span>
							</div>
						</div>


						<!-- Select Basic -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="selectbasic">ประเภทที่พบ NC</label>
							<div class="col-md-4">
								<select id="type_nc" name="selectbasic" class="form-control" onchange="sSelect()">
									<option value="1">Raw Material</option>
									<option value="2">Packaging</option>
									<option value="3">In process</option>
									<option value="4">Product</option>
									<option value="5">Other</option>

								</select>
								<span class="help-block">เลือกประเภทของ NC หากเลือก Other ให้ระบุช่องด่านล่าง</span>
							</div>
						</div>


						<!-- File Button 
						<div class="form-group">
						<label class="col-md-4 control-label" for="filebutton">File Button</label>
						<div class="col-md-4">
							<input id="filebutton" name="filebutton" class="input-file" type="file">
						</div>
						</div>-->

						<!-- Text input-->
						<div class="form-group">
							<label id="label_text" class="col-md-4 control-label" for="textinput" style="display:none">"Other" Please specify</label>
							<div class="col-md-4">

								<input id="input_text" name="textinput" type="text" placeholder="Other" class="form-control input-md" style="display:none">

							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="textinput">Material NC Name</label>
							<div class="col-md-4">
								<input name="textinput" type="text" placeholder="ตัวอย่างเช่น Y-7300" class="form-control input-md">
								<span class="help-block">ใส่ชื่อของ NC ที่พบ </span>
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="textinput">Lot/Batch No.</label>
							<div class="col-md-4">
								<input name="textinput" type="text" placeholder="ตัวอย่างเช่น B01883Y" class="form-control input-md">
								<span class="help-block">ใส่ Lot No. ที่พบ</span>
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="textinput">Q'ty(kg.)</label>
							<div class="col-md-4">
								<input name="textinput" type="text" placeholder="ตัวอย่างเช่น 4200" class="form-control input-md">
								<span class="help-block">ใส่น้ำหนักของ NC ที่พบ</span>
							</div>
						</div>

						<!-- Textarea -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="textarea">ปัญหาที่พบ</label>
							<div class="col-md-4">
								<textarea class="form-control" id="textarea" name="textarea" placeholder="Problem"></textarea>
								<span class="help-block">ใส่ปัญหาที่พบ</span>
							</div>
						</div>

						<!-- Text input
						<div class="form-group">
						<label class="col-md-4 control-label" for="textinput">Text Input</label>  
						<div class="col-md-4">
						<input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
						<span class="help-block">help</span>  
						</div>
						</div>-->

						<!-- Text input
						<div class="form-group">
						<label class="col-md-4 control-label" for="textinput">Text Input</label>  
						<div class="col-md-4">
						<input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
						<span class="help-block">help</span>  
						</div>
						</div>-->



						<!-- Select Basic -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="selectbasic">การจัดการ-หน่วยงาน</label>
							<div class="col-md-4">
								<select id="selectbasic" name="selectbasic" class="form-control">
									<option value="1">WH-UU</option>
									<option value="2">WH-IR</option>
									<option value="3">QC-IRW</option>
									<option value="4">QC-IRS</option>
									<option value="5">QC-UU</option>
									<option value="6">QC-RM</option>
									<option value="7">PD-IRW</option>
									<option value="8">PD-IRS</option>
									<option value="9">PD-UU</option>
									<option value="10">QA</option>
									<option value="10">QA&QC</option>
									<option value="10">RD-IRW</option>
									<option value="10">RD-IRS</option>
									<option value="10">RD-UU</option>
									<option value="10">PLANNER</option>
									<option value="10">SALE-IRW</option>
									<option value="10">SALE-IRS</option>
									<option value="10">SALE-UU</option>
									<option value="10">PURCHASE</option>
									<option value="10">RD&PLANNER</option>

								</select>
								<span class="help-block">หากท่านเป็นผู้หาวิธีจัดการ ให้เลือกหน่วยงานของท่าน หากต้องการร้องขอให้ระบุหน่วยงานนั้นๆ</span>
							</div>
						</div>



						<!-- Select Basic -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="selectbasic">หาสาเหตุ-หน่วยงาน</label>
							<div class="col-md-4">
								<select id="selectbasic" name="selectbasic" class="form-control">
									<option value="1">WH-UU</option>
									<option value="2">WH-IR</option>
									<option value="3">QC-IRW</option>
									<option value="4">QC-IRS</option>
									<option value="5">QC-UU</option>
									<option value="6">QC-RM</option>
									<option value="7">PD-IRW</option>
									<option value="8">PD-IRS</option>
									<option value="9">PD-UU</option>
									<option value="10">QA</option>
									<option value="10">QA&QC</option>
									<option value="10">RD-IRW</option>
									<option value="10">RD-IRS</option>
									<option value="10">RD-UU</option>
									<option value="10">PLANNER</option>
									<option value="10">SALE-IRW</option>
									<option value="10">SALE-IRS</option>
									<option value="10">SALE-UU</option>
									<option value="10">PURCHASE</option>
									<option value="10">RD&PLANNER</option>

								</select>
								<span class="help-block">หากท่านเป็นผู้หาสาเหตุให้เลือกหน่วยงานของท่าน หากต้องการร้องขอให้ระบุหน่วยงานนั้นๆ</span>
							</div>
						</div>


					</fieldset>
				</form>
				<div class="form-group">
					<label class="col-md-4 control-label" for="button1id"></label>
					<div class="col-md-8">
						<button type="submit" id='insert' class="btn btn-success">Insert</button>
						<button id="cancel" name="button2id" class="btn btn-danger" data-dismiss="modal">Cancel</button>
					</div>
				</div>
				<br>
			</div>
		</div>
	<!--</div>-->
</div>	
