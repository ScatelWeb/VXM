<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitGravityPDFPlugin
{
    public static $files = array (
        'e9b046393eb3376a21bcc1a30bd2fe64' => __DIR__ . '/..' . '/querypath/querypath/src/qp_functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
            'Masterminds\\' => 12,
        ),
        'G' => 
        array (
            'GFPDF\\View\\' => 11,
            'GFPDF\\Test\\' => 11,
            'GFPDF\\Model\\' => 12,
            'GFPDF\\Helper\\Licensing\\' => 23,
            'GFPDF\\Helper\\Fields\\' => 20,
            'GFPDF\\Helper\\' => 13,
            'GFPDF\\Controller\\' => 17,
            'GFPDF\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Masterminds\\' => 
        array (
            0 => __DIR__ . '/..' . '/masterminds/html5/src',
        ),
        'GFPDF\\View\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/view',
        ),
        'GFPDF\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests/unit-tests',
        ),
        'GFPDF\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/model',
        ),
        'GFPDF\\Helper\\Licensing\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/helper/licensing',
        ),
        'GFPDF\\Helper\\Fields\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/helper/fields',
        ),
        'GFPDF\\Helper\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/helper',
            1 => __DIR__ . '/../..' . '/src/helper/abstract',
            2 => __DIR__ . '/../..' . '/src/helper/interface',
            3 => __DIR__ . '/../..' . '/src/helper/trait',
        ),
        'GFPDF\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/controller',
        ),
        'GFPDF\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Upload' => 
            array (
                0 => __DIR__ . '/..' . '/codeguy/upload/src',
            ),
        ),
        'Q' => 
        array (
            'QueryPath' => 
            array (
                0 => __DIR__ . '/..' . '/querypath/querypath/src',
            ),
        ),
    );

    public static $classMap = array (
        'CGIF' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/gif.php',
        'CGIFCOLORTABLE' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/gif.php',
        'CGIFFILEHEADER' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/gif.php',
        'CGIFIMAGE' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/gif.php',
        'CGIFIMAGEHEADER' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/gif.php',
        'CGIFLZW' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/gif.php',
        'FPDF_TPL' => __DIR__ . '/..' . '/setasign/fpdi/fpdf_tpl.php',
        'FPDI' => __DIR__ . '/..' . '/setasign/fpdi/fpdi.php',
        'FilterASCII85' => __DIR__ . '/..' . '/setasign/fpdi/filters/FilterASCII85.php',
        'FilterASCIIHexDecode' => __DIR__ . '/..' . '/setasign/fpdi/filters/FilterASCIIHexDecode.php',
        'FilterLZW' => __DIR__ . '/..' . '/setasign/fpdi/filters/FilterLZW.php',
        'GFPDF\\Controller\\Controller_Actions' => __DIR__ . '/../..' . '/src/controller/Controller_Actions.php',
        'GFPDF\\Controller\\Controller_Form_Settings' => __DIR__ . '/../..' . '/src/controller/Controller_Form_Settings.php',
        'GFPDF\\Controller\\Controller_Install' => __DIR__ . '/../..' . '/src/controller/Controller_Install.php',
        'GFPDF\\Controller\\Controller_Mergetags' => __DIR__ . '/../..' . '/src/controller/Controller_Mergetags.php',
        'GFPDF\\Controller\\Controller_PDF' => __DIR__ . '/../..' . '/src/controller/Controller_PDF.php',
        'GFPDF\\Controller\\Controller_Settings' => __DIR__ . '/../..' . '/src/controller/Controller_Settings.php',
        'GFPDF\\Controller\\Controller_Shortcodes' => __DIR__ . '/../..' . '/src/controller/Controller_Shortcodes.php',
        'GFPDF\\Controller\\Controller_Templates' => __DIR__ . '/../..' . '/src/controller/Controller_Templates.php',
        'GFPDF\\Controller\\Controller_Welcome_Screen' => __DIR__ . '/../..' . '/src/controller/Controller_Welcome_Screen.php',
        'GFPDF\\Helper\\Fields\\Field_Address' => __DIR__ . '/../..' . '/src/helper/fields/Field_Address.php',
        'GFPDF\\Helper\\Fields\\Field_Chainedselect' => __DIR__ . '/../..' . '/src/helper/fields/Field_Chainedselect.php',
        'GFPDF\\Helper\\Fields\\Field_Checkbox' => __DIR__ . '/../..' . '/src/helper/fields/Field_Checkbox.php',
        'GFPDF\\Helper\\Fields\\Field_Coupon' => __DIR__ . '/../..' . '/src/helper/fields/Field_Coupon.php',
        'GFPDF\\Helper\\Fields\\Field_CreditCard' => __DIR__ . '/../..' . '/src/helper/fields/Field_Creditcard.php',
        'GFPDF\\Helper\\Fields\\Field_Date' => __DIR__ . '/../..' . '/src/helper/fields/Field_Date.php',
        'GFPDF\\Helper\\Fields\\Field_Default' => __DIR__ . '/../..' . '/src/helper/fields/Field_Default.php',
        'GFPDF\\Helper\\Fields\\Field_Discount' => __DIR__ . '/../..' . '/src/helper/fields/Field_Discount.php',
        'GFPDF\\Helper\\Fields\\Field_Email' => __DIR__ . '/../..' . '/src/helper/fields/Field_Email.php',
        'GFPDF\\Helper\\Fields\\Field_Fileupload' => __DIR__ . '/../..' . '/src/helper/fields/Field_Fileupload.php',
        'GFPDF\\Helper\\Fields\\Field_Hidden' => __DIR__ . '/../..' . '/src/helper/fields/Field_Hidden.php',
        'GFPDF\\Helper\\Fields\\Field_Html' => __DIR__ . '/../..' . '/src/helper/fields/Field_Html.php',
        'GFPDF\\Helper\\Fields\\Field_Likert' => __DIR__ . '/../..' . '/src/helper/fields/Field_Likert.php',
        'GFPDF\\Helper\\Fields\\Field_List' => __DIR__ . '/../..' . '/src/helper/fields/Field_List.php',
        'GFPDF\\Helper\\Fields\\Field_Multiselect' => __DIR__ . '/../..' . '/src/helper/fields/Field_Multiselect.php',
        'GFPDF\\Helper\\Fields\\Field_Name' => __DIR__ . '/../..' . '/src/helper/fields/Field_Name.php',
        'GFPDF\\Helper\\Fields\\Field_Number' => __DIR__ . '/../..' . '/src/helper/fields/Field_Number.php',
        'GFPDF\\Helper\\Fields\\Field_Option' => __DIR__ . '/../..' . '/src/helper/fields/Field_Option.php',
        'GFPDF\\Helper\\Fields\\Field_Phone' => __DIR__ . '/../..' . '/src/helper/fields/Field_Phone.php',
        'GFPDF\\Helper\\Fields\\Field_Poll' => __DIR__ . '/../..' . '/src/helper/fields/Field_Poll.php',
        'GFPDF\\Helper\\Fields\\Field_Post_Category' => __DIR__ . '/../..' . '/src/helper/fields/Field_Post_Category.php',
        'GFPDF\\Helper\\Fields\\Field_Post_Content' => __DIR__ . '/../..' . '/src/helper/fields/Field_Post_Content.php',
        'GFPDF\\Helper\\Fields\\Field_Post_Custom_Field' => __DIR__ . '/../..' . '/src/helper/fields/Field_Post_Custom_Field.php',
        'GFPDF\\Helper\\Fields\\Field_Post_Excerpt' => __DIR__ . '/../..' . '/src/helper/fields/Field_Post_Excerpt.php',
        'GFPDF\\Helper\\Fields\\Field_Post_Image' => __DIR__ . '/../..' . '/src/helper/fields/Field_Post_Image.php',
        'GFPDF\\Helper\\Fields\\Field_Post_Tags' => __DIR__ . '/../..' . '/src/helper/fields/Field_Post_Tags.php',
        'GFPDF\\Helper\\Fields\\Field_Post_Title' => __DIR__ . '/../..' . '/src/helper/fields/Field_Post_Title.php',
        'GFPDF\\Helper\\Fields\\Field_Product' => __DIR__ . '/../..' . '/src/helper/fields/Field_Product.php',
        'GFPDF\\Helper\\Fields\\Field_Products' => __DIR__ . '/../..' . '/src/helper/fields/Field_Products.php',
        'GFPDF\\Helper\\Fields\\Field_Quantity' => __DIR__ . '/../..' . '/src/helper/fields/Field_Quantity.php',
        'GFPDF\\Helper\\Fields\\Field_Quiz' => __DIR__ . '/../..' . '/src/helper/fields/Field_Quiz.php',
        'GFPDF\\Helper\\Fields\\Field_Radio' => __DIR__ . '/../..' . '/src/helper/fields/Field_Radio.php',
        'GFPDF\\Helper\\Fields\\Field_Rank' => __DIR__ . '/../..' . '/src/helper/fields/Field_Rank.php',
        'GFPDF\\Helper\\Fields\\Field_Rating' => __DIR__ . '/../..' . '/src/helper/fields/Field_Rating.php',
        'GFPDF\\Helper\\Fields\\Field_Section' => __DIR__ . '/../..' . '/src/helper/fields/Field_Section.php',
        'GFPDF\\Helper\\Fields\\Field_Select' => __DIR__ . '/../..' . '/src/helper/fields/Field_Select.php',
        'GFPDF\\Helper\\Fields\\Field_Shipping' => __DIR__ . '/../..' . '/src/helper/fields/Field_Shipping.php',
        'GFPDF\\Helper\\Fields\\Field_Signature' => __DIR__ . '/../..' . '/src/helper/fields/Field_Signature.php',
        'GFPDF\\Helper\\Fields\\Field_Subtotal' => __DIR__ . '/../..' . '/src/helper/fields/Field_Subtotal.php',
        'GFPDF\\Helper\\Fields\\Field_Survey' => __DIR__ . '/../..' . '/src/helper/fields/Field_Survey.php',
        'GFPDF\\Helper\\Fields\\Field_Tax' => __DIR__ . '/../..' . '/src/helper/fields/Field_Tax.php',
        'GFPDF\\Helper\\Fields\\Field_Text' => __DIR__ . '/../..' . '/src/helper/fields/Field_Text.php',
        'GFPDF\\Helper\\Fields\\Field_Textarea' => __DIR__ . '/../..' . '/src/helper/fields/Field_Textarea.php',
        'GFPDF\\Helper\\Fields\\Field_Time' => __DIR__ . '/../..' . '/src/helper/fields/Field_Time.php',
        'GFPDF\\Helper\\Fields\\Field_Tos' => __DIR__ . '/../..' . '/src/helper/fields/Field_Tos.php',
        'GFPDF\\Helper\\Fields\\Field_Total' => __DIR__ . '/../..' . '/src/helper/fields/Field_Total.php',
        'GFPDF\\Helper\\Fields\\Field_Website' => __DIR__ . '/../..' . '/src/helper/fields/Field_Website.php',
        'GFPDF\\Helper\\Fields\\Field_v3_List' => __DIR__ . '/../..' . '/src/helper/fields/Field_v3_List.php',
        'GFPDF\\Helper\\Fields\\Field_v3_Products' => __DIR__ . '/../..' . '/src/helper/fields/Field_v3_Products.php',
        'GFPDF\\Helper\\Fields\\Field_v3_Section' => __DIR__ . '/../..' . '/src/helper/fields/Field_v3_Section.php',
        'GFPDF\\Helper\\Helper_Abstract_Addon' => __DIR__ . '/../..' . '/src/helper/abstract/Helper_Abstract_Addon.php',
        'GFPDF\\Helper\\Helper_Abstract_Controller' => __DIR__ . '/../..' . '/src/helper/abstract/Helper_Abstract_Controller.php',
        'GFPDF\\Helper\\Helper_Abstract_Field_Products' => __DIR__ . '/../..' . '/src/helper/abstract/Helper_Abstract_Field_Products.php',
        'GFPDF\\Helper\\Helper_Abstract_Fields' => __DIR__ . '/../..' . '/src/helper/abstract/Helper_Abstract_Fields.php',
        'GFPDF\\Helper\\Helper_Abstract_Form' => __DIR__ . '/../..' . '/src/helper/abstract/Helper_Abstract_Form.php',
        'GFPDF\\Helper\\Helper_Abstract_Model' => __DIR__ . '/../..' . '/src/helper/abstract/Helper_Abstract_Model.php',
        'GFPDF\\Helper\\Helper_Abstract_Options' => __DIR__ . '/../..' . '/src/helper/abstract/Helper_Abstract_Options.php',
        'GFPDF\\Helper\\Helper_Abstract_View' => __DIR__ . '/../..' . '/src/helper/abstract/Helper_Abstract_View.php',
        'GFPDF\\Helper\\Helper_Data' => __DIR__ . '/../..' . '/src/helper/Helper_Data.php',
        'GFPDF\\Helper\\Helper_Field_Container' => __DIR__ . '/../..' . '/src/helper/Helper_Field_Container.php',
        'GFPDF\\Helper\\Helper_Field_Container_Void' => __DIR__ . '/../..' . '/src/helper/Helper_Field_Container_Void.php',
        'GFPDF\\Helper\\Helper_Form' => __DIR__ . '/../..' . '/src/helper/Helper_Form.php',
        'GFPDF\\Helper\\Helper_Interface_Actions' => __DIR__ . '/../..' . '/src/helper/interface/Helper_Interface_Actions.php',
        'GFPDF\\Helper\\Helper_Interface_Config' => __DIR__ . '/../..' . '/src/helper/interface/Helper_Interface_Config.php',
        'GFPDF\\Helper\\Helper_Interface_Extension_Settings' => __DIR__ . '/../..' . '/src/helper/interface/Helper_Interface_Extension_Settings.php',
        'GFPDF\\Helper\\Helper_Interface_Filters' => __DIR__ . '/../..' . '/src/helper/interface/Helper_Interface_Filters.php',
        'GFPDF\\Helper\\Helper_Interface_Setup_TearDown' => __DIR__ . '/../..' . '/src/helper/interface/Helper_Interface_Setup_TearDown.php',
        'GFPDF\\Helper\\Helper_Logger' => __DIR__ . '/../..' . '/src/helper/Helper_Logger.php',
        'GFPDF\\Helper\\Helper_Migration' => __DIR__ . '/../..' . '/src/helper/Helper_Migration.php',
        'GFPDF\\Helper\\Helper_Misc' => __DIR__ . '/../..' . '/src/helper/Helper_Misc.php',
        'GFPDF\\Helper\\Helper_Notices' => __DIR__ . '/../..' . '/src/helper/Helper_Notices.php',
        'GFPDF\\Helper\\Helper_Options_Fields' => __DIR__ . '/../..' . '/src/helper/Helper_Options_Fields.php',
        'GFPDF\\Helper\\Helper_PDF' => __DIR__ . '/../..' . '/src/helper/Helper_PDF.php',
        'GFPDF\\Helper\\Helper_PDF_List_Table' => __DIR__ . '/../..' . '/src/helper/Helper_PDF_List_Table.php',
        'GFPDF\\Helper\\Helper_QueryPath' => __DIR__ . '/../..' . '/src/helper/Helper_QueryPath.php',
        'GFPDF\\Helper\\Helper_Singleton' => __DIR__ . '/../..' . '/src/helper/Helper_Singleton.php',
        'GFPDF\\Helper\\Helper_Templates' => __DIR__ . '/../..' . '/src/helper/Helper_Templates.php',
        'GFPDF\\Helper\\Helper_Trait_Logger' => __DIR__ . '/../..' . '/src/helper/trait/Helper_Trait_Logger.php',
        'GFPDF\\Helper\\Licensing\\EDD_SL_Plugin_Updater' => __DIR__ . '/../..' . '/src/helper/licensing/EDD_SL_Plugin_Updater.php',
        'GFPDF\\Model\\Model_Actions' => __DIR__ . '/../..' . '/src/model/Model_Actions.php',
        'GFPDF\\Model\\Model_Form_Settings' => __DIR__ . '/../..' . '/src/model/Model_Form_Settings.php',
        'GFPDF\\Model\\Model_Install' => __DIR__ . '/../..' . '/src/model/Model_Install.php',
        'GFPDF\\Model\\Model_Mergetags' => __DIR__ . '/../..' . '/src/model/Model_Mergetags.php',
        'GFPDF\\Model\\Model_PDF' => __DIR__ . '/../..' . '/src/model/Model_PDF.php',
        'GFPDF\\Model\\Model_Settings' => __DIR__ . '/../..' . '/src/model/Model_Settings.php',
        'GFPDF\\Model\\Model_Shortcodes' => __DIR__ . '/../..' . '/src/model/Model_Shortcodes.php',
        'GFPDF\\Model\\Model_Templates' => __DIR__ . '/../..' . '/src/model/Model_Templates.php',
        'GFPDF\\Model\\Model_Welcome_Screen' => __DIR__ . '/../..' . '/src/model/Model_Welcome_Screen.php',
        'GFPDF\\Router' => __DIR__ . '/../..' . '/src/bootstrap.php',
        'GFPDF\\Templates\\Config\\Blank_Slate' => __DIR__ . '/../..' . '/src/templates/config/blank-slate.php',
        'GFPDF\\Templates\\Config\\Focus_Gravity' => __DIR__ . '/../..' . '/src/templates/config/focus-gravity.php',
        'GFPDF\\Templates\\Config\\Legacy' => __DIR__ . '/../..' . '/src/templates/config/legacy.php',
        'GFPDF\\Templates\\Config\\Rubix' => __DIR__ . '/../..' . '/src/templates/config/rubix.php',
        'GFPDF\\Templates\\Config\\Zadani' => __DIR__ . '/../..' . '/src/templates/config/zadani.php',
        'GFPDF\\View\\View_Actions' => __DIR__ . '/../..' . '/src/view/View_Actions.php',
        'GFPDF\\View\\View_Form_Settings' => __DIR__ . '/../..' . '/src/view/View_Form_Settings.php',
        'GFPDF\\View\\View_PDF' => __DIR__ . '/../..' . '/src/view/View_PDF.php',
        'GFPDF\\View\\View_Settings' => __DIR__ . '/../..' . '/src/view/View_Settings.php',
        'GFPDF\\View\\View_Shortcodes' => __DIR__ . '/../..' . '/src/view/View_Shortcodes.php',
        'GFPDF\\View\\View_Welcome_Screen' => __DIR__ . '/../..' . '/src/view/View_Welcome_Screen.php',
        'INDIC' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/indic.php',
        'MYANMAR' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/myanmar.php',
        'Masterminds\\HTML5' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5.php',
        'Masterminds\\HTML5\\Elements' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Elements.php',
        'Masterminds\\HTML5\\Entities' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Entities.php',
        'Masterminds\\HTML5\\Exception' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Exception.php',
        'Masterminds\\HTML5\\InstructionProcessor' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/InstructionProcessor.php',
        'Masterminds\\HTML5\\Parser\\CharacterReference' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/CharacterReference.php',
        'Masterminds\\HTML5\\Parser\\DOMTreeBuilder' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/DOMTreeBuilder.php',
        'Masterminds\\HTML5\\Parser\\EventHandler' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/EventHandler.php',
        'Masterminds\\HTML5\\Parser\\FileInputStream' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/FileInputStream.php',
        'Masterminds\\HTML5\\Parser\\InputStream' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/InputStream.php',
        'Masterminds\\HTML5\\Parser\\ParseError' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/ParseError.php',
        'Masterminds\\HTML5\\Parser\\Scanner' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/Scanner.php',
        'Masterminds\\HTML5\\Parser\\StringInputStream' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/StringInputStream.php',
        'Masterminds\\HTML5\\Parser\\Tokenizer' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/Tokenizer.php',
        'Masterminds\\HTML5\\Parser\\TreeBuildingRules' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/TreeBuildingRules.php',
        'Masterminds\\HTML5\\Parser\\UTF8Utils' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/UTF8Utils.php',
        'Masterminds\\HTML5\\Serializer\\HTML5Entities' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Serializer/HTML5Entities.php',
        'Masterminds\\HTML5\\Serializer\\OutputRules' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Serializer/OutputRules.php',
        'Masterminds\\HTML5\\Serializer\\RulesInterface' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Serializer/RulesInterface.php',
        'Masterminds\\HTML5\\Serializer\\Traverser' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Serializer/Traverser.php',
        'Monolog\\ErrorHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/ErrorHandler.php',
        'Monolog\\Formatter\\ChromePHPFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/ChromePHPFormatter.php',
        'Monolog\\Formatter\\ElasticaFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/ElasticaFormatter.php',
        'Monolog\\Formatter\\FlowdockFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/FlowdockFormatter.php',
        'Monolog\\Formatter\\FluentdFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/FluentdFormatter.php',
        'Monolog\\Formatter\\FormatterInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/FormatterInterface.php',
        'Monolog\\Formatter\\GelfMessageFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/GelfMessageFormatter.php',
        'Monolog\\Formatter\\HtmlFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/HtmlFormatter.php',
        'Monolog\\Formatter\\JsonFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/JsonFormatter.php',
        'Monolog\\Formatter\\LineFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/LineFormatter.php',
        'Monolog\\Formatter\\LogglyFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/LogglyFormatter.php',
        'Monolog\\Formatter\\LogstashFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/LogstashFormatter.php',
        'Monolog\\Formatter\\MongoDBFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/MongoDBFormatter.php',
        'Monolog\\Formatter\\NormalizerFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/NormalizerFormatter.php',
        'Monolog\\Formatter\\ScalarFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/ScalarFormatter.php',
        'Monolog\\Formatter\\WildfireFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/WildfireFormatter.php',
        'Monolog\\Handler\\AbstractHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/AbstractHandler.php',
        'Monolog\\Handler\\AbstractProcessingHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php',
        'Monolog\\Handler\\AbstractSyslogHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/AbstractSyslogHandler.php',
        'Monolog\\Handler\\AmqpHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/AmqpHandler.php',
        'Monolog\\Handler\\BrowserConsoleHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/BrowserConsoleHandler.php',
        'Monolog\\Handler\\BufferHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/BufferHandler.php',
        'Monolog\\Handler\\ChromePHPHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ChromePHPHandler.php',
        'Monolog\\Handler\\CouchDBHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/CouchDBHandler.php',
        'Monolog\\Handler\\CubeHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/CubeHandler.php',
        'Monolog\\Handler\\Curl\\Util' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/Curl/Util.php',
        'Monolog\\Handler\\DeduplicationHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/DeduplicationHandler.php',
        'Monolog\\Handler\\DoctrineCouchDBHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/DoctrineCouchDBHandler.php',
        'Monolog\\Handler\\DynamoDbHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/DynamoDbHandler.php',
        'Monolog\\Handler\\ElasticSearchHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ElasticSearchHandler.php',
        'Monolog\\Handler\\ErrorLogHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ErrorLogHandler.php',
        'Monolog\\Handler\\FilterHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FilterHandler.php',
        'Monolog\\Handler\\FingersCrossedHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FingersCrossedHandler.php',
        'Monolog\\Handler\\FingersCrossed\\ActivationStrategyInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FingersCrossed/ActivationStrategyInterface.php',
        'Monolog\\Handler\\FingersCrossed\\ChannelLevelActivationStrategy' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FingersCrossed/ChannelLevelActivationStrategy.php',
        'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FingersCrossed/ErrorLevelActivationStrategy.php',
        'Monolog\\Handler\\FirePHPHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FirePHPHandler.php',
        'Monolog\\Handler\\FleepHookHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FleepHookHandler.php',
        'Monolog\\Handler\\FlowdockHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FlowdockHandler.php',
        'Monolog\\Handler\\GelfHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/GelfHandler.php',
        'Monolog\\Handler\\GroupHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/GroupHandler.php',
        'Monolog\\Handler\\HandlerInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/HandlerInterface.php',
        'Monolog\\Handler\\HandlerWrapper' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/HandlerWrapper.php',
        'Monolog\\Handler\\HipChatHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/HipChatHandler.php',
        'Monolog\\Handler\\IFTTTHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/IFTTTHandler.php',
        'Monolog\\Handler\\LogEntriesHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/LogEntriesHandler.php',
        'Monolog\\Handler\\LogglyHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/LogglyHandler.php',
        'Monolog\\Handler\\MailHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/MailHandler.php',
        'Monolog\\Handler\\MandrillHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/MandrillHandler.php',
        'Monolog\\Handler\\MissingExtensionException' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/MissingExtensionException.php',
        'Monolog\\Handler\\MongoDBHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/MongoDBHandler.php',
        'Monolog\\Handler\\NativeMailerHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/NativeMailerHandler.php',
        'Monolog\\Handler\\NewRelicHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/NewRelicHandler.php',
        'Monolog\\Handler\\NullHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/NullHandler.php',
        'Monolog\\Handler\\PHPConsoleHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/PHPConsoleHandler.php',
        'Monolog\\Handler\\PsrHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/PsrHandler.php',
        'Monolog\\Handler\\PushoverHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/PushoverHandler.php',
        'Monolog\\Handler\\RavenHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/RavenHandler.php',
        'Monolog\\Handler\\RedisHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/RedisHandler.php',
        'Monolog\\Handler\\RollbarHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/RollbarHandler.php',
        'Monolog\\Handler\\RotatingFileHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/RotatingFileHandler.php',
        'Monolog\\Handler\\SamplingHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SamplingHandler.php',
        'Monolog\\Handler\\SlackHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SlackHandler.php',
        'Monolog\\Handler\\SlackWebhookHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SlackWebhookHandler.php',
        'Monolog\\Handler\\Slack\\SlackRecord' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/Slack/SlackRecord.php',
        'Monolog\\Handler\\SlackbotHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SlackbotHandler.php',
        'Monolog\\Handler\\SocketHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SocketHandler.php',
        'Monolog\\Handler\\StreamHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/StreamHandler.php',
        'Monolog\\Handler\\SwiftMailerHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SwiftMailerHandler.php',
        'Monolog\\Handler\\SyslogHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SyslogHandler.php',
        'Monolog\\Handler\\SyslogUdpHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SyslogUdpHandler.php',
        'Monolog\\Handler\\SyslogUdp\\UdpSocket' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SyslogUdp/UdpSocket.php',
        'Monolog\\Handler\\TestHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/TestHandler.php',
        'Monolog\\Handler\\WhatFailureGroupHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/WhatFailureGroupHandler.php',
        'Monolog\\Handler\\ZendMonitorHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ZendMonitorHandler.php',
        'Monolog\\Logger' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Logger.php',
        'Monolog\\Processor\\GitProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/GitProcessor.php',
        'Monolog\\Processor\\IntrospectionProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/IntrospectionProcessor.php',
        'Monolog\\Processor\\MemoryPeakUsageProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/MemoryPeakUsageProcessor.php',
        'Monolog\\Processor\\MemoryProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/MemoryProcessor.php',
        'Monolog\\Processor\\MemoryUsageProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/MemoryUsageProcessor.php',
        'Monolog\\Processor\\MercurialProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/MercurialProcessor.php',
        'Monolog\\Processor\\ProcessIdProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/ProcessIdProcessor.php',
        'Monolog\\Processor\\PsrLogMessageProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php',
        'Monolog\\Processor\\TagProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/TagProcessor.php',
        'Monolog\\Processor\\UidProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/UidProcessor.php',
        'Monolog\\Processor\\WebProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/WebProcessor.php',
        'Monolog\\Registry' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Registry.php',
        'OTLdump' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/otl_dump.php',
        'PDFBarcode' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/barcode.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'QueryPath' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath.php',
        'QueryPath\\CSS\\DOMTraverser' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/CSS/DOMTraverser.php',
        'QueryPath\\CSS\\DOMTraverser\\PseudoClass' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/CSS/DOMTraverser/PseudoClass.php',
        'QueryPath\\CSS\\DOMTraverser\\Util' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/CSS/DOMTraverser/Util.php',
        'QueryPath\\CSS\\EventHandler' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/CSS/EventHandler.php',
        'QueryPath\\CSS\\InputStream' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/CSS/InputStream.php',
        'QueryPath\\CSS\\NotImplementedException' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/CSS/NotImplementedException.php',
        'QueryPath\\CSS\\ParseException' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/CSS/ParseException.php',
        'QueryPath\\CSS\\Parser' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/CSS/Parser.php',
        'QueryPath\\CSS\\QueryPathEventHandler' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/CSS/QueryPathEventHandler.php',
        'QueryPath\\CSS\\Scanner' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/CSS/Scanner.php',
        'QueryPath\\CSS\\Selector' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/CSS/Selector.php',
        'QueryPath\\CSS\\SimpleSelector' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/CSS/SimpleSelector.php',
        'QueryPath\\CSS\\Token' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/CSS/Token.php',
        'QueryPath\\CSS\\Traverser' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/CSS/Traverser.php',
        'QueryPath\\DOMQuery' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/DOMQuery.php',
        'QueryPath\\Entities' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/Entities.php',
        'QueryPath\\Exception' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/Exception.php',
        'QueryPath\\Extension' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/Extension.php',
        'QueryPath\\ExtensionRegistry' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/ExtensionRegistry.php',
        'QueryPath\\Extension\\QPXML' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/Extension/QPXML.php',
        'QueryPath\\Extension\\QPXSL' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/Extension/QPXSL.php',
        'QueryPath\\IOException' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/IOException.php',
        'QueryPath\\Options' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/Options.php',
        'QueryPath\\ParseException' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/ParseException.php',
        'QueryPath\\Query' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/Query.php',
        'QueryPath\\QueryPathIterator' => __DIR__ . '/..' . '/querypath/querypath/src/QueryPath/QueryPathIterator.php',
        'SEA' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/sea.php',
        'SVG' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/svg.php',
        'TTFontFile' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/ttfontsuni.php',
        'TTFontFile_Analysis' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/ttfontsuni_analysis.php',
        'UCDN' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/ucdn.php',
        'Upload\\Autoloader' => __DIR__ . '/..' . '/codeguy/upload/src/Upload/Autoloader.php',
        'Upload\\Exception\\UploadException' => __DIR__ . '/..' . '/codeguy/upload/src/Upload/Exception/UploadException.php',
        'Upload\\File' => __DIR__ . '/..' . '/codeguy/upload/src/Upload/File.php',
        'Upload\\Storage\\Base' => __DIR__ . '/..' . '/codeguy/upload/src/Upload/Storage/Base.php',
        'Upload\\Storage\\FileSystem' => __DIR__ . '/..' . '/codeguy/upload/src/Upload/Storage/FileSystem.php',
        'Upload\\Validation\\Base' => __DIR__ . '/..' . '/codeguy/upload/src/Upload/Validation/Base.php',
        'Upload\\Validation\\Extension' => __DIR__ . '/..' . '/codeguy/upload/src/Upload/Validation/Extension.php',
        'Upload\\Validation\\Mimetype' => __DIR__ . '/..' . '/codeguy/upload/src/Upload/Validation/Mimetype.php',
        'Upload\\Validation\\Size' => __DIR__ . '/..' . '/codeguy/upload/src/Upload/Validation/Size.php',
        'bmp' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/bmp.php',
        'cssmgr' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/cssmgr.php',
        'directw' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/directw.php',
        'fpdi_pdf_parser' => __DIR__ . '/..' . '/setasign/fpdi/fpdi_pdf_parser.php',
        'grad' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/grad.php',
        'mPDF' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/mpdf.php',
        'meter' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/meter.php',
        'mpdfform' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/mpdfform.php',
        'otl' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/otl.php',
        'pdf_context' => __DIR__ . '/..' . '/setasign/fpdi/pdf_context.php',
        'tocontents' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/tocontents.php',
        'wmf' => __DIR__ . '/..' . '/blueliquiddesigns/mpdf/classes/wmf.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitGravityPDFPlugin::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitGravityPDFPlugin::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitGravityPDFPlugin::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitGravityPDFPlugin::$classMap;

        }, null, ClassLoader::class);
    }
}