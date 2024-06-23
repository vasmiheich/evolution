<?php
/**
 * EVO Manager language file
 *
 * @version 3.1.x
 * @date 2023/11/28
 * @author The EVO Project Team
 *
 * @language English
 * @package modx
 * @subpackage manager
 *
 * Please commit your language changes on Transifex (https://www.transifex.com/projects/p/modx-evolution/) or on GitHub (https://github.com/modxcms/evolution).
 */
//$modx_textdir = 'rtl'; // uncomment this line for RTL languages
$modx_lang_attribute = 'zh'; // Manager HTML/XML Language Attribute see http://en.wikipedia.org/wiki/ISO_639-1
$modx_manager_charset = 'UTF-8';

$_lang["about_msg"] = 'Evolution CMS is a <a href="https://evo-cms.com/" target="_blank">PHP Application Framework and Content Management System</a> licensed under the <a href="https://www.gnu.org/licenses/gpl-3.0.html">GNU GPL</a>.';
$_lang["about_title"] = '关于EVO';

// days
$_lang["monday"] = '星期一';
$_lang["tuesday"] = '星期而';
$_lang["wednesday"] = '星期三';
$_lang["thursday"] = '星期四';
$_lang["friday"] = '星期五';
$_lang["saturday"] = '星期六';
$_lang["sunday"] = '星期天';

// templates
$_lang["template"] = '模板';
$_lang["templates"] = 'Templates';
$_lang['templatecontroller'] = 'Template Controller';
$_lang["template_assignedtv_tab"] = 'Assigned Template Variables';
$_lang["template_code"] = '模板代码 (html)';
$_lang["template_desc"] = '描述';
$_lang["template_edit_tab"] = 'Edit Template';
$_lang["template_inuse"] = 'This template is in use. Please set the documents using the template to another template. Documents using this template:';
$_lang["template_management_msg"] = '选择你需要编辑的模板。';
$_lang["template_msg"] = '你可以在这里添加编辑/模板，当你站点的CACHE没清空的时候，你是不可以看见COOKIE里的文件采取了这个新的模板，当然你可以用预览功能来看到他。';
$_lang["template_name"] = '模板名';
$_lang["template_no_tv"] = 'No Template Variables have been assigned to this Template yet.';
$_lang["template_notassigned_tv"] = 'These Template Variables are available for assigning.';
$_lang["template_reset_all"] = '设置所有的文档使用默认的模板';
$_lang["template_reset_specific"] = '只设置 \'%s\' 页面';
$_lang["template_assigned_blade_file"] = '对应的BLADE文件';
$_lang["template_create_blade_file"] = '保存时创建模板文件';
$_lang["template_selectable"] = 'Template selectable when creating or editing ressources.';
$_lang["template_title"] = '建立编辑模板';
$_lang["template_tv_edit"] = 'Edit the TV sort order';
$_lang["template_tv_edit_message"] = 'Drag to reorder the Template Variables for this template.';
$_lang["template_tv_edit_title"] = 'Template Variable Sort Order';
$_lang["template_tv_msg"] = 'The Template Variables assigned to this Template are listed below.';

// tmplvars
$_lang["tv"] = '模板变量';
$_lang["tmplvar"] = 'Template Variable';
$_lang["tmplvars"] = '模板变量';
$_lang["tmplvar_access_msg"] = '选择允许修改这个变量的内容和值的文档组';
$_lang["tmplvar_change_template_msg"] = '改变这个模板将让页面重新加载模板变量（TV）.所有没有保存的改动将丢失.\n\n 你确认要改变模板吗？';
$_lang["tmplvar_inuse"] = '以下文档正在使用模板变量. 要继续的话请按删除（Delete），否则请按退出（Cancel）.';
$_lang["tmplvar_tmpl_access"] = '模板访问';
$_lang["tmplvar_tmpl_access_msg"] = '选择允许处理和利用变量的模板';
$_lang["tmplvars_binding_msg"] = '这个域支持@命令捆绑来的数据';
$_lang["tmplvars_caption"] = '标题';
$_lang["tmplvars_default"] = '默认值';
$_lang["tmplvars_description"] = '描述';
$_lang["tmplvars_elements"] = '输入选项值';
$_lang["tmplvars_inherited"] = 'Value inherited';
$_lang["tmplvars_management_msg"] = '在这里你可以管理你的文档额外的变量域.';
$_lang["tmplvars_msg"] = '在这里你可以添加/编辑模板变量。这模板变量对于选择的模板来说必须是激活的，只有这样他们才可以通过切片来存取。.';
$_lang["tmplvars_name"] = '变量名';
$_lang["tmplvars_novars"] = '没发现模板变量';
$_lang["tmplvars_rank"] = '排列顺序';
$_lang["tmplvars_rank_edit_message"] = 'Drag to reorder the Template Variables.';
$_lang["tmplvars_reset_params"] = '重设参数';
$_lang["tmplvars_title"] = 'Create/edit Template Variable';
$_lang["tmplvars_type"] = '输入类型';
$_lang["tmplvars_widget"] = '窗口部件';
$_lang["tmplvars_widget_prop"] = '窗口部件设置';
$_lang["role_no_tv"] = 'No Variables have been assigned to this Role yet.';
$_lang["role_notassigned_tv"] = 'These Variables are available for assigning.';
$_lang["role_tv_msg"] = 'The Variables assigned to this Role are listed below.';
$_lang["tmplvar_roles_access_msg"] = 'Select the Roles that are allowed to access/process this Template Variable';

// snippets
$_lang["snippet"] = '切片';
$_lang["snippets"] = 'Snippets';
$_lang["snippet_code"] = '切片代码 (php)';
$_lang["snippet_desc"] = '描述';
$_lang["snippet_execonsave"] = '保存切片后执行它.';
$_lang["snippet_management_msg"] = '选择你需要编辑的切片snippet';
$_lang["snippet_msg"] = '你可以在这里添加编辑切片，记住, 切片snippets 是未加工的PHP代码，如果你希望它能输出内容到你模板指定的位置，你就需要这个切片返回一个值。';
$_lang["snippet_name"] = '切片名';
$_lang["snippet_properties"] = '默认属性';
$_lang["snippet_title"] = '建立编辑切片snippet';

// chunks
$_lang["htmlsnippet"] = 'Chunk';
$_lang["htmlsnippets"] = 'Chunks';
$_lang["htmlsnippet_desc"] = '描述';
$_lang["htmlsnippet_management_msg"] = '你可以在这里选择你需要编辑的块。';
$_lang["htmlsnippet_msg"] = '你可以在这里建立编辑块。记住，块是HTML代码组合，任何PHP代码将不会执行。';
$_lang["htmlsnippet_name"] = '块名';
$_lang["htmlsnippet_title"] = '建立/编辑块';
$_lang["chunk"] = '块元素';
$_lang["chunk_code"] = '块元素代码 (html)';
$_lang["chunk_multiple_id"] = 'Error: Multiple Chunks share the same unique ID.';
$_lang["chunk_no_exist"] = 'Chunk does not exist.';

// plugins
$_lang["plugin"] = '插件';
$_lang["plugins"] = 'Plugins';
$_lang["plugin_code"] = '插件代码 (php)';
$_lang["plugin_config"] = '插件配置';
$_lang["plugin_desc"] = '描述';
$_lang["plugin_disabled"] = '禁用插件';
$_lang["plugin_event_msg"] = '选择插件所归属的时间.';
$_lang["plugin_management_msg"] = '在这里你可以选择你想编辑的切片';
$_lang["plugin_msg"] = '在这里你可以建立/编辑插件，插件是一些PHP代码，当你选择的事件触发的时候，插件就被EVO系统调用.';
$_lang["plugin_name"] = '插件名';
$_lang["plugin_priority"] = 'Edit Plugin Execution Order by Event';
$_lang["plugin_priority_instructions"] = 'Drag to reorder the Plugins under each Event header. The first plugin to execute should go at the top.';
$_lang["plugin_priority_title"] = 'Plugin Execution Order';
$_lang["purge_plugin"] = 'Purge obsolete plugins';
$_lang["purge_plugin_confirm"] = 'Are you sure you want to purge obsolete plugins?';
$_lang["plugin_title"] = '建立/编辑插件';

// categories
$_lang["category"] = 'Category';
$_lang["categories"] = 'Categories';
$_lang["category_heading"] = 'Category';
$_lang["category_manager"] = 'Category Manager';
$_lang["category_management"] = 'Category management';
$_lang["category_msg"] = 'View and edit all Elements grouped by category.';

// file
$_lang["file_delete_file"] = 'Delete file';
$_lang["file_delete_folder"] = 'Delete directory';
$_lang["file_deleted"] = '成功！';
$_lang["file_download_file"] = '下载文件';
$_lang["file_download_unzip"] = '解压文件';
$_lang["file_folder_chmod_error"] = 'Unable to change permissions, you will need to change permissions outside of Evolution CMS.';
$_lang["file_folder_created"] = '建立文件夹成功！';
$_lang["file_folder_deleted"] = '成功删除文件夹!';
$_lang["file_folder_not_created"] = '不能建立文件夹';
$_lang["file_folder_not_deleted"] = '不能删除文件夹，请先确认文件夹是否是空的！';
$_lang["file_not_deleted"] = '失败！';
$_lang["file_not_saved"] = '文件不能保存，请确认目的文件目录是否可写！';
$_lang["file_saved"] = '文件上传成功！';
$_lang["file_unzip"] = '解压成功！';
$_lang["file_unzip_fail"] = '解压失败！';

// files
$_lang["files"] = 'Files';
$_lang["files_files"] = '文件Files';
$_lang["files_access_denied"] = '拒绝访问！';
$_lang["files_data"] = '数据';
$_lang["files_dir_listing"] = '目录列表:';
$_lang["files_directories"] = '目录';
$_lang["files_directory_is_empty"] = 'This directory is empty.';
$_lang["files_dirwritable"] = '目录可写吗？';
$_lang["files_editfile"] = '编辑文件';
$_lang["files_file_type"] = '文件类型：';
$_lang["files_filename"] = '文件名';
$_lang["files_fileoptions"] = '选项';
$_lang["files_filesize"] = '文件大小';
$_lang["files_filetype_notok"] = '不允许上传本类型文件!';
$_lang["files_management"] = 'Manage Files';
$_lang["files_management_no_permission"] = 'You do not have enough permissions to view or edit these files. Ask the administrator to grant you access to <b>%s</b>.';
$_lang["files_modified"] = '修改Modified';
$_lang["files_top_level"] = '顶层目录';
$_lang["files_up_level"] = '上层目录';
$_lang["files_upload_copyfailed"] = '拷贝文件到指定目录失败 - 上传失败!';
$_lang["files_upload_error"] = '错误！';
$_lang["files_upload_error0"] = '你的上传出现了问题.';
$_lang["files_upload_error1"] = '上传文件太大！';
$_lang["files_upload_error2"] = '上传文件太大了！';
$_lang["files_upload_error3"] = '你上传的文件只发送了一部分。';
$_lang["files_upload_error4"] = '你必须选择一上传的文件';
$_lang["files_upload_error5"] = '上传发生了问题！';
$_lang["files_upload_inhibited_msg"] = '<b>传输性能被评比</b> - 请确定服务器是否可以上传或文件目录是否可写<br />';
$_lang["files_upload_ok"] = '文件上传成功!';
$_lang["files_upload_permissions_error"] = 'Possible permission problems - the directory you want to upload to needs to be writable by your webserver.';
$_lang["files_uploadfile"] = '上传文件';
$_lang["files_uploadfile_msg"] = '选择一上传的文件：';
$_lang["files_uploading"] = '上传 <b>%s</b> 到 <b>%s/</b><br />';
$_lang["files_viewfile"] = '查阅文件';

// modules
$_lang["module"] = 'Module';
$_lang["modules"] = '模块';
$_lang["module_code"] = '模块代码 (php)';
$_lang["module_config"] = '模块配置';
$_lang["module_desc"] = '描述';
$_lang["module_disabled"] = '禁用模块';
$_lang["module_edit_click_title"] = '点这里运行模块';
$_lang["module_group_access_msg"] = '选择可以在后台执行模块的用户组.';
$_lang["module_management"] = '管理模块';
$_lang["module_management_msg"] = '在这里你可以选择你希望运行或编辑的模块，要运行模块的话，就在他的图标上点击，如果你要修改编辑的话，就点击他的名字。';
$_lang["module_msg"] = '在这里你可以建立/编辑模块. 模块就是一些资源的集合 (比如插件，切片等等).';
$_lang["module_name"] = '模块名';
$_lang["module_resource_msg"] = '在这里你可以添加/移除模块所依赖的资源，要添加一个新的资源就点击下面的添加按钮。';
$_lang["module_resource_title"] = '模块依赖性';
$_lang["module_title"] = '建立/编辑模块';
$_lang["module_viewdepend_msg"] = '在这里你可以查看分配给模块的资源，在\'倚赖性\'上点击就可以修改它的依赖性了。';

// elements
$_lang["element"] = '资源';
$_lang["elements"] = '资源';
$_lang["element_categories"] = 'Combined View';
$_lang["element_filter_msg"] = 'Type here to filter list';
$_lang["element_management"] = '资源管理';
$_lang["element_name"] = '资源名';
$_lang["element_selector_msg"] = '选择下面的资源然后按\'插入Insert\'键.';
$_lang["element_selector_title"] = '资源选择器';

// resource
$_lang["resource"] = '文档Document';
$_lang["resource_alias"] = '文件别名 alias';
$_lang["resource_alias_help"] = '你可以设置一文件的别名，这样，你的文件就可以通过如此格式来访问?\n\nhttp://yourserver/alias\n\n当然，这只有在你设置了friendly URLs后才起作用！';
$_lang["resource_content"] = '文档内容';
$_lang["resource_description"] = '描述';
$_lang["resource_description_help"] = '你可输入文档描述，这个并非必须输入。';
$_lang["resource_duplicate"] = '复制文档Duplicate Document';
$_lang["resource_long_title_help"] = '你可以在这里设置你文档的长标题。这方便了搜索引擎的工作，也添加了文档的描述。';
$_lang["resource_metatag_help"] = 'Select the META tags or keywords you wish to assign to this Resource. Hold down the CTRL key to select multiple keywords or meta tags.';
$_lang["resource_opt_contentdispo"] = '内容部署';
$_lang["resource_opt_contentdispo_help"] = 'Use the content disposition field to specify how this Resource will be handled by the web browser. For file downloads select the Attachment option.';
$_lang["resource_opt_emptycache"] = '清除高速缓存吗？';
$_lang["resource_opt_emptycache_help"] = '选择这个选择，将让EVO在保存你的文档的时候清空CACHE，这样你的访问者就看不到这个文档的老版本了。';
$_lang["resource_opt_folder"] = '作为文件夹吗？';
$_lang["resource_opt_folder_help"] = '选择这个选项就是让本文档作为一个文件夹来发布，你不需要为此过多的担心，因为EVO 会为你自动设置好这些。';
$_lang["resource_opt_menu_index"] = '菜单索引号';
$_lang["resource_opt_menu_index_help"] = '菜单索引就是你菜单的序号，你可以在你的切片snippet(s)中利用他来实现排序选择等功能。';
$_lang["resource_opt_menu_title"] = '菜单标题';
$_lang["resource_opt_menu_title_help"] = 'Menu title is an optional field used to display a short title in menu Snippet(s) or Modules.';
$_lang["resource_opt_published"] = '发布吗？';
$_lang["resource_opt_published_help"] = '选择这个选项，将使你在编辑完文档后就能立即发布你的文档。';
$_lang["resource_opt_richtext"] = '使用富文本编辑器吗？';
$_lang["resource_opt_richtext_help"] = '选择这个选项将让本文档能使用富文本编辑器，如果你的内容里有 JavaScript和表单，请取消这个选择而利用HTML格式来编辑，以免EVO为你自动剖析文本。';
$_lang["resource_opt_show_menu"] = '显示在菜单中';
$_lang["resource_opt_show_menu_help"] = 'Select this option to show Resource inside a web menu. Please note that some Menu Builders might choose to ignore this option.';
$_lang["resource_opt_trackvisit_help"] = 'Log each visitor\'s visit to this page';
$_lang["resource_overview"] = 'Resource overview';
$_lang["resource_parent"] = '文档之父本。';
$_lang["resource_parent_help"] = '点上面文件夹的图标来激活或禁止父本的选择，当激活的时候，你可以从文档树中选择一文档作为本文档的父本。';
$_lang["resource_permissions_error"] = 'Assign this Resource to at least one Resource Group to which you have access.';
$_lang["resource_setting"] = '文档设置';
$_lang["resource_summary"] = '摘要 (介绍)';
$_lang["resource_summary_help"] = '输入文档的大纲';
$_lang["resource_title"] = '标题';
$_lang["resource_title_help"] = '输入文档标题名字. 避免使用反斜线！';
$_lang["resource_to_be_moved"] = '要移动的文档。';
$_lang["resource_type"] = 'Resource Type';
$_lang["resource_type_message"] = 'Weblinks reference Resources on the Internet including another Evolution CMS Resource, an external page, or an image or other file on the Internet. Weblinks should have a text/html Internet Media Type and Inline Content-Disposition.';
$_lang["resource_type_weblink"] = 'Weblink';
$_lang["resource_type_webpage"] = 'Web page';
$_lang["resource_weblink_help"] = '输入连接地址';
$_lang["resources_in_container"] = 'Resources in this Container';
$_lang["resources_in_container_no"] = 'This Container does not have child-Resources.';

// role
$_lang["role"] = 'Role';
$_lang["role_about"] = '查看关于页面';
$_lang["role_actionok"] = '查看完成行为';
$_lang["role_assets_images"] = 'Manage assets/images';
$_lang["role_assets_files"] = 'Manage assets/files';
$_lang["role_bk_manager"] = '使用备份管理';
$_lang["role_cache_refresh"] = '清空站点cache';
$_lang["role_category_manager"] = 'Use the Category Manager';
$_lang["role_change_password"] = '改变密码';
$_lang["role_change_resourcetype"] = '更改資源類型';
$_lang["role_chunk_management"] = 'Chunk management';
$_lang["role_config_management"] = '管理配置';
$_lang["role_content_management"] = '管理内容';
$_lang["role_create_chunk"] = 'Create new Chunks';
$_lang["role_create_doc"] = '建立新文档';
$_lang["role_create_plugin"] = '建立新的插件';
$_lang["role_create_snippet"] = '建立新的切片snippets';
$_lang["role_create_template"] = '建立新的站点模板';
$_lang["role_credits"] = '查看信用';
$_lang["role_delete_chunk"] = 'Delete Chunks';
$_lang["role_delete_doc"] = '删除文档';
$_lang["role_delete_eventlog"] = '删除事件日志';
$_lang["role_delete_module"] = '删除模块';
$_lang["role_delete_plugin"] = '删除插件';
$_lang["role_delete_role"] = '删除角色';
$_lang["role_delete_snippet"] = '删除切片snippets';
$_lang["role_delete_template"] = '删除模板';
$_lang["role_delete_user"] = '删除用户';
$_lang["role_delete_web_user"] = '删除网站用户';
$_lang["role_edit_chunk"] = 'Edit Chunks';
$_lang["role_edit_doc"] = '编辑一个文档';
$_lang["role_edit_doc_metatags"] = '编辑文档的META标签和关键词';
$_lang["role_edit_module"] = '编辑模块';
$_lang["role_edit_plugin"] = '编辑插件';
$_lang["role_edit_role"] = '编辑角色';
$_lang["role_edit_settings"] = '改变站点设置';
$_lang["role_edit_snippet"] = '编辑切片snippets';
$_lang["role_edit_template"] = '编辑站点模板';
$_lang["role_edit_user"] = '编辑用户';
$_lang["role_edit_web_user"] = '编辑新的网站用户';
$_lang["role_empty_trash"] = 'Permanently purge deleted Resources';
$_lang["role_errors"] = '查看错误对话框';
$_lang["role_eventlog_management"] = '事件日志管理';
$_lang["role_export_static"] = 'Export Static HTML';
$_lang["role_file_management"] = 'File Management';
$_lang["role_file_manager"] = '使用文件管理器';
$_lang["role_frames"] = '管理请求框架';
$_lang["role_help"] = '查看帮助文件';
$_lang["role_home"] = '管理主页面';
$_lang["role_import_static"] = 'Import HTML';
$_lang["role_logout"] = '退出管理';
$_lang["role_list_module"] = 'List Module';
$_lang["role_manage_metatags"] = '管理站点的META标签和关键词';
$_lang["role_management_msg"] = '在这里你可以选择一需要编辑的角色。';
$_lang["role_management_title"] = '角色管理';
$_lang["role_messages"] = '查看/发送消息';
$_lang["role_module_management"] = '模块管理';
$_lang["role_name"] = '角色名字';
$_lang["role_new_module"] = '建立模块';
$_lang["role_new_role"] = '建立新角色';
$_lang["role_new_user"] = '建立新的用户';
$_lang["role_new_web_user"] = '建立新的网站用户';
$_lang["role_plugin_management"] = '插件管理';
$_lang["role_publish_doc"] = 'Publish Resources';
$_lang["role_remove_locks"] = 'Remove Locks';
$_lang["role_role_management"] = '管理角色';
$_lang["role_run_module"] = '运行模块';
$_lang["role_save_chunk"] = 'Save Chunks';
$_lang["role_save_doc"] = '保存文档';
$_lang["role_save_module"] = '保存模块';
$_lang["role_save_password"] = '保存密码';
$_lang["role_save_plugin"] = '保存插件';
$_lang["role_save_role"] = '保存角色';
$_lang["role_save_snippet"] = '保存切片snippets';
$_lang["role_save_template"] = '保存模板';
$_lang["role_save_user"] = '保存用户';
$_lang["role_save_web_user"] = '保存网站用户';
$_lang["role_snippet_management"] = '管理Snippet切片';
$_lang["role_template_management"] = '管理模板';
$_lang["role_title"] = '建立/编辑角色';
$_lang["role_udperms"] = '管理许可';
$_lang["role_user_management"] = '管理用户';
$_lang["role_view_docdata"] = '查看文档数据';
$_lang["role_view_eventlog"] = '查看事件日志';
$_lang["role_view_logs"] = '查看系统日志';
$_lang["role_view_unpublished"] = '查看未发布文档';
$_lang["role_web_access_persmissions"] = '网站访问许可';
$_lang["role_web_user_management"] = '网站用户管理';

// user
$_lang["user"] = '用户';
$_lang["users"] = '用户';
$_lang["user_block"] = '阻止';
$_lang["user_blockedafter"] = '以后阻止';
$_lang["user_blockeduntil"] = '阻止到为止';
$_lang["user_changeddata"] = 'Your data has been changed. Please log in again.';
$_lang["user_country"] = '国家';
$_lang["user_dob"] = '生日';
$_lang["user_doesnt_exist"] = 'User does not exist';
$_lang["user_edit_self_msg"] = '<b>当你保存你的新信息后，你该退出然后再登陆，</b><br />同样，你该选择生成新的密码，新密码会通过EMAIL告诉你';
$_lang["user_email"] = 'E-mail地址';
$_lang["user_failedlogincount"] = '失败的登陆';
$_lang["user_fax"] = '传真';
$_lang["user_female"] = '女';
$_lang["user_full_name"] = '全名';
$_lang["user_first_name"] = 'First name';
$_lang["user_last_name"] = 'Last Name';
$_lang["user_middle_name"] = 'Middle Name';
$_lang["user_gender"] = '性别';
$_lang["user_is_blocked"] = '这个用户被阻止了！';
$_lang["user_logincount"] = '登陆次数';
$_lang["user_male"] = '男';
$_lang["user_management_msg"] = '你可以在这里选择你需要编辑的内容管理者，内容管理者就是那些可以登陆到后台管理内容的人。';
$_lang["user_management_title"] = '管理内容管理者';
$_lang["user_mobile"] = '移动手机号码';
$_lang["user_phone"] = '电话号码';
$_lang["user_photo"] = '用户图片';
$_lang["user_photo_message"] = '输入图象地址或上传一文件到服务器来作为用户图片。';
$_lang["user_prevlogin"] = '最后登陆';
$_lang["user_role"] = '用户角色';
$_lang["no_user_role"] = 'No user role';
$_lang["user_state"] = '省份';
$_lang["user_title"] = '建立/编辑用户';
$_lang["user_upload_message"] = ' If you wish to stop this User uploading any filetypes in this category, make sure that the \'Use Main Configuration Setting\' checkbox is not ticked and leave the field blank.';
$_lang["user_use_config"] = 'Use System Configuration Setting';
$_lang["user_verification"] = 'User is verified';
$_lang["user_zip"] = 'Zip';
$_lang["username"] = '用户名';
$_lang["username_unique"] = 'User name is already in use!';
$_lang["user_street"] = 'Street';
$_lang["user_city"] = 'City';
$_lang["user_other"] = 'Other';

// add
$_lang["add"] = '添加组';
$_lang["add_chunk"] = '添加块元素';
$_lang["add_doc"] = '添加文档';
$_lang["add_folder"] = '新文件夹';
$_lang["add_plugin"] = '添加插件';
$_lang["add_resource"] = '新文档';
$_lang["add_snippet"] = '添加切片';
$_lang["add_tag"] = '添加标签';
$_lang["add_template"] = '添加模板';
$_lang["add_tv"] = '添加模板变量';
$_lang["add_weblink"] = '新连接';

// new
$_lang["new_category"] = 'New Category';
$_lang["new_file_permissions_message"] = 'When uploading a new file in the File Manager, the File Manager will attempt to change the file permissions to those entered in this setting. This may not work on some setups, such as IIS, in which case you will need to manually change the permissions.';
$_lang["new_file_permissions_title"] = 'New File Permissions';
$_lang["new_folder_permissions_message"] = 'When creating a new directory in the File Manager, the File Manager will attempt to change the directory permissions to those entered in this setting. This may not work on some setups, such as IIS, in which case you will need to manually change the permissions.';
$_lang["new_folder_permissions_title"] = 'New Directory Permissions';
$_lang["new_permission"] = 'New Permission';
$_lang["new_htmlsnippet"] = '建立新块';
$_lang["new_keyword"] = '添加新的关键词:';
$_lang["new_module"] = '新模块';
$_lang["new_parent"] = '新父本';
$_lang["new_plugin"] = '新插件';
$_lang["new_role"] = '建立新角色role';
$_lang["new_snippet"] = '新snippet';
$_lang["new_template"] = '新模板';
$_lang["new_tmplvars"] = '新的模板变量';
$_lang["new_user"] = '新用户';
$_lang["new_web_user"] = '新网站用户';
$_lang["new_resource"] = '新文档';

// manage
$_lang["manage_categories"] = 'Manage Categories';
$_lang["manage_depends"] = '依赖性管理';
$_lang["manage_files"] = '文件管理';
$_lang["manage_htmlsnippets"] = 'Manage Chunks';
$_lang["manage_metatags"] = '管理META标签和关键词';
$_lang["manage_modules"] = '管理模块';
$_lang["manage_plugins"] = 'Manage Plugins';
$_lang["manage_snippets"] = 'Manage Snippets';
$_lang["manage_templates"] = 'Manage Templates';
$_lang["manage_documents"] = 'Manage Documents';
$_lang["manage_permission"] = 'Manage Permissions';

// move
$_lang["move"] = '移动';
$_lang["move_resource"] = '移动文档';
$_lang["move_resource_message"] = '通过在文档目录树中选择一作为父本的文档，你可以移动一个文档包括它的子文件作为它文档的子文件，如果你选择来作为父本的文档不是文件夹类型，程序将自动把它设置成文件夹类型，请在文档目录树中选择一个新的文档作为其父本。';
$_lang["move_resource_new_parent"] = '请在文档目录树中选择一新父本。';
$_lang["move_resource_title"] = '移动文档。';

$_lang["access_permissions"] = '访问许可';
$_lang["access_permission_denied"] = '你没有访问这文档的权限。';
$_lang["access_permission_parent_denied"] = '你不允许在这里建立文档！';
$_lang["access_permissions_add_resource_group"] = '建立新的文档组';
$_lang["access_permissions_add_user_group"] = '建立新的用户组';
$_lang["access_permissions_docs_message"] = '你可以在这里设置文档归属于哪个文档组：';
$_lang["access_permissions_group_link"] = 'Create a new group link';
$_lang["access_permissions_introtext"] = '你可以在这里设置文档组和用户组来控制访问权的分配，要添加一个用户到用户组，你就编辑用户然后选择他归宿于那个组，要添加一个文档到一个用户组，就在你编辑文档的时候选择本文档从属哪个组就可以了。';
$_lang["access_permissions_link_to_group"] = 'to Resource Group';
$_lang["access_permissions_context"] = 'in context';
$_lang["access_permissions_link_user_group"] = 'Link User Group';
$_lang["access_permissions_links"] = '用户组和文档组的连接';
$_lang["access_permissions_links_tab"] = '这里是我们分配用户组权限以对应到文档组的地方。 (比如编辑文档，建立子文档的权利) . 要连接一个文档组到一个用户组，选择一个组直接点\'link 连接\'就可以了。要移除他们的连接就直接点 \'移除->Remove ->\'就可以，这样连接就会立即失效。';
$_lang["access_permissions_no_resources_in_group"] = '没有。';
$_lang["access_permissions_no_users_in_group"] = '没有。';
$_lang["access_permissions_off"] = '<span class=\'warning\'>访问权控制没激活！</span> 这意味着这里的任何改动将不起任何作用，除非你激活了访问权控制。';
$_lang["access_permissions_resource_groups"] = '文档组';
$_lang["access_permissions_resources_in_group"] = '<b>组里的文档：</b> ';
$_lang["access_permissions_resources_tab"] = '你可以在这里查看建立了哪些文档组。你也可以建立/重命名/删除组。查看哪些文档归属于哪个文档组，(把鼠标放在文件的ID上就可以看见它的名字). 要在阻力添加/移除一个用户，就直接编辑文档。';
$_lang["access_permissions_user_toggle"] = 'Toggle access permissions';
$_lang["access_permissions_user_groups"] = '用户组';
$_lang["access_permissions_user_message"] = 'Select which User Groups this user belongs to:';
$_lang["access_permissions_users_in_group"] = '<b>在本组的用户:</b> ';
$_lang["access_permissions_users_tab"] = '你可以在这里查看建立了哪些用户组。你也可以建立/重命名/删除组。可以查看某个用户归属于哪些组。 要在组里添加/移除一个用户，就直接编辑用户。管理员 (users who have been assigned the role with ID 1)永远都拥有查看操作文件的权利，因此他不需要归属于任何组都可以。';

$_lang["users_list"] = 'Users list';
$_lang["documents_list"] = 'Resources list';

$_lang["account_email"] = 'Account email';
$_lang["actioncomplete"] = '<b>命令完成!</b><br /> - 请等候EVO清除它.';
$_lang["activity_message"] = 'This list shows the last Resources you created or edited:';
$_lang["activity_title"] = 'Recently edited/created Resources';

$_lang["administrator_role_message"] = '这个角色Role不可以被编辑或删除。';
$_lang["administrators"] = 'Administrators';
$_lang["after_saving"] = 'After saving';
$_lang["alert_delete_self"] = '你不可以删除你自己！';
$_lang["alias"] = '别名';
$_lang["all_doc_groups"] = '所有的文档组(公共的)';
$_lang["all_events"] = 'All Events';
$_lang["all_usr_groups"] = '全部用户组 (公共的)';
$_lang["allow_mgr_access"] = '管理员的界面访问';
$_lang["allow_mgr_access_message"] = 'Select this option to enable or disable access to the manager interface. <b>NOTE: If this option is set to no then the user will be redirected to the Manager Login Startup or Site Start web page.</b>';
$_lang["already_deleted"] = '已经被删除.';
$_lang["attachment"] = '附件';
$_lang["author_infos"] = 'Author information';
$_lang["automatic_alias_message"] = 'Select \'yes\' to have the system automatically generate a URL alias based on the Resource\'s page title when saving.';
$_lang["automatic_alias_title"] = '自动生成别名:';
$_lang["backup"] = '备份';
$_lang["bk_manager"] = '备份管理';
$_lang["block_message"] = '保存数据后，这个用户将被阻止!';
$_lang["blocked_minutes_message"] = 'Enter the number of minutes that a user will be blocked for if they reach their maximum number of allowed failed login attempts. Please enter this value as numbers only (no commas, spaces etc.)';
$_lang["blocked_minutes_title"] = 'Blocked Minutes';
$_lang["cache_files_deleted"] = '下面是被删除的文件：';
$_lang["cancel"] = '退出';
$_lang["captcha_code"] = '安全码Security code';
$_lang["captcha_message"] = '激活本选择，将加强网站的安全性，本功能生成的代码不可被黑客程序自动识别';
$_lang["captcha_title"] = '使用安全码：';
$_lang["captcha_words_default"] = 'EVO,Access,Better,BitCode,Chunk,Cache,Desc,Design,Excell,Enjoy,URLs,TechView,Gerald,Griff,Humphrey,Holiday,Intel,Integration,Joystick,Join(),Oscope,Genetic,Light,Likeness,Marit,Maaike,Niche,Netherlands,Ordinance,Oscillo,Parser,Phusion,Query,Question,Regalia,Righteous,Snippet,Sentinel,Template,Thespian,Unity,Enterprise,Verily,Tattoo,Veri,Website,WideWeb,Yap,Yellow,Zebra,Zygote';
$_lang["captcha_words_message"] = '你可以在这里输入一串机器码以让抗机器功能工作，用逗号（注意是英文状态下的逗号）隔开每一字符串，你最多可以输入225个字符。';
$_lang["captcha_words_title"] = '机器机密码';

$_lang["cfg_base_path"] = 'MODX_BASE_PATH';
$_lang["cfg_base_url"] = 'MODX_BASE_URL';
$_lang["cfg_manager_path"] = 'MODX_MANAGER_PATH';
$_lang["cfg_manager_url"] = 'MODX_MANAGER_URL';
$_lang["cfg_site_url"] = 'MODX_SITE_URL';

$_lang["change_name"] = '改变名字';
$_lang["change_password"] = '改密码';
$_lang["change_password_confirm"] = '重复密码';
$_lang["change_password_message"] = '输入两次你的密码，你的密码长度限制是6-15位。';
$_lang["change_password_new"] = '新密码';
$_lang["charset_message"] = '请选择你的后台管理编码。注意EVO虽然测试了大量的编码类型，但是并非全部测试过了，对于大部分语言来说，编码设置是ido-8859-1。多语言设置是utf-8。简体中文是gb2312。';
$_lang["charset_title"] = '编码:';

$_lang["cleaningup"] = '清除';
$_lang["clean_uploaded_filename"] = 'Use Transliteration for File Uploads';
$_lang["clean_uploaded_filename_message"] = 'Use the default or transalias settings for the file name to clean special characters from uploaded file names, preserving dot-characters (periods)';
$_lang["clear_log"] = '清除日志';
$_lang["click_to_context"] = '点击到关联菜单';
$_lang["click_to_edit_title"] = '点击这里编辑记录';
$_lang["click_to_view_details"] = '点击这里查看细节';
$_lang["close"] = '关闭';
$_lang["code"] = 'Code';
$_lang["collapse_tree"] = '收拢文件列表';
$_lang["comment"] = '评论';

$_lang["configcheck_admin"] = '请联系系统管理员，并把消息发送给他!';
$_lang["configcheck_cache"] = 'cache directory is not writable';
$_lang["configcheck_cache_msg"] = 'Evolution CMS cannot write to the cache directory. Evolution CMS will still function as expected, but no caching will take place. To solve this, make the \'cache\' directory writable.';
$_lang["configcheck_configinc"] = 'Config file still writable';
$_lang["configcheck_configinc_msg"] = 'Very naughty people could potentially wreak some havoc on your site and everything associated with it. <strong>Really.</strong> Please make your config file  (/[+MGR_DIR+]/includes/config.inc.php) read only!';
$_lang["configcheck_default_msg"] = '发生不知名的错误.';
$_lang["configcheck_errorpage_unavailable"] = 'Your site\'s Error page is not available.';
$_lang["configcheck_errorpage_unavailable_msg"] = 'This means that your Error page is not accessible to normal web surfers or does not exist. This can lead to a recursive looping condition and many errors in your site logs. Make sure there are no Webuser Groups assigned to the page.';
$_lang["configcheck_errorpage_unpublished"] = 'Your site\'s Error page is not published or does not exist.';
$_lang["configcheck_errorpage_unpublished_msg"] = 'This means that your Error page is inaccessible to the general public. Publish the page or make sure it is assigned to an existing Resource in your Site Tree in the Tools &gt; Configuration menu.';
$_lang["configcheck_filemanager_path"] = 'The currently set <a href="index.php?a=17&tab=4">File Manager path</a> seems incorrect.';
$_lang["configcheck_filemanager_path_msg"] = 'This can happen for example by moving your installation to a different directory or server. Please check and update your Evolution CMS configuration.';
$_lang["configcheck_hide_warning"] = '<a href="javascript:hideConfigCheckWarning(\'%s\');"><em>Don\'t show this again.</em></a>';
$_lang["configcheck_images"] = '图象目录不可写';
$_lang["configcheck_images_msg"] = '图象目录不可写或不存在，图象管理功能将不能运行！';
$_lang["configcheck_installer"] = '安装程序没删除';
$_lang["configcheck_installer_msg"] = 'The /install directory contains the installer for Evolution CMS. Just imagine what might happen if an evil person finds this directory and runs the installer! They\'d probably not get too far, because they need to enter some user information for the database, but it is still best to remove this directory from your server.';
$_lang["configcheck_lang_difference"] = '语言文件行数不正确';
$_lang["configcheck_lang_difference_msg"] = '当前选择的文件和默认的文件的语言行数不一样，这虽然不构成什么问题，但以为着你的语言文件需要更新了。';
$_lang["configcheck_notok"] = '一个或多个配置未通过设置: ';
$_lang["configcheck_ok"] = '检查通过，没有错误报告';
$_lang["configcheck_php_gdzip"] = 'GD and/or Zip PHP extensions not found';
$_lang["configcheck_php_gdzip_msg"] = 'Evolution CMS needs the GD and Zip extension enabled for PHP. While Evolution CMS will work without them, you will not be able to take full advantage of the built-in File Manager, Image Editor or Captcha for logins.';
$_lang["configcheck_rb_base_dir"] = 'The currently set <a href="index.php?a=17&tab=5">File base path</a> seems incorrect.';
$_lang["configcheck_rb_base_dir_msg"] = 'This can happen for example by moving your installation to a different directory or server. Please check and update your Evolution CMS configuration.';
$_lang["configcheck_register_globals"] = 'register_globals is set to ON in your php.ini configuration file';
$_lang["configcheck_register_globals_msg"] = 'This configuration makes your site much more susceptible to Cross Site Scripting (XSS) attacks. You should speak to your host about what you can do to disable this setting.';
$_lang["configcheck_title"] = '配置检查';
$_lang["configcheck_templateswitcher_present"] = 'TemplateSwitcher Plugin detected';
$_lang["configcheck_templateswitcher_present_delete"] = '<a href="javascript:deleteTemplateSwitcher();">Delete TemplateSwitcher</a>';
$_lang["configcheck_templateswitcher_present_disable"] = '<a href="javascript:disableTemplateSwitcher();">Disable TemplateSwitcher</a>';
$_lang["configcheck_templateswitcher_present_msg"] = 'The TemplateSwitcher plugin has been found to cause caching and performance problems, and should be used only the functionality is required in your site.';
$_lang["configcheck_unauthorizedpage_unavailable"] = 'Your site\'s Unauthorized page is not published or does not exist.';
$_lang["configcheck_unauthorizedpage_unavailable_msg"] = 'This means that your Unauthorized page is not accessible to normal web surfers or does not exist. This can lead to a recursive looping condition and many errors in your site logs. Make sure there are no Webuser Groups assigned to the page.';
$_lang["configcheck_unauthorizedpage_unpublished"] = 'The Unauthorized page defined in the site configuration settings is not published.';
$_lang["configcheck_unauthorizedpage_unpublished_msg"] = 'This means that your Unauthorized page is inaccessible to the general public. Publish the page or make sure it is assigned to an existing Resource in your Site Tree in the Tools &gt; Configuration menu.';
$_lang["configcheck_validate_referer"] = 'Security Warning: HTTP Header Validation';
$_lang["configcheck_validate_referer_msg"] = 'The configuration setting <strong>Validate HTTP_REFERER headers?</strong> is Off. We recommend turning it On. <a href="index.php?a=17">Go to Configuration options</a>';
$_lang["configcheck_warning"] = '配置警告:';
$_lang["configcheck_what"] = '这是什么意思?';

$_lang["safe_mode_warning"] = 'Safe mode is enabled. Manager functionality is limited.';

$_lang["confirm_block"] = '你确定阻止这用户吗？';
$_lang["confirm_delete_category"] = 'Are you sure you want to delete this category?';
$_lang["confirm_delete_eventlog"] = '你确认要删除事件日志？';
$_lang["confirm_delete_file"] = '确定删除文件？\n\n这或许会让你的站点不稳定甚至不能工作，最好只删除你知道的文件！';
$_lang["confirm_delete_group"] = 'Are you sure you want to delete this group?';
$_lang["confirm_delete_htmlsnippet"] = '你确定要删除这个块？';
$_lang["confirm_delete_keywords"] = '确认删除关键词？';
$_lang["confirm_delete_module"] = '你希望删除模块吗？';
$_lang["confirm_delete_plugin"] = '确认删除这个插件？';
$_lang["confirm_delete_record"] = '你确认要删除选择的记录？';
$_lang["confirm_delete_resource"] = '确定要删除文件吗？\n这些文件的子目录都会被删除！';
$_lang["confirm_delete_role"] = '你确定删除这个角色?';
$_lang["confirm_delete_snippet"] = '确定要删除这个切片snippet?';
$_lang["confirm_delete_tags"] = '你确认要删除选择的META 标签?';
$_lang["confirm_delete_template"] = '确定删除这个模板？';
$_lang["confirm_delete_tmplvars"] = '你确定要移除这些变量和那些存储好的变量吗？';
$_lang["confirm_delete_user"] = '确定删除用户吗？';

$_lang["delete_yourself"] = 'You can\'t delete yourself';
$_lang["delete_last_admin"] = 'You can\'t delete last admin user';

$_lang["confirm_delete_permission"] = 'Are you sure you want to delete this Permission?';
$_lang["confirm_duplicate_record"] = '确认复制记录？';
$_lang["confirm_empty_trash"] = '您将永久的删除这些文件?\n\n继续吗？';
$_lang["confirm_load_depends"] = '你确定在不保存所做的修改就加载依赖性管理页面吗？';
$_lang["confirm_name_change"] = 'Changing the username can affect other applications that are linked to the Content Manager.\n\nAre you sure you want to change this username?';
$_lang["confirm_publish"] = '\n\nPublishing this Resource now will remove any (un)publishing dates that may have been set. If you wish to set or keep publish or unpublish dates, please choose to \'edit\' the Resource instead.\n\nProceed?';
$_lang["confirm_remove_locks"] = 'Users sometimes close their browser while editing Resources, Templates, Snippets or parsers, possibly leaving the item they were editing in locked state. By pressing OK you can remove ALL locks currently in place.\n\nProceed?';
$_lang["confirm_reset_sort_order"] = 'Are you sure you want to reset the \"sort order/index\" of all listed elements to 0 ?';
$_lang["confirm_resource_duplicate"] = '确认复制文档/文件夹\n注意：子文件/夹也会被一同复制';
$_lang["confirm_setting_language_change"] = 'You have modified the default value and will lose the changes. Proceed?';
$_lang["confirm_unblock"] = '你确定解除用户锁定吗？';
$_lang["confirm_undelete"] = '\n\nAny children Resources deleted at the same time as this Resource will also be undeleted, but children Resources deleted at an earlier time will still be deleted.';
$_lang["confirm_unpublish"] = '\n\nUn-publishing this Resource now will remove any (un)publishing dates that may have been set. If you wish to set or keep publish or unpublish dates, please choose to \'edit\' the Resource instead.\n\nProceed?';
$_lang["confirm_unzip_file"] = '你希望解压文件吗？\n\n现在存在的文件会被覆盖。';

$_lang["could_not_find_user"] = 'Could not find user';

$_lang["create_folder_here"] = '在这里建立文件夹';
$_lang["create_resource_here"] = '在这里建立文档';
$_lang["create_resource_title"] = 'Create Resource';
$_lang["create_weblink_here"] = '在这里建立连接';
$_lang["createdon"] = '建立日期';
$_lang["create_new"] = 'Create new';

$_lang["credits"] = 'Credits';
$_lang["credits_shouts_msg"] = '<p>Evolution CMS is managed and maintained at <a href="https://evo-cms.com/" target="_blank">evo-cms.com</a>.</p>';
$_lang["custom_contenttype_message"] = 'Add custom content types for Resources. To add a new entry, enter the content type in the text box then click the \'Add\' button.';
$_lang["custom_contenttype_title"] = '定制内容类型:';

$_lang["database_charset"] = 'Database Charset';
$_lang["database_collation"] = 'Database Collation Charset';
$_lang["database_name"] = 'Database name';
$_lang["database_overhead"] = '<b style="color:#990033;">Note:</b> Overhead is unused space reserved by MySQL. To free up this space, click on the table\'s overhead figure.';
$_lang["database_server"] = 'Database server';
$_lang["database_table_clickbackup"] = 'Backup &amp; download the selected tables';
$_lang["database_table_clickhere"] = 'Click here';
$_lang["database_table_datasize"] = 'Data size';
$_lang["database_table_droptablestatements"] = 'Generate DROP TABLE statements.';
$_lang["database_table_effectivesize"] = 'Effective size';
$_lang["database_table_indexsize"] = 'Index size';
$_lang["database_table_overhead"] = 'Overhead';
$_lang["database_table_records"] = 'Records';
$_lang["database_table_tablename"] = 'Table name';
$_lang["database_table_totals"] = 'Totals';
$_lang["database_table_totalsize"] = 'Total size';
$_lang["database_tables"] = 'Database tables';
$_lang["database_version"] = 'Database Version';

$_lang["date"] = '日期';
$_lang["datechanged"] = '改动的时间';
$_lang["datepicker_offset"] = 'Datepicker offset';
$_lang["datepicker_offset_message"] = 'The number of years to show in the past on the datepicker.';
$_lang["datetime_format"] = 'Date format';
$_lang["datetime_format_message"] = 'The format for dates in the Manager.';

$_lang["default"] = '默认';
$_lang["defaultcache_message"] = '选择是（YES），就是每当新文档建立的时候，其都默认为允许高速缓存。';
$_lang["defaultcache_title"] = '默认Cache';
$_lang["defaultmenuindex_message"] = 'Select \'Yes\' to turn on automatic menu index incrementing by default.';
$_lang["defaultmenuindex_title"] = 'Menu indexing default';
$_lang["defaultpublish_message"] = '选择是（YES）的话，就是每当新文档建立的时候，其都默认为发布状态。';
$_lang["defaultpublish_title"] = '默认的发布选择';
$_lang["defaultsearch_message"] = '选择是（YES）的话，就是每当新文档建立的时候，其都默认为可搜索状态。';
$_lang["defaultsearch_title"] = '默认的搜索设置';
$_lang["defaulttemplate_message"] = '选择你建立的新文档所使用的默认模板。你也可以在文档编辑器里选择不同的模板，这个选择只是你为自己选择的一个预先设置的模板。';
$_lang["defaulttemplate_title"] = '默认模板';
$_lang["defaulttemplate_logic_title"] = 'Automatic Template Assignment';
$_lang["defaulttemplate_logic_general_message"] = 'New Resources will have the following templates, falling back to higher levels if not found:';
$_lang["defaulttemplate_logic_system_message"] = '<strong>System</strong>: the System Default Template.';
$_lang["defaulttemplate_logic_parent_message"] = '<strong>Parent</strong>: the same Template as the parent container.';
$_lang["defaulttemplate_logic_sibling_message"] = '<strong>Sibling</strong>: the same Template as other Resources in the same container.';

$_lang["delete"] = '删除';
$_lang["delete_resource"] = '删除文件';
$_lang["delete_tags"] = '删除标签';
$_lang["deleting_file"] = '删除文件 `%s`: ';
$_lang["description"] = '描述';
$_lang["deselect_keywords"] = '清除关键词';
$_lang["deselect_metatags"] = '清除META标签';
$_lang["disabled"] = '禁用的';
$_lang["doc_data_title"] = '查看文档数据';
$_lang["documentation"] = 'Documentation';

$_lang["duplicate"] = '复制';
$_lang["duplicate_alias_found"] = 'Resource \'%s\' is already using the URL alias \'%s\'. Please enter a unique URL alias.';
$_lang["duplicate_template_alias_found"] = 'Template \'%s\' is already using the URL alias \'%s\'. Please enter a unique alias.';
$_lang["duplicate_alias_message"] = 'Select \'yes\' to allow duplicate URL aliases to be saved. <b>NOTE: This option should be used with \'Friendly URL alias path\' option set to \'Yes\' in order to avoid problems when referencing a Resource.</b>';
$_lang["duplicate_alias_title"] = '允许复制别名:';
$_lang["duplicate_name_found_general"] = 'There is already a %s named \'%s\'. Please enter a unique name.';
$_lang["duplicate_name_found_module"] = 'There is already a Module named \'%s\'. Please enter a unique name.';
$_lang["duplicated_el_suffix"] = 'Duplicate';

$_lang["edit"] = '编辑';
$_lang["edit_resource"] = '编辑文档';
$_lang["edit_resource_title"] = '建立/编辑文档';
$_lang["edit_settings"] = '系统配置';
$_lang["editedon"] = '编辑日期';
$_lang["editing_file"] = '正在编辑的文档：';
$_lang["editor_css_path_message"] = '输入编辑器的CSS文件的路径。 最好的方法就是输入从根目录开始的路径, 比如: /assets/site/style.css. 如果你不希望加载编辑器的CSS, 请留空.';
$_lang["editor_css_path_title"] = 'CSS文件路径:';

$_lang["email"] = 'Email';
$_lang["email_sent"] = 'Email sent';
$_lang["email_unique"] = 'Email is already in use!';
$_lang["emailsender_message"] = '指定发送邮件的地址。';
$_lang["emailsender_title"] = '邮件地址：';
$_lang["emailsubject_default"] = 'Your login details';
$_lang["emailsubject_message"] = '在这里你可以指定注册成功后给用户发送的e-mail的标题.';
$_lang["emailsubject_title"] = '邮件主题：';

$_lang["empty_folder"] = '文件夹为空';
$_lang["empty_recycle_bin"] = '清空?';
$_lang["empty_recycle_bin_empty"] = '没有需要清除的删除文件.';
$_lang["enable_resource"] = '激活资源文件.';
$_lang["enable_sharedparams"] = '激活参数分享';
$_lang["enable_sharedparams_msg"] = '<b>注意:</b> 上面的全局唯一性ID(GUID)将用来标志这个模块和分享变量.  GUID 也是用来连接模块和插件/切片的参数访问控制的唯一标志. ';
$_lang["enabled"] = 'Enabled';
$_lang["error"] = '错误';
$_lang["error_sending_email"] = 'Error sending email';
$_lang["errorpage_message"] = '请输入请求错误的转向文章ID号. <b>注意：请确认你输入ID号的文章是存在的并且已经发布！</b>';
$_lang["errorpage_title"] = '错误页面:';
$_lang["event_id"] = '事件Id';
$_lang["eventlog"] = '事件日志';
$_lang["eventlog_msg"] = '事件日志是用来显示由系统自动收集产生信息，警告，错误消息。这些\'来源行\'显示了这些消息来自何方.';
$_lang["eventlog_viewer"] = '事件日志查看器';
$_lang["everybody"] = 'Everybody';
$_lang["existing_category"] = 'Existing Category';
$_lang["expand_tree"] = '展开文件列表';
$_lang["failed_login_message"] = 'Enter the number of failed login attempts allowed before blocking a user.';
$_lang["failed_login_title"] = 'Failed Login Attempts';
$_lang["fe_editor_lang_message"] = 'Choose a language for the editor to use when used as a front-end editor.';
$_lang["fe_editor_lang_title"] = 'Front-end Editor Language';

$_lang["filemanager_path_message"] = 'IIS often does not populate the document_root setting properly, which is used by the file manager to determine what you can see. If you are having problems using the file manager, make sure this path points to the root of your Evolution CMS installation.';
$_lang["filemanager_path_title"] = '文件管理路径:';

$_lang["folder"] = '文件夹';
$_lang["forgot_password_email_fine_print"] = '* The URL above will expire once you change your password or after today.';
$_lang["forgot_password_email_instructions"] = 'From there you will be able to change your password from the My Account menu.';
$_lang["forgot_password_email_intro"] = 'A request has been made to change the password on your account.';
$_lang["forgot_password_email_link"] = 'Click here to complete the process.';
$_lang["forgot_your_password"] = 'Forgot your password?';
$_lang["friendly_alias_message"] = '如果你在使用friendly URLs， 并且文件有别名， the alias will always have precedence over the friendly URL. By setting this option to \'yes\', the friendly URL prefix and suffix will also be applied to the alias. For example, if your document with ID 1 has an alias of `introduction`, and you\'ve set a prefix of `` and a suffix of `.html`, setting this option to `yes` will generate `introduction.html`. If there\'s no alias, EVO will generate `1.html` as link.';
$_lang["friendly_alias_title"] = '使用友好别名friendly aliases:';
$_lang["friendlyurls_message"] = '这个设置将允许使用友好URL以便于搜索引擎的工作，这个设置只工作在Apache服务器下, 另外你将需要写一个.htaccess. 详细情况请查阅.htaccess文件。';
$_lang["friendlyurls_title"] = '起用友好URLs:';
$_lang["friendlyurlsprefix_message"] = '这里你可以设置友好URL的前缀. 比如，设置了前缀是page的URL，对于 /index.php?id=2这个连接来说，他的友好URL就是 /page2.html 后缀是 .html).这就定置了你的用户和机器人能见到的地址连接.';
$_lang["friendlyurlsprefix_title"] = 'friendly URLs的前缀:';
$_lang["friendlyurlsuffix_message"] = '友好URLs的后缀设置. 指定 \'.html\' 的话，EVO将把.html放在你的友好URLs后面.';
$_lang["friendlyurlsuffix_title"] = '友好URLS的后缀:';
$_lang["functionnotimpl"] = '对不起！';
$_lang["functionnotimpl_message"] = '这个功能没被执行完.';
$_lang["further_info"] = 'Further information';
$_lang["global_tabs"] = 'Global Tabs';
$_lang["go"] = 'Go';
$_lang["group_access_permissions"] = '用户组访问';
$_lang['group_tvs'] = 'Group TV';
$_lang["guid"] = 'GUID';
$_lang["help"] = '帮助';
$_lang["help_msg"] = '<p>你可以在这里寻求支持 <a href="https://evo-cms.com//" target="_blank">访问中文EVO网站</a>如果你有兴趣，.';
$_lang["help_title"] = '帮助';
$_lang["hide_tree"] = '隐藏树';
$_lang["home"] = '主页';

$_lang["icon"] = '图标';
$_lang["icon_description"] = 'CSS class value. e.g. fa&nbsp;fa-star';
$_lang["id"] = 'ID';
$_lang["illegal_parent_child"] = '指定父本:\n\n这个文档是你选择的文档的子文档.';
$_lang["illegal_parent_self"] = '指定父本:\n\n选择的文档不能分配给他自己.';
$_lang["images_management"] = 'Manage Images';
$_lang["import_files_found"] = '<b>有 %s 文档需要输入...</b>';
$_lang["import_params"] = '输入模块的共享参数';
$_lang["import_params_msg"] = '你可通过从上面的下拉菜单中选择模块的名字来输入他的参数或设置. <b>注意:</b>为了模块能显示在菜单中，这个插件或切片必须是在模块的以来性列表中，并且模块的参数分享也必须激活. ';
$_lang["import_parent_resource"] = '上级文档（父本）:';
$_lang["update_tree"] = '重建树';
$_lang["update_tree_description"] = '<ul>
<li>Closure table database design pattern that makes working with the document tree more convenient and fast </li>
<li>If the data in the tree is updated not through models, then there is a possibility of an incorrect linking of documents in the database </li>
<li>This operation fixes the problem when site_content is not updated through the model (save, create) and the links (Closure table) are not updated </li>
<li>It is also possible to perform this operation in CLI mode via the \'php artisan closuretable: rebuild\' command </li>
</ul>';
$_lang["update_tree_danger"] = 'If you have more than 1000 resources, it is better to perform this operation in CLI mode using the \'php artisan closuretable: rebuild command\'';
$_lang["update_tree_time"] = 'Rebuild tree finished. Documents processed: <b>%s</b><br>Import took <b>%s</b> seconds to complete.';
$_lang["info"] = '信息';
$_lang["information"] = '信息';
$_lang["inline"] = '一行内';
$_lang["insert"] = '插入';
$_lang["maxImageWidth"] = 'Maximum image width';
$_lang["maxImageHeight"] = 'Maximum image height';
$_lang["clientResize"] = 'Resize images on client-side';
$_lang["clientResize_message"] = 'If enabled then images will be resized by browser before upload to the server';
$_lang["noThumbnailsRecreation"] = 'Create thumbnails on upload only';
$_lang["noThumbnailsRecreation_message"] = 'File browser will create thumbnails only on upload; if there\'s no thumbnails for some images, they will not be created';
$_lang["thumbWidth"] = 'Maximum thumbnail width';
$_lang["thumbHeight"] = 'Maximum thumbnail height';
$_lang["thumbsDir"] = 'Thumbnails directory location';
$_lang["jpegQuality"] = 'JPEG compression';
$_lang["denyZipDownload"] = 'Disable zip-archives downloading';
$_lang["denyExtensionRename"] = 'Disable renaming of file extensions';
$_lang["maxImageWidth_message"] = 'If uploaded image resolution exceeds this setting it will be automatically resized. Set 0 to avoid.';
$_lang["maxImageHeight_message"] = 'If uploaded image resolution exceeds this setting it will be automatically resized. Set 0 to avoid.';
$_lang["thumbWidth_message"] = 'Maximum thumbnail width.';
$_lang["thumbHeight_message"] = 'Maximum thumbnail height.';
$_lang["thumbsDir_message"] = 'The name of thumbnail directory.';
$_lang["jpegQuality_message"] = 'JPEG compression quality of thumbnails and resized images';
$_lang["showHiddenFiles"] = 'Show hidden files in file browser';
$_lang["keyword"] = '关键词';
$_lang["keywords"] = '关键词';
$_lang["keywords_intro"] = 'To edit a keyword, simply type in the new keyword in the text field next to the keyword you wish to change. To delete a keyword, check the \'delete\' box for that keyword. If you check the keyword\'s delete box, and also change it\'s name, it will be deleted, and the renaming of the keyword will not take place!';
$_lang["language_message"] = '选择后台管理语言.';
$_lang["language_title"] = '语言:';
$_lang["last_update"] = 'Last update';
$_lang["launch_site"] = '浏览站点';
$_lang["license"] = 'License';
$_lang["link_attributes"] = 'Link Attributes';
$_lang["link_attributes_help"] = 'Enter optional attributes for a link for this page, such as target=&quot;_blank&quot; or rel=&quot;external&quot;.';
$_lang["list_mode"] = '关闭打开列表模式 - 用来显示所有在格子中的数据.';
$_lang["loading_doc_tree"] = 'Loading Site Tree...';
$_lang["loading_menu"] = '加载菜单......';
$_lang["loading_page"] = '请等待EVO加载页面...';
$_lang["localtime"] = 'Local Time';

$_lang["lock_htmlsnippet"] = '锁住块的编辑';
$_lang["lock_htmlsnippet_msg"] = '只有超级管理员(ID 是1的角色)可以编辑这块';
$_lang["lock_module"] = '锁定模块的编辑';
$_lang["lock_module_msg"] = '只有管理员 (Role ID 1)才可以编辑这个模块.';
$_lang["lock_msg"] = '%s 正在编辑 %s. 等他结束后再尝试.';
$_lang["lock_plugin"] = '禁止插件被编辑';
$_lang["lock_plugin_msg"] = '只有管理员(Role ID 1) 可以编辑这个插件.';
$_lang["lock_settings_msg"] = '%s 在编辑这些设置.  等他结束后再尝试.';
$_lang["lock_snippet"] = '锁住snippet';
$_lang["lock_snippet_msg"] = '只有管理员( ID号为 1)能编辑这个切片snippet。';
$_lang["lock_template"] = '锁住模板';
$_lang["lock_template_msg"] = '只有管理员( ID号为 1)能编辑这个模板。';
$_lang["lock_tmplvars"] = '锁定变量使其不得编辑';
$_lang["lock_tmplvars_msg"] = '只有管理员(Role ID 1)才可以编辑这个变量 .';
$_lang["locked"] = '锁定的';

$_lang["login_allowed_days"] = '允许访问的日期';
$_lang["login_allowed_days_message"] = '选择允许用户登陆的日期.';
$_lang["login_allowed_ip"] = '允许的IP地址';
$_lang["login_allowed_ip_message"] = '输入允许这个用户登陆时候的IP地址， <b>注意：用逗号来分开多个IP地址 (,)</b>';
$_lang["login_button"] = '登陆';
$_lang["login_cancelled_install_in_progress"] = 'Install/update of this site is currently in progress. Please retry in a couple of minutes!';
$_lang["login_cancelled_site_was_updated"] = 'Install/update on this site was executed, please login again!';
$_lang["login_captcha_message"] = '管理员设置了安全模式，因此你需要输入安全码。\n\nI如果你看不清楚或看不见安全码，请点击代码本身来从新生成安全码?';
$_lang["login_homepage"] = '登陆页面';
$_lang["login_homepage_message"] = '输入当他/她登陆网站后需要呈现给他/她的页面的ID号 。<b>注意：你需要保证你输入的ID号是有效的，并且这个ID代表的文档是可以被他/她访问的!</b>';
$_lang["login_message"] = '请输入你的管理帐号，注意，大小写';
$_lang["logo_slogan"] = '简易而不简单 - \nEVO内容管理';
$_lang["logout"] = '退出';
$_lang["long_title"] = '长标题';

$_lang["manager"] = '管理员';
$_lang["manager_lockout_message"] = 'You are currently logged into the Content Manager. If you would like to close your login session please click the "Logout" button. <p />To go to your startup or home page click the "Home" button.';
$_lang["manager_permissions"] = '管理者许可';
$_lang["manager_theme"] = '管理者的风格文件:';
$_lang["manager_theme_message"] = '为管理者选择一个风格文件.';
$_lang["manager_theme_mode"] = 'Color Scheme:';
$_lang["manager_theme_mode1"] = 'everything is light';
$_lang["manager_theme_mode2"] = 'the header is dark';
$_lang["manager_theme_mode3"] = 'header and sidebar are dark';
$_lang["manager_theme_mode4"] = 'everything is dark';
$_lang['manager_theme_mode_message'] = 'This setting is used as the "default" and can be overridden by the manager when using the theme color mode switch button in the Resource Tree: <i class="fa fa-lg fa-adjust"></i>';
$_lang['manager_theme_mode_title'] = 'Theme color mode switch';

$_lang["meta_keywords"] = 'META关键词';
$_lang["metatag_intro"] = 'On this page you can delete, create or edit META tags. To link META tags to Resources, click on the <u>META Keywords</u> tab when editing the Resource, and select the desired META tags and keywords. To add a new tag enter the name and value and click the \'Add tag\' button. To edit the tag click on the name of the tag from within the data grid.';
$_lang["metatag_notice"] = 'You may wish to reference the <a href="http://www.html-reference.com/META.asp" target="_blank">HTML Reference Guide</a> site for more information. This is not a complete list of possible Meta Tags.';
$_lang["metatags"] = 'META标签';
$_lang["mgr_access_permissions"] = '管理者访问许可';
$_lang["mgr_login_start"] = '管理者的登陆启动页面';
$_lang["mgr_login_start_message"] = 'Enter the ID of the Resource you want to send the user to after he/she has logged into the manager. <b>NOTE: make sure the ID you\'ve enter belongs to an existing Resource, and that it has been published and is accessible by this user!</b>';

$_lang["mgrlog_action"] = 'Action';
$_lang["mgrlog_actionid"] = 'Action ID';
$_lang["mgrlog_anyall"] = 'Any/All';
$_lang["mgrlog_datecheckfalse"] = 'checkdate() returned false.';
$_lang["mgrlog_datefr"] = 'Date from';
$_lang["mgrlog_dateinvalid"] = 'Invalid date format.';
$_lang["mgrlog_dateto"] = 'Date to';
$_lang["mgrlog_emptysrch"] = 'Your search query returned an empty result set (i.e. not matching logs found).';
$_lang["mgrlog_field"] = 'Field';
$_lang["mgrlog_itemid"] = 'Item ID';
$_lang["mgrlog_itemname"] = 'Item name';
$_lang["mgrlog_msg"] = 'Message';
$_lang["mgrlog_noquery"] = 'No search query entered yet.';
$_lang["mgrlog_qresults"] = 'Query results';
$_lang["mgrlog_query"] = 'Query logging';
$_lang["mgrlog_query_msg"] = 'Please make a selection for viewing the logs. You can select log entries by date, but be aware that the dates you enter are not inclusive - to select every log entry for 01-01-2004, set \'date from\' to 01-01-2004 and \'date to\' to 02-01-2004.<br /><br />Message and action are usually the same. If you\'re searching for a specific message, it\'s best to set action to \'Any/All\'.';
$_lang["mgrlog_results"] = 'No. of results';
$_lang["mgrlog_searchlogs"] = 'Search logs';
$_lang["mgrlog_sortinst"] = 'Sort the table by clicking on the column headers. If the logs are too large, <a href="index.php?a=55">empty the log file</a> to remove all log entries up to now. This cannot be undone!';
$_lang["mgrlog_time"] = 'Time';
$_lang["mgrlog_user"] = 'User';
$_lang["mgrlog_username"] = 'Username';
$_lang["mgrlog_value"] = 'Value';
$_lang["mgrlog_view"] = 'View manager logs';

$_lang["modx_news"] = 'Evolution CMS News Notices';
$_lang["modx_news_tab"] = 'Evolution CMS News';
$_lang["modx_news_title"] = 'Evolution CMS News';
$_lang["modx_security_notices"] = 'Evolution CMS Security Notices';
$_lang["modx_version"] = 'Evolution CMS version';

$_lang["name"] = '名字';

$_lang["no"] = '否';
$_lang["no_active_users_found"] = 'No active users found.';
$_lang["no_activity_message"] = 'You have not yet created or edited any Resources.';
$_lang["no_category"] = 'uncategorized';
$_lang["no_docs_pending_publishing"] = 'No Resources pending publishing.';
$_lang["no_docs_pending_pubunpub"] = 'No Events Found';
$_lang["no_docs_pending_unpublishing"] = 'No Resources pending unpublishing.';
$_lang["no_edits_creates"] = 'No edits or creates found.';
$_lang["no_groups_found"] = '没发现组。';
$_lang["no_keywords_found"] = '这里通常没有关键词.';
$_lang["no_records_found"] = '没有记录.';
$_lang["no_results"] = '没有结果';
$_lang["nologentries_message"] = '输入每页显示的索引数量.';
$_lang["nologentries_title"] = '日志条目数:';
$_lang["none"] = 'None';
$_lang["noresults_message"] = 'Enter the number of results to show in the data grid when viewing listings and search results.';
$_lang["noresults_title"] = '结果数量:';
$_lang["not_deleted"] = '没被删除.';
$_lang["not_set"] = '没有设置';

$_lang["offline"] = '离线';

$_lang["online"] = '在线';
$_lang["onlineusers_action"] = 'Action';
$_lang["onlineusers_actionid"] = 'Action-ID';
$_lang["onlineusers_ipaddress"] = '用户IP地址';
$_lang["onlineusers_lasthit"] = '最后点击';
$_lang["onlineusers_message"] = '显示最近20分种内的在线用户 (现在时间是：';
$_lang["onlineusers_title"] = '在线用户';
$_lang["onlineusers_user"] = '用户';
$_lang["onlineusers_userid"] = '用户ID';

$_lang["optimize_table"] = '点击这里优化表格';

$_lang["page_data_alias"] = 'Alias';
$_lang["page_data_cacheable"] = '使用Cache';
$_lang["page_data_cacheable_help"] = '让这个选项被选择，你将把他同时保存在CACHE中，如果你的文档包含了切片的话，请取消这个选择！';
$_lang["page_data_cached"] = '<b>从cache中找来的资源:</b>';
$_lang["page_data_changes"] = '改动';
$_lang["page_data_contentType"] = '内容类型';
$_lang["page_data_contentType_help"] = '为文档选择内容类型。如果你不知道如何选择，请选择默认的text/html格式。';
$_lang["page_data_created"] = '建立的';
$_lang["page_data_edited"] = '编辑的';
$_lang["page_data_editor"] = '选用富文本编辑器';
$_lang["page_data_folder"] = '文档是文件夹类型';
$_lang["page_data_general"] = '一般';
$_lang["page_data_markup"] = 'Markup/structure';
$_lang["page_data_mgr_access"] = '管理者访问';
$_lang["page_data_notcached"] = '这个文件还没被CACHE.';
$_lang["page_data_publishdate"] = '发布时间';
$_lang["page_data_publishdate_help"] = '如果你要选择发布日间，你可以点这个日历图标，在弹出的日历上选择要发布的时间，当时间到的时候，程序会自动给你发布文档，当你点后一个图标时，将移除自动发布时间，程序将不自动给你发部文档了。';
$_lang["page_data_published"] = '发布的';
$_lang["page_data_searchable"] = '被搜索';
$_lang["page_data_searchable_help"] = '选择这个选项将使文档能够被搜索到。';
$_lang["page_data_source"] = '资源';
$_lang["page_data_status"] = '状态';
$_lang["page_data_template"] = '选用模板';
$_lang["page_data_template_help"] = '你可以在这里选择你的文档使用的模板。';
$_lang["page_data_title"] = '页面数据';
$_lang["page_data_unpublishdate"] = '取消发布时间';
$_lang["page_data_unpublishdate_help"] = '如果想设置取消发布时间，你可以点日历图标，然后在日历上选择时间，程序就会自动在你 指定的时间取消本文档的发布;当你点后边一个图标，那么取消发布的时间设置就被移除了，你的文档将永不会自动取消发布。';
$_lang["page_data_unpublished"] = '未发布的';
$_lang["page_data_web_access"] = '网站访问';

$_lang["pagetitle"] = '文档标题';
$_lang["pagination_table_first"] = 'First';
$_lang["pagination_table_gotopage"] = 'Go to page';
$_lang["pagination_table_last"] = 'Last';
$_lang["paging_first"] = 'first';
$_lang["paging_last"] = 'last';
$_lang["paging_next"] = 'next';
$_lang["paging_prev"] = 'prev';
$_lang["paging_showing"] = 'Showing';
$_lang["paging_to"] = 'to';
$_lang["paging_total"] = 'total';
$_lang["parameter"] = '参数';
$_lang["parse_docblock"] = 'Parse DocBlock';
$_lang["parse_docblock_msg"] = 'Attention (!): <b>Resets</b> actual name, configuration, description and category to install-defaults by parsing the source code.';

$_lang["password"] = '密码';
$_lang["password_change_request"] = 'Password change request';
$_lang["password_confirmed"] = 'Passwords doesn\'t match';
$_lang["password_gen_gen"] = '让EVO生成新密码.';
$_lang["password_gen_length"] = '密码至少要六个字符以上。';
$_lang["password_gen_method"] = '新密码方法';
$_lang["password_gen_specify"] = '让我指定密码:';
$_lang["password_method"] = '密码确认方法';
$_lang["password_method_email"] = '通过e-mail发送密码.';
$_lang["password_method_screen"] = '在屏幕上显示密码.';
$_lang["password_msg"] = ' <b>:username</b>的新密码是 <b>:password</b><br>';

$_lang["php_version_check"] = 'MODX兼容PHP 7.4 和更高的版本，请升级PHP版本！';

$_lang["preview"] = '预览';
$_lang["preview_msg"] = '这个是你最后一次改动的预览. 点击这里 <a href="javascript:;" onclick="saveRefreshPreview();">保存刷新</a>你现在的页面';
$_lang["preview_resource"] = 'Preview Resource';

$_lang["private"] = '私有的';
$_lang["public"] = '公共的';
$_lang["publish_date"] = 'Publish Date';
$_lang["publish_events"] = 'Publish Events';
$_lang["publish_resource"] = '发布文档';

$_lang["rb_base_dir_message"] = 'Enter the physical path to the File Browser directory. This setting is usually automatically generated. If you\'re using IIS, however, Evolution CMS may not be able to work the path out on its own, causing the File Browser to show an error. In that case, you can enter the path to the images directory here (the path as you\'d see it in Windows Explorer). <b>NOTE:</b> The File Browser directory must contain the subdirectories images, files, flash and media in order for the file browser to function correctly.';
$_lang["rb_base_dir_title"] = '资源路径:';
$_lang["rb_base_url_message"] = 'Enter the virtual path to files directory. This setting is usually automatically generated. If you\'re using IIS, however, Evolution CMS may not be able to work the URL out on it\'s own, causing the File Browser to show an error. In that case, you can enter the URL to the images directory here (the URL as you\'d enter it on Internet Explorer).';
$_lang["rb_base_url_title"] = '资源的URL:';
$_lang["rb_message"] = 'Select yes to enable the File Browser. This will allow your users to browse and upload files such as images, flash and media files on the server.';
$_lang["rb_title"] = '激活资源浏览器:';
$_lang["rb_webuser_message"] = 'Do you want to allow a web user the ability to use the file browser? <b>WARNING:</b> Allowing web users the use of the file browser exposes the files available to manager users.  Only use this option for trusted web users.';
$_lang["rb_webuser_title"] = 'Web Users?';
$_lang["recent_docs"] = '最近文档';
$_lang["recommend_setting_change_title"] = 'Recommended Setting Change';
$_lang["recommend_setting_change_description"] = 'Your site is not configured to validate the HTTP_REFERER of incoming requests to the Manager. We strongly recommend enabling this setting to reduce the risk of a CSRF (Cross Site Request Forgery) attack.';
$_lang["references"] = 'References';
$_lang["refresh_cache"] = 'Cache: 找到 <b>%s</b>文档在cache和被删除的cache里 <b>%d</b>。<p>当文档被访问者访问的时候，CACHE将被重新建立。';
$_lang["refresh_published"] = '已经发布<b>%s</b>文档。';
$_lang["refresh_site"] = '刷新站点';
$_lang["refresh_title"] = '刷新站点';
$_lang["refresh_tree"] = '刷新文件树';
$_lang["refresh_unpublished"] = '还有<b>%s</b>文档没发布。';
$_lang["release_date"] = 'Release date';
$_lang["remember_last_tab"] = 'Remember tabs';
$_lang["remember_last_tab_message"] = 'Tabbed Manager pages load with the last tab viewed instead of defaulting to the first tab';
$_lang["remember_username"] = '记住我';
$_lang["remove"] = '移动';
$_lang["remove_date"] = '移动时间';
$_lang["remove_locks"] = 'Remove Locks';
$_lang["rename"] = '重命名';
$_lang["reports"] = 'Reports';
$_lang["report_issues"] = 'Report issues';
$_lang["required_field"] = 'Field :field is required';
$_lang["require_tagname"] = '需要一标签名';
$_lang["require_tagvalue"] = '需要一标签值';
$_lang["reserved_name_warning"] = 'You have used a reserved name.';
$_lang["reset"] = '重设';
$_lang["reset_failedlogins"] = '重设';
$_lang["reset_sort_order"] = 'Reset sort order';

$_lang["manager_access_permissions"] = 'Manager access permission';
$_lang["manage_groups"] = 'Manage document and user groups';
$_lang["manage_document_permissions"] = 'Manage document permissions';
$_lang["manage_module_permissions"] = 'Manage module permissions';
$_lang["manage_tv_permissions"] = 'Manage TV permissions';

$_lang["rss_url_news_default"] = 'https://github.com/evocms-community/evolution/releases.atom';
$_lang["rss_url_news_message"] = 'Enter the URL for the Evolution CMS News Feed.';
$_lang["rss_url_news_title"] = 'RSS News Feed';
$_lang["rss_url_security_default"] = 'https://github.com/extras-evolution/security-fix/releases.atom';
$_lang["rss_url_security_message"] = 'Enter the URL for the Evolution CMS Security Feed.';
$_lang["rss_url_security_title"] = 'RSS Security Feed';

$_lang["run_module"] = '运行模块';
$_lang["save"] = '保存';
$_lang["save_all_changes"] = '保存所有改动';
$_lang["save_tag"] = '保存标签';
$_lang["saving"] = '保存中，稍侯...';

$_lang["search"] = '搜索';
$_lang["search_criteria"] = '搜索标准';
$_lang["search_criteria_content"] = '按内容搜索';
$_lang["search_criteria_content_msg"] = '寻找文件内容中有输入文字的文件';
$_lang["search_criteria_id"] = '按ID号搜索';
$_lang["search_criteria_id_msg"] = '输入文件ID号快速定位。';
$_lang["search_criteria_top"] = 'Search in main fields';
$_lang["search_criteria_top_msg"] = 'Pagetitle, Longtitle, Alias, ID';
$_lang["search_criteria_template_id"] = 'Search by template ID';
$_lang["search_criteria_template_id_msg"] = 'Find all Resources using the specified template.';
$_lang["search_criteria_url_msg"] = 'Find Resource by exact URL.';
$_lang["search_criteria_longtitle"] = '按长标题搜索';
$_lang["search_criteria_longtitle_msg"] = '查询长标题里有所有输入查询字符的文档';
$_lang["search_criteria_title"] = '按标题搜索';
$_lang["search_criteria_title_msg"] = '在文件标题中寻找有输入文字的文件.';
$_lang["search_empty"] = '搜索无结果。请放宽搜索范围！';
$_lang["search_item_deleted"] = '本项以被删除';
$_lang["search_results"] = '搜索结果';
$_lang["search_results_returned_desc"] = '描述';
$_lang["search_results_returned_id"] = 'ID';
$_lang["search_results_returned_msg"] = 'Your search criteria returned <b>%s</b> Resources. If a lot of results are being returned, try to enter a more specific search.';
$_lang["search_results_returned_title"] = '标题';
$_lang["search_view_docdata"] = '查阅本项';

$_lang["security"] = '保密机密';
$_lang["security_notices_tab"] = 'Security Notices';
$_lang["security_notices_title"] = 'Security Notices';

$_lang["select_date"] = '选择时间';
$_lang["send"] = 'Send';
$_lang["server_protocol_http"] = 'http';
$_lang["server_protocol_https"] = 'https';
$_lang["server_protocol_message"] = '如果你的服务器是HTTP连接，请从这里设置：';
$_lang["server_protocol_title"] = '服务器类型：';
$_lang["serveroffset"] = 'Server offset';
$_lang["serveroffset_message"] = '选择你服务器所在地和你本人所在地的时间差别. 现在的服务器时间是 <b>[%s]</b>, 现在的服务器骗移时间是： <b>[%s]</b>.';
$_lang["serveroffset_title"] = '服务器偏移时间:';
$_lang["servertime"] = 'Server Time';
$_lang["set_automatic"] = 'Set automatic';
$_lang["set_default"] = 'Set default';
$_lang["set_default_all"] = 'Set defaults';

$_lang["settings_after_install"] = '<p>作为全新安装，你将需要控制这些设置来符合你的要求，当你完成设置后，按\'保存Save\'更新数据库数据。</p>';
$_lang["settings_config"] = '配置';
$_lang["settings_dependencies"] = '依赖性';
$_lang["settings_events"] = '系统事件';
$_lang["settings_furls"] = 'Friendly URL设置';
$_lang["settings_general"] = '一般';
$_lang["settings_group_tv_message"] = 'Choose if Template Variables should be grouped in sections or tabs (named by TV category) when editing a Resource';
$_lang["settings_group_tv_options"] = 'No,Sections in General tab,Tabs in General tab,Sections in new tab,Tabs in new tab,New tabs';
$_lang["settings_misc"] = '杂项设置';
$_lang["settings_security"] = 'Security';
$_lang["settings_KC"] = 'File Browser';
$_lang["settings_page_settings"] = '页面设置';
$_lang["settings_photo"] = '图片';
$_lang["settings_properties"] = '属性';
$_lang["settings_site"] = '站点设置';
$_lang["settings_strip_image_paths_message"] = '开启这个选项后，EVO将把图象的路径由绝对定位改为相对的定位。这个功能将方便你的站点变迁移动或域名变换等，如果你不知道它代表什么意思的话，那你就选择\'否No\'。';
$_lang["settings_strip_image_paths_title"] = '重写图象路径？';
$_lang["settings_templvars"] = '模板变量';
$_lang["settings_title"] = '系统配置';
$_lang["settings_ui"] = '面板编辑器设置Interface & editor settings';
$_lang["settings_users"] = '用户设置User settings';
$_lang["settings_email_templates"] = 'Email & Templates';

$_lang["show_fullscreen_btn_message"] = 'Show Menu toggle Fullscreen button';
$_lang["show_newresource_btn_message"] = 'Show Menu New Resource button';
$_lang["settings_show_picker_message"] = 'Customize manager theme and save to localstorage';
$_lang["show_fullscreen_btn"] = 'Toggle Fullscreen button';
$_lang["show_newresource_btn"] = 'New Resource button';

$_lang["show_meta"] = 'Show META Keywords tab';
$_lang["show_meta_message"] = 'Show the deprecated META Keywords tab when editing Resources in the Manager.';
$_lang["show_tree"] = '显示列表树';
$_lang["show_picker"] = 'Show Color Switcher';
$_lang["showing"] = '正在显示中';
$_lang["signupemail_message"] = '你可以在这里设置好消息，当你的用户在这里注册的时候，EVO就会自动将此消息发送给他/她。内容中会包含他的用户名和密码。 <br /><b>注意：</b> 下面的站位符将被程序自动替代: <br /><br />[+sname+] - 你网站的名字 <br />[+saddr+] - 你网站的EMAIL地址， <br />[+surl+] - 你网站的地址，<br />[+uid+] - 用户登陆名或ID号，<br />[+pwd+] - 用户的密码， <br />[+ufn+] - 用户的全名。 <br /><br /><b>请在内容里保留 [+uid+] 和 [+pwd+],否则您的注册者将不会知道他的密码!</b>';
$_lang["signupemail_title"] = '注册的e-mail:';
$_lang["site"] = '站点';
$_lang["site_schedule"] = '站点时间表';
$_lang["sitename_message"] = '输入站点名字.';
$_lang["sitename_title"] = '站点名字:';
$_lang["sitestart_message"] = '输入作为你网站首页的文件ID号. <b>注意：请确认你输入ID号的文章是存在的并且已经发布！</b>';
$_lang["sitestart_title"] = '网站开始:';
$_lang["sitestatus_message"] = '选择\'online\'发布你的站点 如果你选择了 \'Offline\',访问者将看到\'Site unavailable message站点不可访问\'的消息而不能访问网站.';
$_lang["sitestatus_title"] = '站点状态:';
$_lang["siteunavailable_message"] = '显示站点关闭或有错误发生时的消息 <b>Note: This message will only be displayed if the Site unavailable page option is not set.</b>';
$_lang["siteunavailable_message_default"] = 'The site is currently unavailable.';
$_lang["siteunavailable_page_message"] = '输入关闭站点后需要显示给访问者的页面ID. <b>注意必须保证你提供的ID号所属文档是的确存在的，并且已经发布，访问者有权访问!</b>';
$_lang["siteunavailable_page_title"] = '关闭站点的页面:';
$_lang["siteunavailable_title"] = '网站不可访问时的消息:';
$_lang["controller_namespace"] = 'Controller Namespace';
$_lang["controller_namespace_message"] = 'Specify the full Namespace from which it is worth taking controllers, for example: <b>EvolutionCMS\\Main\\Controllers\\</b>';
$_lang["update_repository"] = 'GitHub repository path';
$_lang["update_repository_message"] = 'Enter GitHub repository path for example: <b>evocms-community/evolution</b>';

$_lang["sort_alphabetically"] = 'Sort alphabetically';
$_lang["sort_asc"] = '上升';
$_lang["sort_desc"] = '递减';
$_lang["sort_menuindex"] = 'Sort menu index';
$_lang["sort_tree"] = '排列树';
$_lang['sort_updating'] = 'Updating ...';
$_lang['sort_updated'] = 'Updated!';
$_lang['sort_nochildren'] = 'Parent does not have any children';
$_lang["sort_elements_msg"] = 'Drag to reorder the listed elements.';

$_lang["source"] = '来源';
$_lang["stay"] = '继续编辑';
$_lang["stay_new"] = '添加另一个';
$_lang["submit"] = 'Submit';
$_lang["sys_alert"] = '系统警报';
$_lang["sysinfo_activity_message"] = '这个列表显示了最近有哪些文档被你的用户编辑过。';
$_lang["sysinfo_userid"] = '用户';
$_lang["system"] = 'System';
$_lang["system_email_signup"] = 'Hello [+uid+]

Here are your login details for [+sname+] Content Manager:

Username: [+uid+]
Password: [+pwd+]

Once you log into the Content Manager ([+surl+]), you can change your password.

Regards,
Site Administrator';
$_lang["system_email_webreminder"] = 'Hello [+uid+]

点下面的连接来激活你的新密码:

[+surl+]

如果成功，你就可以用以下的密码来登陆:

密码:[+pwd+]

如果你不需要这个EMAIL，请忽略它.

谢谢,
网站管理员';
$_lang["system_email_websignup"] = 'Hello [+uid+]

这是你的登陆细节 [+sname+]:

用户名: [+uid+]
密码: [+pwd+]

你可以点这个登陆 [+sname+] ([+surl+]), 在那里也可以改变你的密码.

谢谢,
网站管理员';
$_lang["table_hoverinfo"] = 'Hover the mouse cursor over a table\'s name to see a short description of the table\'s function (not all tables have <i>comments</i> set).';
$_lang["table_prefix"] = 'Table prefix';
$_lang["tag"] = '标签';

$_lang["to"] = 'to';
$_lang["toggle_fullscreen"] = 'Toggle Fullscreen';
$_lang["tools"] = 'Tools';
$_lang["top_howmany_message"] = 'When viewing reports, how large should the \'Top ...\' lists be?';
$_lang["top_howmany_title"] = 'Top how many';
$_lang["total"] = '总数';
$_lang["track_visitors_message"] = '访问日志能让你了解你的网站利用状态，当然这将会为网站增加一点负担。如果你不在乎网站的访问记录分析，你可以关闭这个功能，而让网站的访问速度的提到。';
$_lang["track_visitors_title"] = '访问日志';
$_lang["tree_page_click"] = 'Page Click Behavior';
$_lang["tree_page_click_message"] = 'The default behavior when clicking on a page in the site tree.';
$_lang["use_breadcrumbs"] = 'Show navigation';
$_lang["use_breadcrumbs_message"] = 'Show the navigation when creating or editing Resource in the Manager';
$_lang["tree_show_protected"] = 'Show protected pages';
$_lang["tree_show_protected_message"] = 'When set to "No", Protected Resources (and all their child-Resources) do not appear in the Site Tree menu. "No" is the legacy setting for Evolution CMS.';
$_lang["truncate_table"] = '点击这里切短表格';
$_lang["type"] = '类型';
$_lang["udperms_allowroot_message"] = '你允许你的用户在站点根目录下建立文档和文件夹吗？ ';
$_lang["udperms_allowroot_title"] = '允许的根目录:';
$_lang["udperms_message"] = '访问许可可以指定你的哪些文件可以被哪些人编辑.你需要分配你的用户到某用户组,分配你的文件到某文件组, 然后你就可以指定哪些拥护组可以访问哪些文件组了. 当你第一次指定这些设置之前只有网站管理员一人可以编辑任何文件.';
$_lang["udperms_title"] = '使用访问许可:';
$_lang["unable_set_link"] = 'Unable to set the link!';
$_lang["unable_set_parent"] = 'Unable to set new parent!';
$_lang["unauthorizedpage_message"] = '输入文档ID号，这个文档是发送给那些访问到受保护文件或需要授权才能访问的文件的人，让他们明白他们没有权利访问这些文件。 <b>注意: 注意：你需要保证你输入的ID号是有效的，并且这个ID代表的文档是可以被他/她访问的!!</b>';
$_lang["unauthorizedpage_title"] = '未授权的页面:';
$_lang["unblock_message"] = '保存这个用户数据后，这个拥护将不再被锁定了。';
$_lang["undelete_resource"] = '恢复删除的文件';
$_lang["unpublish_date"] = 'Unpublish Date';
$_lang["unpublish_events"] = 'Un-publish Events';
$_lang["unpublish_resource"] = '取消发布文档';
$_lang["untitled_resource"] = '无标题文件';
$_lang["untitled_weblink"] = '无标题连接';
$_lang["update_params"] = '更新参数显示';
$_lang["update_settings_from_language"] = 'Replace current with:';

$_lang["upload_maxsize_message"] = '输入通过文件管理上传文件的大小的最大值. 大小按 byte计算. <b>注意: 大文件会占用太多的传输时间！</b>';
$_lang["upload_maxsize_title"] = '最大上传大小';
$_lang["uploadable_files_message"] = '你可以在这里输入一串你允许上传文件类型的扩展名，注意每个扩展名用逗号隔开（注意是英文状态下的逗号）。';
$_lang["uploadable_files_title"] = '允许上传文件的类型：';
$_lang["uploadable_flash_message"] = 'Enter a list of files that can be uploaded into \'assets/flash/\' using the File Browser. Please enter the extensions for the flash types, separated by commas.';
$_lang["uploadable_flash_title"] = 'Uploadable Flash Types';
$_lang["uploadable_images_message"] = 'Enter a list of files that can be uploaded into \'assets/images/\' using the File Browser. Please enter the extensions for the image types, separated by commas.';
$_lang["uploadable_images_title"] = 'Uploadable Image Types';
$_lang["uploadable_media_message"] = 'Enter a list of files that can be uploaded into \'assets/media/\' using the File Browser. Please enter the extensions for the media types, separated by commas.';
$_lang["uploadable_media_title"] = 'Uploadable Media Types';
$_lang["use_alias_path_message"] = 'Enabling this option generates a virtual path to the Resource. E.g., if a Resource "child.html" is located in a Container Resource "parent", then the full URL alias path URL will be "/parent/child.html".';
$_lang["use_alias_path_title"] = '使用友好别名路径:';
$_lang["use_editor_message"] = '你希望激活富文本编辑器吗？如果你习惯写HTML，你可以在这里关闭它！特别注意这个设置将应用到所有的文件和用户！';
$_lang["use_editor_title"] = '激活的编辑器:';
$_lang["use_global_tabs"] = 'Use global Tabs';

$_lang["valid_hostnames_message"] = 'Help prevent XSS exploits misusing the site_url system setting by providing a comma separated list of valid hostnames for this installation. This is important for some types of shared hosts or hosts direct accessible via an IP address. First hostname in the list is used if the HTTP_HOST does not match any valid hostname.';
$_lang["valid_hostnames_title"] = 'Valid hostnames';
$_lang["validate_referer_message"] = 'Validate the HTTP_REFERER headers to reduce the risk of your content editors being tricked into performing unintended actions in the manager as victims of a CSRF (Cross Site Request Forgery) attack. Some configurations may not be able to use this option if the server is not sending HTTP_REFERER headers.';
$_lang["validate_referer_title"] = 'Validate HTTP_REFERER headers?';
$_lang["value"] = '值';
$_lang["version"] = 'Version';
$_lang["view"] = 'View';
$_lang["view_child_resources_in_container"] = 'View children';
$_lang["view_log"] = '查看日志';
$_lang["view_logging"] = '索引';
$_lang["view_sysinfo"] = '系统信息';
$_lang["warning"] = '警告！';
$_lang["warning_not_saved"] = '你的修改还没保存，你可以按 (\'Cancel\')继续编辑，或按(\'OK\')离开本页面，不过你的修改将丢失而不被保存。';
$_lang["warning_visibility"] = 'Configuration Warnings visible to';
$_lang["warning_visibility_message"] = 'Control the visibility of the configuration warnings shown on the Manager welcome page';
$_lang["web_access_permissions"] = '网站访问控制';
$_lang["web_access_permissions_user_groups"] = '网站用户组';
$_lang["web_permissions"] = '网站许可';
$_lang["web_user_management_msg"] = '在这里你可以选择那些你想编辑的网站用户。网站用户就是那些允许登陆到网站的用户';
$_lang["web_user_management_title"] = '管理网站用户';
$_lang["web_user_management_select_role"] = 'All roles';
$_lang["web_user_title"] = '建立/编辑网站用户';
$_lang["web_users"] = '网站用户';
$_lang["weblink"] = '网页连接';
$_lang["webpwdreminder_message"] = '当用户请求重设密码的时候，系统将给他们发送一封电子邮件，在这里你可以指定这个电子邮件的内容. EVO将自动把密码和激活信息发送给用户。 <br /><b>注意:</b>当发送邮件的时候，系统将把下面的站位符替换掉: <br /><br />[+sname+] - 站点名字, <br />[+saddr+] - 您的邮件地址, <br />[+surl+] -你网站的 url, <br />[+uid+] - 用户的登陆名或id, <br />[+pwd+] - 用户的密码, <br />[+ufn+] - 用户的全名. <br /><br /><b>在邮件里请保留 [+uid+] 和 [+pwd+]，否则发送给他们的邮件里将没有登陆名和密码，他们或许就不知道他们的密码了!<</b>';
$_lang["webpwdreminder_title"] = '网站提醒邮件:';
$_lang["websignupemail_message"] = '当用户注册后，系统将给他们发一封注册信，信的内容包含了他们的注册名字和密码。你可以在这里设置给他们的邮件的内容，<br /><b>注意:</b> 下面这些站位符将在发送邮件的时候被系统替换掉: <br /><br />[+sname+] - 站点名字, <br />[+saddr+] - 您的邮件地址, <br />[+surl+] - 你站点的连接, <br />[+uid+] - 用户的登陆名和ID号, <br />[+pwd+] - 用户的密码, <br />[+ufn+] -用户的全名. <br /><br /><b>在邮件里保留 [+uid+] 和 [+pwd+], 否则发送给他们的邮件里将没有登陆名和密码，他们或许就不知道他们的密码了!</b>';
$_lang["websignupemail_title"] = '网站注册信:';
$_lang["allow_multiple_emails_title"] = 'Duplicate Web User email address';
$_lang["allow_multiple_emails_message"] = 'Allows Web Users to share the same email address for situations when a member may not have their own email address or there is just one family email address.<br/>Note: Any password reminder and registration logic will need to account for this option if set to yes.';
$_lang["welcome_title"] = '欢迎来到EVO内容管理';
$_lang["which_editor_message"] = '你可以在这里选择你要使用哪一个编辑器。你可以在EVO的中文网站</a>下载文本编辑器。';
$_lang["which_editor_title"] = '选用编辑器:';
$_lang["working"] = '工作中...';
$_lang["wrap_lines"] = 'Wrap lines';
$_lang["xhtml_urls_message"] = 'Replaces ampersand (&amp;) characters in urls that are generated by Evolution CMS with the validating &amp;<!-- -->amp; htmlentity';
$_lang["xhtml_urls_title"] = 'XHTML URLs';
$_lang["yes"] = '是';
$_lang["you_got_mail"] = '你有邮件';

$_lang["yourinfo_message"] = '显示关于你的信息:';
$_lang["yourinfo_previous_login"] = '最后登陆日期:';
$_lang["yourinfo_role"] = '你的角色是:';
$_lang["yourinfo_title"] = '你的信息';
$_lang["yourinfo_total_logins"] = '总登陆次数:';
$_lang["yourinfo_username"] = '你的登陆名:';

$_lang["a17_error_reporting_title"] = 'Detection level of PHP errors';
$_lang["a17_error_reporting_msg"] = 'Set the detection level of the PHP errors.';
$_lang["a17_error_reporting_opt0"] = 'Ignore all';
$_lang["a17_error_reporting_opt1"] = 'Ignore warnings of a slight notice level (<a href="https://www.google.com/search?q=E_DEPRECATED+E_STRICT" target="_blank">E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT</a>)';
$_lang["a17_error_reporting_opt2"] = 'Detect all errors except E_NOTICE and E_USER_DEPRECATED';
$_lang["a17_error_reporting_opt99"] = 'Detect all except E_USER_DEPRECATED';
$_lang["a17_error_reporting_opt199"] = 'Detect all';

$_lang["pwd_hash_algo_title"] = 'Hash algorithm';
$_lang["pwd_hash_algo_message"] = 'Password hash algorithm.';

$_lang["enable_bindings_title"] = 'Enable @Bindings commands';
$_lang["enable_bindings_message"] = 'Prevents the execution of PHP functions through TV @Bindings. Useful if you have Manager users who should not be able to create PHP code but need to be able to create or edit TVs. The output of any TV with an @Binding will be "@Bindings disabled".';
$_lang["enable_filter_title"] = 'Enable filters';
$_lang["enable_filter_message"] = 'Filters allow you to manipulate the way data is presented or parsed in a tag. They allow you to modify values from inside your templates. This is analogous to PHx. <a href="https://github.com/modxcms/evolution/issues/623" target="ext_help">More info</a>'; // todo: change link to documentation
$_lang["enable_filter_phx_warning"] = 'When PHx plugin enabled, built-in filters are disabled by default';

$_lang["enable_at_syntax_title"] = 'Enable &lt;@SYNTAX&gt;';
$_lang["enable_at_syntax_message"] = '&lt;@SYNTAX&gt;(atmark syntax) is simple and lightweight template syntax. This is designed to consider coexistence with HTML tags and content strings.';

$_lang["bkmgr_alert_mkdir"] = 'A file cannot be created in a directory.  Please check the permission of [+snapshot_path+]';
$_lang["bkmgr_restore_msg"] = '<p>Database tables could be restored by SQL:</p>';
$_lang["bkmgr_restore_title"] = 'Restore';
$_lang["bkmgr_import_ok"] = 'SQL recovery was performed normally.';
$_lang["bkmgr_snapshot_ok"] = 'The snapshot was saved normally.';
$_lang["bkmgr_run_sql_file_label"] = 'Execute by SQL file';
$_lang["bkmgr_run_sql_direct_label"] = 'Direct execute SQL commands';
$_lang["bkmgr_run_sql_submit"] = 'Execute restore';
$_lang["bkmgr_run_sql_result"] = 'Result';
$_lang["bkmgr_snapshot_title"] = 'Snapshot save and recovery';
$_lang["bkmgr_snapshot_msg"] = '<p>The contents of the database are saved in and restored from a server directory.<br />Location: [+snapshot_path+] ($modx->config[\'snapshot_path\'])</p>';
$_lang["bkmgr_snapshot_submit"] = 'Add Snapshot';
$_lang["bkmgr_snapshot_list_title"] = 'List of snapshots';
$_lang["bkmgr_restore_submit"] = 'Revert this data';
$_lang["bkmgr_restore_confirm"] = 'Are you sure you want to revert backup\n[+filename+] ?';
$_lang["bkmgr_snapshot_nothing"] = 'No snapshots available';

$_lang["files.dynamic.php1"] = 'New File';
$_lang["files.dynamic.php2"] = 'This directory cannot be displayed.';
$_lang["files.dynamic.php3"] = 'There is a problem in a file name.';
$_lang["files.dynamic.php4"] = 'The text file was created.';
$_lang["files.dynamic.php5"] = 'File could not be duplicated.';
$_lang["files.dynamic.php6"] = 'File or directory could not be renamed.';
$_lang["files_dynamic_new_folder_name"] = 'Enter new directory name:';
$_lang["files_dynamic_new_file_name"] = 'Enter new file name:';
$_lang["not_readable_dir"] = 'Can not read this directory.';
$_lang["confirm_delete_dir"] = 'Are you sure you want to delete the directory?';
$_lang["confirm_delete_dir_recursive"] = 'Are you sure you want to delete this directory?\n\nAll files inside this directory will also be deleted.';

$_lang["make_folders_title"] = 'End Container URL with Slash';
$_lang["make_folders_message"] = 'Append trailing slash to Resources that are set as containers when using Friendly URLs.';

$_lang["check_files_onlogin_title"] = 'Check core files on login';
$_lang["check_files_onlogin_message"] = 'By enabling this option, important system files will be checked for modification typical of scripted website attacks. While not a foolproof guarantee, it may alert you to a compromised Evolution CMS file and website.';

$_lang["configcheck_sysfiles_mod"] = 'Important System Files have been modified.';
$_lang["configcheck_sysfiles_mod_msg"] = 'You have configured Evolution CMS to check important system files for possible website script attacks. This warning does not necessarily mean your site has been compromised, however, you should review the watched files in your installation (set in System configuration -> User -> Check core files on login). If you find your files unaltered or changes were made by site administrators, go to System Configuration and click to re-save settings to dismiss this message. Changes in the following files have been found:';

$_lang['email_method_title'] = 'Sendmail method';
$_lang['email_method_mail'] = 'PHP mail() function';
$_lang['email_method_smtp'] = 'SMTP Server';
$_lang['smtp_auth_title'] = 'SMTP-AUTH';
$_lang['smtp_autotls_title'] = 'SMTPAutoTLS';
$_lang['smtp_host_title'] = 'SMTP host';
$_lang['smtp_secure_title'] = 'Encrypted SMTP';
$_lang['smtp_username_title'] = 'SMTP username';
$_lang['smtp_password_title'] = 'SMTP password';
$_lang['smtp_port_title'] = 'SMTP port';

$_lang["setting_resource_tree_node_name"] = 'Display Name in Resource Tree';
$_lang["setting_resource_tree_node_name_desc"] = 'Select the Resource field to show as the Resource name in the Resource Tree. The default setting is pagetitle.';
$_lang["setting_resource_tree_node_name_desc_add"] = 'Note: Since Evolution CMS 1.1 you can change this Display Name within Resource-Tree´s sorting option. This setting is used when Display Name in Resource Tree is set to &quot;Default&quot;.';

$_lang["resource_opt_alvisibled"] = 'Use current alias in alias path';
$_lang["resource_opt_alvisibled_help"] = 'The alias of this Resource is inserted in Friendly URL alias path';
$_lang['resource_opt_is_published'] = 'Published';

$_lang["enable_cache_title"] = 'Document caching';
$_lang["disable_chunk_cache_title"] = 'Disable chunk caching';
$_lang["disable_snippet_cache_title"] = 'Disable snippet caching';
$_lang["disable_plugins_cache_title"] = 'Disable plugins caching';
$_lang["disabled_at_login"] = 'Disabled at login';

$_lang["cache_type_title"] = 'Document caching type';
$_lang["cache_type_1"] = 'Cache is based only on Resource ID (standard)';
$_lang["cache_type_2"] = 'Cache is based on Resource ID and $_GET parameters';
$_lang["seostrict_title"] = 'Use SEO Strict URLs';
$_lang["seostrict_message"] = 'Enforces the use of strict URLs to prevent duplicate content (if needed)';

$_lang["alias_listing_title"] = 'Use AliasListing cache';
$_lang["alias_listing_message"] = 'Caching page aliases, have to be disabled if a site have huge amount of resources. "Disabled" reduces memory consumption when site have large number of resources.';
$_lang["alias_listing_disabled"] = 'Disabled';
$_lang["alias_listing_folders"] = 'Only for folders';
$_lang["alias_listing_enabled"] = 'Enabled';

$_lang["settings_friendlyurls_alert"] = 'It is necessary to rename the ht.access file in the Evolution CMS installation directory at .htaccess to use the Friendly URL function.';
$_lang["settings_friendlyurls_alert2"] = 'Since Evolution CMS was installed in a subdirectory, it is necessary to change the content of .htaccess.';

$_lang["mutate_settings.dynamic.php6"] = 'Send mail on Evolution CMS errors';
$_lang["mutate_settings.dynamic.php7"] = 'not notify';
$_lang["mutate_settings.dynamic.php8"] = 'A mail with the error source will be sent to [(emailsender)] ([+emailsender+]) if a Evolution CMS error occurs. The details of the error could be seen in the Evolution CMS events log.';

$_lang["error_no_privileges"] = "You don't have enough privileges for this action!";
$_lang["error_no_optimise_tablename"] = "Table to optimise not found in request!";
$_lang["error_no_truncate_tablename"] = "Table to truncate not found in request!";
$_lang["error_double_action"] = "Double action (GET & POST) posted!";
$_lang["error_no_id"] = "ID not passed in request!";
$_lang["error_id_nan"] = "ID passed in request is NaN!";
$_lang["error_parent_deleted"] = "Failed because resource parent is deleted!";
$_lang["error_no_parent"] = "Couldn't find parent document's name!";
$_lang["error_many_results"] = "Too many results returned from database!";
$_lang["error_no_results"] = "Not enough/ no results returned from database!";
$_lang["error_no_user_selected"] = "No user selected as recipient of this message!";
$_lang["error_no_group_selected"] = "No group selected as recipient of this message!";
$_lang["error_movedocument1"] = "Document cannot be it's own parent!";
$_lang["error_movedocument2"] = "Document's ID not passed in request!";
$_lang["error_movedocument3"] = "New parent not set in request!";
$_lang["error_internet_connection"] = "Server isn't available. Check your internet connection!";

$_lang["login_processor_unknown_user"] = "Incorrect username or password entered!";
$_lang["login_processor_wrong_password"] = "Incorrect username or password entered!";
$_lang["login_processor_many_failed_logins"] = "Due to too many failed logins, you have been blocked!";
$_lang["login_processor_verified"] = "User verification required!";
$_lang["login_processor_blocked1"] = "You are blocked and cannot log in!";
$_lang["login_processor_blocked2"] = "You are blocked and cannot log in! Please try again later.";
$_lang["login_processor_blocked3"] = "You are blocked automatic after a specified date and you cannot log in anymore!";
$_lang["login_processor_bad_code"] = "The security code you entered didn't validate! Please try to login again!";
$_lang["login_processor_remotehost_ip"] = "Your hostname doesn't point back to your IP!";
$_lang["login_processor_remote_ip"] = "You are not allowed to login from this location.";
$_lang["login_processor_date"] = "You are not allowed to login at this time. Please try again later.";
$_lang["login_processor_captcha_config"] = "Captcha is not configured properly.";

$_lang["dp_dayNames"] = "['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']";
$_lang["dp_monthNames"] = "['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']";
$_lang["dp_startDay"] = "1";

$_lang["check_all"] = "Select all";
$_lang["check_none"] = "Select none";
$_lang["check_toggle"] = "Toggle selection";

$_lang["version_notices"] = "Version Notices";

$_lang["em_button_shift"] = " (Shift-Mouseclick to open multiple windows)";

$_lang["reset_sysfiles_checksum_button"] = "Rebuild Checksums";
$_lang["reset_sysfiles_checksum_alert"] = "Are you sure you want to reset the system files checksums?";

$_lang["file_browser_disabled_msg"] = "The File Browser Feature is not enabled.";
$_lang["which_browser_default_title"] = "Default File Browser";
$_lang["which_browser_default_msg"] = "Choose the File Browser you prefer as default. In User-Settings you can choose a Custom Browser per User, or leave it on &quot;default&quot;.";
$_lang["which_browser_title"] = "File Browser";
$_lang["which_browser_msg"] = "You can choose a custom File Browser for this user. To use the System´s default Browser, leave it on &quot;Default&quot;.";
$_lang["option_default"] = "Default";
$_lang["position"] = "Position";
$_lang["are_you_sure"] = "Are you sure?";

$_lang['evo_downloads_title'] = "Evolution CMS Downloads";
$_lang['help_translating_title'] = "Help translating Evolution CMS";
$_lang['download'] = "Download";
$_lang['downloads'] = "Downloads";
$_lang["previous_releases"] = "Previous Releases";
$_lang["extras"] = "Extras";

$_lang["display_locks"] = "Display Locks";
$_lang["role_display_locks"] = "Display Locks";
$_lang["session_timeout"] = "Session Timeout";
$_lang["session_timeout_msg"] = "Evolution CMS will ping the server, if the last ping exceeds this setting, the associated session will be considered invalid and all related locks will be removed automatically. Set value in minutes (>2min, default 15min).";
$_lang["unlock_element_id_warning"] = "Are you sure you want to unlock this [+element_type+] (ID [+id+])?";
$_lang["lock_element_type_1"] = "Template";
$_lang["lock_element_type_2"] = "Template-Variable";
$_lang["lock_element_type_3"] = "Chunk";
$_lang["lock_element_type_4"] = "Snippet";
$_lang["lock_element_type_5"] = "Plugin";
$_lang["lock_element_type_6"] = "Module";
$_lang["lock_element_type_7"] = "Resource";
$_lang["lock_element_type_8"] = "Role";
$_lang["lock_element_editing"] = "You are editing this [+element_type+] since\n[+lasthit_df+]";
$_lang["lock_element_locked_by"] = "This [+element_type+] is locked by user\n[+username+] since [+lasthit_df+]";

$_lang["minifyphp_incache_title"] = 'Minify php code in site cache';
$_lang["minifyphp_incache_message"] = 'Minify php code (snippets and plugins) and store in the site cache file, ref:<a href="https://github.com/modxcms/evolution/issues/938" target="_blank">#938</a>';

$_lang["logout_reminder_msg"] = "Reminder: It seems on [+date+] you forgot to logout. Please pay attention in future to do so after your work is finished.";

$_lang["allow_eval_title"] = "Eval php code in snippet call";
$_lang["allow_eval_msg"] = "For developer : Please use \$modx-&gt;safeEval().";
$_lang["allow_eval_with_scan"] = "Execute only permitted functions";
$_lang["allow_eval_with_scan_at_post"] = "Execute all. However, at POST, only permitted functions";
$_lang["allow_eval_everytime_eval"] = "Unlimited (Use only for debugging)";
$_lang["allow_eval_dont_eval"] = "Do not allow all functions";

$_lang["safe_functions_at_eval_title"] = "Functions to allow eval";
$_lang["safe_functions_at_eval_msg"] = "Comma separated list";

$_lang["multiple_sessions_msg"] = "Information: Multiple active user sessions (total [+total+]) found for user <b>[+username+]</b>.";
$_lang["iconv_not_available"] = "It is important to install/enable extension iconv. Please speak to your host if you don´t know how to enable it.";

$_lang["cm_create_new_category"] = "Create the new category";
$_lang["cm_category_name"] = "Category name";
$_lang["cm_category_position"] = "Category position";
$_lang["cm_no_x_assigned"] = "No %s assigned";
$_lang["cm_save_categorization"] = "Save categorization";
$_lang["cm_update_categories"] = "Update categories";
$_lang["cm_assigned_elements"] = "Assigned elements";
$_lang["cm_edit_name"] = "Edit name";
$_lang["cm_mark_for_deletion"] = "Mark for deletion";
$_lang["cm_delete_now"] = "Delete immediately";
$_lang["cm_delete_element_x_now"] = "Delete &quot;%s&quot; immediately";
$_lang["cm_select_element_group"] = "Select an element group";
$_lang["cm_global_messages"] = "Global Messages";
$_lang["cm_add_new_category"] = "Add a new category";
$_lang["cm_edit_categories"] = "Edit categories";
$_lang["cm_sort_categories"] = "Sort categories";
$_lang["cm_categorize_elements"] = "Categorize elements";
$_lang["cm_translation"] = "Translation";
$_lang["cm_translations"] = "Translations";
$_lang["cm_categorize_x"] = "Categorize <span class=\"highlight\">%s</span>";
$_lang["cm_unknown_error"] = "Something went wrong.";
$_lang["cm_x_assigned_to_category_y"] = "<span class=\"highlight\">%s(%s)</span> has been assigned to category <span class=\"highlight\">%s(%s)</span>";
$_lang["cm_no_categorization"] = "No categorization made.";
$_lang["cm_no_changes"] = "Nothing to change, so no changes made.";
$_lang["cm_x_changes_made"] = "<span class=\"highlight\">%s</span> changes made";
$_lang["cm_enter_name_for_category"] = "Please enter a name for the new category.";
$_lang["cm_category_x_exists"] = "Category <span class=\"highlight\">%s</span> already exists.";
$_lang["cm_category_x_saved_at_position_y"] = "The new category <span class=\"highlight\">%s</span> was saved at position <span class=\"highlight\">%s</span>.";
$_lang["cm_category_x_moved_to_position_y"] = "Category <span class=\"highlight\">%s</span> was moved to position <span class=\"highlight\">%s</span>";
$_lang["cm_category_x_deleted"] = "Category <span class=\"highlight\">%s</span> has been deleted";
$_lang["cm_category_x_renamed_to_y"] = "Category <span class=\"highlight\">%s</span> was renamed to <span class=\"highlight\">%s</span>";
$_lang["cm_translation_for_x_empty"] = "Translation for <span class=\"highlight\">%s</span> was empty";
$_lang["cm_translation_for_x_to_y_success"] = "Translation for <span class=\"highlight\">%s</span> to <span class=\"highlight\">%s</span> successfully saved";
$_lang["cm_save_new_sorting"] = "Save new sorting";
$_lang["cm_translate_phrases"] = "Translate phrases";
$_lang["cm_translate_module_phrases"] = "Translate module-phrases";
$_lang["cm_native_phrase"] = "Native phrase";

$_lang["btn_view_options"] = 'View Options';
$_lang["view_options_msg"] = 'The display & listing of elements can be customized via &quot;View Options&quot;-button. Settings are saved and restored per Browser using HTML5´s localStorage.';
$_lang["viewopts_title"] = 'View Options';
$_lang["viewopts_cb_buttons"] = 'Buttons';
$_lang["viewopts_cb_descriptions"] = 'Descriptions';
$_lang["viewopts_cb_icons"] = 'Icons';
$_lang["viewopts_radio_list"] = 'List';
$_lang["viewopts_radio_inline"] = 'Inline';
$_lang["viewopts_radio_flex"] = 'Flex';
$_lang["viewopts_fontsize"] = 'Font-Size';
$_lang["viewopts_cb_alltabs"] = 'All Tabs';

$_lang['email_sender_method'] = 'The envelope sender of the message';
$_lang['auto'] = 'Auto-detect';
$_lang['use_emailsender'] = 'Use [(emailsender)] value';
$_lang['email_sender_method_message'] = 'The envelope sender of the message. This will usually be turned into a Return-Path header by the receiver, and is the address that bounces will be sent to. Auto-detect will work in most cases.';

$_lang['login_form_position_title'] = 'Login form postiton';
$_lang['login_form_position_left'] = 'left';
$_lang['login_form_position_center'] = 'center';
$_lang['login_form_position_right'] = 'right';
$_lang["login_form_style"] = 'Login form style:';
$_lang["login_form_style_dark"] = 'dark';
$_lang["login_form_style_light"] = 'light';
$_lang['login_logo_title'] = 'Login page logo image';
$_lang['login_logo_message'] = 'Recomended login logo image width: 360px, type .png';
$_lang['login_bg_title'] = 'Login page background image';
$_lang['login_bg_message'] = 'Recomended login page background image width: 1920px  ';

$_lang['manager_menu_position_title'] = 'Main menu position';
$_lang['manager_menu_position_top'] = 'top';
$_lang['manager_menu_position_left'] = 'left';

$_lang['invalid_event_response'] = 'The %s event has ivalid output';

$_lang['chunk_processor'] = 'Chunks processing class';

$_lang["permission_title"] = 'Create / edit permission';
$_lang["groups_permission_title"] = 'Create / edit category';
$_lang["lang_key_desc"] = 'Key language from array $_lang';
$_lang["key_desc"] = 'Key for checked permission';

$_lang["setting_from_file"] = '<strong class="text-danger">Parameter value is defined in core/custom/config/cms/settings</strong>';
$_lang['disable'] = 'Disable';
$_lang['enable'] = 'Enable';

return $_lang;
