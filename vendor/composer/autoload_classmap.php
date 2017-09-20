<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Defuse\\Crypto\\Core' => $vendorDir . '/defuse/php-encryption/src/Core.php',
    'Defuse\\Crypto\\Crypto' => $vendorDir . '/defuse/php-encryption/src/Crypto.php',
    'Defuse\\Crypto\\DerivedKeys' => $vendorDir . '/defuse/php-encryption/src/DerivedKeys.php',
    'Defuse\\Crypto\\Encoding' => $vendorDir . '/defuse/php-encryption/src/Encoding.php',
    'Defuse\\Crypto\\Exception\\BadFormatException' => $vendorDir . '/defuse/php-encryption/src/Exception/BadFormatException.php',
    'Defuse\\Crypto\\Exception\\CryptoException' => $vendorDir . '/defuse/php-encryption/src/Exception/CryptoException.php',
    'Defuse\\Crypto\\Exception\\EnvironmentIsBrokenException' => $vendorDir . '/defuse/php-encryption/src/Exception/EnvironmentIsBrokenException.php',
    'Defuse\\Crypto\\Exception\\IOException' => $vendorDir . '/defuse/php-encryption/src/Exception/IOException.php',
    'Defuse\\Crypto\\Exception\\WrongKeyOrModifiedCiphertextException' => $vendorDir . '/defuse/php-encryption/src/Exception/WrongKeyOrModifiedCiphertextException.php',
    'Defuse\\Crypto\\File' => $vendorDir . '/defuse/php-encryption/src/File.php',
    'Defuse\\Crypto\\Key' => $vendorDir . '/defuse/php-encryption/src/Key.php',
    'Defuse\\Crypto\\KeyOrPassword' => $vendorDir . '/defuse/php-encryption/src/KeyOrPassword.php',
    'Defuse\\Crypto\\KeyProtectedByPassword' => $vendorDir . '/defuse/php-encryption/src/KeyProtectedByPassword.php',
    'Defuse\\Crypto\\RuntimeTests' => $vendorDir . '/defuse/php-encryption/src/RuntimeTests.php',
    'PHPMailer\\PHPMailer\\Exception' => $vendorDir . '/phpmailer/phpmailer/src/Exception.php',
    'PHPMailer\\PHPMailer\\OAuth' => $vendorDir . '/phpmailer/phpmailer/src/OAuth.php',
    'PHPMailer\\PHPMailer\\PHPMailer' => $vendorDir . '/phpmailer/phpmailer/src/PHPMailer.php',
    'PHPMailer\\PHPMailer\\POP3' => $vendorDir . '/phpmailer/phpmailer/src/POP3.php',
    'PHPMailer\\PHPMailer\\SMTP' => $vendorDir . '/phpmailer/phpmailer/src/SMTP.php',
    'SP\\Account\\Account' => $baseDir . '/inc/SP/Account/Account.php',
    'SP\\Account\\AccountAcl' => $baseDir . '/inc/SP/Account/AccountAcl.php',
    'SP\\Account\\AccountBase' => $baseDir . '/inc/SP/Account/AccountBase.php',
    'SP\\Account\\AccountCrypt' => $baseDir . '/inc/SP/Account/AccountCrypt.php',
    'SP\\Account\\AccountFavorites' => $baseDir . '/inc/SP/Account/AccountFavorites.php',
    'SP\\Account\\AccountHistory' => $baseDir . '/inc/SP/Account/AccountHistory.php',
    'SP\\Account\\AccountHistoryCrypt' => $baseDir . '/inc/SP/Account/AccountHistoryCrypt.php',
    'SP\\Account\\AccountHistoryUtil' => $baseDir . '/inc/SP/Account/AccountHistoryUtil.php',
    'SP\\Account\\AccountInterface' => $baseDir . '/inc/SP/Account/AccountInterface.php',
    'SP\\Account\\AccountSearch' => $baseDir . '/inc/SP/Account/AccountSearch.php',
    'SP\\Account\\AccountTags' => $baseDir . '/inc/SP/Account/AccountTags.php',
    'SP\\Account\\AccountUtil' => $baseDir . '/inc/SP/Account/AccountUtil.php',
    'SP\\Account\\AccountsSearchItem' => $baseDir . '/inc/SP/Account/AccountsSearchItem.php',
    'SP\\Account\\UserAccounts' => $baseDir . '/inc/SP/Account/UserAccounts.php',
    'SP\\Api\\ApiBase' => $baseDir . '/inc/SP/Api/ApiBase.php',
    'SP\\Api\\ApiInterface' => $baseDir . '/inc/SP/Api/ApiInterface.php',
    'SP\\Api\\ApiRequest' => $baseDir . '/inc/SP/Api/ApiRequest.php',
    'SP\\Api\\ApiUtil' => $baseDir . '/inc/SP/Api/ApiUtil.php',
    'SP\\Api\\SyspassApi' => $baseDir . '/inc/SP/Api/SyspassApi.php',
    'SP\\Auth\\Auth' => $baseDir . '/inc/SP/Auth/Auth.php',
    'SP\\Auth\\AuthDataBase' => $baseDir . '/inc/SP/Auth/AuthDataBase.php',
    'SP\\Auth\\AuthInterface' => $baseDir . '/inc/SP/Auth/AuthInterface.php',
    'SP\\Auth\\AuthResult' => $baseDir . '/inc/SP/Auth/AuthResult.php',
    'SP\\Auth\\AuthUtil' => $baseDir . '/inc/SP/Auth/AuthUtil.php',
    'SP\\Auth\\Browser\\Browser' => $baseDir . '/inc/SP/Auth/Browser/Browser.php',
    'SP\\Auth\\Browser\\BrowserAuthData' => $baseDir . '/inc/SP/Auth/Browser/BrowserAuthData.php',
    'SP\\Auth\\Database\\Database' => $baseDir . '/inc/SP/Auth/Database/Database.php',
    'SP\\Auth\\Database\\DatabaseAuthData' => $baseDir . '/inc/SP/Auth/Database/DatabaseAuthData.php',
    'SP\\Auth\\Ldap\\LdapAuthData' => $baseDir . '/inc/SP/Auth/Ldap/LdapAuthData.php',
    'SP\\Auth\\Ldap\\LdapBase' => $baseDir . '/inc/SP/Auth/Ldap/LdapBase.php',
    'SP\\Auth\\Ldap\\LdapInterface' => $baseDir . '/inc/SP/Auth/Ldap/LdapInterface.php',
    'SP\\Auth\\Ldap\\LdapMsAds' => $baseDir . '/inc/SP/Auth/Ldap/LdapMsAds.php',
    'SP\\Auth\\Ldap\\LdapStd' => $baseDir . '/inc/SP/Auth/Ldap/LdapStd.php',
    'SP\\Auth\\Ldap\\LdapUtil' => $baseDir . '/inc/SP/Auth/Ldap/LdapUtil.php',
    'SP\\Config\\Config' => $baseDir . '/inc/SP/Config/Config.php',
    'SP\\Config\\ConfigDB' => $baseDir . '/inc/SP/Config/ConfigDB.php',
    'SP\\Config\\ConfigData' => $baseDir . '/inc/SP/Config/ConfigData.php',
    'SP\\Config\\ConfigInterface' => $baseDir . '/inc/SP/Config/ConfigInterface.php',
    'SP\\Config\\ConfigUtil' => $baseDir . '/inc/SP/Config/ConfigUtil.php',
    'SP\\Controller\\AccountController' => $baseDir . '/inc/SP/Controller/AccountController.php',
    'SP\\Controller\\AccountSearchController' => $baseDir . '/inc/SP/Controller/AccountSearchController.php',
    'SP\\Controller\\ChecksController' => $baseDir . '/inc/SP/Controller/ChecksController.php',
    'SP\\Controller\\ConfigActionController' => $baseDir . '/inc/SP/Controller/ConfigActionController.php',
    'SP\\Controller\\ConfigController' => $baseDir . '/inc/SP/Controller/ConfigController.php',
    'SP\\Controller\\ControllerBase' => $baseDir . '/inc/SP/Controller/ControllerBase.php',
    'SP\\Controller\\EventlogController' => $baseDir . '/inc/SP/Controller/EventlogController.php',
    'SP\\Controller\\GridItemsSearchController' => $baseDir . '/inc/SP/Controller/GridItemsSearchController.php',
    'SP\\Controller\\GridTabControllerBase' => $baseDir . '/inc/SP/Controller/GridTabControllerBase.php',
    'SP\\Controller\\Grids\\GridBase' => $baseDir . '/inc/SP/Controller/Grids/GridBase.php',
    'SP\\Controller\\Grids\\Items' => $baseDir . '/inc/SP/Controller/Grids/Items.php',
    'SP\\Controller\\Grids\\Notices' => $baseDir . '/inc/SP/Controller/Grids/Notices.php',
    'SP\\Controller\\ItemActionController' => $baseDir . '/inc/SP/Controller/ItemActionController.php',
    'SP\\Controller\\ItemControllerInterface' => $baseDir . '/inc/SP/Controller/ItemControllerInterface.php',
    'SP\\Controller\\ItemListController' => $baseDir . '/inc/SP/Controller/ItemListController.php',
    'SP\\Controller\\ItemSearchController' => $baseDir . '/inc/SP/Controller/ItemSearchController.php',
    'SP\\Controller\\ItemShowController' => $baseDir . '/inc/SP/Controller/ItemShowController.php',
    'SP\\Controller\\ItemsController' => $baseDir . '/inc/SP/Controller/ItemsController.php',
    'SP\\Controller\\LoginController' => $baseDir . '/inc/SP/Controller/LoginController.php',
    'SP\\Controller\\MainActionController' => $baseDir . '/inc/SP/Controller/MainActionController.php',
    'SP\\Controller\\MainController' => $baseDir . '/inc/SP/Controller/MainController.php',
    'SP\\Controller\\NoticeShowController' => $baseDir . '/inc/SP/Controller/NoticeShowController.php',
    'SP\\Controller\\NoticesController' => $baseDir . '/inc/SP/Controller/NoticesController.php',
    'SP\\Controller\\NoticesSearchController' => $baseDir . '/inc/SP/Controller/NoticesSearchController.php',
    'SP\\Controller\\RequestControllerTrait' => $baseDir . '/inc/SP/Controller/RequestControllerTrait.php',
    'SP\\Controller\\TabControllerBase' => $baseDir . '/inc/SP/Controller/TabControllerBase.php',
    'SP\\Controller\\TabsInterface' => $baseDir . '/inc/SP/Controller/TabsInterface.php',
    'SP\\Controller\\TaskController' => $baseDir . '/inc/SP/Controller/TaskController.php',
    'SP\\Controller\\UserPreferencesController' => $baseDir . '/inc/SP/Controller/UserPreferencesController.php',
    'SP\\Controller\\WikiController' => $baseDir . '/inc/SP/Controller/WikiController.php',
    'SP\\Core\\Acl' => $baseDir . '/inc/SP/Core/Acl.php',
    'SP\\Core\\ActionsInterface' => $baseDir . '/inc/SP/Core/ActionsInterface.php',
    'SP\\Core\\Backup' => $baseDir . '/inc/SP/Core/Backup.php',
    'SP\\Core\\CryptMasterPass' => $baseDir . '/inc/SP/Core/CryptMasterPass.php',
    'SP\\Core\\CryptPKI' => $baseDir . '/inc/SP/Core/CryptPKI.php',
    'SP\\Core\\Crypt\\Cookie' => $baseDir . '/inc/SP/Core/Crypt/Cookie.php',
    'SP\\Core\\Crypt\\Crypt' => $baseDir . '/inc/SP/Core/Crypt/Crypt.php',
    'SP\\Core\\Crypt\\CryptSessionHandler' => $baseDir . '/inc/SP/Core/Crypt/CryptSessionHandler.php',
    'SP\\Core\\Crypt\\Hash' => $baseDir . '/inc/SP/Core/Crypt/Hash.php',
    'SP\\Core\\Crypt\\SecureKeyCookie' => $baseDir . '/inc/SP/Core/Crypt/SecureKeyCookie.php',
    'SP\\Core\\Crypt\\Session' => $baseDir . '/inc/SP/Core/Crypt/Session.php',
    'SP\\Core\\Crypt\\Vault' => $baseDir . '/inc/SP/Core/Crypt/Vault.php',
    'SP\\Core\\DiFactory' => $baseDir . '/inc/SP/Core/DiFactory.php',
    'SP\\Core\\Events\\EventDispatcher' => $baseDir . '/inc/SP/Core/Events/EventDispatcher.php',
    'SP\\Core\\Events\\EventDispatcherBase' => $baseDir . '/inc/SP/Core/Events/EventDispatcherBase.php',
    'SP\\Core\\Events\\EventDispatcherInterface' => $baseDir . '/inc/SP/Core/Events/EventDispatcherInterface.php',
    'SP\\Core\\Events\\EventReceiver' => $baseDir . '/inc/SP/Core/Events/EventReceiver.php',
    'SP\\Core\\Exceptions\\AuthException' => $baseDir . '/inc/SP/Core/Exceptions/AuthException.php',
    'SP\\Core\\Exceptions\\ConstraintException' => $baseDir . '/inc/SP/Core/Exceptions/ConstraintException.php',
    'SP\\Core\\Exceptions\\FileNotFoundException' => $baseDir . '/inc/SP/Core/Exceptions/FileNotFoundException.php',
    'SP\\Core\\Exceptions\\InvalidArgumentException' => $baseDir . '/inc/SP/Core/Exceptions/InvalidArgumentException.php',
    'SP\\Core\\Exceptions\\InvalidClassException' => $baseDir . '/inc/SP/Core/Exceptions/InvalidClassException.php',
    'SP\\Core\\Exceptions\\ItemException' => $baseDir . '/inc/SP/Core/Exceptions/ItemException.php',
    'SP\\Core\\Exceptions\\QueryException' => $baseDir . '/inc/SP/Core/Exceptions/QueryException.php',
    'SP\\Core\\Exceptions\\SPException' => $baseDir . '/inc/SP/Core/Exceptions/SPException.php',
    'SP\\Core\\Exceptions\\ValidationException' => $baseDir . '/inc/SP/Core/Exceptions/ValidationException.php',
    'SP\\Core\\Init' => $baseDir . '/inc/SP/Core/Init.php',
    'SP\\Core\\Installer' => $baseDir . '/inc/SP/Core/Installer.php',
    'SP\\Core\\ItemsTypeInterface' => $baseDir . '/inc/SP/Core/ItemsTypeInterface.php',
    'SP\\Core\\Language' => $baseDir . '/inc/SP/Core/Language.php',
    'SP\\Core\\Messages\\LogMessage' => $baseDir . '/inc/SP/Core/Messages/LogMessage.php',
    'SP\\Core\\Messages\\MessageBase' => $baseDir . '/inc/SP/Core/Messages/MessageBase.php',
    'SP\\Core\\Messages\\MessageInterface' => $baseDir . '/inc/SP/Core/Messages/MessageInterface.php',
    'SP\\Core\\Messages\\NoticeMessage' => $baseDir . '/inc/SP/Core/Messages/NoticeMessage.php',
    'SP\\Core\\Messages\\TaskMessage' => $baseDir . '/inc/SP/Core/Messages/TaskMessage.php',
    'SP\\Core\\OldCrypt' => $baseDir . '/inc/SP/Core/OldCrypt.php',
    'SP\\Core\\Plugin\\PluginBase' => $baseDir . '/inc/SP/Core/Plugin/PluginBase.php',
    'SP\\Core\\Plugin\\PluginDataStore' => $baseDir . '/inc/SP/Core/Plugin/PluginDataStore.php',
    'SP\\Core\\Plugin\\PluginInterface' => $baseDir . '/inc/SP/Core/Plugin/PluginInterface.php',
    'SP\\Core\\Plugin\\PluginUtil' => $baseDir . '/inc/SP/Core/Plugin/PluginUtil.php',
    'SP\\Core\\Session' => $baseDir . '/inc/SP/Core/Session.php',
    'SP\\Core\\SessionUtil' => $baseDir . '/inc/SP/Core/SessionUtil.php',
    'SP\\Core\\Task' => $baseDir . '/inc/SP/Core/Task.php',
    'SP\\Core\\TaskFactory' => $baseDir . '/inc/SP/Core/TaskFactory.php',
    'SP\\Core\\Template' => $baseDir . '/inc/SP/Core/Template.php',
    'SP\\Core\\UI\\Theme' => $baseDir . '/inc/SP/Core/UI/Theme.php',
    'SP\\Core\\UI\\ThemeIconsBase' => $baseDir . '/inc/SP/Core/UI/ThemeIconsBase.php',
    'SP\\Core\\UI\\ThemeIconsInterface' => $baseDir . '/inc/SP/Core/UI/ThemeIconsInterface.php',
    'SP\\Core\\UI\\ThemeInterface' => $baseDir . '/inc/SP/Core/UI/ThemeInterface.php',
    'SP\\Core\\Upgrade\\Account' => $baseDir . '/inc/SP/Core/Upgrade/Account.php',
    'SP\\Core\\Upgrade\\Category' => $baseDir . '/inc/SP/Core/Upgrade/Category.php',
    'SP\\Core\\Upgrade\\Check' => $baseDir . '/inc/SP/Core/Upgrade/Check.php',
    'SP\\Core\\Upgrade\\Crypt' => $baseDir . '/inc/SP/Core/Upgrade/Crypt.php',
    'SP\\Core\\Upgrade\\Customer' => $baseDir . '/inc/SP/Core/Upgrade/Customer.php',
    'SP\\Core\\Upgrade\\Group' => $baseDir . '/inc/SP/Core/Upgrade/Group.php',
    'SP\\Core\\Upgrade\\Profile' => $baseDir . '/inc/SP/Core/Upgrade/Profile.php',
    'SP\\Core\\Upgrade\\Upgrade' => $baseDir . '/inc/SP/Core/Upgrade/Upgrade.php',
    'SP\\Core\\Upgrade\\User' => $baseDir . '/inc/SP/Core/Upgrade/User.php',
    'SP\\Core\\XmlExport' => $baseDir . '/inc/SP/Core/XmlExport.php',
    'SP\\DataModel\\AccountData' => $baseDir . '/inc/SP/DataModel/AccountData.php',
    'SP\\DataModel\\AccountExtData' => $baseDir . '/inc/SP/DataModel/AccountExtData.php',
    'SP\\DataModel\\AccountHistoryData' => $baseDir . '/inc/SP/DataModel/AccountHistoryData.php',
    'SP\\DataModel\\AccountSearchData' => $baseDir . '/inc/SP/DataModel/AccountSearchData.php',
    'SP\\DataModel\\ApiTokenData' => $baseDir . '/inc/SP/DataModel/ApiTokenData.php',
    'SP\\DataModel\\CategoryData' => $baseDir . '/inc/SP/DataModel/CategoryData.php',
    'SP\\DataModel\\CustomFieldBaseData' => $baseDir . '/inc/SP/DataModel/CustomFieldBaseData.php',
    'SP\\DataModel\\CustomFieldData' => $baseDir . '/inc/SP/DataModel/CustomFieldData.php',
    'SP\\DataModel\\CustomFieldDefData' => $baseDir . '/inc/SP/DataModel/CustomFieldDefData.php',
    'SP\\DataModel\\CustomerData' => $baseDir . '/inc/SP/DataModel/CustomerData.php',
    'SP\\DataModel\\DataModelBase' => $baseDir . '/inc/SP/DataModel/DataModelBase.php',
    'SP\\DataModel\\DataModelInterface' => $baseDir . '/inc/SP/DataModel/DataModelInterface.php',
    'SP\\DataModel\\FileData' => $baseDir . '/inc/SP/DataModel/FileData.php',
    'SP\\DataModel\\FileExtData' => $baseDir . '/inc/SP/DataModel/FileExtData.php',
    'SP\\DataModel\\GroupAccountsData' => $baseDir . '/inc/SP/DataModel/GroupAccountsData.php',
    'SP\\DataModel\\GroupData' => $baseDir . '/inc/SP/DataModel/GroupData.php',
    'SP\\DataModel\\GroupUsersData' => $baseDir . '/inc/SP/DataModel/GroupUsersData.php',
    'SP\\DataModel\\InstallData' => $baseDir . '/inc/SP/DataModel/InstallData.php',
    'SP\\DataModel\\ItemSearchData' => $baseDir . '/inc/SP/DataModel/ItemSearchData.php',
    'SP\\DataModel\\NoticeData' => $baseDir . '/inc/SP/DataModel/NoticeData.php',
    'SP\\DataModel\\PluginData' => $baseDir . '/inc/SP/DataModel/PluginData.php',
    'SP\\DataModel\\ProfileBaseData' => $baseDir . '/inc/SP/DataModel/ProfileBaseData.php',
    'SP\\DataModel\\ProfileData' => $baseDir . '/inc/SP/DataModel/ProfileData.php',
    'SP\\DataModel\\PublicLinkBaseData' => $baseDir . '/inc/SP/DataModel/PublicLinkBaseData.php',
    'SP\\DataModel\\PublicLinkData' => $baseDir . '/inc/SP/DataModel/PublicLinkData.php',
    'SP\\DataModel\\PublicLinkListData' => $baseDir . '/inc/SP/DataModel/PublicLinkListData.php',
    'SP\\DataModel\\TagData' => $baseDir . '/inc/SP/DataModel/TagData.php',
    'SP\\DataModel\\TrackData' => $baseDir . '/inc/SP/DataModel/TrackData.php',
    'SP\\DataModel\\UserData' => $baseDir . '/inc/SP/DataModel/UserData.php',
    'SP\\DataModel\\UserLoginData' => $baseDir . '/inc/SP/DataModel/UserLoginData.php',
    'SP\\DataModel\\UserPassData' => $baseDir . '/inc/SP/DataModel/UserPassData.php',
    'SP\\DataModel\\UserPassRecoverData' => $baseDir . '/inc/SP/DataModel/UserPassRecoverData.php',
    'SP\\DataModel\\UserPreferencesData' => $baseDir . '/inc/SP/DataModel/UserPreferencesData.php',
    'SP\\Forms\\AccountForm' => $baseDir . '/inc/SP/Forms/AccountForm.php',
    'SP\\Forms\\ApiTokenForm' => $baseDir . '/inc/SP/Forms/ApiTokenForm.php',
    'SP\\Forms\\CategoryForm' => $baseDir . '/inc/SP/Forms/CategoryForm.php',
    'SP\\Forms\\CustomFieldDefForm' => $baseDir . '/inc/SP/Forms/CustomFieldDefForm.php',
    'SP\\Forms\\CustomerForm' => $baseDir . '/inc/SP/Forms/CustomerForm.php',
    'SP\\Forms\\FormBase' => $baseDir . '/inc/SP/Forms/FormBase.php',
    'SP\\Forms\\FormInterface' => $baseDir . '/inc/SP/Forms/FormInterface.php',
    'SP\\Forms\\GroupForm' => $baseDir . '/inc/SP/Forms/GroupForm.php',
    'SP\\Forms\\NoticeForm' => $baseDir . '/inc/SP/Forms/NoticeForm.php',
    'SP\\Forms\\ProfileForm' => $baseDir . '/inc/SP/Forms/ProfileForm.php',
    'SP\\Forms\\PublicLinkForm' => $baseDir . '/inc/SP/Forms/PublicLinkForm.php',
    'SP\\Forms\\TagForm' => $baseDir . '/inc/SP/Forms/TagForm.php',
    'SP\\Forms\\UserForm' => $baseDir . '/inc/SP/Forms/UserForm.php',
    'SP\\Html\\Assets\\FontIcon' => $baseDir . '/inc/SP/Html/Assets/FontIcon.php',
    'SP\\Html\\Assets\\IconBase' => $baseDir . '/inc/SP/Html/Assets/IconBase.php',
    'SP\\Html\\Assets\\IconInterface' => $baseDir . '/inc/SP/Html/Assets/IconInterface.php',
    'SP\\Html\\Assets\\ImageIcon' => $baseDir . '/inc/SP/Html/Assets/ImageIcon.php',
    'SP\\Html\\DataGrid\\DataGrid' => $baseDir . '/inc/SP/Html/DataGrid/DataGrid.php',
    'SP\\Html\\DataGrid\\DataGridAction' => $baseDir . '/inc/SP/Html/DataGrid/DataGridAction.php',
    'SP\\Html\\DataGrid\\DataGridActionBase' => $baseDir . '/inc/SP/Html/DataGrid/DataGridActionBase.php',
    'SP\\Html\\DataGrid\\DataGridActionInterface' => $baseDir . '/inc/SP/Html/DataGrid/DataGridActionInterface.php',
    'SP\\Html\\DataGrid\\DataGridActionSearch' => $baseDir . '/inc/SP/Html/DataGrid/DataGridActionSearch.php',
    'SP\\Html\\DataGrid\\DataGridActionType' => $baseDir . '/inc/SP/Html/DataGrid/DataGridActionType.php',
    'SP\\Html\\DataGrid\\DataGridBase' => $baseDir . '/inc/SP/Html/DataGrid/DataGridBase.php',
    'SP\\Html\\DataGrid\\DataGridData' => $baseDir . '/inc/SP/Html/DataGrid/DataGridData.php',
    'SP\\Html\\DataGrid\\DataGridDataBase' => $baseDir . '/inc/SP/Html/DataGrid/DataGridDataBase.php',
    'SP\\Html\\DataGrid\\DataGridDataInterface' => $baseDir . '/inc/SP/Html/DataGrid/DataGridDataInterface.php',
    'SP\\Html\\DataGrid\\DataGridHeader' => $baseDir . '/inc/SP/Html/DataGrid/DataGridHeader.php',
    'SP\\Html\\DataGrid\\DataGridHeaderBase' => $baseDir . '/inc/SP/Html/DataGrid/DataGridHeaderBase.php',
    'SP\\Html\\DataGrid\\DataGridHeaderInterface' => $baseDir . '/inc/SP/Html/DataGrid/DataGridHeaderInterface.php',
    'SP\\Html\\DataGrid\\DataGridHeaderSort' => $baseDir . '/inc/SP/Html/DataGrid/DataGridHeaderSort.php',
    'SP\\Html\\DataGrid\\DataGridInterface' => $baseDir . '/inc/SP/Html/DataGrid/DataGridInterface.php',
    'SP\\Html\\DataGrid\\DataGridPager' => $baseDir . '/inc/SP/Html/DataGrid/DataGridPager.php',
    'SP\\Html\\DataGrid\\DataGridPagerBase' => $baseDir . '/inc/SP/Html/DataGrid/DataGridPagerBase.php',
    'SP\\Html\\DataGrid\\DataGridPagerInterface' => $baseDir . '/inc/SP/Html/DataGrid/DataGridPagerInterface.php',
    'SP\\Html\\DataGrid\\DataGridSort' => $baseDir . '/inc/SP/Html/DataGrid/DataGridSort.php',
    'SP\\Html\\DataGrid\\DataGridSortInterface' => $baseDir . '/inc/SP/Html/DataGrid/DataGridSortInterface.php',
    'SP\\Html\\DataGrid\\DataGridTab' => $baseDir . '/inc/SP/Html/DataGrid/DataGridTab.php',
    'SP\\Html\\Html' => $baseDir . '/inc/SP/Html/Html.php',
    'SP\\Html\\Minify' => $baseDir . '/inc/SP/Html/Minify.php',
    'SP\\Http\\Cookies' => $baseDir . '/inc/SP/Http/Cookies.php',
    'SP\\Http\\JsonResponse' => $baseDir . '/inc/SP/Http/JsonResponse.php',
    'SP\\Http\\Message' => $baseDir . '/inc/SP/Http/Message.php',
    'SP\\Http\\Request' => $baseDir . '/inc/SP/Http/Request.php',
    'SP\\Http\\Response' => $baseDir . '/inc/SP/Http/Response.php',
    'SP\\Http\\XMLRPCResponseParse' => $baseDir . '/inc/SP/Http/XMLRPCResponseParse.php',
    'SP\\Import\\CsvImport' => $baseDir . '/inc/SP/Import/CsvImport.php',
    'SP\\Import\\CsvImportBase' => $baseDir . '/inc/SP/Import/CsvImportBase.php',
    'SP\\Import\\FileImport' => $baseDir . '/inc/SP/Import/FileImport.php',
    'SP\\Import\\Import' => $baseDir . '/inc/SP/Import/Import.php',
    'SP\\Import\\ImportBase' => $baseDir . '/inc/SP/Import/ImportBase.php',
    'SP\\Import\\ImportInterface' => $baseDir . '/inc/SP/Import/ImportInterface.php',
    'SP\\Import\\ImportParams' => $baseDir . '/inc/SP/Import/ImportParams.php',
    'SP\\Import\\KeepassImport' => $baseDir . '/inc/SP/Import/KeepassImport.php',
    'SP\\Import\\KeepassXImport' => $baseDir . '/inc/SP/Import/KeepassXImport.php',
    'SP\\Import\\SyspassImport' => $baseDir . '/inc/SP/Import/SyspassImport.php',
    'SP\\Import\\XmlFileImport' => $baseDir . '/inc/SP/Import/XmlFileImport.php',
    'SP\\Import\\XmlImport' => $baseDir . '/inc/SP/Import/XmlImport.php',
    'SP\\Import\\XmlImportTrait' => $baseDir . '/inc/SP/Import/XmlImportTrait.php',
    'SP\\Log\\AbstractLogger' => $baseDir . '/inc/SP/Log/AbstractLogger.php',
    'SP\\Log\\ActionLog' => $baseDir . '/inc/SP/Log/ActionLog.php',
    'SP\\Log\\Email' => $baseDir . '/inc/SP/Log/Email.php',
    'SP\\Log\\Log' => $baseDir . '/inc/SP/Log/Log.php',
    'SP\\Log\\LogLevel' => $baseDir . '/inc/SP/Log/LogLevel.php',
    'SP\\Log\\LogUtil' => $baseDir . '/inc/SP/Log/LogUtil.php',
    'SP\\Log\\LoggerInterface' => $baseDir . '/inc/SP/Log/LoggerInterface.php',
    'SP\\Log\\Syslog' => $baseDir . '/inc/SP/Log/Syslog.php',
    'SP\\Mgmt\\ApiTokens\\ApiToken' => $baseDir . '/inc/SP/Mgmt/ApiTokens/ApiToken.php',
    'SP\\Mgmt\\ApiTokens\\ApiTokenBase' => $baseDir . '/inc/SP/Mgmt/ApiTokens/ApiTokenBase.php',
    'SP\\Mgmt\\ApiTokens\\ApiTokenSearch' => $baseDir . '/inc/SP/Mgmt/ApiTokens/ApiTokenSearch.php',
    'SP\\Mgmt\\ApiTokens\\ApiTokensUtil' => $baseDir . '/inc/SP/Mgmt/ApiTokens/ApiTokensUtil.php',
    'SP\\Mgmt\\Categories\\Category' => $baseDir . '/inc/SP/Mgmt/Categories/Category.php',
    'SP\\Mgmt\\Categories\\CategoryBase' => $baseDir . '/inc/SP/Mgmt/Categories/CategoryBase.php',
    'SP\\Mgmt\\Categories\\CategorySearch' => $baseDir . '/inc/SP/Mgmt/Categories/CategorySearch.php',
    'SP\\Mgmt\\CustomFields\\CustomField' => $baseDir . '/inc/SP/Mgmt/CustomFields/CustomField.php',
    'SP\\Mgmt\\CustomFields\\CustomFieldBase' => $baseDir . '/inc/SP/Mgmt/CustomFields/CustomFieldBase.php',
    'SP\\Mgmt\\CustomFields\\CustomFieldDef' => $baseDir . '/inc/SP/Mgmt/CustomFields/CustomFieldDef.php',
    'SP\\Mgmt\\CustomFields\\CustomFieldDefSearch' => $baseDir . '/inc/SP/Mgmt/CustomFields/CustomFieldDefSearch.php',
    'SP\\Mgmt\\CustomFields\\CustomFieldTypes' => $baseDir . '/inc/SP/Mgmt/CustomFields/CustomFieldTypes.php',
    'SP\\Mgmt\\CustomFields\\CustomFieldsUtil' => $baseDir . '/inc/SP/Mgmt/CustomFields/CustomFieldsUtil.php',
    'SP\\Mgmt\\Customers\\Customer' => $baseDir . '/inc/SP/Mgmt/Customers/Customer.php',
    'SP\\Mgmt\\Customers\\CustomerBase' => $baseDir . '/inc/SP/Mgmt/Customers/CustomerBase.php',
    'SP\\Mgmt\\Customers\\CustomerSearch' => $baseDir . '/inc/SP/Mgmt/Customers/CustomerSearch.php',
    'SP\\Mgmt\\Files\\File' => $baseDir . '/inc/SP/Mgmt/Files/File.php',
    'SP\\Mgmt\\Files\\FileBase' => $baseDir . '/inc/SP/Mgmt/Files/FileBase.php',
    'SP\\Mgmt\\Files\\FileSearch' => $baseDir . '/inc/SP/Mgmt/Files/FileSearch.php',
    'SP\\Mgmt\\Files\\FileUtil' => $baseDir . '/inc/SP/Mgmt/Files/FileUtil.php',
    'SP\\Mgmt\\Groups\\Group' => $baseDir . '/inc/SP/Mgmt/Groups/Group.php',
    'SP\\Mgmt\\Groups\\GroupAccounts' => $baseDir . '/inc/SP/Mgmt/Groups/GroupAccounts.php',
    'SP\\Mgmt\\Groups\\GroupAccountsBase' => $baseDir . '/inc/SP/Mgmt/Groups/GroupAccountsBase.php',
    'SP\\Mgmt\\Groups\\GroupAccountsUtil' => $baseDir . '/inc/SP/Mgmt/Groups/GroupAccountsUtil.php',
    'SP\\Mgmt\\Groups\\GroupBase' => $baseDir . '/inc/SP/Mgmt/Groups/GroupBase.php',
    'SP\\Mgmt\\Groups\\GroupSearch' => $baseDir . '/inc/SP/Mgmt/Groups/GroupSearch.php',
    'SP\\Mgmt\\Groups\\GroupUsers' => $baseDir . '/inc/SP/Mgmt/Groups/GroupUsers.php',
    'SP\\Mgmt\\Groups\\GroupUsersBase' => $baseDir . '/inc/SP/Mgmt/Groups/GroupUsersBase.php',
    'SP\\Mgmt\\Groups\\GroupUtil' => $baseDir . '/inc/SP/Mgmt/Groups/GroupUtil.php',
    'SP\\Mgmt\\ItemBaseInterface' => $baseDir . '/inc/SP/Mgmt/ItemBaseInterface.php',
    'SP\\Mgmt\\ItemBaseTrait' => $baseDir . '/inc/SP/Mgmt/ItemBaseTrait.php',
    'SP\\Mgmt\\ItemInterface' => $baseDir . '/inc/SP/Mgmt/ItemInterface.php',
    'SP\\Mgmt\\ItemSearchInterface' => $baseDir . '/inc/SP/Mgmt/ItemSearchInterface.php',
    'SP\\Mgmt\\ItemSelectInterface' => $baseDir . '/inc/SP/Mgmt/ItemSelectInterface.php',
    'SP\\Mgmt\\ItemTrait' => $baseDir . '/inc/SP/Mgmt/ItemTrait.php',
    'SP\\Mgmt\\Notices\\Notice' => $baseDir . '/inc/SP/Mgmt/Notices/Notice.php',
    'SP\\Mgmt\\Notices\\NoticeBase' => $baseDir . '/inc/SP/Mgmt/Notices/NoticeBase.php',
    'SP\\Mgmt\\Notices\\NoticeSearch' => $baseDir . '/inc/SP/Mgmt/Notices/NoticeSearch.php',
    'SP\\Mgmt\\Plugins\\Plugin' => $baseDir . '/inc/SP/Mgmt/Plugins/Plugin.php',
    'SP\\Mgmt\\Plugins\\PluginBase' => $baseDir . '/inc/SP/Mgmt/Plugins/PluginBase.php',
    'SP\\Mgmt\\Plugins\\PluginSearch' => $baseDir . '/inc/SP/Mgmt/Plugins/PluginSearch.php',
    'SP\\Mgmt\\Profiles\\Profile' => $baseDir . '/inc/SP/Mgmt/Profiles/Profile.php',
    'SP\\Mgmt\\Profiles\\ProfileBase' => $baseDir . '/inc/SP/Mgmt/Profiles/ProfileBase.php',
    'SP\\Mgmt\\Profiles\\ProfileSearch' => $baseDir . '/inc/SP/Mgmt/Profiles/ProfileSearch.php',
    'SP\\Mgmt\\Profiles\\ProfileUtil' => $baseDir . '/inc/SP/Mgmt/Profiles/ProfileUtil.php',
    'SP\\Mgmt\\PublicLinks\\PublicLink' => $baseDir . '/inc/SP/Mgmt/PublicLinks/PublicLink.php',
    'SP\\Mgmt\\PublicLinks\\PublicLinkBase' => $baseDir . '/inc/SP/Mgmt/PublicLinks/PublicLinkBase.php',
    'SP\\Mgmt\\PublicLinks\\PublicLinkSearch' => $baseDir . '/inc/SP/Mgmt/PublicLinks/PublicLinkSearch.php',
    'SP\\Mgmt\\Tags\\Tag' => $baseDir . '/inc/SP/Mgmt/Tags/Tag.php',
    'SP\\Mgmt\\Tags\\TagBase' => $baseDir . '/inc/SP/Mgmt/Tags/TagBase.php',
    'SP\\Mgmt\\Tags\\TagSearch' => $baseDir . '/inc/SP/Mgmt/Tags/TagSearch.php',
    'SP\\Mgmt\\Tracks\\Track' => $baseDir . '/inc/SP/Mgmt/Tracks/Track.php',
    'SP\\Mgmt\\Tracks\\TrackBase' => $baseDir . '/inc/SP/Mgmt/Tracks/TrackBase.php',
    'SP\\Mgmt\\Users\\User' => $baseDir . '/inc/SP/Mgmt/Users/User.php',
    'SP\\Mgmt\\Users\\UserBase' => $baseDir . '/inc/SP/Mgmt/Users/UserBase.php',
    'SP\\Mgmt\\Users\\UserLdap' => $baseDir . '/inc/SP/Mgmt/Users/UserLdap.php',
    'SP\\Mgmt\\Users\\UserLdapSync' => $baseDir . '/inc/SP/Mgmt/Users/UserLdapSync.php',
    'SP\\Mgmt\\Users\\UserMigrate' => $baseDir . '/inc/SP/Mgmt/Users/UserMigrate.php',
    'SP\\Mgmt\\Users\\UserPass' => $baseDir . '/inc/SP/Mgmt/Users/UserPass.php',
    'SP\\Mgmt\\Users\\UserPassRecover' => $baseDir . '/inc/SP/Mgmt/Users/UserPassRecover.php',
    'SP\\Mgmt\\Users\\UserPassRecoverBase' => $baseDir . '/inc/SP/Mgmt/Users/UserPassRecoverBase.php',
    'SP\\Mgmt\\Users\\UserPreferences' => $baseDir . '/inc/SP/Mgmt/Users/UserPreferences.php',
    'SP\\Mgmt\\Users\\UserPreferencesBase' => $baseDir . '/inc/SP/Mgmt/Users/UserPreferencesBase.php',
    'SP\\Mgmt\\Users\\UserPreferencesUtil' => $baseDir . '/inc/SP/Mgmt/Users/UserPreferencesUtil.php',
    'SP\\Mgmt\\Users\\UserSSO' => $baseDir . '/inc/SP/Mgmt/Users/UserSSO.php',
    'SP\\Mgmt\\Users\\UserSearch' => $baseDir . '/inc/SP/Mgmt/Users/UserSearch.php',
    'SP\\Mgmt\\Users\\UserUtil' => $baseDir . '/inc/SP/Mgmt/Users/UserUtil.php',
    'SP\\Storage\\DB' => $baseDir . '/inc/SP/Storage/DB.php',
    'SP\\Storage\\DBStorageInterface' => $baseDir . '/inc/SP/Storage/DBStorageInterface.php',
    'SP\\Storage\\DBUtil' => $baseDir . '/inc/SP/Storage/DBUtil.php',
    'SP\\Storage\\FileStorageInterface' => $baseDir . '/inc/SP/Storage/FileStorageInterface.php',
    'SP\\Storage\\MySQLHandler' => $baseDir . '/inc/SP/Storage/MySQLHandler.php',
    'SP\\Storage\\QueryData' => $baseDir . '/inc/SP/Storage/QueryData.php',
    'SP\\Storage\\XmlHandler' => $baseDir . '/inc/SP/Storage/XmlHandler.php',
    'SP\\Util\\ArrayUtil' => $baseDir . '/inc/SP/Util/ArrayUtil.php',
    'SP\\Util\\Checks' => $baseDir . '/inc/SP/Util/Checks.php',
    'SP\\Util\\Connection' => $baseDir . '/inc/SP/Util/Connection.php',
    'SP\\Util\\ConnectionInterface' => $baseDir . '/inc/SP/Util/ConnectionInterface.php',
    'SP\\Util\\Filter' => $baseDir . '/inc/SP/Util/Filter.php',
    'SP\\Util\\HttpUtil' => $baseDir . '/inc/SP/Util/HttpUtil.php',
    'SP\\Util\\ImageUtil' => $baseDir . '/inc/SP/Util/ImageUtil.php',
    'SP\\Util\\Json' => $baseDir . '/inc/SP/Util/Json.php',
    'SP\\Util\\Util' => $baseDir . '/inc/SP/Util/Util.php',
    'SP\\Util\\Wiki\\DokuWikiApi' => $baseDir . '/inc/SP/Util/Wiki/DokuWikiApi.php',
    'SP\\Util\\Wiki\\DokuWikiApiBase' => $baseDir . '/inc/SP/Util/Wiki/DokuWikiApiBase.php',
    'SP\\Util\\Wiki\\DokuWikiApiParse' => $baseDir . '/inc/SP/Util/Wiki/DokuWikiApiParse.php',
    'phpseclib\\Crypt\\AES' => $vendorDir . '/phpseclib/phpseclib/phpseclib/Crypt/AES.php',
    'phpseclib\\Crypt\\Base' => $vendorDir . '/phpseclib/phpseclib/phpseclib/Crypt/Base.php',
    'phpseclib\\Crypt\\Blowfish' => $vendorDir . '/phpseclib/phpseclib/phpseclib/Crypt/Blowfish.php',
    'phpseclib\\Crypt\\DES' => $vendorDir . '/phpseclib/phpseclib/phpseclib/Crypt/DES.php',
    'phpseclib\\Crypt\\Hash' => $vendorDir . '/phpseclib/phpseclib/phpseclib/Crypt/Hash.php',
    'phpseclib\\Crypt\\RC2' => $vendorDir . '/phpseclib/phpseclib/phpseclib/Crypt/RC2.php',
    'phpseclib\\Crypt\\RC4' => $vendorDir . '/phpseclib/phpseclib/phpseclib/Crypt/RC4.php',
    'phpseclib\\Crypt\\RSA' => $vendorDir . '/phpseclib/phpseclib/phpseclib/Crypt/RSA.php',
    'phpseclib\\Crypt\\Random' => $vendorDir . '/phpseclib/phpseclib/phpseclib/Crypt/Random.php',
    'phpseclib\\Crypt\\Rijndael' => $vendorDir . '/phpseclib/phpseclib/phpseclib/Crypt/Rijndael.php',
    'phpseclib\\Crypt\\TripleDES' => $vendorDir . '/phpseclib/phpseclib/phpseclib/Crypt/TripleDES.php',
    'phpseclib\\Crypt\\Twofish' => $vendorDir . '/phpseclib/phpseclib/phpseclib/Crypt/Twofish.php',
    'phpseclib\\File\\ANSI' => $vendorDir . '/phpseclib/phpseclib/phpseclib/File/ANSI.php',
    'phpseclib\\File\\ASN1' => $vendorDir . '/phpseclib/phpseclib/phpseclib/File/ASN1.php',
    'phpseclib\\File\\ASN1\\Element' => $vendorDir . '/phpseclib/phpseclib/phpseclib/File/ASN1/Element.php',
    'phpseclib\\File\\X509' => $vendorDir . '/phpseclib/phpseclib/phpseclib/File/X509.php',
    'phpseclib\\Math\\BigInteger' => $vendorDir . '/phpseclib/phpseclib/phpseclib/Math/BigInteger.php',
    'phpseclib\\Net\\SCP' => $vendorDir . '/phpseclib/phpseclib/phpseclib/Net/SCP.php',
    'phpseclib\\Net\\SFTP' => $vendorDir . '/phpseclib/phpseclib/phpseclib/Net/SFTP.php',
    'phpseclib\\Net\\SFTP\\Stream' => $vendorDir . '/phpseclib/phpseclib/phpseclib/Net/SFTP/Stream.php',
    'phpseclib\\Net\\SSH1' => $vendorDir . '/phpseclib/phpseclib/phpseclib/Net/SSH1.php',
    'phpseclib\\Net\\SSH2' => $vendorDir . '/phpseclib/phpseclib/phpseclib/Net/SSH2.php',
    'phpseclib\\System\\SSH\\Agent' => $vendorDir . '/phpseclib/phpseclib/phpseclib/System/SSH/Agent.php',
    'phpseclib\\System\\SSH\\Agent\\Identity' => $vendorDir . '/phpseclib/phpseclib/phpseclib/System/SSH/Agent/Identity.php',
);