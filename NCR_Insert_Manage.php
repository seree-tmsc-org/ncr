<html lang="en">
   <head>
  <meta charset="utf-8">
  
  <style>
  
  </style>
 
</head>
   <body>
   <!--<div class="modal fade" id="insert_modal" tabindex="-1" role="dialog"> -->
   <!-- <div class="modal-dialog modal-lg" role="document">-->
        <div class="modal fade" id="insert_manage" >
        <div class="modal-body" style='background-color:white; '>
                     <div class="modal-header" style='background-color:hsl(275,100%,40%);' >
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" style='color:white;'>Insert Mode: [Insert by <?php echo $user_emp_code;?>]</h4>
                     </div>
            
                  <form class="form-horizontal" role="form" id='insert-form' method='post'>
                     <div class="modal-body" id="insert_detail">
                           <!--   <div class="form-group">
                              <input type="hidden" value='<?php echo $user_emp_code;?>' name='Enter_By'>
                              <div class="col-lg-9">
                              </div>
                              <div class="col-lg-3">
                                 <label style="display: block; text-align: center;">Enter Date:</label>
                                 <input type="date" class='form-control' value="<?php echo date('Y-m-d'); ?>" disabled>                            
                              </div>  
                             
                            </div>-->
                  </form>
                  <form class="form-horizontal">
                     <fieldset>

                     <!-- Form Name -->
                     <legend>NCR Manage</legend>

                     <!-- Text input-->
                     <div class="form-group">
                     <label class="col-md-4 control-label" for="textinput">NCR No</label>  
                     <div class="col-md-1">
                     <input id="textinput" name="textinput" type="text"  class="form-control input-md" >
                     <span class="help-block">หมายเลข NCR</span>  
                     </div>
                     </div>



                       <!-- Select Basic -->
                       <div class="form-group">
                     <label class="col-md-4 control-label" for="selectbasic">วิธีการจัดการกับ NC</label>
                     <div class="col-md-4">
                        <select id="type_nc" name="selectbasic" class="form-control" onchange="sSelect()">
                           <option value="1">Special accept</option>
                           <option value="2">Re-grade</option>
                           <option value="3">Rework</option>
                           <option value="4">Dispose</option>
                           <option value="5">Other</option>
 
                        </select>
                        <span class="help-block">กรุณาเลือกวิธีการจัดการ(หากต้องการกำจัดหรือผสมข้ามผลิตภัณฑ์จะต้องผ่านการอนุมัติจาก Technical Director) หากเลือกอื่นๆกรุณาระบุช่องถัดไป</span>  
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
                     <div  class="form-group" >
                     <label id="label_text"class="col-md-4 control-label" for="textinput" style="display:none">"Other" Please specify</label>  
                     <div  class="col-md-4" >
                
                     <input id="input_text" name="textinput" type="text" placeholder="Other" class="form-control input-md" style="display:none">
                      
                     </div>
                     </div>
                     
                     <!-- Textarea -->
                     <div class="form-group">
                     <label class="col-md-4 control-label" for="textarea">รายละเอียด</label>
                     <div class="col-md-4">                     
                        <textarea class="form-control" id="textarea" name="textarea" placeholder="Problem"></textarea>
                        <span class="help-block">ระบุรายละเอียดวิธีการจัดการ</span>  
                     </div>
                     </div>

                        <!-- Text input-->
                        <div class="form-group">
                     <label class="col-md-4 control-label" for="textinput">ผู้ปฏิบัติงาน</label>  
                     <div class="col-md-1">
                     <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                     <span class="help-block">ลงชื่อผู้ปฏิบัติงาน </span>  
                     </div>
                     </div>

                    <!-- Text input-->
                    <div class="form-group">
                     <label class="col-md-4 control-label" for="textinput">ผจก./ผจก.อวุโส</label>  
                     <div class="col-md-1">
                     <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                     <span class="help-block">ลงชื่อผู้อนุมัติ</span>  
                     </div>
                     </div>

                      <!-- Text input-->
                      <div class="form-group">
                     <label class="col-md-4 control-label" for="textinput">ผจก.QA/ผอ.เทคนิค(Incase off blending rule request)</label>  
                     <div class="col-md-1">
                     <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                     <span class="help-block">ลงชื่อผู้อนุมัติ</span>  
                     </div>
                     <span class="help-block">ในกรณีที่ ผสม,ผสมข้ามชนิดผลิตภัณฑ์หรือทิ้ง</span>  
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
                    
                        

       

                     </fieldset>
                   </form>
                           <div class="form-group">
                             <label class="col-md-4 control-label" for="button1id"></label>
                              <div class="col-md-8">
                                 <button type="submit" id='insert' class="btn btn-success">Insert</button>
                                 <button id="cancel" name="button2id" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                 
                              </div> 
                            </div>
         </div>
         </div>
    <!-- </div>
    </div>-->
   
    <script type="text/javascript">
	   function sSelect(){
		index = document.getElementById('type_nc').value;
		if(index == '5'){
         document.getElementById('input_text').style.display='';
         document.getElementById('label_text').style.display='';
		}else{
         document.getElementById('input_text').style.display='none';
         document.getElementById('label_text').style.display='none';
      }
	}
   </script>
   </body>
</html>
             