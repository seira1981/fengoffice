<?php return array(
	'administration tool name test_mail_settings' => '测试邮件设置',
	'administration tool desc test_mail_settings' => '使用简单工具发送测试邮件，检查邮件系统是否配置正确',
	'administration tool name mass_mailer' => '批量邮件',
	'administration tool desc mass_mailer' => '可以让你发送文本消息到组中所有注册用户的简单工具',
	'configuration' => '常规配置',
	'mail transport mail()' => '默认的PHP设置',
	'mail transport smtp' => 'SMTP服务器',
	'secure smtp connection no' => '否',
	'secure smtp connection ssl' => '是，使用SSL',
	'secure smtp connection tls' => '是, 使用TLS',
	'file storage file system' => '文件系统',
	'file storage mysql' => '数据库(MySQL)',
	'config category name general' => '常规配置',
	'config category desc general' => 'Feng Office常规配置.',
	'config category name mailing' => '发送邮件',
	'config category desc mailing' => '使用这些配置可以设置Feng Office如何处理电子邮件的发送。你可以使用你的php.ini提供的配置选项或者设置为使用其他的SNMP服务器。',
	'config category name modules' => '模块',
	'config category desc modules' => '使用这些配置可以设置Feng Office模块是否启用。禁用一个模块仅会图形界面中隐藏，它并不移除用户创建或者编辑的内容对象的权限。',
	'config option name site_name' => '站点名称',
	'config option desc site_name' => '这个信息将显示在仪表板页面作为站点名称',
	'config option name file_storage_adapter' => '文件存储空间',
	'config option desc file_storage_adapter' => '选择你想要保存上传文档的位置，警告：切换存储空间将使以前上传的文件失效。',
	'config option name default_project_folders' => '缺省工作区文件夹',
	'config option desc default_project_folders' => '这些文件夹将在工作区创建时同时被创建，每一行是一个文件夹名称，相同的或者空行将被忽略。',
	'config option name theme' => '主题',
	'config option desc theme' => '使用主题你可以改变Feng Office的缺省观感，需要刷新以生效。',
	'config option name days_on_trash' => '垃圾保留天数',
	'config option desc days_on_trash' => '一个内容对象将在保留在回收站中多少天后被自动删除，如果为0，对象将不会自动删除。',
	'config option name enable_notes_module' => '启用笔记模块',
	'config option name enable_email_module' => '启用电子邮件模块',
	'config option name enable_contacts_module' => '启用联系人模块',
	'config option name enable_calendar_module' => '启用日历模块',
	'config option name enable_documents_module' => '启用文档模块',
	'config option name enable_tasks_module' => '启用任务模块',
	'config option name enable_weblinks_module' => '启用网站链接模块',
	'config option name enable_time_module' => '启用工时统计模块',
	'config option name enable_reporting_module' => '启用报告模块',
	'config option name upgrade_check_enabled' => '启用升级检测',
	'config option desc upgrade_check_enabled' => '如果启用系统即将每天一次检查是否有一个新版本的Feng Office可以下载。',
	'config option name work_day_start_time' => '上班时间',
	'config option desc work_day_start_time' => '指定上班时间',
	'config option name use_minified_resources' => '使用压缩的资源',
	'config option desc use_minified_resources' => '使用压缩的Javascript 和 CSS 来改进性能。如果你编辑了它们，那么你需要重新压缩JS和CSS，请使用Feng Office目录下的public/tools。',
	'config option name exchange_compatible' => 'Microsoft Exchange 兼容模式',
	'config option desc exchange_compatible' => '如果你使用Microsoft Exchange 服务器，设置这个选项为 yes 来避免已知的邮件问题。',
	'config option name mail_transport' => '邮件传递',
	'config option desc mail_transport' => '你可以使用缺省的PHP配置或者指定SMTP服务器来发送邮件。',
	'config option name smtp_server' => 'SMTP 服务器',
	'config option name smtp_port' => 'SMTP 端口',
	'config option name smtp_authenticate' => '使用 SMTP 认证',
	'config option name smtp_username' => 'SMTP 用户名',
	'config option name smtp_password' => 'SMTP 密码',
	'config option name smtp_secure_connection' => '使用安全 SMTP 连接',
	'can edit company data' => '可以编辑公司数据',
	'can manage security' => '有管理安全控制面板(用户, 群组和权限)权限',
	'can manage workspaces' => '可以管理工作区',
	'can manage configuration' => '有管理控制面板, 有权管理公司信息, 选项卡, logos和颜色的权限',
	'can manage contacts' => '可以管理联系人',
	'group users' => '组用户',
	'user ws config category name dashboard' => '仪表盘选项',
	'user ws config category name task panel' => '任务选项',
	'user ws config category name general' => '常规配置',
	'user config option name show pending tasks widget' => '显示挂起任务的小工具',
	'user config option name pending tasks widget assigned to filter' => '显示任务分配给',
	'user config option name show late tasks and milestones widget' => '显示超期的任务和里程碑的小工具',
	'user config option name show messages widget' => '显示笔记的小工具',
	'user config option name show comments widget' => '显示评论的小工具',
	'user config option name show documents widget' => '显示文档的小工具',
	'user config option name show calendar widget' => '显示小日历的小工具',
	'user config option name show charts widget' => '显示图表的小工具',
	'user config option name show emails widget' => '显示电子邮件的小工具',
	'user config option name localization' => '语言',
	'user config option desc localization' => '标签和日期将依照这个本地设置被显示，需要刷新以生效。',
	'user config option name initialWorkspace' => '初始工作区',
	'user config option desc initialWorkspace' => '这个设置可以配置在你登录时自动选择的工作区，或者你可以选择记住你查看的最后的工作区。',
	'user config option name rememberGUIState' => '记住用户界面状态',
	'user config option desc rememberGUIState' => '这允许你保存图形界面的状态（面板大小，收缩/展开状态等等），在你下次登录时自动启用。警告：这是一个BETA测试版本的特性。',
	'user config option name time_format_use_24' => '使用24小时制显示时间',
	'user config option desc time_format_use_24' => '如果启用，时间信息将显示为：“hh:mm”的格式，从00:00到23:59, 否则，小时数将从1到12并使用 AM 或 PM.',
	'user config option name work_day_start_time' => '上班时间',
	'user config option desc work_day_start_time' => '指定上班时间。',
	'user config option name my tasks is default view' => '分配给我的任务是缺省的视图',
	'user config option desc my tasks is default view' => '如果选择否，任务面板的缺省视图将显示所有的任务。',
	'user config option name show tasks in progress widget' => '显示“处理中任务”小工具',
	'user config option name can notify from quick add' => '缺省检查任务通告',
	'user config option desc can notify from quick add' => '通告可选框允许当任务被添加或者更新时通知分派的用户。',
	'backup process desc' => '备份保存整个应用程序的当前状态到一个压缩的文件夹， 它可以被用来简单备份一个完整的Feng Office安装。<br> 生成数据库和文件系统的备份可能会超过几秒，制作一个备份的处理过程有以下三步： <br>1、运行备份程序。 <br>2、下载这个备份包。 <br>3、可选的，在未来不需要时，一个备份可以被手工删除。<br>',
	'start backup' => '运行备份程序',
	'start backup desc' => '运行备份程序将删除上一次的备份数据，并生成一个新的。',
	'download backup' => '下载备份',
	'download backup desc' => '可以允许下载一个备份，你必须首先生成一份备份数据。',
	'delete backup' => '删除备份',
	'delete backup desc' => '删除最后的备份，它将不能被下载。强烈建议在下载后删除备份。',
	'backup' => '备份',
	'backup menu' => '备份菜单',
	'last backup' => '最后一次备份被创建于',
	'no backups' => '没有备份数据可以下载',
	'user config option name always show unread mail in dashboard' => '总是显示未读的电子邮件在仪表盘中',
	'user config option desc always show unread mail in dashboard' => '当选择NO时，活动工作区中的电子邮件将被显示在仪表盘。',
	'workspace emails' => '工作区邮件',
	'user config option name tasksShowWorkspaces' => '显示工作区',
	'user config option name tasksShowTime' => '显示时间',
	'user config option name tasksShowDates' => '显示日期',
	'user config option name tasksShowTags' => '显示标签',
	'user config option name tasksGroupBy' => '分组条件',
	'user config option name tasksOrderBy' => '排序条件',
	'user config option name task panel status' => '状态',
	'user config option name task panel filter' => '筛选条件',
	'user config option name task panel filter value' => '筛选参数',
	'templates' => '模板',
	'add template' => '添加模板',
	'confirm delete template' => '你是否确认想要删除此模板?',
	'no templates' => '暂无模板',
	'template name required' => '需要模板名称',
	'can manage templates' => '可以管理模板',
	'new template' => '新建模板',
	'edit template' => '编辑模板',
	'template dnx' => '模板不存在',
	'success edit template' => '模板成功修改',
	'log add cotemplates' => '{0} 已添加',
	'log edit cotemplates' => '{0} 已修改',
	'success delete template' => '模板“{0}”已被删除',
	'error delete template' => '删除模板错误',
	'objects' => '对象',
	'objects in template' => '模板中的对象',
	'no objects in template' => '暂无对象在这个模板中',
	'add to a template' => '添加模板',
	'add an object to template' => '添加一个对象到这个模板',
	'you are adding object to template' => '你正在添加{0}“{1}”到模板。在下面选择模板或者为{0}创建新模板 .',
	'success add object to template' => '对象添加到模板成功',
	'object type not supported' => '此对象类型不支持',
	'assign template to workspace' => '指定模板到工作区',
	'cron events' => '定时事件',
	'about cron events' => '关于定时事件...',
	'cron events info' => '定时事件可以让你在Feng Office中定期执行任务，而不需要登录到系统中。为了启用定时事件你需要配置一个定时作业来周期性的执行文件："cron.php"，这个文件在Feng Office的根目录下面。这个你运行定时作业的周期决定了你可以运行定时事件的最小时间间隔。 例如：如果你配置定时作业每5分钟一次，并且你配置检查更新的定时事件为每分钟一次， 那么实际上将每5分钟检查一次更新。如何配置定时作业请询问你的系统管理员或者主机提供商。',
	'cron event name check_mail' => '检查邮件',
	'cron event desc check_mail' => '这个定时事件将检查所有系统中电子邮件帐户中的新邮件。',
	'cron event name purge_trash' => '清理回收站',
	'cron event desc purge_trash' => '这个定时事件将删除超期的回收站中的对象。',
	'cron event name send_reminders' => '发送通知',
	'cron event desc send_reminders' => '这个定时事件将自动发送电子邮件通知。',
	'cron event name check_upgrade' => '检查更新',
	'cron event desc check_upgrade' => '这个定时事件将检测Feng Office的新版本。',
	'cron event name create_backup' => '创建备份',
	'cron event desc create_backup' => '创建一个备份让你可以从超级管理员的备份区下载。',
	'next execution' => '下一次执行',
	'delay between executions' => '在两次执行中的间隔',
	'enabled' => '启用',
	'no cron events to display' => '暂无定时事件显示',
	'success update cron events' => '定时时间更新成功',
	'manual upgrade' => '手动升级',
	'manual upgrade desc' => '为了手动升级Feng Office你需要下载最新版本的Feng Office,解压缩到你安装的根目录然后在浏览器中定位到<a href="public/upgrade">\'public/upgrade\'</a> 运行升级程序。',
	'automatic upgrade' => '自动升级',
	'automatic upgrade desc' => '自动更新将自动下载并且解压缩新版本，并且运行升级程序，web服务器需要对所有的文件夹拥有写权限。',
	'start automatic upgrade' => '开始自动升级',
	'config category name passwords' => '密码',
	'config category desc passwords' => '用此设置管理密码选项',
	'autentify password title' => '验证密码',
	'autentify password desc' => '需要您进入管理面板。<br/>请重新输入密码。',
	'config option name time_format_use_24' => '使用24小时制',
	'config option name checkout_notification_dialog' => '文档签出提醒对话',
	'config option name file_revision_comments_required' => '文档修订意见为必填',
	'config option name show_feed_links' => '显示Feed链接',
	'config option name currency_code' => '货币',
	'config option desc currency_code' => '货币符号',
	'config option name smtp_address' => 'SMTP地址',
	'config option name user_email_fetch_count' => '邮件获取限额',
	'config option name min_password_length' => '最小密码长度',
	'config option desc min_password_length' => '密码所需字符最小数量',
	'config option name password_numbers' => '密码数字',
	'config option desc password_numbers' => '密码所需数字型字符数',
	'config option name password_uppercase_characters' => '密码大写字符',
	'config option desc password_uppercase_characters' => '密码所需大写字符数',
	'config option name password_metacharacters' => '密码元字符',
	'config option desc password_metacharacters' => '密码所需元字符数 (例如: ., $, *)',
	'config option name password_expiration' => '密码有效期（天数）',
	'config option desc password_expiration' => '新密码有效天数（0，则禁用此选项）',
	'can manage reports' => '可以管理报告',
	'user ws config category name calendar panel' => '日历选项',
	'user ws config category name mails panel' => '邮件选项',
	'user config option name show dashboard info widget' => '用户工作区信息显示小工具',
	'user config option name show getting started widget' => '显示“开始”小工具',
	'user config option name show_tasks_context_help' => '显示任务的上下文帮助',
	'user config option desc show_tasks_context_help' => '若启用，上下文帮助框将显示在任务面板。',
	'user config option name start_monday' => '每周始于星期一',
	'user config option desc start_monday' => '将日历显示为始于星期一（须刷新以应用更改）',
	'user config option name show_week_numbers' => '显示周数',
	'config option name validate_password_history' => '认证密码历史',
	'user config option name date_format' => '日期格式',
	'user config option name show_context_help' => '显示上下文帮助',
	'user config option name view deleted accounts emails' => '查看已删除账户的邮件',
	'user config option name block_email_images' => '不显示邮件中的图片',
	'user config option desc block_email_images' => '不显示邮件对象中嵌入的图片。',
	'user config option name draft_autosave_timeout' => '草稿自动保存间隔',
	'user config option desc draft_autosave_timeout' => '每次自动保存邮件草稿操作的间隔秒数',
	'show context help always' => '总是',
	'show context help never' => '从不',
	'show context help until close' => '直到关闭',
	'can manage time' => '可以管理工时统计',
	'can add mail accounts' => '可以添加邮件账户',
	'add a parameter to template' => '为此模板添加参数',
	'parameters' => '参数',
	'cron event name send_notifications_through_cron' => '通过计划发送提醒通知',
	'select object type' => '选择对象类型',
	'select one' => '选一个',
	'email type' => '电子邮件类型',
	'custom properties updated' => '客户属性已更新',
	'user config option name noOfTasks' => '设置默认显示的任务数量',
	'user config option name amount_objects_to_show' => '要显示的链接对象数',
	'user config option desc amount_objects_to_show' => '设置在对象视图中显示的链接对象数',
	'user config option name show_two_weeks_calendar' => '显示“两周日历”小工具',
	'user config option desc show_two_weeks_calendar' => '设置日历工具显示两周日程',
	'user config option name attach_docs_content' => '附加文件内容',
	'default user preferences' => '默认用户参数',
	'mail accounts' => '邮件账户',
	'incoming server' => '收件服务器',
	'outgoing server' => '发件服务器',
	'no email accounts' => '无邮件账户',
	'user config option name create_contacts_from_email_recipients' => '从邮件收件人创建联系人',
	'user config option name drag_drop_prompt' => '拖放到工作区时要执行的操作',
	'drag drop prompt option' => '提醒用户作出一个操作',
	'mail drag drop classify option' => '分类附件',
	'mail drag drop dont option' => '不分类附件',
	'user config option name show_emails_as_conversations' => '以交谈形式显示邮件',
	'user config option name search_engine' => '搜索引擎',
	'search engine mysql like' => '全面',
	'search engine mysql match' => '快速',
	'config option name account_block' => '密码过期时冻结账户',
	'user config option name descriptive_date_format' => 'PHP日期格式描述',
	'user config option name hide_quoted_text_in_emails' => '查看邮件时隐藏引用文本',
	'edit default user preferences' => '编辑默认用户参数',
	'config option desc checkout_notification_dialog' => '如果启用，用户将在下载一个文件时提示用户在编辑或只读之间选择',
	'config option desc time_format_use_24' => '若设为是， 将会使用24小时制式代替12小时制式',
	'config option desc file_revision_comments_required' => '若设为是， 添加新的文件修订版，需要用户为每一个版本提供一个新的注释。',
	'config option desc show_feed_links' => '这允许您显示链接的RSS源或iCal的登录用户在整个系统中，这样他可以订阅他们。警告：这些链接包含可以将用户登录到系统的信息。如果一个不知道的用户共享这个链接的一个，他可能会损害他的所有信息。',
	'config option name ask_administration_autentification' => '认证管理',
	'config option desc ask_administration_autentification' => '点 "Yes" , 将弹出二次确认对话框要求您再次输入密码以便确认是您本人为超级管理员。',
	'config option name detect_mime_type_from_extension' => 'Detect mime type from extension',
	'config option desc detect_mime_type_from_extension' => 'Enable this to detect file\'s mime type by its extension',
	'config option desc smtp_address' => '可选。一些服务器要求您使用该服务器的电子邮件地址发送电子邮件。留下空白使用用户的电子邮件地址。',
	'config option desc user_email_fetch_count' => '多少封电子邮件，以获取当用户点击"检查邮件帐户"按钮。使用较大的值可能会导致用户的超时错误。使用0表示没有限制。请注意，这不会影响电子邮件获取通过 cron。',
	'config option name password_expiration_notification' => '密码过期提醒（提前天数）',
	'config option desc password_expiration_notification' => '在密码过期前几天通知用户 (0，则禁用此选项)',
	'config option desc account_block' => '禁用用户帐户，密码过期时 （需要管理员来再次启用用户帐户）',
	'config option name new_password_char_difference' => '与历史密码校验',
	'config option desc new_password_char_difference' => '验证新的密码不同中针对用户使用的最后10个密码至少3个字符',
	'config option desc validate_password_history' => '验证新密码不匹配的任何用户使用的最后10密码',
	'config option name checkout_for_editing_online' => '自动签出时在线编辑',
	'config option desc checkout_for_editing_online' => '当用户编辑文档在线将签出，没有其他人可以编辑它在同一时间',
	'user config option desc show_week_numbers' => '在月视图和周视图中显示周数。',
	'user config option desc date_format' => '时间代码格式说明：l = 星期全稱（小寫字母L），F = 月份全稱，j = 該月的某一號，S = 英語日期尾碼（如，1st（第一1+st）、2nd（第二2+nd）或15th（第十五15+th）後面的st、nd 或 th。），Y = 年份顯示4位元數位。（小寫字母y顯示年份的後兩位元）。例如：【l, F j, Y】显示为【星期五，9月24日，2004年】。参考http://php.net/manual/zh/function.date.php',
	'user config option desc descriptive_date_format' => '要应用于描述性的日期值的模板格式。时间代码格式说明︰ l = 星期全稱（小寫字母L），F = 月份全稱，j = 該月的某一號，S = 英語日期尾碼（如，1st（第一1+st）、2nd（第二2+nd）或15th（第十五15+th）後面的st、nd 或 th。），Y = 年份顯示4位元數位。（小寫字母y顯示年份的後兩位元）。例如：【l, F j, Y】显示为【星期五，9月24日，2004年】。参考http://php.net/manual/zh/function.date.php',
	'user config option desc show_context_help' => '如果你想要总是查看帮助，永远不会查看它，或查看它直到关闭每个框，请选择此项。',
	'user config option desc view deleted accounts emails' => '使您能够查看来自您删除的电子邮件帐户的电子邮件 （当您删除一个帐户，您必须删除电子邮件要使用此选项）',
	'cron event desc send_notifications_through_cron' => '如果启用了此事件通过 cron 和生成由Feng Office时不会发送电子邮件通知。',
	'user config option desc attach_docs_content' => '当此选项设置为"是"文件附件将添加为定期的电子邮件附件。当选择"无"时将文件作为链接发送文件附件。',
	'user config option name max_spam_level' => '允许的最大垃圾邮件级别',
	'user config option desc max_spam_level' => '当读取电子邮件，垃圾邮件评价大于此值的邮件将发送到"回收站"文件夹中。设置为0以最大的过滤，10没有过滤。此选项适用只当垃圾邮件筛选器工具安装在您的服务器。',
	'user config option desc hide_quoted_text_in_emails' => '如果启用了电子邮件的邮件不会显示任何引号中的文本。将有一个选项来查看阅读时。',
	'default user preferences desc' => '选择用户首选项的默认值。此值应用当用户没有选择尚未选项的值。',
	'user config option desc create_contacts_from_email_recipients' => '当此选项设置为"Yes"的人将自动创建为您发送电子邮件至每个电子邮件地址。你需要"可以管理所有人"的权限。',
	'user config option desc drag_drop_prompt' => '选择到工作区中拖动对象时，应采取哪些行动。',
	'drag drop move option' => '从旧工作区中移动到新工作区',
	'drag drop keep option' => '添加到新工作区，并在旧工作区中保留',
	'user config option name mail_drag_drop_prompt' => '当要采取行动与附件手动分类电子邮件',
	'user config option desc mail_drag_drop_prompt' => '选择电子邮件使用拖动 & 滴或分类形式在分类时应以电子邮件附件做什么。',
	'mail drag drop prompt option' => '弹出提醒用户执行一个操作',
	'user config option desc show_emails_as_conversations' => '如果已启用电子邮件将分为电子邮件清单，显示属于同一个线程 （答复、 转发等） 作为一个条目在列表中的所有电子邮件中的对话',
	'user config option name autodetect_time_zone' => '自动检测时区',
	'user config option desc autodetect_time_zone' => '启用此选项后，用户的时区将从浏览器中的自动检测。',
	'user config option desc search_engine' => '选择要使用哪个搜索引擎。"全面"会做一个更详尽的搜索，但将远比"快速"。"全面"不建议用于负载较重的安装。',
	'user config option name show activity widget' => '显示“动态”工具',
	'user config option name detect_mime_type_from_extension' => '从扩展名检测MIME类型',
	'user config option desc detect_mime_type_from_extension' => '启用此项，从扩展名检测文件的MIME类型',
	'user config option name activity widget elements' => '“动态”工具大小',
	'user config option desc activity widget elements' => '动态”工具中显示的项的数量。',
	'user config option name task_display_limit' => '任务显示的最大条数',
	'user config option desc task_display_limit' => '出于性能考虑，此数值不可太大。填“0”则不限制。',
	'config option name use_owner_company_logo_at_header' => '使用公司Logo作为系统图标',
	'config option desc use_owner_company_logo_at_header' => '公司Logo显示于屏幕右上角。刷新（按F5）页面应用变更。Logo建议大小50x50像素。',
	'config category name documents' => '文件',
	'config category desc documents' => '管理文件配置',
	'config category name brand_colors' => '标记',
	'config category desc brand_colors' => '配置系统颜色',
	'user config option name sendEmailNotification' => '发送邮件通知',
	'user config option desc sendEmailNotification' => '若设为是，将发送一封提醒邮件到用户邮箱。',
	'config option name use_time_in_task_dates' => '任务用时',
	'config option desc use_time_in_task_dates' => '允许用户输入截止时间和起始时间，截止日期和起始日期。',
	'config option name untitled_notes' => '未命名笔记',
	'config option desc untitled_notes' => '允许创建无标题笔记',
	'config option name repeating_task' => '重做任务',
	'config option desc repeating_task' => '重复的任务将被单独显示，而不是作为一个单一的任务',
	'config option name working_days' => '工作日',
	'config option name check_spam_in_subject' => '依标题判别垃圾邮件',
	'config option name show company logo in notifications' => '在通知中添加公司LOGO',
	'config option desc show company logo in notifications' => '公司LOGO已附加在提醒内容中。',
	'config option name infinite_paging' => '分页',
	'config option desc infinite_paging' => '起用或禁用分页. 当起用时，会提升加载速度.',
	'owned by' => '属于',
	'config option name show_tab_icons' => '显示标签页图标',
	'all milestones' => '全部里程碑',
	'timeslot' => '工时',
	'module permissions' => '模块权限',
	'user ws config category name time panel' => '时间选项',
	'user ws config category name listing preferences' => '列表选项',
	'user ws config category name reporting' => '报表选项',
	'user config option name reminders_events' => '事件通知',
	'user config option desc reminders_events' => '事件通知默认参数',
	'user config option name reminders_tasks' => '任务通知',
	'user config option desc reminders_tasks' => '任务通知默认参数',
	'success instatiate template' => '模板 \'{0}\' 成功实例化',
	'cron event name import_google_calendar' => '导入谷歌日历事件',
	'sync' => '同步',
	'add member' => '添加成员',
	'add member to this dimension' => '添加成员到此里程碑中',
	'parent member' => '子',
	'new member' => '新建成员',
	'permissions for member' => '成员 \'{0}\' 的权限',
	'expand-collapse' => '展开/折叠',
	'user config option name contacts_per_page' => '每页联系人',
	'user config option name listingContactsBy' => '联系人姓名显示方式',
	'dimensions' => '维度',
	'organization data' => '组织信息',
	'brand colors' => '标记',
	'head color' => '页面头部颜色',
	'tabs color' => '标签页颜色',
	'font color' => '字体颜色',
	'title color' => '标题颜色',
	'save colors' => '保存颜色',
	'members color' => '维度颜色',
	'edit member' => '编辑成员',
	'associate' => '副教授',
	'can_instantiate_templates' => '有使用任务模板权限',
	'can_manage_dimensions' => '有管理里程碑权限',
	'can_manage_dimension_members' => '有管理里程碑成员权限',
	'can_see_assigned_to_other_tasks' => '有查看其他用户的任务权',
	'can_update_other_users_invitations' => '有更新其他用户的事件邀请权',
	'can_link_objects' => '有链接对象权',
	'can_manage_billing' => '有管理工资权',
	'can_view_billing' => '有查看工资权',
	'user config option name tasksUseDateFilters' => '使用任务日期筛选',
	'user config option name report_time_colums_display' => '时间列格式',
	'select member type' => '选择类型',
	'object custom properties' => '对象的自定义属性',
	'custom properties for' => '{0}的自定义属性',
	'default value' => '默认值',
	'show in main tab' => '在主选项卡显示',
	'file extension' => '文件扩展名',
	'allow' => '允许',
	'dimension options' => '维度选项',
	'enable or disable dimension types' => '起用或禁用里程碑类型',
	'success edit dimension options' => '维度选项变更成功',
	'dimension names' => '维度名称',
	'default name' => '默认名称',
	'custom name' => '自定义名称',
	'config category name mail module' => 'Email模块',
	'option' => '选项',
	'config option desc working_days' => '在这里你可以选择这是贵公司的工作日。这是有用的日历和重复任务。',
	'config option name wysiwyg_messages' => '使用富文本格式填写信息的描述内容',
	'config option desc wysiwyg_messages' => '启用此选项，以便您可以使用丰富的文本格式写您的注释描述。',
	'config option name wysiwyg_tasks' => '使用富文本格式填写任务的描述内容',
	'config option desc wysiwyg_tasks' => '启用此选项，以便您可以使用丰富的文本格式写您的注释描述。',
	'config option name wysiwyg_projects' => '使用富文本格式填写项目的描述内容',
	'config option desc wysiwyg_projects' => '启用此选项，以便您可以使用丰富的文本格式写您的注释描述。',
	'config option name let_users_create_objects_in_root' => '让用户创建对象而不将它们分类',
	'config option desc check_spam_in_subject' => '筛选包含单词"垃圾邮件"主题中的所有电子邮件',
	'config option name show images in document notifications' => '附加图片的文档通知',
	'config option desc show images in document notifications' => '如果文档是图像，它被附加在通知的内容。',
	'config option name notification_recipients_field' => '通知收件人的电子邮件字段',
	'config option desc notification_recipients_field' => '如果在"收件人"字段、"抄送"字段或"密件抄送"字段，将把每个通知的收件人，请选择 （通过使用最后一个收件人将看不彼此在邮件头中）。',
	'config option name check_unique_mail_contact_comp' => '检查电子邮件联系人和公司之间的唯一性',
	'config option desc check_unique_mail_contact_comp' => '如果启用此选项，则您将不能添加一个公司，如果联系人已经使用其电子邮件。',
	'config option name block_login_after_x_tries' => '5次密码输错后将锁定该账户',
	'config option desc block_login_after_x_tries' => '如果用户试图登录没有成功在最后10分钟的5倍，然后10分钟将阻止该帐户。',
	'config option name use_milestones' => '使用里程碑',
	'config option desc use_milestones' => '启用此选项将允许创建里程碑和准给他们的任务。',
	'config option desc show_tab_icons' => '启用此选项将显示每个选项卡的图标。',
	'config option name can_assign_tasks_to_companies' => '可以将任务分配给公司',
	'config option desc can_assign_tasks_to_companies' => '如果启用然后公司将出现在"指派给"选择器，当添加编辑任务。',
	'config option name use_object_properties' => '使用对象属性',
	'config option desc use_object_properties' => '启用此选项将允许您定义自定义 （键-值） 的每个对象的属性。',
	'config option name automatic_crpm_status_calculation' => '客户与项目自动状态',
	'config option desc automatic_crpm_status_calculation' => '当启用时，您将能够设置客户及项目的不同状态的计算公式，以便他们自动计算',
	'config option name add_default_permissions_for_users' => '设置执行者、 管理者和管理员用户的默认权限',
	'config option desc add_default_permissions_for_users' => '如果启用然后这些用户将被授予的默认权限，创建工作区、 客户端或项目时',
	'user config option name notify_myself_too' => '包括我自己在自动生成的通知',
	'user config option desc notify_myself_too' => '当启用时，自动生成的通知将包括自己 （仅可用于文档）',
	'config option name give_member_permissions_to_new_users' => '对所有客户、 项目等给新用户的权限',
	'config option desc give_member_permissions_to_new_users' => '创建一个新用户，如果在此选项中选择用户类型时将在所有成员中具有权限授予该用户。',
	'config option name show_owner_company_name_header' => '在标题中显示公司名称',
	'config option desc show_owner_company_name_header' => '启用时，该公司的名称要附近公司LOGO标志在页眉中显示。',
	'config option name brand_colors_head_back' => 'Header背景颜色',
	'config option name brand_colors_head_font' => 'Header字体颜色',
	'config option name inherit_permissions_from_parent_member' => '继承的权限从父工作区、 客户端或项目',
	'config option desc inherit_permissions_from_parent_member' => '创建工作区、 客户端、 文件夹或项目时，将从父复制的默认权限，如果启用此选项。',
	'config option name milestone_selector_filter' => '里程碑选择器筛选器',
	'config option desc milestone_selector_filter' => '此选项用于筛选的里程碑选择器，您可以选择显示所有的里程碑，只有里程碑在当前工作区中，客户端、 项目或文件夹;或在当前工作区中，客户端、 项目或文件夹和其父层次结构中的里程碑。',
	'only in current member' => '仅在当前成员中的里程碑',
	'only in current member and parents' => '仅在当前成员或父级的里程碑',
	'notify myself too' => '包括自己的自动生成通知',
	'config option desc mandatory_address_fields' => '选择这些字段将被强制在每个窗体输入的地址是本。',
	'user config option name displayed events amount' => '显示的事件数',
	'user config option desc displayed events amount' => '每一天在月视图中显示的事件数',
	'user config option name mail_account_err_check_interval' => '电子邮件帐户错误检查时间间隔',
	'user config option desc mail_account_err_check_interval' => '每个验证电子邮件帐户 (0，则禁用) 之间的时间',
	'user config option name work_day_end_time' => '下班时间',
	'user config option desc work_day_end_time' => '指定下班时间。',
	'user config option name add_timeslot_view_dimensions_combos' => '时间段分类',
	'user config option desc add_timeslot_view_dimensions_combos' => '在这里，你将能够选择在那里你可以分类时间段',
	'user config option name can notify subscribers' => '通知的订阅服务器',
	'user config option desc can notify subscribers' => '此选项会启用通知订阅的用户后一项的任务已添加或更新',
	'user config option name close timeslot open' => '关闭的时间段仍在运行时完成某项任务',
	'user config option name quick_add_task_view_dimensions_combos' => '任务快速的添加/编辑分类',
	'user config option desc quick_add_task_view_dimensions_combos' => '在这里，你将能够选择在那里你可以分类任务时使用的快速方法',
	'config option name use tasks dependencies' => '使用任务相关性',
	'config option desc use tasks dependencies' => '使您能够定义任务之间的相关性',
	'user config option name show_file_revisions_search' => '在执行搜索时，请参阅文件修订',
	'mails on imap acc already sync' => '暂无要同步的电子邮件',
	'cant sync account' => '此帐户无法同步。请检查 IMAP 的设置参数',
	'config option name sent_mails_sync' => '从Feng Office发送电子邮件时启用 IMAP 同步',
	'succes save object subtypes' => '保存成功的对象子类型',
	'user selector permissions help' => '单击要修改的权限的组或用户',
	'user config option desc contacts_per_page' => '列出的联系人的数量 （避免0和负数）。考虑到，数字越大，更多的时间才会加载联系人。',
	'user config option desc listingContactsBy' => '默认为“否”，使用 "名字 姓氏" 而不是 "姓氏 名字"。因为西方人姓在后名在前：英国人常用surname这个词，美国人常用last name.First name 是名字，Surname 是姓氏，Last name 也是姓氏。中文用户建议选“是”启用此选项，符合中文习惯。',
	'can_manage_security description' => 'If this permission is checked the user will be able to create, update and delete users and grorps, and modify their permissions.',
	'can_manage_configuration description' => 'If this permission is checked the user will be able to edit application settings like Configuration, Custom Properties and Cron Events, and Upgrade the application.',
	'can_manage_templates description' => 'If this permission is checked the user will be able to create, update and delete Templates.',
	'can_instantiate_templates description' => '如果选中了此权限的用户将能够实例化模板。',
	'can_manage_time description' => 'If this permission is checked the user will be able to use the Time module and add timeslots to tasks.',
	'can_add_mail_accounts description' => 'If this permission is checked the user will be able to create new Email accounts',
	'can_manage_dimensions description' => '如果选中了此权限的用户将在维度拥有完全权限。他将能够创建新尺寸并更改其配置。这是一个高级的管理功能。',
	'can_manage_dimension_members description' => '如果选中了此权限的用户将在维度成员拥有完全权限。他将能够创建、 编辑和删除新成员。在实践中，成员可以是工作区、 项目、 客户端等。如果用户不会管理安全配置，那么在创建客户端/项目/工作区时，它将是强制性的选择的位置位于，所以可以继承的权限。',
	'can_manage_tasks description' => '如果选中了此权限的用户将拥有完全权限结束任务。他将能够将任务分配给其他用户，然后完成它们。',
	'can_see_assigned_to_other_tasks description' => '如果启用然后用户将能够查看未分配给他/她的任务。',
	'can_update_other_users_invitations description' => '如果启用然后用户将能够更改的其他用户事件邀请状态。',
	'can_link_objects description' => '如果选中了此权限的用户将能够链接和取消链接对象',
	'can_manage_billing description' => '如果启用然后用户将能够编辑费用配置。',
	'cannot delete member childs cannot be moved to parent' => '不能删除成员，子成员不能直接 childs 的此成员的父级。',
	'cannot delete member cannot be root' => '不能删除成员，子成员不能是根成员的维度。',
	'cannot delete member has objects' => '不能删除成员，它包含的对象。',
	'cannot delete member is required for objects' => '不能删除成员，它是必需的它的对象。',
	'cannot delete member is account owner' => '不能删除帐户的所有者。',
	'user config option desc attach_to_notification' => '启用时，默认情况下，选中此选项可将文档内通知发送。',
	'user config option desc tasksUseDateFilters' => '如果启用然后你将能够使用日期范围筛选任务列表。',
	'user config option desc report_time_colums_display' => '如果选择友好格式然后的时间列将显示在一个描述性的模式 (如︰2个小时，15分钟)。如果不是他们然后会显示分钟或秒的数额',
	'member custom properties' => '维度的自定义属性',
	'list values comma separated' => '列表值 （以逗号分隔）',
	'cp list values hint' => '仅为列表属性。',
	'is multiple' => '多个值',
	'dimension options desc' => '在这里您可以定义和更改维度选项以满足您的需要。',
	'enable or disable dimension types desc' => '在本节中，您可以选择将使用哪种类型的维度成员。',
	'dimension names desc' => '在本节中，你可以更改维度的名称\'自定义名称\'输入要使用的默认名称为空。',
	'custom name placeholder' => '在这里要定义一个自定义的名称的类型',
	'billing and invoicing' => '费用和发票',
	'billing categories description' => '在本节中，您可以定义计费费率为人。',
	'income config general' => '一般开票配置',
	'income general config description' => '用于开票配置的常规选项。',
	'invoice copies' => '发票副本',
	'copies config description' => '添加、 编辑和删除发票副本定义',
	'invoice types' => '发票类型',
	'invoice types config description' => '管理您的组织的发票类型。',
	'invoice notebooks' => '发票的笔记本',
	'invoice notebooks config description' => '管理您的组织中使用的发票笔记本。',
	'taxes' => '税',
	'invoice logo' => '发票LOGO',
	'file extension prevention uploading' => '允许上传的文件类型后缀名扩展名',
	'custom property name empty' => '自定义属性名称为空',
	'invoice logo config description' => '编辑发票中包含的LOGO图标',
	'user config option name root_dimensions' => '显示维度插件',
	'user config option name show_object_direct_url' => '显示对象真实URL地址',
	'user config option name updateOnLinkedObjects' => '当链接其他时更新对象：',
	'user config option name access_member_after_add' => '新成员创建后访问新成员',
	'user config option desc access_member_after_add' => '如果您启用此选项，在创建一个工作区、客户机等；它将被选中在左面板（此选项只工作，如果“记住访问成员或不创建成员创建”时启用）。',
	'user config option name access_member_after_add_remember' => '记住，访问成员或不是创建成员时',
	'user config option name tasksShowDescriptionOnTimeForms' => '当在任务列表中添加时间项时显示描述字段',
	'user config option name add_task_default_reminder' => '在创建任务时默认添加一个通知',
	'user config option name add_task_autoreminder' => '创建其他受让人自动提醒通知当编辑任务',
	'user config option name add_self_task_autoreminder' => '编辑我的任务时创建自动提醒通知',
	'user config option name add_event_autoreminder' => '在编辑事件时创建自动提醒通知',
	'user config option name show_multiple_color_events' => '在日历标签中显示多色事件',
	'user config option name autoassign_events' => '自动分派事件',
	'user config option name event_send_invitations' => '发送事件的邀请',
	'user config option name event_subscribe_invited' => '关注被邀请用户',
	'missing required associations' => '您必须从标记的组中选择至少一个属性 *:{0}',
	'numeric' => '数字型',
	'default value must be numeric' => '默认 {0} 值必须是数字.',
	'boolean' => '布尔型',
	'list' => '列表型',
	'memo' => '备注',
	'is required' => '必需的',
	'config option desc brand_colors_head_back' => '配置选项降序Head颜色',
	'config option desc brand_colors_head_font' => '配置选项降序Head字体颜色',
	'add new custom property' => '添加 {0} 的自定义属性',
	'dimension association options' => '维度关联选项',
	'user config option desc classify_mail_with_conversation' => '如果启用了邮件分为会话的工作区（如电子邮件属于谈话）。',
	'user config option desc show_object_direct_url' => '如果启用，将显示一个直接的对象的网址将显示在它的概述',
	'user config option desc auto_classify_attachments' => '如果启用附件将归类到帐户定义的电子邮件的地方',
	'user config option desc show_multiple_color_events' => '如果启用了事件将显示使用事件相关的每一个成员的颜色。',
	'file extension no allow' => '您的管理员不允许此文件扩展名。请使用不同的格式。',
	'file extension no allow classify' => '您无法将附件\'{0}\'进行分类。您的管理员不允许此文件扩展名。',
	'config option name mandatory_address_fields' => '必填地址字段：',
	'user config option desc view_mail_attachs_expanded' => '用户配置选项可以查看邮件邮件的扩展名',
	'config option name brand_colors_texture' => '文本使用颜色',
	'user config option desc updateOnLinkedObjects' => '如果启用此选项，当你连接或断开与另一个对象，他们的更新字段将被修改。',
	'cron event desc import_google_calendar' => '如果启用此选项，谷歌日历的事件将被导入到冯办公室，只要你正确地设置了它。',
	'cron event desc export_google_calendar' => '如果启用此选项，将从日历的事件将被导出到外部日历，如谷歌日历。',
	'cron event name export_google_calendar' => '导出事件到外部',
	'user config option desc autoassign_events' => '如果您还希望被邀请到您创建的事件，请启用此选项，即使您正在对其他人进行筛选',
	'user config option name attach_to_notification' => '将文档附加到通知',
	'user config option name auto_classify_attachments' => '自动归类电子邮件附件时接收电子邮件',
	'user config option name classify_mail_with_conversation' => '按会话归类邮件',
	'user config option name breadcrumb_member_count' => '列表显示的对象数量',
	'taxes config description' => '管理将包含在发票上的税',
	'custom properties reorder help' => '定义的属性可以重新通过拖动来排序（按左侧行号）到理想位置后放开。',
	'module permission uncheck warning' => '模块权限取消提醒',
	'user config option desc access_member_after_add_remember' => '启用此选项可以让您跳过在创建工作区、客户端等等之后要做的细节。',
	'user config option name breadrcrumb_member_count' => '显示面包屑数量',
	'config option name updateOnLinkedObjects' => '将对象链接到另一个对象是更新变更日期',
	'user config option desc add_task_default_reminder' => '创建任务时默认创建提醒通知',
	'user config option desc add_task_autoreminder' => '启用此选项将自动创建自动提醒当我编辑的任务分配给其他人，不再有提醒的离开',
	'user config option desc add_self_task_autoreminder' => '启用这个选项，如果你想自动创建自动提醒编辑我的任务时，不再有提醒左',
	'user config option desc add_event_autoreminder' => '启用这个选项，如果你想自动创建自动提醒如果你编辑一个事件，不再有提醒的离开',
	'user config option desc event_send_invitations' => '如果您希望创建一个事件时默认启用的“发送邀请”选项，可以启用此选项',
	'user config option desc event_subscribe_invited' => '如果您希望创建一个事件时默认启用的“订阅邀请用户”选项，请启用此选项',
	'user config option desc show_notify_checkbox_in_quick_add' => '当启用时，如果您正在快速添加或编辑一个任务，您将能够选择是否发送或不通知。',
	'user config option desc root_dimensions' => '检查每一个框有树部件显示的每一个维度时，您访问Feng Office。',
	'user config option name show_notify_checkbox_in_quick_add' => '显示“发送通知”选项',
	'user config option name view_mail_attachs_expanded' => '访问电子邮件时显示扩展附件',
	'copy task subtasks' => '你确定想复制子任务的模板吗？',
	'copy milestone tasks' => '您是否也要将里程碑任务的任务复制到模板中？',
	'member cannot be root' => '\'{0}\' 的成员类型不能是维度的root类型，必须选择父成员。',
	'can_task_assignee' => '交付任务',
	'cannot delete member is associated' => '无法删除的成员，这是其他维度相关连了的。',
	'invalid parent member' => '无法保存 \'{0}\' 到 \'{1}\'',
	'success file extension' => '上传文件类型修改成功。',
	'config category desc mail module' => '电子邮件模块的常规配置',
	'default value must be date' => '{0} 的默认值必须是日期。',
	'dimension association options desc' => '在这一节中，您可以更改维度之间的每个关联的选项。',
	'associated to' => '关联到',
	'dim assoc config name allow_remove_from_property_member' => '允许移除已关联 {1}',
	'dim assoc config desc allow_remove_from_property_member' => '当{1}的自动分类为 {0} 启用时，您可以设置，如果此分类可以被删除或不被删除。',
	'dim assoc config name autoclassify_in_property_member' => '当对{0}进行分类时自动归类到{1}里面去',
	'dim assoc config desc autoclassify_in_property_member' => '如果要在分类组件中预先选择选定的{0}的{1}，使用此选项。',
); ?>
