<?php
/**
 * TabMetadata
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;

/**
 * TabMetadata Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TabMetadata implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tabMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'anchor' => 'string',
        'anchor_case_sensitive' => 'string',
        'anchor_horizontal_alignment' => 'string',
        'anchor_ignore_if_not_present' => 'string',
        'anchor_match_whole_word' => 'string',
        'anchor_units' => 'string',
        'anchor_x_offset' => 'string',
        'anchor_y_offset' => 'string',
        'bold' => 'string',
        'conceal_value_on_document' => 'string',
        'created_by_display_name' => 'string',
        'created_by_user_id' => 'string',
        'custom_tab_id' => 'string',
        'disable_auto_size' => 'string',
        'editable' => 'string',
        'font' => 'string',
        'font_color' => 'string',
        'font_size' => 'string',
        'height' => 'string',
        'included_in_email' => 'string',
        'initial_value' => 'string',
        'italic' => 'string',
        'items' => 'string[]',
        'last_modified' => 'string',
        'last_modified_by_display_name' => 'string',
        'last_modified_by_user_id' => 'string',
        'locked' => 'string',
        'maximum_length' => 'string',
        'merge_field' => '\DocuSign\eSign\Model\MergeField',
        'name' => 'string',
        'required' => 'string',
        'scale_value' => 'string',
        'shared' => 'string',
        'tab_label' => 'string',
        'type' => 'string',
        'underline' => 'string',
        'validation_message' => 'string',
        'validation_pattern' => 'string',
        'width' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'anchor' => 'anchor',
        'anchor_case_sensitive' => 'anchorCaseSensitive',
        'anchor_horizontal_alignment' => 'anchorHorizontalAlignment',
        'anchor_ignore_if_not_present' => 'anchorIgnoreIfNotPresent',
        'anchor_match_whole_word' => 'anchorMatchWholeWord',
        'anchor_units' => 'anchorUnits',
        'anchor_x_offset' => 'anchorXOffset',
        'anchor_y_offset' => 'anchorYOffset',
        'bold' => 'bold',
        'conceal_value_on_document' => 'concealValueOnDocument',
        'created_by_display_name' => 'createdByDisplayName',
        'created_by_user_id' => 'createdByUserId',
        'custom_tab_id' => 'customTabId',
        'disable_auto_size' => 'disableAutoSize',
        'editable' => 'editable',
        'font' => 'font',
        'font_color' => 'fontColor',
        'font_size' => 'fontSize',
        'height' => 'height',
        'included_in_email' => 'includedInEmail',
        'initial_value' => 'initialValue',
        'italic' => 'italic',
        'items' => 'items',
        'last_modified' => 'lastModified',
        'last_modified_by_display_name' => 'lastModifiedByDisplayName',
        'last_modified_by_user_id' => 'lastModifiedByUserId',
        'locked' => 'locked',
        'maximum_length' => 'maximumLength',
        'merge_field' => 'mergeField',
        'name' => 'name',
        'required' => 'required',
        'scale_value' => 'scaleValue',
        'shared' => 'shared',
        'tab_label' => 'tabLabel',
        'type' => 'type',
        'underline' => 'underline',
        'validation_message' => 'validationMessage',
        'validation_pattern' => 'validationPattern',
        'width' => 'width'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'anchor' => 'setAnchor',
        'anchor_case_sensitive' => 'setAnchorCaseSensitive',
        'anchor_horizontal_alignment' => 'setAnchorHorizontalAlignment',
        'anchor_ignore_if_not_present' => 'setAnchorIgnoreIfNotPresent',
        'anchor_match_whole_word' => 'setAnchorMatchWholeWord',
        'anchor_units' => 'setAnchorUnits',
        'anchor_x_offset' => 'setAnchorXOffset',
        'anchor_y_offset' => 'setAnchorYOffset',
        'bold' => 'setBold',
        'conceal_value_on_document' => 'setConcealValueOnDocument',
        'created_by_display_name' => 'setCreatedByDisplayName',
        'created_by_user_id' => 'setCreatedByUserId',
        'custom_tab_id' => 'setCustomTabId',
        'disable_auto_size' => 'setDisableAutoSize',
        'editable' => 'setEditable',
        'font' => 'setFont',
        'font_color' => 'setFontColor',
        'font_size' => 'setFontSize',
        'height' => 'setHeight',
        'included_in_email' => 'setIncludedInEmail',
        'initial_value' => 'setInitialValue',
        'italic' => 'setItalic',
        'items' => 'setItems',
        'last_modified' => 'setLastModified',
        'last_modified_by_display_name' => 'setLastModifiedByDisplayName',
        'last_modified_by_user_id' => 'setLastModifiedByUserId',
        'locked' => 'setLocked',
        'maximum_length' => 'setMaximumLength',
        'merge_field' => 'setMergeField',
        'name' => 'setName',
        'required' => 'setRequired',
        'scale_value' => 'setScaleValue',
        'shared' => 'setShared',
        'tab_label' => 'setTabLabel',
        'type' => 'setType',
        'underline' => 'setUnderline',
        'validation_message' => 'setValidationMessage',
        'validation_pattern' => 'setValidationPattern',
        'width' => 'setWidth'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'anchor' => 'getAnchor',
        'anchor_case_sensitive' => 'getAnchorCaseSensitive',
        'anchor_horizontal_alignment' => 'getAnchorHorizontalAlignment',
        'anchor_ignore_if_not_present' => 'getAnchorIgnoreIfNotPresent',
        'anchor_match_whole_word' => 'getAnchorMatchWholeWord',
        'anchor_units' => 'getAnchorUnits',
        'anchor_x_offset' => 'getAnchorXOffset',
        'anchor_y_offset' => 'getAnchorYOffset',
        'bold' => 'getBold',
        'conceal_value_on_document' => 'getConcealValueOnDocument',
        'created_by_display_name' => 'getCreatedByDisplayName',
        'created_by_user_id' => 'getCreatedByUserId',
        'custom_tab_id' => 'getCustomTabId',
        'disable_auto_size' => 'getDisableAutoSize',
        'editable' => 'getEditable',
        'font' => 'getFont',
        'font_color' => 'getFontColor',
        'font_size' => 'getFontSize',
        'height' => 'getHeight',
        'included_in_email' => 'getIncludedInEmail',
        'initial_value' => 'getInitialValue',
        'italic' => 'getItalic',
        'items' => 'getItems',
        'last_modified' => 'getLastModified',
        'last_modified_by_display_name' => 'getLastModifiedByDisplayName',
        'last_modified_by_user_id' => 'getLastModifiedByUserId',
        'locked' => 'getLocked',
        'maximum_length' => 'getMaximumLength',
        'merge_field' => 'getMergeField',
        'name' => 'getName',
        'required' => 'getRequired',
        'scale_value' => 'getScaleValue',
        'shared' => 'getShared',
        'tab_label' => 'getTabLabel',
        'type' => 'getType',
        'underline' => 'getUnderline',
        'validation_message' => 'getValidationMessage',
        'validation_pattern' => 'getValidationPattern',
        'width' => 'getWidth'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['anchor'] = isset($data['anchor']) ? $data['anchor'] : null;
        $this->container['anchor_case_sensitive'] = isset($data['anchor_case_sensitive']) ? $data['anchor_case_sensitive'] : null;
        $this->container['anchor_horizontal_alignment'] = isset($data['anchor_horizontal_alignment']) ? $data['anchor_horizontal_alignment'] : null;
        $this->container['anchor_ignore_if_not_present'] = isset($data['anchor_ignore_if_not_present']) ? $data['anchor_ignore_if_not_present'] : null;
        $this->container['anchor_match_whole_word'] = isset($data['anchor_match_whole_word']) ? $data['anchor_match_whole_word'] : null;
        $this->container['anchor_units'] = isset($data['anchor_units']) ? $data['anchor_units'] : null;
        $this->container['anchor_x_offset'] = isset($data['anchor_x_offset']) ? $data['anchor_x_offset'] : null;
        $this->container['anchor_y_offset'] = isset($data['anchor_y_offset']) ? $data['anchor_y_offset'] : null;
        $this->container['bold'] = isset($data['bold']) ? $data['bold'] : null;
        $this->container['conceal_value_on_document'] = isset($data['conceal_value_on_document']) ? $data['conceal_value_on_document'] : null;
        $this->container['created_by_display_name'] = isset($data['created_by_display_name']) ? $data['created_by_display_name'] : null;
        $this->container['created_by_user_id'] = isset($data['created_by_user_id']) ? $data['created_by_user_id'] : null;
        $this->container['custom_tab_id'] = isset($data['custom_tab_id']) ? $data['custom_tab_id'] : null;
        $this->container['disable_auto_size'] = isset($data['disable_auto_size']) ? $data['disable_auto_size'] : null;
        $this->container['editable'] = isset($data['editable']) ? $data['editable'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['font_color'] = isset($data['font_color']) ? $data['font_color'] : null;
        $this->container['font_size'] = isset($data['font_size']) ? $data['font_size'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['included_in_email'] = isset($data['included_in_email']) ? $data['included_in_email'] : null;
        $this->container['initial_value'] = isset($data['initial_value']) ? $data['initial_value'] : null;
        $this->container['italic'] = isset($data['italic']) ? $data['italic'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['last_modified_by_display_name'] = isset($data['last_modified_by_display_name']) ? $data['last_modified_by_display_name'] : null;
        $this->container['last_modified_by_user_id'] = isset($data['last_modified_by_user_id']) ? $data['last_modified_by_user_id'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['maximum_length'] = isset($data['maximum_length']) ? $data['maximum_length'] : null;
        $this->container['merge_field'] = isset($data['merge_field']) ? $data['merge_field'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['scale_value'] = isset($data['scale_value']) ? $data['scale_value'] : null;
        $this->container['shared'] = isset($data['shared']) ? $data['shared'] : null;
        $this->container['tab_label'] = isset($data['tab_label']) ? $data['tab_label'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['underline'] = isset($data['underline']) ? $data['underline'] : null;
        $this->container['validation_message'] = isset($data['validation_message']) ? $data['validation_message'] : null;
        $this->container['validation_pattern'] = isset($data['validation_pattern']) ? $data['validation_pattern'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets anchor
     * @return string
     */
    public function getAnchor()
    {
        return $this->container['anchor'];
    }

    /**
     * Sets anchor
     * @param string $anchor An optional string that is used to auto-match tabs to strings located in the documents of an envelope.
     * @return $this
     */
    public function setAnchor($anchor)
    {
        $this->container['anchor'] = $anchor;

        return $this;
    }

    /**
     * Gets anchor_case_sensitive
     * @return string
     */
    public function getAnchorCaseSensitive()
    {
        return $this->container['anchor_case_sensitive'];
    }

    /**
     * Sets anchor_case_sensitive
     * @param string $anchor_case_sensitive When set to **true**, the anchor string does not consider case when matching strings in the document. The default value is **true**.
     * @return $this
     */
    public function setAnchorCaseSensitive($anchor_case_sensitive)
    {
        $this->container['anchor_case_sensitive'] = $anchor_case_sensitive;

        return $this;
    }

    /**
     * Gets anchor_horizontal_alignment
     * @return string
     */
    public function getAnchorHorizontalAlignment()
    {
        return $this->container['anchor_horizontal_alignment'];
    }

    /**
     * Sets anchor_horizontal_alignment
     * @param string $anchor_horizontal_alignment Specifies the alignment of anchor tabs with anchor strings. Possible values are **left** or **right**. The default value is **left**.
     * @return $this
     */
    public function setAnchorHorizontalAlignment($anchor_horizontal_alignment)
    {
        $this->container['anchor_horizontal_alignment'] = $anchor_horizontal_alignment;

        return $this;
    }

    /**
     * Gets anchor_ignore_if_not_present
     * @return string
     */
    public function getAnchorIgnoreIfNotPresent()
    {
        return $this->container['anchor_ignore_if_not_present'];
    }

    /**
     * Sets anchor_ignore_if_not_present
     * @param string $anchor_ignore_if_not_present When set to **true**, this tab is ignored if anchorString is not found in the document.
     * @return $this
     */
    public function setAnchorIgnoreIfNotPresent($anchor_ignore_if_not_present)
    {
        $this->container['anchor_ignore_if_not_present'] = $anchor_ignore_if_not_present;

        return $this;
    }

    /**
     * Gets anchor_match_whole_word
     * @return string
     */
    public function getAnchorMatchWholeWord()
    {
        return $this->container['anchor_match_whole_word'];
    }

    /**
     * Sets anchor_match_whole_word
     * @param string $anchor_match_whole_word When set to **true**, the anchor string in this tab matches whole words only (strings embedded in other strings are ignored.) The default value is **true**.
     * @return $this
     */
    public function setAnchorMatchWholeWord($anchor_match_whole_word)
    {
        $this->container['anchor_match_whole_word'] = $anchor_match_whole_word;

        return $this;
    }

    /**
     * Gets anchor_units
     * @return string
     */
    public function getAnchorUnits()
    {
        return $this->container['anchor_units'];
    }

    /**
     * Sets anchor_units
     * @param string $anchor_units Specifies units of the X and Y offset. Units could be pixels, millimeters, centimeters, or inches.
     * @return $this
     */
    public function setAnchorUnits($anchor_units)
    {
        $this->container['anchor_units'] = $anchor_units;

        return $this;
    }

    /**
     * Gets anchor_x_offset
     * @return string
     */
    public function getAnchorXOffset()
    {
        return $this->container['anchor_x_offset'];
    }

    /**
     * Sets anchor_x_offset
     * @param string $anchor_x_offset Specifies the X axis location of the tab, in achorUnits, relative to the anchorString.
     * @return $this
     */
    public function setAnchorXOffset($anchor_x_offset)
    {
        $this->container['anchor_x_offset'] = $anchor_x_offset;

        return $this;
    }

    /**
     * Gets anchor_y_offset
     * @return string
     */
    public function getAnchorYOffset()
    {
        return $this->container['anchor_y_offset'];
    }

    /**
     * Sets anchor_y_offset
     * @param string $anchor_y_offset Specifies the Y axis location of the tab, in achorUnits, relative to the anchorString.
     * @return $this
     */
    public function setAnchorYOffset($anchor_y_offset)
    {
        $this->container['anchor_y_offset'] = $anchor_y_offset;

        return $this;
    }

    /**
     * Gets bold
     * @return string
     */
    public function getBold()
    {
        return $this->container['bold'];
    }

    /**
     * Sets bold
     * @param string $bold When set to **true**, the information in the tab is bold.
     * @return $this
     */
    public function setBold($bold)
    {
        $this->container['bold'] = $bold;

        return $this;
    }

    /**
     * Gets conceal_value_on_document
     * @return string
     */
    public function getConcealValueOnDocument()
    {
        return $this->container['conceal_value_on_document'];
    }

    /**
     * Sets conceal_value_on_document
     * @param string $conceal_value_on_document When set to **true**, the field appears normally while the recipient is adding or modifying the information in the field, but the data is not visible (the characters are hidden by asterisks) to any other signer or the sender.  When an envelope is completed the information is available to the sender through the Form Data link in the DocuSign Console.  This setting applies only to text boxes and does not affect list boxes, radio buttons, or check boxes.
     * @return $this
     */
    public function setConcealValueOnDocument($conceal_value_on_document)
    {
        $this->container['conceal_value_on_document'] = $conceal_value_on_document;

        return $this;
    }

    /**
     * Gets created_by_display_name
     * @return string
     */
    public function getCreatedByDisplayName()
    {
        return $this->container['created_by_display_name'];
    }

    /**
     * Sets created_by_display_name
     * @param string $created_by_display_name The user name of the DocuSign user who created this object.
     * @return $this
     */
    public function setCreatedByDisplayName($created_by_display_name)
    {
        $this->container['created_by_display_name'] = $created_by_display_name;

        return $this;
    }

    /**
     * Gets created_by_user_id
     * @return string
     */
    public function getCreatedByUserId()
    {
        return $this->container['created_by_user_id'];
    }

    /**
     * Sets created_by_user_id
     * @param string $created_by_user_id The userId of the DocuSign user who created this object.
     * @return $this
     */
    public function setCreatedByUserId($created_by_user_id)
    {
        $this->container['created_by_user_id'] = $created_by_user_id;

        return $this;
    }

    /**
     * Gets custom_tab_id
     * @return string
     */
    public function getCustomTabId()
    {
        return $this->container['custom_tab_id'];
    }

    /**
     * Sets custom_tab_id
     * @param string $custom_tab_id The DocuSign generated custom tab ID for the custom tab to be applied. This can only be used when adding new tabs for a recipient. When used, the new tab inherits all the custom tab properties.
     * @return $this
     */
    public function setCustomTabId($custom_tab_id)
    {
        $this->container['custom_tab_id'] = $custom_tab_id;

        return $this;
    }

    /**
     * Gets disable_auto_size
     * @return string
     */
    public function getDisableAutoSize()
    {
        return $this->container['disable_auto_size'];
    }

    /**
     * Sets disable_auto_size
     * @param string $disable_auto_size When set to **true**, disables the auto sizing of single line text boxes in the signing screen when the signer enters data. If disabled users will only be able enter as much data as the text box can hold. By default this is false. This property only affects single line text boxes.
     * @return $this
     */
    public function setDisableAutoSize($disable_auto_size)
    {
        $this->container['disable_auto_size'] = $disable_auto_size;

        return $this;
    }

    /**
     * Gets editable
     * @return string
     */
    public function getEditable()
    {
        return $this->container['editable'];
    }

    /**
     * Sets editable
     * @param string $editable When set to **true**, the custom tab is editable. Otherwise the custom tab cannot be modified.
     * @return $this
     */
    public function setEditable($editable)
    {
        $this->container['editable'] = $editable;

        return $this;
    }

    /**
     * Gets font
     * @return string
     */
    public function getFont()
    {
        return $this->container['font'];
    }

    /**
     * Sets font
     * @param string $font The font to be used for the tab value. Supported Fonts: Arial, Arial, ArialNarrow, Calibri, CourierNew, Garamond, Georgia, Helvetica,   LucidaConsole, Tahoma, TimesNewRoman, Trebuchet, Verdana, MSGothic, MSMincho, Default.
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;

        return $this;
    }

    /**
     * Gets font_color
     * @return string
     */
    public function getFontColor()
    {
        return $this->container['font_color'];
    }

    /**
     * Sets font_color
     * @param string $font_color The font color used for the information in the tab.  Possible values are: Black, BrightBlue, BrightRed, DarkGreen, DarkRed, Gold, Green, NavyBlue, Purple, or White.
     * @return $this
     */
    public function setFontColor($font_color)
    {
        $this->container['font_color'] = $font_color;

        return $this;
    }

    /**
     * Gets font_size
     * @return string
     */
    public function getFontSize()
    {
        return $this->container['font_size'];
    }

    /**
     * Sets font_size
     * @param string $font_size The font size used for the information in the tab.  Possible values are: Size7, Size8, Size9, Size10, Size11, Size12, Size14, Size16, Size18, Size20, Size22, Size24, Size26, Size28, Size36, Size48, or Size72.
     * @return $this
     */
    public function setFontSize($font_size)
    {
        $this->container['font_size'] = $font_size;

        return $this;
    }

    /**
     * Gets height
     * @return string
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     * @param string $height Height of the tab in pixels.
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets included_in_email
     * @return string
     */
    public function getIncludedInEmail()
    {
        return $this->container['included_in_email'];
    }

    /**
     * Sets included_in_email
     * @param string $included_in_email When set to **true**, the tab is included in e-mails related to the envelope on which it exists. This applies to only specific tabs.
     * @return $this
     */
    public function setIncludedInEmail($included_in_email)
    {
        $this->container['included_in_email'] = $included_in_email;

        return $this;
    }

    /**
     * Gets initial_value
     * @return string
     */
    public function getInitialValue()
    {
        return $this->container['initial_value'];
    }

    /**
     * Sets initial_value
     * @param string $initial_value The original value of the tab.
     * @return $this
     */
    public function setInitialValue($initial_value)
    {
        $this->container['initial_value'] = $initial_value;

        return $this;
    }

    /**
     * Gets italic
     * @return string
     */
    public function getItalic()
    {
        return $this->container['italic'];
    }

    /**
     * Sets italic
     * @param string $italic When set to **true**, the information in the tab is italic.
     * @return $this
     */
    public function setItalic($italic)
    {
        $this->container['italic'] = $italic;

        return $this;
    }

    /**
     * Gets items
     * @return string[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param string[] $items If the tab is a list, this represents the values that are possible for the tab.
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets last_modified
     * @return string
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     * @param string $last_modified The UTC DateTime this object was last modified. This is in ISO8601 format.
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets last_modified_by_display_name
     * @return string
     */
    public function getLastModifiedByDisplayName()
    {
        return $this->container['last_modified_by_display_name'];
    }

    /**
     * Sets last_modified_by_display_name
     * @param string $last_modified_by_display_name The User Name of the DocuSign user who last modified this object.
     * @return $this
     */
    public function setLastModifiedByDisplayName($last_modified_by_display_name)
    {
        $this->container['last_modified_by_display_name'] = $last_modified_by_display_name;

        return $this;
    }

    /**
     * Gets last_modified_by_user_id
     * @return string
     */
    public function getLastModifiedByUserId()
    {
        return $this->container['last_modified_by_user_id'];
    }

    /**
     * Sets last_modified_by_user_id
     * @param string $last_modified_by_user_id The userId of the DocuSign user who last modified this object.
     * @return $this
     */
    public function setLastModifiedByUserId($last_modified_by_user_id)
    {
        $this->container['last_modified_by_user_id'] = $last_modified_by_user_id;

        return $this;
    }

    /**
     * Gets locked
     * @return string
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     * @param string $locked When set to **true**, the signer cannot change the data of the custom tab.
     * @return $this
     */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;

        return $this;
    }

    /**
     * Gets maximum_length
     * @return string
     */
    public function getMaximumLength()
    {
        return $this->container['maximum_length'];
    }

    /**
     * Sets maximum_length
     * @param string $maximum_length The maximum number of entry characters supported by the custom tab.
     * @return $this
     */
    public function setMaximumLength($maximum_length)
    {
        $this->container['maximum_length'] = $maximum_length;

        return $this;
    }

    /**
     * Gets merge_field
     * @return \DocuSign\eSign\Model\MergeField
     */
    public function getMergeField()
    {
        return $this->container['merge_field'];
    }

    /**
     * Sets merge_field
     * @param \DocuSign\eSign\Model\MergeField $merge_field
     * @return $this
     */
    public function setMergeField($merge_field)
    {
        $this->container['merge_field'] = $merge_field;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets required
     * @return string
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     * @param string $required When set to **true**, the signer is required to fill out this tab
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets scale_value
     * @return string
     */
    public function getScaleValue()
    {
        return $this->container['scale_value'];
    }

    /**
     * Sets scale_value
     * @param string $scale_value 
     * @return $this
     */
    public function setScaleValue($scale_value)
    {
        $this->container['scale_value'] = $scale_value;

        return $this;
    }

    /**
     * Gets shared
     * @return string
     */
    public function getShared()
    {
        return $this->container['shared'];
    }

    /**
     * Sets shared
     * @param string $shared When set to **true**, this custom tab is shared.
     * @return $this
     */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;

        return $this;
    }

    /**
     * Gets tab_label
     * @return string
     */
    public function getTabLabel()
    {
        return $this->container['tab_label'];
    }

    /**
     * Sets tab_label
     * @param string $tab_label The label string associated with the tab.
     * @return $this
     */
    public function setTabLabel($tab_label)
    {
        $this->container['tab_label'] = $tab_label;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The type of this tab. Values are: Approve, CheckBox, Company, Date, DateSigned, Decline, Email, EmailAddress, EnvelopeId, FirstName, Formula, FullName, InitialHere, InitialHereOptional, LastName, List, Note, Number, Radio, SignerAttachment, SignHere, SignHereOptional, Ssn, Text, Title, Zip5, or Zip5Dash4.
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets underline
     * @return string
     */
    public function getUnderline()
    {
        return $this->container['underline'];
    }

    /**
     * Sets underline
     * @param string $underline When set to **true**, the information in the tab is underlined.
     * @return $this
     */
    public function setUnderline($underline)
    {
        $this->container['underline'] = $underline;

        return $this;
    }

    /**
     * Gets validation_message
     * @return string
     */
    public function getValidationMessage()
    {
        return $this->container['validation_message'];
    }

    /**
     * Sets validation_message
     * @param string $validation_message The message displayed if the custom tab fails input validation (either custom of embedded).
     * @return $this
     */
    public function setValidationMessage($validation_message)
    {
        $this->container['validation_message'] = $validation_message;

        return $this;
    }

    /**
     * Gets validation_pattern
     * @return string
     */
    public function getValidationPattern()
    {
        return $this->container['validation_pattern'];
    }

    /**
     * Sets validation_pattern
     * @param string $validation_pattern A regular expressionn used to validate input for the tab.
     * @return $this
     */
    public function setValidationPattern($validation_pattern)
    {
        $this->container['validation_pattern'] = $validation_pattern;

        return $this;
    }

    /**
     * Gets width
     * @return string
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     * @param string $width Width of the tab in pixels.
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this));
    }
}


