<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9132506b6dc6587a713d505dc72b991
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
            'Psr\\Cache\\' => 10,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Nette\\ArgumentOutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\Bridges\\CacheDI\\CacheExtension' => __DIR__ . '/..' . '/nette/caching/src/Bridges/CacheDI/CacheExtension.php',
        'Nette\\Bridges\\CacheLatte\\CacheExtension' => __DIR__ . '/..' . '/nette/caching/src/Bridges/CacheLatte/CacheExtension.php',
        'Nette\\Bridges\\CacheLatte\\CacheMacro' => __DIR__ . '/..' . '/nette/caching/src/Bridges/CacheLatte/CacheMacro.php',
        'Nette\\Bridges\\CacheLatte\\Nodes\\CacheNode' => __DIR__ . '/..' . '/nette/caching/src/Bridges/CacheLatte/Nodes/CacheNode.php',
        'Nette\\Bridges\\CacheLatte\\Runtime' => __DIR__ . '/..' . '/nette/caching/src/Bridges/CacheLatte/Runtime.php',
        'Nette\\Bridges\\DatabaseDI\\DatabaseExtension' => __DIR__ . '/..' . '/nette/database/src/Bridges/DatabaseDI/DatabaseExtension.php',
        'Nette\\Bridges\\DatabaseTracy\\ConnectionPanel' => __DIR__ . '/..' . '/nette/database/src/Bridges/DatabaseTracy/ConnectionPanel.php',
        'Nette\\Caching\\BulkReader' => __DIR__ . '/..' . '/nette/caching/src/Caching/BulkReader.php',
        'Nette\\Caching\\Cache' => __DIR__ . '/..' . '/nette/caching/src/Caching/Cache.php',
        'Nette\\Caching\\IBulkReader' => __DIR__ . '/..' . '/nette/caching/src/compatibility.php',
        'Nette\\Caching\\IStorage' => __DIR__ . '/..' . '/nette/caching/src/compatibility.php',
        'Nette\\Caching\\OutputHelper' => __DIR__ . '/..' . '/nette/caching/src/Caching/OutputHelper.php',
        'Nette\\Caching\\Storage' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storage.php',
        'Nette\\Caching\\Storages\\DevNullStorage' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/DevNullStorage.php',
        'Nette\\Caching\\Storages\\FileStorage' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/FileStorage.php',
        'Nette\\Caching\\Storages\\IJournal' => __DIR__ . '/..' . '/nette/caching/src/compatibility.php',
        'Nette\\Caching\\Storages\\Journal' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/Journal.php',
        'Nette\\Caching\\Storages\\MemcachedStorage' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/MemcachedStorage.php',
        'Nette\\Caching\\Storages\\MemoryStorage' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/MemoryStorage.php',
        'Nette\\Caching\\Storages\\SQLiteJournal' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/SQLiteJournal.php',
        'Nette\\Caching\\Storages\\SQLiteStorage' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/SQLiteStorage.php',
        'Nette\\Database\\Connection' => __DIR__ . '/..' . '/nette/database/src/Database/Connection.php',
        'Nette\\Database\\ConnectionException' => __DIR__ . '/..' . '/nette/database/src/Database/exceptions.php',
        'Nette\\Database\\ConstraintViolationException' => __DIR__ . '/..' . '/nette/database/src/Database/exceptions.php',
        'Nette\\Database\\Context' => __DIR__ . '/..' . '/nette/database/src/compatibility.php',
        'Nette\\Database\\Conventions' => __DIR__ . '/..' . '/nette/database/src/Database/Conventions.php',
        'Nette\\Database\\Conventions\\AmbiguousReferenceKeyException' => __DIR__ . '/..' . '/nette/database/src/Database/Conventions/AmbiguousReferenceKeyException.php',
        'Nette\\Database\\Conventions\\DiscoveredConventions' => __DIR__ . '/..' . '/nette/database/src/Database/Conventions/DiscoveredConventions.php',
        'Nette\\Database\\Conventions\\StaticConventions' => __DIR__ . '/..' . '/nette/database/src/Database/Conventions/StaticConventions.php',
        'Nette\\Database\\Driver' => __DIR__ . '/..' . '/nette/database/src/Database/Driver.php',
        'Nette\\Database\\DriverException' => __DIR__ . '/..' . '/nette/database/src/Database/DriverException.php',
        'Nette\\Database\\Drivers\\MsSqlDriver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/MsSqlDriver.php',
        'Nette\\Database\\Drivers\\MySqlDriver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/MySqlDriver.php',
        'Nette\\Database\\Drivers\\OciDriver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/OciDriver.php',
        'Nette\\Database\\Drivers\\OdbcDriver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/OdbcDriver.php',
        'Nette\\Database\\Drivers\\PgSqlDriver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/PgSqlDriver.php',
        'Nette\\Database\\Drivers\\SqliteDriver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/SqliteDriver.php',
        'Nette\\Database\\Drivers\\SqlsrvDriver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/SqlsrvDriver.php',
        'Nette\\Database\\Explorer' => __DIR__ . '/..' . '/nette/database/src/Database/Explorer.php',
        'Nette\\Database\\ForeignKeyConstraintViolationException' => __DIR__ . '/..' . '/nette/database/src/Database/exceptions.php',
        'Nette\\Database\\Helpers' => __DIR__ . '/..' . '/nette/database/src/Database/Helpers.php',
        'Nette\\Database\\IConventions' => __DIR__ . '/..' . '/nette/database/src/compatibility-intf.php',
        'Nette\\Database\\IRow' => __DIR__ . '/..' . '/nette/database/src/Database/IRow.php',
        'Nette\\Database\\IRowContainer' => __DIR__ . '/..' . '/nette/database/src/Database/IRowContainer.php',
        'Nette\\Database\\IStructure' => __DIR__ . '/..' . '/nette/database/src/Database/IStructure.php',
        'Nette\\Database\\ISupplementalDriver' => __DIR__ . '/..' . '/nette/database/src/compatibility-intf.php',
        'Nette\\Database\\NotNullConstraintViolationException' => __DIR__ . '/..' . '/nette/database/src/Database/exceptions.php',
        'Nette\\Database\\ResultSet' => __DIR__ . '/..' . '/nette/database/src/Database/ResultSet.php',
        'Nette\\Database\\Row' => __DIR__ . '/..' . '/nette/database/src/Database/Row.php',
        'Nette\\Database\\SqlLiteral' => __DIR__ . '/..' . '/nette/database/src/Database/SqlLiteral.php',
        'Nette\\Database\\SqlPreprocessor' => __DIR__ . '/..' . '/nette/database/src/Database/SqlPreprocessor.php',
        'Nette\\Database\\Structure' => __DIR__ . '/..' . '/nette/database/src/Database/Structure.php',
        'Nette\\Database\\Table\\ActiveRow' => __DIR__ . '/..' . '/nette/database/src/Database/Table/ActiveRow.php',
        'Nette\\Database\\Table\\GroupedSelection' => __DIR__ . '/..' . '/nette/database/src/Database/Table/GroupedSelection.php',
        'Nette\\Database\\Table\\IRow' => __DIR__ . '/..' . '/nette/database/src/Database/Table/IRow.php',
        'Nette\\Database\\Table\\IRowContainer' => __DIR__ . '/..' . '/nette/database/src/Database/Table/IRowContainer.php',
        'Nette\\Database\\Table\\Selection' => __DIR__ . '/..' . '/nette/database/src/Database/Table/Selection.php',
        'Nette\\Database\\Table\\SqlBuilder' => __DIR__ . '/..' . '/nette/database/src/Database/Table/SqlBuilder.php',
        'Nette\\Database\\UniqueConstraintViolationException' => __DIR__ . '/..' . '/nette/database/src/Database/exceptions.php',
        'Nette\\DeprecatedException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\DirectoryNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\FileNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\HtmlStringable' => __DIR__ . '/..' . '/nette/utils/src/HtmlStringable.php',
        'Nette\\IOException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\InvalidArgumentException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\InvalidStateException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\Iterators\\CachingIterator' => __DIR__ . '/..' . '/nette/utils/src/Iterators/CachingIterator.php',
        'Nette\\Iterators\\Mapper' => __DIR__ . '/..' . '/nette/utils/src/Iterators/Mapper.php',
        'Nette\\Loaders\\RobotLoader' => __DIR__ . '/..' . '/nette/robot-loader/src/RobotLoader/RobotLoader.php',
        'Nette\\Localization\\ITranslator' => __DIR__ . '/..' . '/nette/utils/src/compatibility.php',
        'Nette\\Localization\\Translator' => __DIR__ . '/..' . '/nette/utils/src/Translator.php',
        'Nette\\MemberAccessException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\NotImplementedException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\NotSupportedException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\OutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\SmartObject' => __DIR__ . '/..' . '/nette/utils/src/SmartObject.php',
        'Nette\\StaticClass' => __DIR__ . '/..' . '/nette/utils/src/StaticClass.php',
        'Nette\\UnexpectedValueException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\Utils\\ArrayHash' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayHash.php',
        'Nette\\Utils\\ArrayList' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayList.php',
        'Nette\\Utils\\Arrays' => __DIR__ . '/..' . '/nette/utils/src/Utils/Arrays.php',
        'Nette\\Utils\\AssertionException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Callback' => __DIR__ . '/..' . '/nette/utils/src/Utils/Callback.php',
        'Nette\\Utils\\DateTime' => __DIR__ . '/..' . '/nette/utils/src/Utils/DateTime.php',
        'Nette\\Utils\\FileInfo' => __DIR__ . '/..' . '/nette/utils/src/Utils/FileInfo.php',
        'Nette\\Utils\\FileSystem' => __DIR__ . '/..' . '/nette/utils/src/Utils/FileSystem.php',
        'Nette\\Utils\\Finder' => __DIR__ . '/..' . '/nette/utils/src/Utils/Finder.php',
        'Nette\\Utils\\Floats' => __DIR__ . '/..' . '/nette/utils/src/Utils/Floats.php',
        'Nette\\Utils\\Helpers' => __DIR__ . '/..' . '/nette/utils/src/Utils/Helpers.php',
        'Nette\\Utils\\Html' => __DIR__ . '/..' . '/nette/utils/src/Utils/Html.php',
        'Nette\\Utils\\IHtmlString' => __DIR__ . '/..' . '/nette/utils/src/compatibility.php',
        'Nette\\Utils\\Image' => __DIR__ . '/..' . '/nette/utils/src/Utils/Image.php',
        'Nette\\Utils\\ImageException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Json' => __DIR__ . '/..' . '/nette/utils/src/Utils/Json.php',
        'Nette\\Utils\\JsonException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ObjectHelpers' => __DIR__ . '/..' . '/nette/utils/src/Utils/ObjectHelpers.php',
        'Nette\\Utils\\Paginator' => __DIR__ . '/..' . '/nette/utils/src/Utils/Paginator.php',
        'Nette\\Utils\\Random' => __DIR__ . '/..' . '/nette/utils/src/Utils/Random.php',
        'Nette\\Utils\\Reflection' => __DIR__ . '/..' . '/nette/utils/src/Utils/Reflection.php',
        'Nette\\Utils\\RegexpException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Strings' => __DIR__ . '/..' . '/nette/utils/src/Utils/Strings.php',
        'Nette\\Utils\\Type' => __DIR__ . '/..' . '/nette/utils/src/Utils/Type.php',
        'Nette\\Utils\\UnknownImageFileException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Validators' => __DIR__ . '/..' . '/nette/utils/src/Utils/Validators.php',
        'Smarty' => __DIR__ . '/..' . '/smarty/smarty/libs/Smarty.class.php',
        'SmartyCompilerException' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smartycompilerexception.php',
        'SmartyException' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smartyexception.php',
        'Smarty_Autoloader' => __DIR__ . '/..' . '/smarty/smarty/libs/Autoloader.php',
        'Smarty_CacheResource' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_cacheresource.php',
        'Smarty_CacheResource_Custom' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_cacheresource_custom.php',
        'Smarty_CacheResource_KeyValueStore' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_cacheresource_keyvaluestore.php',
        'Smarty_Data' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_data.php',
        'Smarty_Internal_Block' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_block.php',
        'Smarty_Internal_CacheResource_File' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_cacheresource_file.php',
        'Smarty_Internal_CompileBase' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compilebase.php',
        'Smarty_Internal_Compile_Append' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_append.php',
        'Smarty_Internal_Compile_Assign' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_assign.php',
        'Smarty_Internal_Compile_Block' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_block.php',
        'Smarty_Internal_Compile_Block_Child' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_block_child.php',
        'Smarty_Internal_Compile_Block_Parent' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_block_parent.php',
        'Smarty_Internal_Compile_Blockclose' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_block.php',
        'Smarty_Internal_Compile_Break' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_break.php',
        'Smarty_Internal_Compile_Call' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_call.php',
        'Smarty_Internal_Compile_Capture' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_capture.php',
        'Smarty_Internal_Compile_CaptureClose' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_capture.php',
        'Smarty_Internal_Compile_Child' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_child.php',
        'Smarty_Internal_Compile_Config_Load' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_config_load.php',
        'Smarty_Internal_Compile_Continue' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_continue.php',
        'Smarty_Internal_Compile_Debug' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_debug.php',
        'Smarty_Internal_Compile_Else' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_if.php',
        'Smarty_Internal_Compile_Elseif' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_if.php',
        'Smarty_Internal_Compile_Eval' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_eval.php',
        'Smarty_Internal_Compile_Extends' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_extends.php',
        'Smarty_Internal_Compile_For' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_for.php',
        'Smarty_Internal_Compile_Forclose' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_for.php',
        'Smarty_Internal_Compile_Foreach' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_foreach.php',
        'Smarty_Internal_Compile_Foreachclose' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_foreach.php',
        'Smarty_Internal_Compile_Foreachelse' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_foreach.php',
        'Smarty_Internal_Compile_Forelse' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_for.php',
        'Smarty_Internal_Compile_Function' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_function.php',
        'Smarty_Internal_Compile_Functionclose' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_function.php',
        'Smarty_Internal_Compile_If' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_if.php',
        'Smarty_Internal_Compile_Ifclose' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_if.php',
        'Smarty_Internal_Compile_Include' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_include.php',
        'Smarty_Internal_Compile_Insert' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_insert.php',
        'Smarty_Internal_Compile_Ldelim' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_ldelim.php',
        'Smarty_Internal_Compile_Make_Nocache' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_make_nocache.php',
        'Smarty_Internal_Compile_Nocache' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_nocache.php',
        'Smarty_Internal_Compile_Nocacheclose' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_nocache.php',
        'Smarty_Internal_Compile_Parent' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_parent.php',
        'Smarty_Internal_Compile_Private_Block_Plugin' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_block_plugin.php',
        'Smarty_Internal_Compile_Private_ForeachSection' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_foreachsection.php',
        'Smarty_Internal_Compile_Private_Function_Plugin' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_function_plugin.php',
        'Smarty_Internal_Compile_Private_Modifier' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_modifier.php',
        'Smarty_Internal_Compile_Private_Object_Block_Function' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_object_block_function.php',
        'Smarty_Internal_Compile_Private_Object_Function' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_object_function.php',
        'Smarty_Internal_Compile_Private_Print_Expression' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_print_expression.php',
        'Smarty_Internal_Compile_Private_Registered_Block' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_registered_block.php',
        'Smarty_Internal_Compile_Private_Registered_Function' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_registered_function.php',
        'Smarty_Internal_Compile_Private_Special_Variable' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_special_variable.php',
        'Smarty_Internal_Compile_Rdelim' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_rdelim.php',
        'Smarty_Internal_Compile_Section' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_section.php',
        'Smarty_Internal_Compile_Sectionclose' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_section.php',
        'Smarty_Internal_Compile_Sectionelse' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_section.php',
        'Smarty_Internal_Compile_Setfilter' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_setfilter.php',
        'Smarty_Internal_Compile_Setfilterclose' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_setfilter.php',
        'Smarty_Internal_Compile_Shared_Inheritance' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_shared_inheritance.php',
        'Smarty_Internal_Compile_While' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_while.php',
        'Smarty_Internal_Compile_Whileclose' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_while.php',
        'Smarty_Internal_Config_File_Compiler' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_config_file_compiler.php',
        'Smarty_Internal_Configfilelexer' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_configfilelexer.php',
        'Smarty_Internal_Configfileparser' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_configfileparser.php',
        'Smarty_Internal_Data' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_data.php',
        'Smarty_Internal_Debug' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_debug.php',
        'Smarty_Internal_ErrorHandler' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_errorhandler.php',
        'Smarty_Internal_Extension_Handler' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_extension_handler.php',
        'Smarty_Internal_Method_AddAutoloadFilters' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_addautoloadfilters.php',
        'Smarty_Internal_Method_AddDefaultModifiers' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_adddefaultmodifiers.php',
        'Smarty_Internal_Method_Append' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_append.php',
        'Smarty_Internal_Method_AppendByRef' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_appendbyref.php',
        'Smarty_Internal_Method_AssignByRef' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_assignbyref.php',
        'Smarty_Internal_Method_AssignGlobal' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_assignglobal.php',
        'Smarty_Internal_Method_ClearAllAssign' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_clearallassign.php',
        'Smarty_Internal_Method_ClearAllCache' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_clearallcache.php',
        'Smarty_Internal_Method_ClearAssign' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_clearassign.php',
        'Smarty_Internal_Method_ClearCache' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_clearcache.php',
        'Smarty_Internal_Method_ClearCompiledTemplate' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_clearcompiledtemplate.php',
        'Smarty_Internal_Method_ClearConfig' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_clearconfig.php',
        'Smarty_Internal_Method_CompileAllConfig' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_compileallconfig.php',
        'Smarty_Internal_Method_CompileAllTemplates' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_compilealltemplates.php',
        'Smarty_Internal_Method_ConfigLoad' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_configload.php',
        'Smarty_Internal_Method_CreateData' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_createdata.php',
        'Smarty_Internal_Method_GetAutoloadFilters' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getautoloadfilters.php',
        'Smarty_Internal_Method_GetConfigVariable' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getconfigvariable.php',
        'Smarty_Internal_Method_GetConfigVars' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getconfigvars.php',
        'Smarty_Internal_Method_GetDebugTemplate' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getdebugtemplate.php',
        'Smarty_Internal_Method_GetDefaultModifiers' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getdefaultmodifiers.php',
        'Smarty_Internal_Method_GetGlobal' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getglobal.php',
        'Smarty_Internal_Method_GetRegisteredObject' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getregisteredobject.php',
        'Smarty_Internal_Method_GetStreamVariable' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getstreamvariable.php',
        'Smarty_Internal_Method_GetTags' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_gettags.php',
        'Smarty_Internal_Method_GetTemplateVars' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_gettemplatevars.php',
        'Smarty_Internal_Method_Literals' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_literals.php',
        'Smarty_Internal_Method_LoadFilter' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_loadfilter.php',
        'Smarty_Internal_Method_LoadPlugin' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_loadplugin.php',
        'Smarty_Internal_Method_MustCompile' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_mustcompile.php',
        'Smarty_Internal_Method_RegisterCacheResource' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registercacheresource.php',
        'Smarty_Internal_Method_RegisterClass' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerclass.php',
        'Smarty_Internal_Method_RegisterDefaultConfigHandler' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerdefaultconfighandler.php',
        'Smarty_Internal_Method_RegisterDefaultPluginHandler' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerdefaultpluginhandler.php',
        'Smarty_Internal_Method_RegisterDefaultTemplateHandler' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerdefaulttemplatehandler.php',
        'Smarty_Internal_Method_RegisterFilter' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerfilter.php',
        'Smarty_Internal_Method_RegisterObject' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerobject.php',
        'Smarty_Internal_Method_RegisterPlugin' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerplugin.php',
        'Smarty_Internal_Method_RegisterResource' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerresource.php',
        'Smarty_Internal_Method_SetAutoloadFilters' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_setautoloadfilters.php',
        'Smarty_Internal_Method_SetDebugTemplate' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_setdebugtemplate.php',
        'Smarty_Internal_Method_SetDefaultModifiers' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_setdefaultmodifiers.php',
        'Smarty_Internal_Method_UnloadFilter' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_unloadfilter.php',
        'Smarty_Internal_Method_UnregisterCacheResource' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_unregistercacheresource.php',
        'Smarty_Internal_Method_UnregisterFilter' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_unregisterfilter.php',
        'Smarty_Internal_Method_UnregisterObject' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_unregisterobject.php',
        'Smarty_Internal_Method_UnregisterPlugin' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_unregisterplugin.php',
        'Smarty_Internal_Method_UnregisterResource' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_unregisterresource.php',
        'Smarty_Internal_Nocache_Insert' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_nocache_insert.php',
        'Smarty_Internal_ParseTree' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_parsetree.php',
        'Smarty_Internal_ParseTree_Code' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_parsetree_code.php',
        'Smarty_Internal_ParseTree_Dq' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_parsetree_dq.php',
        'Smarty_Internal_ParseTree_DqContent' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_parsetree_dqcontent.php',
        'Smarty_Internal_ParseTree_Tag' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_parsetree_tag.php',
        'Smarty_Internal_ParseTree_Template' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_parsetree_template.php',
        'Smarty_Internal_ParseTree_Text' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_parsetree_text.php',
        'Smarty_Internal_Resource_Eval' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_resource_eval.php',
        'Smarty_Internal_Resource_Extends' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_resource_extends.php',
        'Smarty_Internal_Resource_File' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_resource_file.php',
        'Smarty_Internal_Resource_Php' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_resource_php.php',
        'Smarty_Internal_Resource_Stream' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_resource_stream.php',
        'Smarty_Internal_Resource_String' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_resource_string.php',
        'Smarty_Internal_Runtime_CacheModify' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_cachemodify.php',
        'Smarty_Internal_Runtime_CacheResourceFile' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_cacheresourcefile.php',
        'Smarty_Internal_Runtime_Capture' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_capture.php',
        'Smarty_Internal_Runtime_CodeFrame' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_codeframe.php',
        'Smarty_Internal_Runtime_FilterHandler' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_filterhandler.php',
        'Smarty_Internal_Runtime_Foreach' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_foreach.php',
        'Smarty_Internal_Runtime_GetIncludePath' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_getincludepath.php',
        'Smarty_Internal_Runtime_Inheritance' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_inheritance.php',
        'Smarty_Internal_Runtime_Make_Nocache' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_make_nocache.php',
        'Smarty_Internal_Runtime_TplFunction' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_tplfunction.php',
        'Smarty_Internal_Runtime_UpdateCache' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_updatecache.php',
        'Smarty_Internal_Runtime_UpdateScope' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_updatescope.php',
        'Smarty_Internal_Runtime_WriteFile' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_writefile.php',
        'Smarty_Internal_SmartyTemplateCompiler' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_smartytemplatecompiler.php',
        'Smarty_Internal_Template' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_template.php',
        'Smarty_Internal_TemplateBase' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_templatebase.php',
        'Smarty_Internal_TemplateCompilerBase' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_templatecompilerbase.php',
        'Smarty_Internal_Templatelexer' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_templatelexer.php',
        'Smarty_Internal_Templateparser' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_templateparser.php',
        'Smarty_Internal_TestInstall' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_testinstall.php',
        'Smarty_Internal_Undefined' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_undefined.php',
        'Smarty_Resource' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_resource.php',
        'Smarty_Resource_Custom' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_resource_custom.php',
        'Smarty_Resource_Recompiled' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_resource_recompiled.php',
        'Smarty_Resource_Uncompiled' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_resource_uncompiled.php',
        'Smarty_Security' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_security.php',
        'Smarty_Template_Cached' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_template_cached.php',
        'Smarty_Template_Compiled' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_template_compiled.php',
        'Smarty_Template_Config' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_template_config.php',
        'Smarty_Template_Resource_Base' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_template_resource_base.php',
        'Smarty_Template_Source' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_template_source.php',
        'Smarty_Undefined_Variable' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_undefined_variable.php',
        'Smarty_Variable' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_variable.php',
        'TPC_yyStackEntry' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_configfileparser.php',
        'TP_yyStackEntry' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_templateparser.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9132506b6dc6587a713d505dc72b991::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9132506b6dc6587a713d505dc72b991::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf9132506b6dc6587a713d505dc72b991::$classMap;

        }, null, ClassLoader::class);
    }
}
