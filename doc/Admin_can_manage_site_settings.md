### Admin can manage site settings

1、 add settings.site to menu

2、add config/administrator/settings/site.php and add storage_path and add site.json, otherwise will get error
` $site_settings = json_decode(file_get_contents(storage_path("/administrator_settings/$setting_name.json")), true);`

3、use the setting functin in view