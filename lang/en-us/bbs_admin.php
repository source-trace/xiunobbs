<?php

return array(
	'user'=>'User',
	'forum'=>'Forum',
	'plugin'=>'Plugin',
	'other'=>'Other',
	
	'user_admin'=>'User Admin',
	'group_admin'=>'Group Admin',
	'forum_admin'=>'Forum Admin',
	'post_admin'=>'Post Admin',
	'thread_admin'=>'Thread Admin',
	'plugin_admin'=>'Plugin Admin',
	'other_admin'=>'Other Admin',
	
	'admin_index_page'=>'Management',
	'front_index_page'=>'Foreground ',
	'admin_site_setting'=>'Site Setting',
	'admin_setting_base'=>'Base Setting',
	'admin_setting_smtp'=>'SMTP Setting',
	'admin_other_cache'=>'Cleanup Cache',
	'admin_clear_tmp'=>'Clean up temporary directory',
	'admin_clear_cache'=>'Cleanup cache',
	'admin_clear_successfully'=>'Cleanup success',
		
	'admin_user_list'=>'User List',
	'admin_thread_batch'=>'Thread Batch Operation',
	'admin_user_group'=>'User Group',
	'admin_user_create'=>'Create User',
	'admin_plugin_local_list'=>'Local Plugin',
	'admin_plugin_official_list'=>'Official Plugin',
	
	'admin_token_error'=>'Admin token error, That may be your network environment is not stable, can try to unbind IP, modify file: conf.php, set admin_bind_ip = 0',
	'admin_token_expiry'=>'Admin token expiry, please re login',
	'forum_edit'=>'Edit Forum',
	'user_edit'=>'Edit User',
	'edit_sucessfully'=>'Edit Sucessfully',
	'item_not_exists'=>'{item} Not Exists',
	'item_not_moderator'=>'{item} not moderator',
	'group_not_exists'=>'User group doest not exists',
	
	'admin_login'=>'Admin Login',
	'save_conf_failed'=>'Save data to config file {file} failed, please check the file write permission',
	'user_already_exists'=>'User already exists',
	'email_already_exists'=>'Email already exists',
	'uid_not_exists'=>'Specified  UID does not exists',
	'data_not_changed'=>'Data not changed',
	'admin_cant_be_deleted'=>'Can not directly delete the Administrator, please first edit for the general user group',
	
	// index
	'admin_index'=>'Admin Index',
	'site_stat_info'=>'Site statistics',
	'disk_free_space'=>'Disck free space',
	'server_info'=>'Server information',
	'os'=>'OS',
	'post_max_size'=>'Max POST data size',
	'upload_max_filesize'=>'Max upload file size',
	'allow_url_fopen'=>'Allow open remote URL',
	'safe_mode'=>'Safe Mode',
	'max_execution_time'=>'Max execution time',
	'memory_limit'=>'Memroy limit',
	'client_ip'=>'Client IP',
	'server_ip'=>'Sever IP',
	'dev_team_info'=>'Dev Team',
	
	'for_safe_input_password_again'=>'Please input password again for security',
	
	// setting
	'sitename'=>'Site Name',
	'sitebrief'=>'Site Brief',
	'sitebrief_tips'=>'tops：Support HTML tag, new line use &lt;br&gt;',
	'runlevel'=>'Site access restrictions',
	'user_create_email_on'=>'Open email verification when  user register',
	'user_resetpw_on'=>'Open password reset',
	'lang'=>'Language',
	'database'=>'Database',
	'host'=>'Host',
	'port'=>'Port',
	'account'=>'Account',
	
	// forum
	'forum_list'=>'Forum List',
	'forum_id'=>'Forum ID',
	'forum_icon'=>'Icon',
	'forum_name'=>'Name',
	'forum_rank'=>'Rank',
	'forum_edit'=>'Edit',
	'forum_delete'=>'Delete',
	'forum_brief'=>'Brief',
	'forum_announcement'=>'Announcement',
	'moderator'=>'Moderator',
	'add_new_line'=>'New Line',
	'forum_edit_tip'=>'Please carefully edit the section, once determined, do not easily change, or may lead to data related errors, generally do not change in the formal operation.',
	'forum_cant_delete_system_reserved'=>'Cannot delete system reserved section.',
	'forum_moduid_format_tips'=>'Up to 10, comma separated, such as: 123456789',
	'user_privilege'=>'User Privilege',
	'allow_view'=>'Allow view',
	'allow_thread'=>'Thread',
	'allow_post'=>'Post',
	'allow_upload'=>'Upload',
	'allow_download'=>'Download',
	
	'thread_queue_not_exists'=>'Queue does not exist',
	'search_condition'=>'Search Condition',
	'start_date'=>'Start Time',
	'end_date'=>'End Time',
	'searching'=>'Searching.',
	'operating'=>'Operating',
	'operator_complete'=>'Operation Completed',
	'click_to_view'=>'Click to view',
	'thread_userip'=>'Post IP',
	'thread_search_result'=>'Results: {n} ',
	
	// user
	'please_check_delete_user'=>'Please check your want to delete user',
	'user_delete_confirm'=>'Sure to delete user?',
	'user_admin_cant_be_deleted'=>'Administrator users are not allowed to delete, if you do want to delete, please adjust the user group!',
	'search_type'=>'Search Type',
	'user_privileges'=>'User Privileges',
	'author'=>'Author',
	
	// user group
	'group_list'=>'Group List',
	'group_edit'=>'Edit Group',
	'group_id'=>'Group id',
	'group_name'=>'Group name',
	'group_credits_from'=>'Credits From',
	'group_credits_to'=>'Credits To',
	'group_edit_tips'=>'Please carefully edit the user group, once identified, do not easily change, or may lead to user related errors, generally do not change in the formal operation.',
	'admin_privilege'=>'Admin Privilege',
	'top'=>'Top',
	'ban_user'=>'Ban User',
	'delete_user'=>'Delete User',
	'view_user_info'=>'View user info',
	
	// Plugin
	'plugin_dir'=>'Plugin Directory',
	'plugin_bbs_version'=>'Require BBS version',
	'price'=>'Price',
	'installs'=>'Installs',
	'plugin_user_stars_fmt'=>'User given stars',
	'plugin_sells'=>'Sells',
	'plugin_is_cert'=>'Is certified',
	'local_plugin'=>'Local Plugin',
	'official_plugin'=>'Official Plugin',
	'pugin_cate_0'=>'All',
	'pugin_cate_1'=>'Style',
	'pugin_cate_2'=>'Mini',
	'pugin_cate_3'=>'Large',
	'pugin_cate_4'=>'Interface',
	'pugin_cate_99'=>'Not Classfied',
	'plugin_detail'=>'Plugin Detail',
	'plugin_not_exists'=>'Plugin does not exists',
	'plugin_versio_not_match'=>'This plugin is dependent on Xiuno BBS Minimum version {bbs_version}, current version：{version}',
	'plugin_download_sucessfully'=>'Download plugin ({dir}) sucessfully, please click to install',
	'plugin_install_sucessfully'=>'Install Plugin ( {name} ) sucessfully',
	'plugin_unstall_sucessfully'=>'Unstall Plugin ( {name} ) sucessfully, to completely remove the plugin, please manually delete the {dir} directory',
	'plugin_enable_sucessfully'=>'Enable Plugin ( {name} ) sucessfully',
	'plugin_disable_sucessfully'=>'Disable Plugin ( {name} ) sucessfully',
	'plugin_upgrade_sucessfully'=>'Upgrade Plugin ( {name} ) sucessfully',
	'plugin_not_need_update'=>'Already is the latest version, no need to update',
	'plugin_set_relatied_dir_writable'=>'During the installation of the plugin directory, please set: {dir} and file for writable',
	'plugin_dependency_following'=>'dependent on following plugin: {s}, please install them first.',
	'plugin_being_dependent_cant_delete'=>'can not delete ({name}), following plugin dependent on it: {s}.',
	'server_response_empty'=>'Sever response empty',
	'server_response_error'=>'Sever response error',
	'zip_data_error'=>'Zip data error',
	'format_maybe_error'=>'Format maybe error',
	'plugin_maybe_download_failed'=>'Plugin maybe download failed, directory does not exists.',
	'plugin_name_error'=>'Plugin name error',
	'plugin_unstall_confirm_tips'=>'Uninstall will clean up the plugin data, determine the uninstall ( {name} ) it?',
	'plugin_task_locked'=>'Another plugin task is being executed, the current task is locked.',
	
	
	// hook lang_en_us_bbs_admin.php
	
);

?>