<?
foreach($domain as $k=>$v)
{
  if(is_object($domain->$k) && get_class($domain->$k)=='Attachment')
  {
    $att = $domain->$k;
    $att->vpath = ADMIN_ATTACHMENT_UPLOAD_VPATH . "/$att->local_file_name";
    $att->fpath = ADMIN_ATTACHMENT_UPLOAD_FPATH . "/$att->local_file_name";
  }
}
