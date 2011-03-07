<?

$d = $domain;

global $topic_site_settings;

/*
When a Domain is saved, we have to update the master build_host record so the site is recognized by Click.

If t
*/
if(isset($topic_site_settings['build_id']))
{
  global $root_dbh, $app_dbh, $__build, $dbh;
  $dbh = $root_dbh;
  $sql = "select id from build_hosts where build_id = ? and host = ?";
  $recs = query_assoc($sql, $__build['id'], $d->host);
  if(count($recs)>0)
  {
    $id = $recs[0]['id'];
    $sql = "update build_hosts set host = ?, build_id = ? where id = ?";
    query($sql,$d->host, $topic_site_settings['build_id'], $id);
  } else {
    $sql = "insert into build_hosts (build_id, host) values(?, ?)";
    query($sql, $topic_site_settings['build_id'], $d->host);
  }
  $dbh = $app_dbh;
}