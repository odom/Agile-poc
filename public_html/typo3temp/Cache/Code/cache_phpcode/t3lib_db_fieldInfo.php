<?php
return array (
  'incFields' => 
  array (
    'be_groups' => 'uid',
    'be_users' => 'uid',
    'pages' => 'uid',
    'sys_registry' => 'uid',
    'sys_be_shortcuts' => 'uid',
    'sys_news' => 'uid',
    'sys_filemounts' => 'uid',
    'sys_file_storage' => 'uid',
    'sys_file' => 'uid',
    'sys_file_processedfile' => 'uid',
    'sys_file_reference' => 'uid',
    'sys_file_collection' => 'uid',
    'sys_collection' => 'uid',
    'sys_collection_entries' => 'uid',
    'sys_history' => 'uid',
    'sys_lockedrecords' => 'uid',
    'sys_log' => 'uid',
    'sys_language' => 'uid',
    'sys_category' => 'uid',
    'cf_cache_hash' => 'id',
    'cf_cache_hash_tags' => 'id',
    'cf_cache_pages' => 'id',
    'cf_cache_pages_tags' => 'id',
    'cf_cache_pagesection' => 'id',
    'cf_cache_pagesection_tags' => 'id',
    'cf_cache_rootline' => 'id',
    'cf_cache_rootline_tags' => 'id',
    'cf_extbase_reflection' => 'id',
    'cf_extbase_reflection_tags' => 'id',
    'cf_extbase_object' => 'id',
    'cf_extbase_object_tags' => 'id',
    'cf_extbase_typo3dbbackend_tablecolumns' => 'id',
    'cf_extbase_typo3dbbackend_tablecolumns_tags' => 'id',
    'cf_extbase_datamapfactory_datamap' => 'id',
    'cf_extbase_datamapfactory_datamap_tags' => 'id',
    'cf_workspaces_cache' => 'id',
    'cf_workspaces_cache_tags' => 'id',
    'fe_groups' => 'uid',
    'fe_users' => 'uid',
    'pages_language_overlay' => 'uid',
    'sys_domain' => 'uid',
    'sys_template' => 'uid',
    'tt_content' => 'uid',
    'backend_layout' => 'uid',
    'tx_extensionmanager_domain_model_repository' => 'uid',
    'tx_extensionmanager_domain_model_extension' => 'uid',
    'static_tsconfig_help' => 'uid',
    'tx_impexp_presets' => 'uid',
    'sys_note' => 'uid',
    'tx_rtehtmlarea_acronym' => 'uid',
    'tx_rsaauth_keys' => 'uid',
    'tx_scheduler_task' => 'uid',
    'sys_workspace' => 'uid',
    'sys_workspace_stage' => 'uid',
    'static_territories' => 'uid',
    'static_countries' => 'uid',
    'static_country_zones' => 'uid',
    'static_currencies' => 'uid',
    'static_languages' => 'uid',
    'tx_dbal_debuglog' => 'uid',
    'tx_dbal_debuglog_where' => 'uid',
    'tx_templavoila_tmplobj' => 'uid',
    'tx_templavoila_datastructure' => 'uid',
    'tx_crawler_queue' => 'qid',
    'tx_crawler_configuration' => 'uid',
    'index_section' => 'uniqid',
    'index_grlist' => 'uniqid',
    'index_stat_search' => 'uid',
    'index_config' => 'uid',
    'index_stat_word' => 'uid',
    'tx_tqseo_cache' => 'uid',
    'tx_tqseo_sitemap' => 'uid',
    'tx_tqseo_setting_root' => 'uid',
    'tx_realurl_pathcache' => 'cache_id',
    'tx_realurl_uniqalias' => 'uid',
    'tx_realurl_redirects' => 'uid',
    'tx_formhandler_log' => 'uid',
  ),
  'fieldTypes' => 
  array (
    'be_groups' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'non_exclude_fields' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'explicit_allowdeny' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'allowed_languages' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'custom_options' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'db_mountpoints' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'pagetypes_select' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tables_select' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'tables_modify' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'groupMods' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'file_mountpoints' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'fileoper_perms' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'hidden' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'inc_access_lists' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'description' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'lockToDomain' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'TSconfig' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'subgroup' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'hide_in_lists' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'workspace_perms' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'1\'',
      ),
      'tx_templavoila_access' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
    ),
    'be_sessions' => 
    array (
      'ses_id' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'ses_name' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'ses_iplock' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'ses_hashlock' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'ses_userid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'ses_tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'ses_data' => 
      array (
        'type' => 'longtext',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'ses_backuserid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'be_users' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'username' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'password' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'admin' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'usergroup' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'disable' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'starttime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'endtime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'lang' => 
      array (
        'type' => 'char',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'email' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'db_mountpoints' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'options' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'realName' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'userMods' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'allowed_languages' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'uc' => 
      array (
        'type' => 'mediumtext',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'file_mountpoints' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'fileoper_perms' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'workspace_perms' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'1\'',
      ),
      'lockToDomain' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'disableIPlock' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'TSconfig' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'lastlogin' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'createdByAction' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'usergroup_cached_list' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'workspace_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'workspace_preview' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'1\'',
      ),
    ),
    'cache_imagesizes' => 
    array (
      'md5hash' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'md5filename' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'filename' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'imagewidth' => 
      array (
        'type' => 'mediumint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'imageheight' => 
      array (
        'type' => 'mediumint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'pages' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_oid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_wsid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_label' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      't3ver_state' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_stage' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_count' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_move_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3_origuid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sorting' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'perms_userid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'perms_groupid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'perms_user' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'perms_group' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'perms_everybody' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'editlock' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'hidden' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'doktype' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'TSconfig' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'storage_pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'is_siteroot' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'php_tree_stop' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tx_impexp_origuid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'url' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'starttime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'endtime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'urltype' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'shortcut' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'shortcut_mode' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'no_cache' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'fe_group' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'subtitle' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'layout' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'url_scheme' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'target' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'media' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'lastUpdated' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'keywords' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'cache_timeout' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cache_tags' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'newUntil' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'description' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'no_search' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'SYS_LASTCHANGED' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'abstract' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'module' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'extendToSubpages' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'author' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'author_email' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'nav_title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'nav_hide' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'content_from_pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'mount_pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'mount_pid_ol' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'alias' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'l18n_cfg' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'fe_login_mode' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'backend_layout' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'backend_layout_next_level' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tx_templavoila_ds' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tx_templavoila_to' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tx_templavoila_next_ds' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tx_templavoila_next_to' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tx_templavoila_flex' => 
      array (
        'type' => 'mediumtext',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'tx_tqseo_pagetitle' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tx_tqseo_pagetitle_rel' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tx_tqseo_pagetitle_prefix' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tx_tqseo_pagetitle_suffix' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tx_tqseo_is_exclude' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tx_tqseo_inheritance' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tx_tqseo_canonicalurl' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tx_tqseo_priority' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tx_tqseo_change_frequency' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tx_realurl_pathsegment' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tx_realurl_pathoverride' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tx_realurl_exclude' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tx_realurl_nocache' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_swapmode' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'sys_registry' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'entry_namespace' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'entry_key' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'entry_value' => 
      array (
        'type' => 'blob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
    ),
    'sys_be_shortcuts' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'userid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'module_name' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'url' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'description' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'sorting' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sc_group' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'sys_news' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'hidden' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'starttime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'endtime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'content' => 
      array (
        'type' => 'mediumtext',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
    ),
    'sys_filemounts' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'path' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'base' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'hidden' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sorting' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'sys_file_storage' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'hidden' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'name' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'description' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'driver' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'configuration' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'is_browsable' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'is_public' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'is_writable' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'is_online' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'1\'',
      ),
      'processingfolder' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
    ),
    'sys_file' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_oid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_wsid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_label' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      't3ver_state' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_stage' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_count' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_move_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3_origuid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'storage' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'identifier' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'extension' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'mime_type' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'name' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'title' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'sha1' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'size' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'creation_date' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'modification_date' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'width' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'height' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'description' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'alternative' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
    ),
    'sys_file_processedfile' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'storage' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'original' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'identifier' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'name' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'configuration' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'originalfilesha1' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'task_type' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'checksum' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'width' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
        'default' => '\'0\'',
      ),
      'height' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
        'default' => '\'0\'',
      ),
    ),
    'sys_file_reference' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sorting' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'hidden' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_oid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_wsid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_label' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      't3ver_state' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_stage' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_count' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_move_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3_origuid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sys_language_uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'l10n_parent' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'l10n_diffsource' => 
      array (
        'type' => 'mediumblob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
      'uid_local' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'uid_foreign' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tablenames' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'fieldname' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'sorting_foreign' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'table_local' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'title' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'description' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'alternative' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'link' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'downloadname' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
    ),
    'sys_file_collection' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_oid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_wsid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_label' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      't3ver_state' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_stage' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_count' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_move_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3_origuid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sys_language_uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'l10n_parent' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'l10n_diffsource' => 
      array (
        'type' => 'mediumtext',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'hidden' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'starttime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'endtime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'title' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'description' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 1,
        'default' => '\'static\'',
      ),
      'files' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'storage' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'folder' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
    ),
    'sys_collection' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_oid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_wsid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_label' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      't3ver_state' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_stage' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_count' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_move_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3_origuid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sys_language_uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'l10n_parent' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'l10n_diffsource' => 
      array (
        'type' => 'mediumtext',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'hidden' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'starttime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'endtime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'fe_group' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'title' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'description' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 1,
        'default' => '\'static\'',
      ),
      'table_name' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'items' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'sys_collection_entries' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'uid_local' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'uid_foreign' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tablenames' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'sorting' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'sys_history' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sys_log_uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'history_data' => 
      array (
        'type' => 'mediumtext',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'fieldlist' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'recuid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tablename' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'history_files' => 
      array (
        'type' => 'mediumtext',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'snapshot' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'sys_lockedrecords' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'userid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'record_table' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'record_uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'record_pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'username' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'feuserid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'sys_refindex' => 
    array (
      'hash' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tablename' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'recuid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'field' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'flexpointer' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'softref_key' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'softref_id' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'sorting' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'ref_table' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'ref_uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'ref_string' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
    ),
    'sys_log' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'userid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'action' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'recuid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tablename' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'recpid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'error' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'details' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'type' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'details_nr' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'IP' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'log_data' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'event_pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'-1\'',
      ),
      'workspace' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'NEWid' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'request_id' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'time_micro' => 
      array (
        'type' => 'float',
        'metaType' => 'F',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'component' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'level' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'message' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'data' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
    ),
    'sys_language' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'hidden' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'flag' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'static_lang_isocode' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'sys_category' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'hidden' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'starttime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'endtime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_oid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_wsid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_label' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      't3ver_state' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_stage' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_count' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_move_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3_origuid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sys_language_uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'l10n_parent' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'l10n_diffsource' => 
      array (
        'type' => 'mediumblob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
      'title' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'description' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'parent' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'items' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'sys_category_record_mm' => 
    array (
      'uid_local' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'uid_foreign' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tablenames' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'sorting' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sorting_foreign' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'cf_cache_hash' => 
    array (
      'id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'identifier' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'expires' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'content' => 
      array (
        'type' => 'mediumblob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
    ),
    'cf_cache_hash_tags' => 
    array (
      'id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'identifier' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tag' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
    ),
    'cf_cache_pages' => 
    array (
      'id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'identifier' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'expires' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'content' => 
      array (
        'type' => 'mediumblob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
    ),
    'cf_cache_pages_tags' => 
    array (
      'id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'identifier' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tag' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
    ),
    'cf_cache_pagesection' => 
    array (
      'id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'identifier' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'expires' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'content' => 
      array (
        'type' => 'mediumblob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
    ),
    'cf_cache_pagesection_tags' => 
    array (
      'id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'identifier' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tag' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
    ),
    'cf_cache_rootline' => 
    array (
      'id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'identifier' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'expires' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'content' => 
      array (
        'type' => 'mediumblob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
    ),
    'cf_cache_rootline_tags' => 
    array (
      'id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'identifier' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tag' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
    ),
    'cf_extbase_reflection' => 
    array (
      'id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'identifier' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'expires' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'content' => 
      array (
        'type' => 'mediumblob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
    ),
    'cf_extbase_reflection_tags' => 
    array (
      'id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'identifier' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tag' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
    ),
    'cf_extbase_object' => 
    array (
      'id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'identifier' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'expires' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'content' => 
      array (
        'type' => 'mediumblob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
    ),
    'cf_extbase_object_tags' => 
    array (
      'id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'identifier' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tag' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
    ),
    'cf_extbase_typo3dbbackend_tablecolumns' => 
    array (
      'id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'identifier' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'expires' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'content' => 
      array (
        'type' => 'mediumblob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
    ),
    'cf_extbase_typo3dbbackend_tablecolumns_tags' => 
    array (
      'id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'identifier' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tag' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
    ),
    'cf_extbase_datamapfactory_datamap' => 
    array (
      'id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'identifier' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'expires' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'content' => 
      array (
        'type' => 'mediumblob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
    ),
    'cf_extbase_datamapfactory_datamap_tags' => 
    array (
      'id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'identifier' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tag' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
    ),
    'cf_workspaces_cache' => 
    array (
      'id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'identifier' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'expires' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'content' => 
      array (
        'type' => 'mediumblob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
    ),
    'cf_workspaces_cache_tags' => 
    array (
      'id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'identifier' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tag' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
    ),
    'cache_typo3temp_log' => 
    array (
      'md5hash' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'filename' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'orig_filename' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
    ),
    'cache_md5params' => 
    array (
      'md5hash' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'type' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'params' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
    ),
    'cache_treelist' => 
    array (
      'md5hash' => 
      array (
        'type' => 'char',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'treelist' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'expires' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'fe_groups' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'hidden' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'lockToDomain' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'description' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'subgroup' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'TSconfig' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'tx_extbase_type' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'felogin_redirectPid' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
    ),
    'fe_session_data' => 
    array (
      'hash' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'content' => 
      array (
        'type' => 'mediumblob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'fe_sessions' => 
    array (
      'ses_id' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'ses_name' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'ses_iplock' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'ses_hashlock' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'ses_userid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'ses_tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'ses_data' => 
      array (
        'type' => 'blob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
      'ses_permanent' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'fe_users' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'username' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'password' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'usergroup' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'disable' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'starttime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'endtime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'first_name' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'middle_name' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'last_name' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'address' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'telephone' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'fax' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'email' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'lockToDomain' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'uc' => 
      array (
        'type' => 'blob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'zip' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'city' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'country' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'www' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'company' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'image' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'TSconfig' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'fe_cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'lastlogin' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'is_online' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tx_extbase_type' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'felogin_redirectPid' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'felogin_forgotHash' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
    ),
    'pages_language_overlay' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'doktype' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_oid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_wsid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_label' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      't3ver_state' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_stage' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_count' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3_origuid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sys_language_uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'hidden' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'starttime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'endtime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'subtitle' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'nav_title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'media' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'keywords' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'description' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'abstract' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'author' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'author_email' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tx_impexp_origuid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'l18n_diffsource' => 
      array (
        'type' => 'mediumblob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
      'url' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'urltype' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'shortcut' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'shortcut_mode' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tx_tqseo_pagetitle' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tx_tqseo_pagetitle_rel' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tx_tqseo_pagetitle_prefix' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tx_tqseo_pagetitle_suffix' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tx_tqseo_canonicalurl' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tx_realurl_pathsegment' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
    ),
    'sys_domain' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'hidden' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'domainName' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'redirectTo' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'redirectHttpStatusCode' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'301\'',
      ),
      'sorting' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'prepend_params' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'forced' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'sys_template' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_oid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_wsid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_label' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      't3ver_state' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_stage' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_count' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3_origuid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sorting' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'sitetitle' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'hidden' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'starttime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'endtime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'root' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'clear' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'include_static_file' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'constants' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'config' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'nextLevel' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'description' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'basedOn' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'includeStaticAfterBasedOn' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'static_file_mode' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tx_impexp_origuid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'tt_content' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_oid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_wsid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_label' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      't3ver_state' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_stage' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_count' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_move_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3_origuid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'hidden' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sorting' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'CType' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'header' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'header_position' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'bodytext' => 
      array (
        'type' => 'mediumtext',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'image' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'imagewidth' => 
      array (
        'type' => 'mediumint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'imageorient' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'imagecaption' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'imagecols' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'imageborder' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'media' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'layout' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cols' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'records' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'pages' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'starttime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'endtime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'colPos' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'subheader' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'spaceBefore' => 
      array (
        'type' => 'smallint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'spaceAfter' => 
      array (
        'type' => 'smallint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'fe_group' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'header_link' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'imagecaption_position' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'image_link' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'image_zoom' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'image_noRows' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'image_effects' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'image_compression' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'altText' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'titleText' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'longdescURL' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'header_layout' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'text_align' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'text_face' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'text_size' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'text_color' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'text_properties' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'menu_type' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'list_type' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'table_border' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'table_cellspacing' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'table_cellpadding' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'table_bgColor' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'select_key' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'sectionIndex' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'linkToTop' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'file_collections' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'filelink_size' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'filelink_sorting' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'target' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'section_frame' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'date' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'multimedia' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'image_frames' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'recursive' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'imageheight' => 
      array (
        'type' => 'mediumint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'rte_enabled' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sys_language_uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tx_impexp_origuid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'pi_flexform' => 
      array (
        'type' => 'mediumtext',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'accessibility_title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'accessibility_bypass' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'accessibility_bypass_text' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'l18n_parent' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'l18n_diffsource' => 
      array (
        'type' => 'mediumblob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
      'tx_templavoila_ds' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tx_templavoila_to' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tx_templavoila_flex' => 
      array (
        'type' => 'mediumtext',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'tx_templavoila_pito' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'backend_layout' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_oid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_wsid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_label' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      't3ver_state' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_stage' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_count' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_move_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3_origuid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'hidden' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sorting' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'description' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'config' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'icon' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
    ),
    'tx_extensionmanager_domain_model_repository' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'description' => 
      array (
        'type' => 'mediumtext',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'wsdl_url' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'mirror_list_url' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'last_update' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'extension_count' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'tx_extensionmanager_domain_model_extension' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'extension_key' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'repository' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'1\'',
      ),
      'version' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'alldownloadcounter' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'downloadcounter' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'description' => 
      array (
        'type' => 'mediumtext',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'state' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'review_state' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'category' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'last_updated' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'serialized_dependencies' => 
      array (
        'type' => 'mediumtext',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'author_name' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'author_email' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'ownerusername' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'md5hash' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'update_comment' => 
      array (
        'type' => 'mediumtext',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'authorcompany' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'integer_version' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'current_version' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'lastreviewedversion' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'sys_preview' => 
    array (
      'keyword' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'endtime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'config' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
    ),
    'static_tsconfig_help' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'guide' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'md5hash' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'description' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'obj_string' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'appdata' => 
      array (
        'type' => 'blob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
    ),
    'tx_impexp_presets' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'user_uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'public' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'item_uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'preset_data' => 
      array (
        'type' => 'blob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
    ),
    'sys_note' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'subject' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'message' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'personal' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'category' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sorting' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'tx_rtehtmlarea_acronym' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'hidden' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'starttime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'endtime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sorting' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sys_language_uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'type' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'1\'',
      ),
      'term' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'acronym' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'static_lang_isocode' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'tx_rsaauth_keys' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'key_value' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
    ),
    'tx_scheduler_task' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'disable' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'nextexecution' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'lastexecution_time' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'lastexecution_failure' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'lastexecution_context' => 
      array (
        'type' => 'char',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'serialized_task_object' => 
      array (
        'type' => 'blob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
      'serialized_executions' => 
      array (
        'type' => 'blob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
    ),
    'sys_workspace' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'description' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'adminusers' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'members' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'reviewers' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'db_mountpoints' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'file_mountpoints' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'publish_time' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'unpublish_time' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'freeze' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'live_edit' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'vtypes' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'disable_autocreate' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'swap_modes' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'publish_access' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'custom_stages' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'stagechg_notification' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'edit_notification_mode' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'edit_notification_defaults' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'edit_allow_notificaton_settings' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'publish_notification_mode' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'publish_notification_defaults' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'publish_allow_notificaton_settings' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'sys_workspace_stage' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sorting' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'responsible_persons' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'default_mailcomment' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'parentid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'parenttable' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'notification_mode' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'notification_defaults' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'allow_notificaton_settings' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'static_territories' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tr_iso_nr' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tr_parent_iso_nr' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tr_name_en' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
    ),
    'static_countries' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cn_iso_2' => 
      array (
        'type' => 'char',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'cn_iso_3' => 
      array (
        'type' => 'char',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'cn_iso_nr' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cn_parent_tr_iso_nr' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cn_official_name_local' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'cn_official_name_en' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'cn_capital' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'cn_tldomain' => 
      array (
        'type' => 'char',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'cn_currency_iso_3' => 
      array (
        'type' => 'char',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'cn_currency_iso_nr' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cn_phone' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cn_eu_member' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cn_uno_member' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cn_address_format' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cn_zone_flag' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cn_short_local' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'cn_short_en' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
    ),
    'static_country_zones' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'zn_country_iso_2' => 
      array (
        'type' => 'char',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'zn_country_iso_3' => 
      array (
        'type' => 'char',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'zn_country_iso_nr' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'zn_code' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'zn_name_local' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'zn_name_en' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
    ),
    'static_currencies' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cu_iso_3' => 
      array (
        'type' => 'char',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'cu_iso_nr' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cu_name_en' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'cu_symbol_left' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'cu_symbol_right' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'cu_thousands_point' => 
      array (
        'type' => 'char',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'cu_decimal_point' => 
      array (
        'type' => 'char',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'cu_decimal_digits' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cu_sub_name_en' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'cu_sub_divisor' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'1\'',
      ),
      'cu_sub_symbol_left' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'cu_sub_symbol_right' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
    ),
    'static_languages' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'lg_iso_2' => 
      array (
        'type' => 'char',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'lg_name_local' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'lg_name_en' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'lg_typo3' => 
      array (
        'type' => 'char',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'lg_country_iso_2' => 
      array (
        'type' => 'char',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'lg_collate_locale' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'lg_sacred' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'lg_constructed' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'tx_staticinfotables_hotlist' => 
    array (
      'uid_local' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tablenames' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'application' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'sorting' => 
      array (
        'type' => 'bigint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'tx_dbal_debuglog' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
        'default' => '\'0\'',
      ),
      'beuser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
        'default' => '\'0\'',
      ),
      'script' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'exec_time' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
        'default' => '\'0\'',
      ),
      'table_join' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'serdata' => 
      array (
        'type' => 'blob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
      'query' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'errorFlag' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
        'default' => '\'0\'',
      ),
    ),
    'tx_dbal_debuglog_where' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
        'default' => '\'0\'',
      ),
      'beuser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
        'default' => '\'0\'',
      ),
      'script' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'tablename' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'whereclause' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
    ),
    'tx_templavoila_tmplobj' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_oid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_wsid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_label' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      't3ver_state' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_stage' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_count' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3_origuid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'fileref_mtime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sorting' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'datastructure' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'fileref' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'templatemapping' => 
      array (
        'type' => 'mediumblob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
      'previewicon' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'description' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'rendertype' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'sys_language_uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'parent' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'rendertype_ref' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'localprocessing' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'fileref_md5' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'belayout' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
    ),
    'tx_templavoila_datastructure' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_oid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_wsid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_label' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      't3ver_state' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_stage' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_count' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3ver_tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      't3_origuid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sorting' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'dataprot' => 
      array (
        'type' => 'mediumtext',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'scope' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'previewicon' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'belayout' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
    ),
    'tx_crawler_queue' => 
    array (
      'qid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'page_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'parameters' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'parameters_hash' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'configuration_hash' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'scheduled' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'exec_time' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'set_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'result_data' => 
      array (
        'type' => 'longtext',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'process_scheduled' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'process_id' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'process_id_completed' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'configuration' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
    ),
    'tx_crawler_process' => 
    array (
      'process_id' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'active' => 
      array (
        'type' => 'smallint',
        'metaType' => 'I8',
        'notnull' => 0,
        'default' => '\'0\'',
      ),
      'ttl' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'assigned_items_count' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'tx_crawler_configuration' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'deleted' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'hidden' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'name' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'processing_instruction_filter' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'processing_instruction_parameters_ts' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'configuration' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'base_url' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'sys_domain_base_url' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'pidsonly' => 
      array (
        'type' => 'blob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
      'begroups' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'fegroups' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sys_workspace_uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'realurl' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'chash' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'exclude' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
    ),
    'index_phash' => 
    array (
      'phash' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'phash_grouping' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cHashParams' => 
      array (
        'type' => 'blob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
      'data_filename' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'data_page_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'data_page_reg1' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'data_page_type' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'data_page_mp' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'gr_list' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'item_type' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'item_title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'item_description' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'item_mtime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'item_size' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'contentHash' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'parsetime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sys_language_uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'item_crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'externalUrl' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'recordUid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'freeIndexUid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'freeIndexSetId' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'index_fulltext' => 
    array (
      'phash' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'fulltextdata' => 
      array (
        'type' => 'mediumtext',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'metaphonedata' => 
      array (
        'type' => 'mediumtext',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
    ),
    'index_rel' => 
    array (
      'phash' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'wid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'count' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'first' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'freq' => 
      array (
        'type' => 'smallint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'flags' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'index_words' => 
    array (
      'wid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'baseword' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'metaphone' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'is_stopword' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'index_section' => 
    array (
      'phash' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'phash_t3' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'rl0' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'rl1' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'rl2' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'page_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'uniqid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
    ),
    'index_grlist' => 
    array (
      'phash' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'phash_x' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'hash_gr_list' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'gr_list' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'uniqid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
    ),
    'index_stat_search' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'searchstring' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'searchoptions' => 
      array (
        'type' => 'blob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'feuser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cookie' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'IP' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'hits' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'index_debug' => 
    array (
      'phash' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'debuginfo' => 
      array (
        'type' => 'mediumtext',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
    ),
    'index_config' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'hidden' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'starttime' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'set_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'session_data' => 
      array (
        'type' => 'mediumtext',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'description' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'depth' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'table2index' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'alternative_source_pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'get_params' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'fieldlist' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'externalUrl' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'indexcfgs' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'chashcalc' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'filepath' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'extensions' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'timer_next_indexing' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'timer_frequency' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'timer_offset' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'url_deny' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'recordsbatch' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'records_indexonchange' => 
      array (
        'type' => 'tinyint',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'index_stat_word' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'word' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'index_stat_search_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'pageid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'tx_tqseo_cache' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'page_uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cache_section' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'cache_identifier' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'cache_content' => 
      array (
        'type' => 'blob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
    ),
    'tx_tqseo_sitemap' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'page_rootpid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'page_uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'page_language' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'page_url' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'page_hash' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'page_depth' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'page_change_frequency' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'tx_tqseo_setting_root' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cruser_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'is_sitemap' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'1\'',
      ),
      'is_sitemap_page_indexer' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'1\'',
      ),
      'is_sitemap_typolink_indexer' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'1\'',
      ),
      'is_sitemap_language_lock' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sitemap_page_limit' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'sitemap_priorty' => 
      array (
        'type' => 'float',
        'metaType' => 'F',
        'notnull' => 1,
        'default' => '\'1\'',
      ),
      'sitemap_priorty_depth_multiplier' => 
      array (
        'type' => 'float',
        'metaType' => 'F',
        'notnull' => 1,
        'default' => '\'1\'',
      ),
      'sitemap_priorty_depth_modificator' => 
      array (
        'type' => 'float',
        'metaType' => 'F',
        'notnull' => 1,
        'default' => '\'1\'',
      ),
      'is_robotstxt' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'1\'',
      ),
      'is_robotstxt_sitemap_static' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'robotstxt' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'robotstxt_additional' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'deleted' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'tx_realurl_pathcache' => 
    array (
      'cache_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'page_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'language_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'rootpage_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'mpvar' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'pagepath' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'expire' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'tx_realurl_uniqalias' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tablename' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'field_alias' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'field_id' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'value_alias' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'value_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'lang' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'expire' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'tx_realurl_chashcache' => 
    array (
      'spurl_hash' => 
      array (
        'type' => 'char',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'chash_string' => 
      array (
        'type' => 'varchar',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'spurl_string' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
    ),
    'tx_realurl_urldecodecache' => 
    array (
      'url_hash' => 
      array (
        'type' => 'char',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'spurl' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'content' => 
      array (
        'type' => 'blob',
        'metaType' => 'B',
        'notnull' => 0,
      ),
      'page_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'rootpage_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'tx_realurl_urlencodecache' => 
    array (
      'url_hash' => 
      array (
        'type' => 'char',
        'metaType' => 'C',
        'notnull' => 0,
        'default' => '\'\'',
      ),
      'origparams' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'internalExtras' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'content' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'page_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'tx_realurl_errorlog' => 
    array (
      'url_hash' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'url' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'error' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'last_referer' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'counter' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'cr_date' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'rootpage_id' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'tx_realurl_redirects' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'url_hash' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'url' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'destination' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'last_referer' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'counter' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'has_moved' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'domain_limit' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
    ),
    'tx_formhandler_log' => 
    array (
      'uid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
      ),
      'pid' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'tstamp' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'crdate' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 1,
        'default' => '\'0\'',
      ),
      'ip' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'params' => 
      array (
        'type' => 'text',
        'metaType' => 'XL',
        'notnull' => 0,
      ),
      'is_spam' => 
      array (
        'type' => 'int',
        'metaType' => 'I8',
        'notnull' => 0,
        'default' => '\'0\'',
      ),
      'key_hash' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
      'unique_hash' => 
      array (
        'type' => 'tinytext',
        'metaType' => 'C',
        'notnull' => 0,
      ),
    ),
  ),
  'primaryKeys' => 
  array (
    'be_groups' => 'uid',
    'be_sessions' => 'ses_id,ses_name',
    'be_users' => 'uid',
    'cache_imagesizes' => 'md5filename',
    'pages' => 'uid',
    'sys_registry' => 'uid',
    'sys_be_shortcuts' => 'uid',
    'sys_news' => 'uid',
    'sys_filemounts' => 'uid',
    'sys_file_storage' => 'uid',
    'sys_file' => 'uid',
    'sys_file_processedfile' => 'uid',
    'sys_file_reference' => 'uid',
    'sys_file_collection' => 'uid',
    'sys_collection' => 'uid',
    'sys_collection_entries' => 'uid',
    'sys_history' => 'uid',
    'sys_lockedrecords' => 'uid',
    'sys_refindex' => 'hash',
    'sys_log' => 'uid',
    'sys_language' => 'uid',
    'sys_category' => 'uid',
    'cf_cache_hash' => 'id',
    'cf_cache_hash_tags' => 'id',
    'cf_cache_pages' => 'id',
    'cf_cache_pages_tags' => 'id',
    'cf_cache_pagesection' => 'id',
    'cf_cache_pagesection_tags' => 'id',
    'cf_cache_rootline' => 'id',
    'cf_cache_rootline_tags' => 'id',
    'cf_extbase_reflection' => 'id',
    'cf_extbase_reflection_tags' => 'id',
    'cf_extbase_object' => 'id',
    'cf_extbase_object_tags' => 'id',
    'cf_extbase_typo3dbbackend_tablecolumns' => 'id',
    'cf_extbase_typo3dbbackend_tablecolumns_tags' => 'id',
    'cf_extbase_datamapfactory_datamap' => 'id',
    'cf_extbase_datamapfactory_datamap_tags' => 'id',
    'cf_workspaces_cache' => 'id',
    'cf_workspaces_cache_tags' => 'id',
    'cache_typo3temp_log' => 'md5hash',
    'cache_md5params' => 'md5hash',
    'cache_treelist' => 'md5hash',
    'fe_groups' => 'uid',
    'fe_session_data' => 'hash',
    'fe_sessions' => 'ses_id,ses_name',
    'fe_users' => 'uid',
    'pages_language_overlay' => 'uid',
    'sys_domain' => 'uid',
    'sys_template' => 'uid',
    'tt_content' => 'uid',
    'backend_layout' => 'uid',
    'tx_extensionmanager_domain_model_repository' => 'uid',
    'tx_extensionmanager_domain_model_extension' => 'uid',
    'sys_preview' => 'keyword',
    'static_tsconfig_help' => 'uid',
    'tx_impexp_presets' => 'uid',
    'sys_note' => 'uid',
    'tx_rtehtmlarea_acronym' => 'uid',
    'tx_rsaauth_keys' => 'uid',
    'tx_scheduler_task' => 'uid',
    'sys_workspace' => 'uid',
    'sys_workspace_stage' => 'uid',
    'static_territories' => 'uid',
    'static_countries' => 'uid',
    'static_country_zones' => 'uid',
    'static_currencies' => 'uid',
    'static_languages' => 'uid',
    'tx_dbal_debuglog' => 'uid',
    'tx_dbal_debuglog_where' => 'uid',
    'tx_templavoila_tmplobj' => 'uid',
    'tx_templavoila_datastructure' => 'uid',
    'tx_crawler_queue' => 'qid',
    'tx_crawler_configuration' => 'uid',
    'index_phash' => 'phash',
    'index_fulltext' => 'phash',
    'index_rel' => 'phash,wid',
    'index_words' => 'wid',
    'index_section' => 'uniqid',
    'index_grlist' => 'uniqid',
    'index_stat_search' => 'uid',
    'index_debug' => 'phash',
    'index_config' => 'uid',
    'index_stat_word' => 'uid',
    'tx_tqseo_cache' => 'uid',
    'tx_tqseo_sitemap' => 'uid',
    'tx_tqseo_setting_root' => 'uid',
    'tx_realurl_pathcache' => 'cache_id',
    'tx_realurl_uniqalias' => 'uid',
    'tx_realurl_chashcache' => 'spurl_hash',
    'tx_realurl_urldecodecache' => 'url_hash',
    'tx_realurl_urlencodecache' => 'url_hash',
    'tx_realurl_errorlog' => 'url_hash,rootpage_id',
    'tx_realurl_redirects' => 'uid',
    'tx_formhandler_log' => 'uid',
  ),
);
#1361536376    t3lib_db193612    