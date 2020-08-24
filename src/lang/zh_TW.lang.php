<?php

/**
 * PHP Server Monitor
 * Monitor your servers and websites.
 *
 * This file is part of PHP Server Monitor.
 * PHP Server Monitor is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PHP Server Monitor is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PHP Server Monitor.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package     phpservermon
 * @author      Jason Cheng <https://github.com/jasoncheng7115>
 * @copyright   Copyright (c) 2008-2014 Pepijn Over <pep@neanderthal-technology.com>
 * @license     http://www.gnu.org/licenses/gpl.txt GNU GPL v3
 * @version     Release: v3.1.1
 * @link        http://www.phpservermonitor.org/
 **/

$sm_lang = array(
    'name' => '繁體中文 - Traditional Chinese',
    'locale' => array(
        '0' => 'zh_TW.UTF-8',
        '1' => 'zh_TW',
        '2' => 'chinese',
        '3' => 'chinese-tw',
    ),
    'locale_tag' => 'zh_TW',
    'locale_dir' => 'ltr',
    'system' => array(
        'title' => 'Server Monitor',
        'install' => '安裝',
        'action' => '動作',
        'save' => '儲存',
        'edit' => '編輯',
        'delete' => '刪除',
        'date' => '日期',
        'message' => '訊息',
        'yes' => '是',
        'no' => '否',
        'insert' => '插入',
        'add_new' => '增加',
        'back_to_top' => '回到最上層',
        'go_back' => '返回',
        'ok' => '確定',
        'cancel' => '取消',
        'activate' => '啟用',
        'short_day_format' => '%B %e',
        'long_day_format' => '%B %e, %Y',
        'yesterday_format' => '昨日 %k:%M',
        'other_day_format' => '%A %k:%M',
        'never' => '從未',
        'hours_ago' => '%d小時前',
        'an_hour_ago' => '1小時前',
        'minutes_ago' => '%d分鐘前',
        'a_minute_ago' => '1分鐘前',
        'seconds_ago' => '%d秒前',
        'a_second_ago' => '剛剛',
        'year' => '年',
        'years' => '年',
        'month' => '月',
        'months' => '月',
        'day' => '日',
        'days' => '日',
        'hour' => '時',
        'hours' => '時',
        'minute' => '分',
        'minutes' => '分',
        'second' => '秒',
        'seconds' => '秒',
    ),
    'menu' => array(
        'config' => '設定',
        'server' => '伺服器',
        'server_log' => '記錄',
        'server_status' => '狀態',
        'server_update' => '更新',
        'user' => '使用者',
        'help' => '說明',
    ),
    'users' => array(
        'user' => '使用者',
        'name' => '顯示名稱',
        'user_name' => '使用者名稱',
        'password' => '密碼',
        'password_repeat' => '再次輸入密碼',
        'password_leave_blank' => '若密碼欄位保持空白，表示不做修改',
        'level' => '等級',
        'level_10' => '超級管理員',
        'level_20' => '一般使用者',
        'level_description' => '<b>超級管理員</b>
 具備所有伺服器的管理權限，可管理使用者以及修改系統設定。<br/><b>一般使用者</b>
 僅能查看以及更新自己所負責的伺服器。',
        'mobile' => '行動電話',
        'email' => '電子郵件',
        'pushover' => 'Pushover 通知',
        'pushover_description' => 'Pushover
 是一種雲端服務，讓你可以很方便的收到即時訊息通知，您可以到<a
 href="https://pushover.net/">網站</a>了解更多的內容。',
        'pushover_key' => 'Pushover 金鑰',
        'pushover_device' => 'Pushover 裝置',
        'pushover_device_description' => '發送訊息的裝置名稱，若保留空白，將會發送到所有的裝置。',
        'telegram' => 'Telegram 通知',
        'telegram_description' => '<a href="https://telegram.org/" target="_blank">Telegram</a>
 是一種聊天應用程式，它提供很容易使用的的即時通知能力。您可以到
 <a href="http://docs.phpservermonitor.org/" target="_blank">documentation</a>
 了解更多的內容。',
        'telegram_chat_id' => 'Telegram Chat ID',
        'telegram_chat_id_description' => '將訊息發送到指定的聊天室',
        'telegram_get_chat_id' => '點選這裡可以取得您的 Chat ID',
        'activate_telegram' => '啟用 Telegram 通知',
        'activate_telegram_description' => '允許 Telegram 將訊息發送到指定的 Chat
 ID。若沒有啟用此項目，Telegram
 將不允許我們發送通知給您。',
        'telegram_bot_username_error_token' => '401 - 未授權，請確認您的 API Token 是有效的。',
        'telegram_bot_error' => '啟用 Telegram 通知時發生錯誤：%s',
        'delete_title' => '刪除使用者',
        'delete_message' => '您確定要刪除使用者 \'%1\'?',
        'deleted' => '已刪除使用者。',
        'updated' => '已更新使用者。',
        'inserted' => '已增加使用者。',
        'profile' => '個人資料',
        'profile_updated' => '個人資料已經更新。',
        'error_user_name_bad_length' => '使用者名稱長度必須為2-64個字元。',
        'error_user_name_invalid' => '使用者名稱只允許英文字母(a-z、A-Z)、數字(0-9)以及底線(_)。',
        'error_user_name_exists' => '這個使用者名稱已存在。',
        'error_user_email_bad_length' => '電子郵件長度為5-255個字元。',
        'error_user_email_invalid' => '無效的電子郵件。',
        'error_user_level_invalid' => '無效的使用者等級。',
        'error_user_no_match' => '這個使用者名稱不存在。',
        'error_user_password_invalid' => '無效的密碼。',
        'error_user_password_no_match' => '密碼不符。',
    ),
    'log' => array(
        'title' => '記錄概覽',
        'type' => '類型',
        'status' => '狀態',
        'email' => '電子郵件通知',
        'sms' => '簡訊通知',
        'pushover' => 'Pushover 通知',
        'telegram' => 'Telegram 通知',
        'no_logs' => '沒有記錄',
        'clear' => '清除記錄',
        'delete_title' => '刪除記錄',
        'delete_message' => '您確定要刪除 <b>所有</b> 記錄？',
    ),
    'servers' => array(
        'server' => '伺服器',
        'status' => '狀態',
        'label' => '標籤',
        'domain' => '網域/IP',
        'timeout' => '逾時',
        'timeout_description' => '等待伺服器回應的秒數。',
        'authentication_settings' => '驗證設定 (非必要)',
        'website_username' => '使用者',
        'website_username_description' => '存取這個網站的使用者。(只支援 Apache 驗證)',
        'website_password' => '密碼',
        'website_password_description' => '存取這個網站的使用者。(密碼將會以加密形式存放在資料庫)',
        'fieldset_monitoring' => '監視',
        'fieldset_permissions' => '權限',
        'port' => '連接埠',
        'custom_port' => '自訂連接埠',
        'popular_ports' => '常用連接埠',
        'please_select' => '請選擇',
        'type' => '類型',
        'type_website' => '網站',
        'type_service' => '服務',
        'type_ping' => 'Ping',
        'pattern' => '字串',
        'pattern_description' => '如果在網站上沒有找到符合的字串，則將網站標示為離線。',
        'pattern_online' => '指明網站上的字串',
        'pattern_online_description' => '線上：如果在網站上沒有找到符合的字串，則將網站標示為線上。',
        'header_name_description' => '標頭名稱 (區分大小寫)',
        'header_value_description' => '標頭的值，可以使用正則表示式。',
        'last_check' => '最後一次檢查',
        'last_online' => '最後一次上線',
        'last_offline' => '最後一次離線',
        'monitoring' => '監控中',
        'no_monitoring' => '未監控',
        'email' => '電子郵件通知',
        'send_email' => '發送電子郵件',
        'sms' => '簡訊通知',
        'send_sms' => '發送簡訊',
        'pushover' => 'Pushover 通知',
        'send_pushover' => '發送 Pushover 通知',
        'telegram' => 'Telegram 通知',
        'send_telegram' => '發送 Telegram 通知',
        'users' => '使用者',
        'delete_title' => '刪除伺服器',
        'delete_message' => '您確定要刪除這個伺服器 \'%1\'?',
        'deleted' => '伺服器已刪除。',
        'updated' => '伺服器已更新。',
        'inserted' => '伺服器已增加。',
        'latency' => '延遲',
        'latency_max' => '延遲 (最大)',
        'latency_min' => '延遲 (最小)',
        'latency_avg' => '延遲 (平均)',
        'uptime' => '上線時間',
        'year' => '年',
        'month' => '月',
        'week' => '週',
        'day' => '日',
        'hour' => '小時',
        'warning_threshold' => '警報臨界值',
        'warning_threshold_description' => '失敗達到多少次數則標示為離線。',
        'chart_last_week' => '上週',
        'chart_history' => '更早',
        'chart_day_format' => '%Y-%m-%d',
        'chart_long_date_format' => '%Y-%m-%d %H:%M:%S',
        'chart_short_date_format' => '%m/%d %H:%M',
        'chart_short_time_format' => '%H:%M',
        'warning_notifications_disabled_sms' => '簡訊通知已關閉。',
        'warning_notifications_disabled_email' => '電子郵件通知已關閉。',
        'warning_notifications_disabled_pushover' => 'Pushover 通知已關閉。',
        'warning_notifications_disabled_telegram' => 'Telegram 通知已關閉。',
        'error_server_no_match' => '找不到伺服器。',
        'error_server_label_bad_length' => '標籤必須在1到255間的字元。',
        'error_server_ip_bad_length' => '網域/IP必須在1到255間的字元。',
        'error_server_ip_bad_service' => '無效的 IP 位址。',
        'error_server_ip_bad_website' => '無效的網址。',
        'error_server_type_invalid' => '無效的的伺服器型態',
        'error_server_warning_threshold_invalid' => '警報臨界值必須是大於 0 的有效整數。',
    ),
    'config' => array(
        'general' => '一般',
        'language' => '語言',
        'show_update' => '檢查更新',
        'password_encrypt_key' => '加密金鑰',
        'password_encrypt_key_note' => '這個加密金鑰將用於保護您登入這個網站的密碼，如果修改了此金鑰，原本已經存在的密碼將無法使用！',
        'proxy' => '啟用 Proxy',
        'proxy_url' => 'Proxy URL',
        'proxy_user' => 'Proxy 使用者名稱',
        'proxy_password' => 'Proxy 密碼',
        'email_status' => '啟用電子郵件通知',
        'email_from_email' => '寄件者信箱',
        'email_from_name' => '寄件者名稱',
        'email_smtp' => '使用SMTP發信',
        'email_smtp_host' => 'SMTP主機',
        'email_smtp_port' => 'SMTP連接埠口',
        'email_smtp_security' => 'SMTP安全性',
        'email_smtp_security_none' => '無',
        'email_smtp_username' => 'SMTP使用者名稱',
        'email_smtp_password' => 'SMTP使用者密碼',
        'email_smtp_noauth' => '留空白表示不做帳號驗證',
        'sms_status' => '啟用簡訊通知',
        'sms_gateway' => '簡訊服務提供者',
        'sms_gateway_username' => '簡訊閘道使用者名稱',
        'sms_gateway_password' => '簡訊閘道使用者密碼',
        'sms_from' => '發送人電話號碼',
        'pushover_status' => '啟用Pushover通知',
        'pushover_description' => 'Pushover是線上服務，讓您可以方便的收到即時通知，請參考 <a
 href="https://pushover.net/" target="_blank"> 網站</a>
 可以得到更詳細的資訊。</a> ',
        'pushover_clone_app' => '點選這裡可快速建立Pushover App',
        'pushover_api_token_description' => '在您使用 Pushover 通知之前，需要先到這裡-><a href="%1$s"
 target="_blank"  rel="noopener">註冊Pushover App帳號</a>
 接著在這個網頁輸入你的的Pushover App API Token號碼。',
        'telegram_status' => '允許發送 Telegram 訊息',
        'telegram_description' => '<a href="https://telegram.org/" target="_blank">Telegram</a>
 是一種聊天應用程式，它提供很容易使用的即時通知服務。請參考
 <a href="http://docs.phpservermonitor.org/" target="_blank">文件庫</a>
 可以取得更多資訊與安裝說明。',
        'telegram_api_token_description' => '使用 Telegram 通知之前，您必需先取得 API Token。請到 <a
 href="http://docs.phpservermonitor.org/" target="_blank">文件庫</a>
 取得說明。',
        'alert_type' => '需要提醒的類別',
        'alert_type_description' => '<b>狀態改變：</b> 伺服器 連線 -> 離線或連線 ->
 連線的狀態變化將會收到提醒通知。<br/><br /><b>離線：</b>
 伺服器首次發生離線狀態將會收到提醒，如：設定為15分鐘執行一次，伺服器從1:00-6:00一直處於離線狀態那麼你將會在1:00首次收到一則提醒通知，之後便不會在收到重覆的提醒通知。<br/><br><b>全部：</b>
 每次執行當伺服器離線(即使伺服器離線很久已提醒過了)均發送提醒通知。',
        'alert_type_status' => '狀態改變',
        'alert_type_offline' => '離線',
        'alert_type_always' => '全部',
        'alert_proxy_url' => '<b>格式:</b> Host:Port',
        'log_status' => '狀態記錄',
        'log_status_description' => '如果啟用狀態記錄，則每一筆提醒通知都會保留記錄。',
        'log_email' => '保留電子郵件通知發送記錄',
        'log_sms' => '保留簡訊通知發送記錄',
        'log_pushover' => '保留 pushover 通知發送記錄',
        'log_telegram' => '保留 telegram 通知發送記錄',
        'updated' => '已更新設定。',
        'tab_email' => '電子郵件發送設定',
        'tab_sms' => '簡訊發送設定',
        'tab_pushover' => 'Pushover 通知',
        'tab_telegram' => 'Telegram 通知',
        'settings_email' => '電子郵件發送設定',
        'settings_sms' => '簡訊發送設定',
        'settings_pushover' => 'Pushover 發送設定',
        'settings_telegram' => 'Telegram 發送設定',
        'settings_notification' => '提醒設定',
        'settings_log' => '記錄設定',
        'settings_proxy' => 'Proxy 設定',
        'auto_refresh' => '自動更新',
        'test' => '測試',
        'test_email' => '電子郵件將發送到您在使用者設定內指定的電子郵件信箱。',
        'test_sms' => '簡訊將發送到您在使用者設定內指定的行動電話號碼。',
        'test_pushover' => 'Pushover 通知將發送到您在使用者設定的裝置。',
        'test_telegram' => 'Telegram 通知將發送到您在使用者設定的 Chat ID。',
        'send' => '傳送',
        'test_subject' => '標題',
        'test_message' => '訊息',
        'email_sent' => '傳送',
        'email_error' => '電子郵件傳送發生錯誤',
        'sms_sent' => '簡訊發送',
        'sms_error' => '簡訊發送發生錯誤',
        'sms_error_nomobile' => '無法傳送 SMS 簡訊測試：您設定的電話號碼無效或無法找到。',
        'pushover_sent' => '傳送 Pushover 通知',
        'pushover_error' => '傳送 Pushover 通知發生錯誤: %s',
        'pushover_error_noapp' => '無法傳送 Pushover 通知: 在系統設定找不到 Pushover App API token。',
        'pushover_error_nokey' => '無法傳送 Pushover 通知: 在系統設定找不到 Pushover key found 。',
        'telegram_sent' => '傳送 Telegram 通知',
        'telegram_error' => '傳送 Telegram 通知發生錯誤: %s',
        'telegram_error_notoken' => '無法傳送 Telegram 通知: 在系統設定找不到 Telegram API token。',
        'telegram_error_noid' => '無法傳送 Telegram 通知: 在您的個人資料找不到 Chat ID。',
        'log_retention_period' => '記錄保留期限',
        'log_retention_period_description' => '保留伺服器運作時間和記錄歸檔的天數，輸入0可以防止記錄被清除',
        'log_retention_days' => '日',
    ),
    'notifications' => array(
        'off_sms' => '伺服器 \'%LABEL%\' 關機: ip=%IP%, port=%PORT%. Error=%ERROR%',
        'off_email_subject' => 'IMPORTANT: 服務器 \'%LABEL%\' 關機',
        'off_email_body' => '無法連線到以下伺服器:<br/><br/>伺服器: %LABEL%<br/>IP: %IP%<br/>Port:
 %PORT%<br/>錯誤: %ERROR%<br/>日期: %DATE%',
        'off_pushover_title' => '伺服器 \'%LABEL%\' 關機',
        'off_pushover_message' => '無法連線到以下伺服器:<br/><br/>伺服器: %LABEL%<br/>IP: %IP%<br/>Port:
 %PORT%<br/>錯誤: %ERROR%<br/>日期: %DATE%',
        'off_telegram_message' => '無法連線到以下伺服器:<br/><br/>伺服器: %LABEL%<br/>IP: %IP%<br/>Port:
 %PORT%<br/>錯誤: %ERROR%<br/>日期: %DATE%',
        'on_email_subject' => 'IMPORTANT: 伺服器 \'%LABEL%\' 運行中',
        'on_pushover_title' => '伺服器 \'%LABEL%\' 運作中',
    ),
    'login' => array(
        'welcome_usermenu' => '歡迎，%user_name%',
        'title_sign_in' => '請登入',
        'title_forgot' => '忘記密碼',
        'title_reset' => '密碼重置',
        'submit' => '送出',
        'remember_me' => '記住我',
        'login' => '登入',
        'logout' => '登出',
        'username' => '使用者名稱',
        'password' => '密碼',
        'password_repeat' => '再次輸入密碼',
        'password_forgot' => '忘記密碼',
        'password_reset' => '重設密碼',
        'password_reset_email_subject' => '重設您的密碼',
        'password_reset_email_body' => '點選以下連結來重設密碼，這個連結於1小時後失效。<br/><br/>%link%',
        'error_user_incorrect' => '使用者不存在。',
        'error_login_incorrect' => '登入資料不正確。',
        'error_login_passwords_nomatch' => '密碼不符合。',
        'error_reset_invalid_link' => '重設密碼連結無效。',
        'success_password_forgot' => '重設密碼電子郵件已發送。',
        'success_password_reset' => '密碼重設成功，請登入。',
    ),
    'error' => array(
        '401_unauthorized' => '驗證失敗',
        '401_unauthorized_description' => '您没有權限進入這個頁面。',
    ),
);
