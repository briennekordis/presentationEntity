<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from presentation/xml/schema/CRM/Presentation/PresentationAuthor.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:37f2b0e77a89b4e83e49a557aab1facb)
 */
use CRM_Presentation_ExtensionUtil as E;

/**
 * Database access object for the PresentationAuthor entity.
 */
class CRM_PresentationAuthor_DAO_PresentationAuthor extends CRM_Core_DAO {
  const EXT = E::LONG_NAME;
  const TABLE_ADDED = '';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_presentation_author';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Unique PresentationAuthor ID
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $id;

  /**
   * FK to Contact
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $contact_id;

  /**
   * FK to Presentation
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $presentation_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_presentation_author';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? E::ts('Presentation Authors') : E::ts('Presentation Author');
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contact_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'presentation_id', 'civicrm_presentation', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('Unique PresentationAuthor ID'),
          'required' => TRUE,
          'where' => 'civicrm_presentation_author.id',
          'table_name' => 'civicrm_presentation_author',
          'entity' => 'PresentationAuthor',
          'bao' => 'CRM_PresentationAuthor_DAO_PresentationAuthor',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => NULL,
        ],
        'contact_id' => [
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('FK to Contact'),
          'where' => 'civicrm_presentation_author.contact_id',
          'table_name' => 'civicrm_presentation_author',
          'entity' => 'PresentationAuthor',
          'bao' => 'CRM_PresentationAuthor_DAO_PresentationAuthor',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'html' => [
            'type' => 'EntityRef',
            'label' => E::ts("Author"),
          ],
          'add' => NULL,
        ],
        'presentation_id' => [
          'name' => 'presentation_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('FK to Presentation'),
          'where' => 'civicrm_presentation_author.presentation_id',
          'table_name' => 'civicrm_presentation_author',
          'entity' => 'PresentationAuthor',
          'bao' => 'CRM_PresentationAuthor_DAO_PresentationAuthor',
          'localizable' => 0,
          'FKClassName' => 'CRM_Presentation_DAO_Presentation',
          'html' => [
            'type' => 'EntityRef',
            'label' => E::ts("Presentation"),
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_presentation',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          ],
          'add' => NULL,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'presentation_author', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'presentation_author', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
