<?php
class component{
 function modal($id="modal",$top="Title Modal",$center="...",$down='<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 <button type="button" class="btn btn-primary">Save changes</button>'){
  return '<div class="modal " id="'.$id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">'.$top.'</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">'.$center.'
      </div>
      <div class="modal-footer">
        '.$down.'
      </div>
    </div>
  </div>
</div>';
 }
 function input($id="",$name="",$ph="",$label="",$type="text"){
        return '
          <div class="form-group">
            <label for="exampleInputEmail1">'.$label.'</label>
            <input type="'.$type.'" class="form-control" name="'.$name.'"  placeholder="'.$ph.'"id="'.$id.'" aria-describedby="emailHelp">
          </div>
        ';
 }
}