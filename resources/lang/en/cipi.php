<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cipi Translations
    |--------------------------------------------------------------------------
    */

    //Errors
    'error' => 'Error',
    'forbidden' => 'Forbidden',
    'return_to_dashboard' => 'Return to Dashboard',
    'file_not_found' => 'File not found',
    'internal_server_error' => 'Internal Server Error',
    'system_error' => 'System Error',
    'unknown_error' => 'Ops! Something went wrong... try later!',
    //AuthController errors
    'invalid_login' => 'Username and password don\'t match',
    'invalid_login_message' => 'Given credentials are invalid',
    'invalid_token' => 'Invalid token',
    'invalid_token_message' => 'Given token is invalid',
    'username_conflict' => 'Username Conflict',
    'username_conflict_message' => 'Required username is used into database',
    //ServerController errors
    'server_not_found_native_message' => 'Panel is not associated to a native server',
    'server_conflict_ip_current_message' => 'You cannot add a server with the same current server IP',
    'server_conflict_ip_duplicate_message' => 'There is another server with same IP into database',
    'server_not_found_message_default' => 'Required server does not exists into panel',
    'delete_default_server_message' => 'Cannot delete default server from panel',
    'ssl_request_error_message' => 'This is a SSL request but any panel domain has been configured for this server',
    'edit_server_current_ip_error_message' => 'You cannot edit a server using the same current server IP',
    'server_unavailable' => 'Server Unavailable.',
    'server_unavailable_message' => 'Required server is currently not available',
    'server_error' => 'Server Error',
    'server_error_ssh_error_message' => 'SSH error with server: ',
    'something_error_message' => 'Something went wrong.',
    'invalid_service_error_message' => 'Required service is not valid',
    //SiteController errors
    'bad_request' => 'Bad Request.',
    'bad_request_default_site_delete' => 'Cannot delete default site from panel',
    'invalid_php_version' => 'Invalid PHP version.',
    'server_not_found' => 'Server not found.',
    'server_not_found_message' => 'Required server does not exists into panel or it is not installed yet.',
    'site_domain_conflict' => 'Site domain conflict.',
    'site_domain_conflict_message' => 'Required domain is used by another site/alias on this server.',
    'site_not_found' => 'Site not found.',
    'site_not_found_message' => 'Required site does not exists into panel.',
    'server_conflict' => 'Server conflict.',
    'server_conflict_domain_message' => 'There is another site with same domain into database.',
    'server_conflict_alias_message' => 'There is another alias with same domain into database.',
    'alias_not_found' => 'Alias not found',
    'alias_not_found_message' => 'Required alias does not exists into panel',
    'domain_conflict' => 'Domain conflict',
    'domain_conflict_message' => 'Required domain is used by another site/alias on this server',

    //Sidebar Menu
    'menu' => 'MENU',
    'sidebar_menu' => [
        'dashboard' => 'Dashboard',
        'servers' => 'Servers',
        'sites' => 'Sites',
        'settings' => 'Settings',
        'documentation' => 'Documentation',
        'logout' => 'Logout',
    ],
    //Sidebar info
    'panel_version' => 'Panel version',
    'logged_in_as' => 'Logged in as',

    //Titles
    'titles' => [
        'dashboard' => 'Dashboard',
        'servers' => 'Manage Servers',
        'server' => 'Manage Server',
        'sites' => 'Manage Sites',
        'site' => 'Manage Site',
        'settings' => 'Manage Settings',
    ],

    //General
    'loading_data' => 'Loading data',
    'no_results_found' => 'There\'s nothing here, yet!',
    'loading_please_wait' => 'Loading, please wait',
    'cpu' => 'CPU',
    'ram' => 'RAM',
    'hdd' => 'HDD',
    'manage' => 'Manage',
    'login' => 'Login',
    'username' => 'Username',
    'password' => 'Password',
    'host' => 'Host',
    'port' => 'Port',
    'path' => 'Path',
    'database' => 'Database',
    'name' => 'Name',
    'new_button' => 'New :type',
    'actions' => 'Actions',
    'delete' => 'Delete',
    'confirm' => 'Confirm',
    'update' => 'Update',
    'save' => 'Save',
    'restart' => 'Restart',
    'unknown' => 'Unknown',
    'submit' => 'Submit',

    //Dashboard
    'dashboard' => 'Dashboard',
    'add_new_server' => 'ADD A SERVER NOW',

    //PDF
    'pdf_site_php_version' => 'Your site <i>:domain</i> is PHP :php based!',
    'pdf_take_care' => 'Take care about this data :)',

    //Servers
    'server' => 'Server',
    'servers' => 'Servers',
    'install' => 'Install',
    'wait' => 'Wait...',
    'provider' => 'Provider',
    'location' => 'Location',
    'delete_server' => 'Delete Server',
    'delete_server_confirmation' => 'Are you sure to delete server',
    'delete_server_confirmation_ip' => 'To confirm it write server IP',
    'server_setup' => 'Server Setup',
    'server_setup_title' => 'To install your server:',
    'server_setup_step1' => 'Use a clean Ubuntu Server 20.04 LTS fresh installation VPS',
    'server_setup_step2' => 'Login into your VPS via SSH (as root):',
    'server_setup_step3' => 'Run this command:',
    'server_setup_step4' => 'Installation may take up to thirty minutes depending on your server resources',
    'server_setup_step5' => 'Be sure that ports 22, 80 and 443 of your VPS firewall are open',
    'server_setup_step6' => 'AWS disables root login by default. Use command \'sudo -s\' to run as root',
    'server_setup_step7' => 'Cipi doesn\'t work with NAT VPN and OpenVZ or in localhost',
    'server_setup_step8' => 'Before install Cipi, please make sure your server is a clean Ubuntu 20.04 LTS VPS',
    'create_server_title' => 'Add a New Server',
    'server_name' => 'Server Name',
    'server_ip' => 'Server IP',
    'server_provider' => 'Server Provider',
    'server_location' => 'Server Location',

    //Server
    'server_cpu_realtime_load' => 'CPU Realtime Load',
    'server_ram_realtime_load' => 'RAM Realtime Load',
    'server_information' => 'Server Information',
    'system_services' => 'System Services',
    'tools' => 'Tools',
    'php_cli_version' => 'PHP CLI version',
    'manage_cron_jobs' => 'Manage Cron Jobs',
    'edit_crontab' => 'Edit Crontab',
    'reset_cipi_password' => 'Reset Cipi user password',
    'require_reset_cipi_password' => 'Require Reset',
    'hd_memory_usage' => 'HD Memory Usage',
    'cipi_build_version' => 'Cipi Build Version',
    'update_server_modal_title' => 'Update Server Information',
    'update_server_modal_text' => 'Are your sure to update server information?',
    'update_server_modal_ip' => 'YOU ARE UPDATING SERVER IP!<br>BE AWARE THAT IF NEW IP: <span id="newip" class="text-danger"></span> IS NOT CORRECT YOU COULD LOST YOUR SERVER CONNECTION!',
    'server_crontab' => 'Server Crontab',
    'server_crontab_edit' => 'Edit Server Crontab',
    'require_password_reset_modal_title' => 'Request Password Reset',
    'require_password_reset_modal_text' => 'Are you sure to reset Cipi user password?',
    'new_password_success' => 'New Cipi user password',

    //Sites
    'site' => 'Site',
    'sites' => 'Sites',
    'domain' => 'Domain',
    'aliases' => 'Aliases',
    'new_site_modal_title' => 'Add a New Site',
    'site_domain' => 'Site Domain',
    'site_base_path' => 'Base Path',
    'php_version' => 'PHP Version',
    'site_ready_message' => 'Your site is ready!',
    'document_root' => 'Document Root',
    'download_site_data' => 'Download (3 minutes link)',
    'delete_site_modal_title' => 'Delete Site',
    'delete_site_modal_text' => 'Are you sure to delete site <b><span id="deletesitename"></span></b> and its database and aliases?',

    //Site
    'basic_information' => 'Basic information',
    'manage_aliases' => 'Manage Aliases',
    'add_alias' => 'Add Alias',
    'ssl_security' => 'SSL\'s and Security',
    'ssl_security_text' => 'Require and generate free Let\'s Encrypt certificate for site domain and aliases',
    'ssl_generate' => 'Generate SSL\'s',
    'password_resets' => 'Passwords Reset',
    'application_installer' => 'Application Installer',
    'coming_soon' => 'Coming soon...',
    'github_repository' => 'Github Repository',
    'github_repository_setup' => 'Set up a Github Repository',
    'github_repository_config' => 'Repo Configuration',
    'github_repository_scripts' => 'Edit deploy scripts',
    'github_repository_deploy' => 'To run deploy',
    'php_fpm_version' => 'PHP-FPM Version',
    'repository_project' => 'Project',
    'repository_branch' => 'Branch',
    'repository_deploy_key' => 'Deploy Key',
    'repository_deploy_key_info' => '(<a href="#" id="copykey">Copy</a> and add it <a href="https://github.com/settings/ssh/new" target="blank">here</a>)',
    'deploy_scripts' => 'Site Deploy Scripts',
    'require_ssh_password_reset_modal_text' => 'Are you sure to reset site SSH password?',
    'require_mysql_password_reset_modal_text' => 'Are you sure to reset site MySql password?',
    'new_ssh_password_success' => 'Your SSH password has been reset',
    'new_mysql_password_success' => 'Your Mysql password has been reset',

    //Settings
    'change_username' => 'Change Username',
    'change_username_placeholder' => 'New username (at least 6 chars)',
    'current_username' => 'Current Username',
    'change_password' => 'Change Password',
    'change_password_placeholder' => 'New password (at least 8 chars)',
    'update_password' => 'Update your Password',
    'panel_url' => 'Panel URL',
    'panel_url_force_ssl' => 'Require SSL',
    'panel_url_text' => 'Custom panel domain/subdomain',
    'panel_api' => 'Panel API',
    'panel_api_endpoint' => 'API Endpoint',
    'renew_api_key' => 'Renew API Key',
    'documentation' => 'Documentation',
    'action_authorization_modal_title' => 'Action Authorization',
    'action_authorization_modal_text' => 'To authorize this action insert your current password',
    'username_updated_success' => 'Username has been updated',
    'password_updated_success' => 'Password has been updated',
    'new_api_key_success' => 'New API Key',
];