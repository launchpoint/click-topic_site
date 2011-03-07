<?

global $topic_site_settings;

define('ADMIN_ATTACHMENT_UPLOAD_VPATH', normalize_path(BUILD_VPATH. "{$topic_site_settings['admin_site_fpath']}/data/attachment"));
define('ADMIN_ATTACHMENT_UPLOAD_FPATH', normalize_path(BUILD_FPATH. "{$topic_site_settings['admin_site_fpath']}/data/attachment"));

