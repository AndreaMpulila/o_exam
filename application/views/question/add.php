<div class="container">
<div class="card">

<div class="card-header">
<?php
    if ($this->session->flashdata('error')){
        echo "<div class=\"card-body m-1 text-center bg-danger\">".$this->session->flashdata('error')."</div>";
    }
    if ($this->session->flashdata('success')){
        echo "<div class=\"card-body m-1 text-center bg-success\">".$this->session->flashdata('success')."</div>";
    }
    if ($this->session->flashdata('info')){
        echo "<div class=\"card-body m-1 text-center bg-success\">".$this->session->flashdata('info')."</div>";
    }
    
    ?>

<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#import">
<i class="nav-icon ion ion-folder"></i> Import Questions
</button>
<div class="text-bold h4 text-center mt-3">
</div>
</div>
<div class="card-body">
<form action="" method="POST" class ="pr-3 form-horizontal" enctype="multipart/media">
            <div class="form-group row ">
                <label for="qt" class="col-sm-2">Question Text</label>
                <textarea name="question" id="qt" cols="" rows="" class="form-control col-sm-9"placeholder="Enter your Question here"></textarea>
            </div>
            <div class="form-group">
                <label for="qtype">Question Type</label>
                <select name="qtype" id="qtype" class="form-control">
                <option value="define"> Definition</option>
                <option value="choice" id="mult">Multiple choice</option>
                <option value="explanation">Explanation</option>
                </select>
            </div>
            <div class="form-group" id="choices" style="display:none">
                <div id="1c">
                    <input type="checkbox" name="choices[]" value ="A" id="0"> <label for="0">A</label> <textarea class="form-control" name="A" id="textA" cols="" rows=""></textarea><br>
                    <input type="checkbox" name="choices[]" value ="B" id="1"> <label for="1">B</label> <textarea class="form-control" name="B" id="textB" cols="" rows=""></textarea><br>
                    <input type="checkbox" name="choices[]" value ="C" id="2"> <label for="2">C</label> <textarea class="form-control" name="C" id="textC" cols="" rows=""></textarea><br>
                    <input type="checkbox" name="choices[]" value ="D" id="3"> <label for="3">D</label> <textarea class="form-control" name="D" id="textD" cols="" rows=""></textarea><br>
                    <input type="checkbox" name="choices[]" value ="E" id="4"> <label for="4">E</label> <textarea class="form-control" name="E" id="textE" cols="" rows=""></textarea><br>
                </div>
            </div>
            <div class="form-group">
                <label for="mk">Marks</label>
                <input type="number" name="marks" id="mk" class="form-control" minimum="0">
            </div>
            <div class="form-group">
                <label for="tpc">Topic</label>
                <input type="text" name="topic" id="tpc" class="form-control">
            </div>
            <div class="form-group">
                        <label for="cr">Course</label>
                        <select name="course" id="cr" class="form-control">
                            <?php
                            foreach($course as $crs){?>
                            <option value="<?php echo $crs->course_code?>"
                            ><?php echo $crs->course_name." --".$crs->course_code?></option><?php }?>
                        </select>
                    </div>
            <!-- <div class="form-group">
                <label for="fil">
                    <input type="checkbox" name="include" id="fil"> Include Image
                </label>
                <div class="custom-file">
						<input type="file" class="custom-file-input" id="file_avtar" accept="image/*"  name ="file" >
						<label class="custom-file-label" for="file_avtar">Upload Image.....</label>
						</div>
            </div> -->

              <input type="submit" name="submit" class="btn btn-primary mt-2 ml-3" value="Save">
              </form>
</div>
</div>
</div>


<!--Popup Modal -->
<div class="modal fade" id="import" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="importLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="importLabel">Import  Questions From Excel</h5>
            
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <form action="" method="POST" class ="pr-3" enctype="multipart/form-data">
            <div class="form-group">
                <a href="<?=base_url('upload/sample/data/sample.xlsx')?>" class="col-sm-9"><i class="fa fa-download"> </i> Download Question Sample File</a>
            </div>
            <div class="form-group row">
                <label for="fil">
                     Attachment
                </label>
                <div class="custom-file">
						<input type="file" class="custom-file-input" id="file_avtar" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"  name ="file" >
						<label class="custom-file-label" for="file_avtar">Upload Attachment.....</label>
						</div>
            </div>

            <button type="button" class="btn btn-secondary mt-2 mr-3" data-dismiss="modal">Close</button>
              <input type="submit" name="upload" class="btn btn-primary mt-2 ml-3" value="Save">
              </form> 
          </div>
          <div class="modal-footer"> 
          </div>
        </div>
      </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#choices").hide();
            $("#textA").hide();
            $("#textB").hide();
            $("#textC").hide();
            $("#textD").hide();
            $("#textE").hide();

            $("#qtype").change(function(){
            var choice =($("#qtype").val());
            if(choice =='choice'){
                $("#choices").show();
            }else{
                $("#choices").hide();
            }
        });
        $('#0').change(function(){
            if($("#0").prop('checked')==true){
                $("#textA").show();
            }else{
                $("#textA").hide();
            }

        });
        $('#1').change(function(){
            if($("#1").prop('checked')==true){
                $("#textB").show();
            }else{
                $("#textB").hide();
            }

        });
        $('#2').change(function(){
            if($("#2").prop('checked')==true){
                $("#textC").show();
            }else{
                $("#textC").hide();
            }

        });
        $('#3').change(function(){
            if($("#3").prop('checked')==true){
                $("#textD").show();
            }else{
                $("#textD").hide();
            }

        });
        $('#4').change(function(){
            if($("#4").prop('checked')==true){
                $("#textE").show();
            }else{
                $("#textE").hide();
            }

        });

        });        
    </script>
    <?php
    if($this->session->flashdata('error')){
        ?>
        <script>
           $(document).ready(function(){
            var myerror ='<?=$this->session->flashdata('error')?>';
            toastr.error(myerror);
           })
        </script>
        <?php
    }
    ?>