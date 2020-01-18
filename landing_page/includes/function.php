<?php
class MainFunction{

  function formGroup($type=NULL,$title=NULL,$name=NULL,$value=NULL,$attribute=NULL,$date_format=NULL){
    echo '<div class="form-group">
            <label>'.$title.'</label>
            <input type="'.$type.'" class="au-input au-input--full '.$name.'" id="'.$name.'" name="'.$name.'" placeholder="'.$title.'" value="'.$value.'" '.$attribute.'>
          </div>';
  }

  function reportStartup(){
    // echo '<link rel="stylesheet" media="all" type="text/css" href="">';
  }

  function url_enc($page=NULL,$subpage=NULL,$table=NULL,$id=NULL,$ref=NULL,$any=NULL){
    $pg = isset($page) ? '?pg='.urlencode($page) : '?'  ;
    $sub = isset($subpage) ? '&sub='.urlencode($subpage) : '';
    $tbl = isset($table) ? '&tbl='.urlencode($table) : '';
    $id = isset($id) ? '&id='.urlencode($id) : '';
    $ref = isset($ref) ? '&ref='.urlencode($ref) : '';
    $result = $pg.$sub.$tbl.$id.$ref.$any;

    return $result;
  }

}
?>