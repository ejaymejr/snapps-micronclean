<?php


abstract class BaseLabelingTemplate extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $label_description_id;


	
	protected $label_field1_id;


	
	protected $label_field2_id;


	
	protected $label_field3_id;


	
	protected $label_company_id;


	
	protected $department;


	
	protected $line1_col1;


	
	protected $line2_col1;


	
	protected $line3_col1;


	
	protected $line4_col1;


	
	protected $line1_col2;


	
	protected $line2_col2;


	
	protected $line3_col2;


	
	protected $line4_col2;


	
	protected $l1_font;


	
	protected $l1_font_size;


	
	protected $l2_font;


	
	protected $l2_font_size;


	
	protected $l3_font;


	
	protected $l3_font_size;


	
	protected $l4_font;


	
	protected $l4_font_size;


	
	protected $label_height_in_cm;


	
	protected $label_width_in_cm;


	
	protected $position;


	
	protected $garment_type;


	
	protected $color;


	
	protected $color_hex;


	
	protected $print_orientation;


	
	protected $remark;


	
	protected $l1_font_style;


	
	protected $l2_font_style;


	
	protected $l3_font_style;


	
	protected $l4_font_style;


	
	protected $l1_separator;


	
	protected $l2_separator;


	
	protected $l3_separator;


	
	protected $l4_separator;


	
	protected $created_by;


	
	protected $date_created;


	
	protected $modified_by;


	
	protected $date_modified;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getLabelDescriptionId()
	{

		return $this->label_description_id;
	}

	
	public function getLabelField1Id()
	{

		return $this->label_field1_id;
	}

	
	public function getLabelField2Id()
	{

		return $this->label_field2_id;
	}

	
	public function getLabelField3Id()
	{

		return $this->label_field3_id;
	}

	
	public function getLabelCompanyId()
	{

		return $this->label_company_id;
	}

	
	public function getDepartment()
	{

		return $this->department;
	}

	
	public function getLine1Col1()
	{

		return $this->line1_col1;
	}

	
	public function getLine2Col1()
	{

		return $this->line2_col1;
	}

	
	public function getLine3Col1()
	{

		return $this->line3_col1;
	}

	
	public function getLine4Col1()
	{

		return $this->line4_col1;
	}

	
	public function getLine1Col2()
	{

		return $this->line1_col2;
	}

	
	public function getLine2Col2()
	{

		return $this->line2_col2;
	}

	
	public function getLine3Col2()
	{

		return $this->line3_col2;
	}

	
	public function getLine4Col2()
	{

		return $this->line4_col2;
	}

	
	public function getL1Font()
	{

		return $this->l1_font;
	}

	
	public function getL1FontSize()
	{

		return $this->l1_font_size;
	}

	
	public function getL2Font()
	{

		return $this->l2_font;
	}

	
	public function getL2FontSize()
	{

		return $this->l2_font_size;
	}

	
	public function getL3Font()
	{

		return $this->l3_font;
	}

	
	public function getL3FontSize()
	{

		return $this->l3_font_size;
	}

	
	public function getL4Font()
	{

		return $this->l4_font;
	}

	
	public function getL4FontSize()
	{

		return $this->l4_font_size;
	}

	
	public function getLabelHeightInCm()
	{

		return $this->label_height_in_cm;
	}

	
	public function getLabelWidthInCm()
	{

		return $this->label_width_in_cm;
	}

	
	public function getPosition()
	{

		return $this->position;
	}

	
	public function getGarmentType()
	{

		return $this->garment_type;
	}

	
	public function getColor()
	{

		return $this->color;
	}

	
	public function getColorHex()
	{

		return $this->color_hex;
	}

	
	public function getPrintOrientation()
	{

		return $this->print_orientation;
	}

	
	public function getRemark()
	{

		return $this->remark;
	}

	
	public function getL1FontStyle()
	{

		return $this->l1_font_style;
	}

	
	public function getL2FontStyle()
	{

		return $this->l2_font_style;
	}

	
	public function getL3FontStyle()
	{

		return $this->l3_font_style;
	}

	
	public function getL4FontStyle()
	{

		return $this->l4_font_style;
	}

	
	public function getL1Separator()
	{

		return $this->l1_separator;
	}

	
	public function getL2Separator()
	{

		return $this->l2_separator;
	}

	
	public function getL3Separator()
	{

		return $this->l3_separator;
	}

	
	public function getL4Separator()
	{

		return $this->l4_separator;
	}

	
	public function getCreatedBy()
	{

		return $this->created_by;
	}

	
	public function getDateCreated($format = 'Y-m-d H:i:s')
	{

		if ($this->date_created === null || $this->date_created === '') {
			return null;
		} elseif (!is_int($this->date_created)) {
						$ts = strtotime($this->date_created);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_created] as date/time value: " . var_export($this->date_created, true));
			}
		} else {
			$ts = $this->date_created;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getModifiedBy()
	{

		return $this->modified_by;
	}

	
	public function getDateModified($format = 'Y-m-d H:i:s')
	{

		if ($this->date_modified === null || $this->date_modified === '') {
			return null;
		} elseif (!is_int($this->date_modified)) {
						$ts = strtotime($this->date_modified);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_modified] as date/time value: " . var_export($this->date_modified, true));
			}
		} else {
			$ts = $this->date_modified;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::ID;
		}

	} 
	
	public function setLabelDescriptionId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->label_description_id !== $v) {
			$this->label_description_id = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::LABEL_DESCRIPTION_ID;
		}

	} 
	
	public function setLabelField1Id($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->label_field1_id !== $v) {
			$this->label_field1_id = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::LABEL_FIELD1_ID;
		}

	} 
	
	public function setLabelField2Id($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->label_field2_id !== $v) {
			$this->label_field2_id = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::LABEL_FIELD2_ID;
		}

	} 
	
	public function setLabelField3Id($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->label_field3_id !== $v) {
			$this->label_field3_id = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::LABEL_FIELD3_ID;
		}

	} 
	
	public function setLabelCompanyId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->label_company_id !== $v) {
			$this->label_company_id = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::LABEL_COMPANY_ID;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v) {
			$this->department = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::DEPARTMENT;
		}

	} 
	
	public function setLine1Col1($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->line1_col1 !== $v) {
			$this->line1_col1 = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::LINE1_COL1;
		}

	} 
	
	public function setLine2Col1($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->line2_col1 !== $v) {
			$this->line2_col1 = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::LINE2_COL1;
		}

	} 
	
	public function setLine3Col1($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->line3_col1 !== $v) {
			$this->line3_col1 = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::LINE3_COL1;
		}

	} 
	
	public function setLine4Col1($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->line4_col1 !== $v) {
			$this->line4_col1 = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::LINE4_COL1;
		}

	} 
	
	public function setLine1Col2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->line1_col2 !== $v) {
			$this->line1_col2 = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::LINE1_COL2;
		}

	} 
	
	public function setLine2Col2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->line2_col2 !== $v) {
			$this->line2_col2 = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::LINE2_COL2;
		}

	} 
	
	public function setLine3Col2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->line3_col2 !== $v) {
			$this->line3_col2 = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::LINE3_COL2;
		}

	} 
	
	public function setLine4Col2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->line4_col2 !== $v) {
			$this->line4_col2 = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::LINE4_COL2;
		}

	} 
	
	public function setL1Font($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->l1_font !== $v) {
			$this->l1_font = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::L1_FONT;
		}

	} 
	
	public function setL1FontSize($v)
	{

		if ($this->l1_font_size !== $v) {
			$this->l1_font_size = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::L1_FONT_SIZE;
		}

	} 
	
	public function setL2Font($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->l2_font !== $v) {
			$this->l2_font = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::L2_FONT;
		}

	} 
	
	public function setL2FontSize($v)
	{

		if ($this->l2_font_size !== $v) {
			$this->l2_font_size = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::L2_FONT_SIZE;
		}

	} 
	
	public function setL3Font($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->l3_font !== $v) {
			$this->l3_font = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::L3_FONT;
		}

	} 
	
	public function setL3FontSize($v)
	{

		if ($this->l3_font_size !== $v) {
			$this->l3_font_size = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::L3_FONT_SIZE;
		}

	} 
	
	public function setL4Font($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->l4_font !== $v) {
			$this->l4_font = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::L4_FONT;
		}

	} 
	
	public function setL4FontSize($v)
	{

		if ($this->l4_font_size !== $v) {
			$this->l4_font_size = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::L4_FONT_SIZE;
		}

	} 
	
	public function setLabelHeightInCm($v)
	{

		if ($this->label_height_in_cm !== $v) {
			$this->label_height_in_cm = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::LABEL_HEIGHT_IN_CM;
		}

	} 
	
	public function setLabelWidthInCm($v)
	{

		if ($this->label_width_in_cm !== $v) {
			$this->label_width_in_cm = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::LABEL_WIDTH_IN_CM;
		}

	} 
	
	public function setPosition($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->position !== $v) {
			$this->position = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::POSITION;
		}

	} 
	
	public function setGarmentType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_type !== $v) {
			$this->garment_type = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::GARMENT_TYPE;
		}

	} 
	
	public function setColor($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->color !== $v) {
			$this->color = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::COLOR;
		}

	} 
	
	public function setColorHex($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->color_hex !== $v) {
			$this->color_hex = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::COLOR_HEX;
		}

	} 
	
	public function setPrintOrientation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->print_orientation !== $v) {
			$this->print_orientation = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::PRINT_ORIENTATION;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::REMARK;
		}

	} 
	
	public function setL1FontStyle($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->l1_font_style !== $v) {
			$this->l1_font_style = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::L1_FONT_STYLE;
		}

	} 
	
	public function setL2FontStyle($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->l2_font_style !== $v) {
			$this->l2_font_style = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::L2_FONT_STYLE;
		}

	} 
	
	public function setL3FontStyle($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->l3_font_style !== $v) {
			$this->l3_font_style = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::L3_FONT_STYLE;
		}

	} 
	
	public function setL4FontStyle($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->l4_font_style !== $v) {
			$this->l4_font_style = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::L4_FONT_STYLE;
		}

	} 
	
	public function setL1Separator($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->l1_separator !== $v) {
			$this->l1_separator = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::L1_SEPARATOR;
		}

	} 
	
	public function setL2Separator($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->l2_separator !== $v) {
			$this->l2_separator = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::L2_SEPARATOR;
		}

	} 
	
	public function setL3Separator($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->l3_separator !== $v) {
			$this->l3_separator = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::L3_SEPARATOR;
		}

	} 
	
	public function setL4Separator($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->l4_separator !== $v) {
			$this->l4_separator = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::L4_SEPARATOR;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::CREATED_BY;
		}

	} 
	
	public function setDateCreated($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_created] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_created !== $ts) {
			$this->date_created = $ts;
			$this->modifiedColumns[] = LabelingTemplatePeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = LabelingTemplatePeer::MODIFIED_BY;
		}

	} 
	
	public function setDateModified($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_modified] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_modified !== $ts) {
			$this->date_modified = $ts;
			$this->modifiedColumns[] = LabelingTemplatePeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->label_description_id = $rs->getString($startcol + 1);

			$this->label_field1_id = $rs->getString($startcol + 2);

			$this->label_field2_id = $rs->getString($startcol + 3);

			$this->label_field3_id = $rs->getString($startcol + 4);

			$this->label_company_id = $rs->getString($startcol + 5);

			$this->department = $rs->getString($startcol + 6);

			$this->line1_col1 = $rs->getString($startcol + 7);

			$this->line2_col1 = $rs->getString($startcol + 8);

			$this->line3_col1 = $rs->getString($startcol + 9);

			$this->line4_col1 = $rs->getString($startcol + 10);

			$this->line1_col2 = $rs->getString($startcol + 11);

			$this->line2_col2 = $rs->getString($startcol + 12);

			$this->line3_col2 = $rs->getString($startcol + 13);

			$this->line4_col2 = $rs->getString($startcol + 14);

			$this->l1_font = $rs->getString($startcol + 15);

			$this->l1_font_size = $rs->getFloat($startcol + 16);

			$this->l2_font = $rs->getString($startcol + 17);

			$this->l2_font_size = $rs->getFloat($startcol + 18);

			$this->l3_font = $rs->getString($startcol + 19);

			$this->l3_font_size = $rs->getFloat($startcol + 20);

			$this->l4_font = $rs->getString($startcol + 21);

			$this->l4_font_size = $rs->getFloat($startcol + 22);

			$this->label_height_in_cm = $rs->getFloat($startcol + 23);

			$this->label_width_in_cm = $rs->getFloat($startcol + 24);

			$this->position = $rs->getString($startcol + 25);

			$this->garment_type = $rs->getString($startcol + 26);

			$this->color = $rs->getString($startcol + 27);

			$this->color_hex = $rs->getString($startcol + 28);

			$this->print_orientation = $rs->getString($startcol + 29);

			$this->remark = $rs->getString($startcol + 30);

			$this->l1_font_style = $rs->getString($startcol + 31);

			$this->l2_font_style = $rs->getString($startcol + 32);

			$this->l3_font_style = $rs->getString($startcol + 33);

			$this->l4_font_style = $rs->getString($startcol + 34);

			$this->l1_separator = $rs->getString($startcol + 35);

			$this->l2_separator = $rs->getString($startcol + 36);

			$this->l3_separator = $rs->getString($startcol + 37);

			$this->l4_separator = $rs->getString($startcol + 38);

			$this->created_by = $rs->getString($startcol + 39);

			$this->date_created = $rs->getTimestamp($startcol + 40, null);

			$this->modified_by = $rs->getString($startcol + 41);

			$this->date_modified = $rs->getTimestamp($startcol + 42, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 43; 
		} catch (Exception $e) {
			throw new PropelException("Error populating LabelingTemplate object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(LabelingTemplatePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			LabelingTemplatePeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(LabelingTemplatePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			$affectedRows = $this->doSave($con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	protected function doSave($con)
	{
		$affectedRows = 0; 		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = LabelingTemplatePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += LabelingTemplatePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			$this->alreadyInSave = false;
		}
		return $affectedRows;
	} 
	
	protected $validationFailures = array();

	
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = LabelingTemplatePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = LabelingTemplatePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getLabelDescriptionId();
				break;
			case 2:
				return $this->getLabelField1Id();
				break;
			case 3:
				return $this->getLabelField2Id();
				break;
			case 4:
				return $this->getLabelField3Id();
				break;
			case 5:
				return $this->getLabelCompanyId();
				break;
			case 6:
				return $this->getDepartment();
				break;
			case 7:
				return $this->getLine1Col1();
				break;
			case 8:
				return $this->getLine2Col1();
				break;
			case 9:
				return $this->getLine3Col1();
				break;
			case 10:
				return $this->getLine4Col1();
				break;
			case 11:
				return $this->getLine1Col2();
				break;
			case 12:
				return $this->getLine2Col2();
				break;
			case 13:
				return $this->getLine3Col2();
				break;
			case 14:
				return $this->getLine4Col2();
				break;
			case 15:
				return $this->getL1Font();
				break;
			case 16:
				return $this->getL1FontSize();
				break;
			case 17:
				return $this->getL2Font();
				break;
			case 18:
				return $this->getL2FontSize();
				break;
			case 19:
				return $this->getL3Font();
				break;
			case 20:
				return $this->getL3FontSize();
				break;
			case 21:
				return $this->getL4Font();
				break;
			case 22:
				return $this->getL4FontSize();
				break;
			case 23:
				return $this->getLabelHeightInCm();
				break;
			case 24:
				return $this->getLabelWidthInCm();
				break;
			case 25:
				return $this->getPosition();
				break;
			case 26:
				return $this->getGarmentType();
				break;
			case 27:
				return $this->getColor();
				break;
			case 28:
				return $this->getColorHex();
				break;
			case 29:
				return $this->getPrintOrientation();
				break;
			case 30:
				return $this->getRemark();
				break;
			case 31:
				return $this->getL1FontStyle();
				break;
			case 32:
				return $this->getL2FontStyle();
				break;
			case 33:
				return $this->getL3FontStyle();
				break;
			case 34:
				return $this->getL4FontStyle();
				break;
			case 35:
				return $this->getL1Separator();
				break;
			case 36:
				return $this->getL2Separator();
				break;
			case 37:
				return $this->getL3Separator();
				break;
			case 38:
				return $this->getL4Separator();
				break;
			case 39:
				return $this->getCreatedBy();
				break;
			case 40:
				return $this->getDateCreated();
				break;
			case 41:
				return $this->getModifiedBy();
				break;
			case 42:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LabelingTemplatePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getLabelDescriptionId(),
			$keys[2] => $this->getLabelField1Id(),
			$keys[3] => $this->getLabelField2Id(),
			$keys[4] => $this->getLabelField3Id(),
			$keys[5] => $this->getLabelCompanyId(),
			$keys[6] => $this->getDepartment(),
			$keys[7] => $this->getLine1Col1(),
			$keys[8] => $this->getLine2Col1(),
			$keys[9] => $this->getLine3Col1(),
			$keys[10] => $this->getLine4Col1(),
			$keys[11] => $this->getLine1Col2(),
			$keys[12] => $this->getLine2Col2(),
			$keys[13] => $this->getLine3Col2(),
			$keys[14] => $this->getLine4Col2(),
			$keys[15] => $this->getL1Font(),
			$keys[16] => $this->getL1FontSize(),
			$keys[17] => $this->getL2Font(),
			$keys[18] => $this->getL2FontSize(),
			$keys[19] => $this->getL3Font(),
			$keys[20] => $this->getL3FontSize(),
			$keys[21] => $this->getL4Font(),
			$keys[22] => $this->getL4FontSize(),
			$keys[23] => $this->getLabelHeightInCm(),
			$keys[24] => $this->getLabelWidthInCm(),
			$keys[25] => $this->getPosition(),
			$keys[26] => $this->getGarmentType(),
			$keys[27] => $this->getColor(),
			$keys[28] => $this->getColorHex(),
			$keys[29] => $this->getPrintOrientation(),
			$keys[30] => $this->getRemark(),
			$keys[31] => $this->getL1FontStyle(),
			$keys[32] => $this->getL2FontStyle(),
			$keys[33] => $this->getL3FontStyle(),
			$keys[34] => $this->getL4FontStyle(),
			$keys[35] => $this->getL1Separator(),
			$keys[36] => $this->getL2Separator(),
			$keys[37] => $this->getL3Separator(),
			$keys[38] => $this->getL4Separator(),
			$keys[39] => $this->getCreatedBy(),
			$keys[40] => $this->getDateCreated(),
			$keys[41] => $this->getModifiedBy(),
			$keys[42] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = LabelingTemplatePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setLabelDescriptionId($value);
				break;
			case 2:
				$this->setLabelField1Id($value);
				break;
			case 3:
				$this->setLabelField2Id($value);
				break;
			case 4:
				$this->setLabelField3Id($value);
				break;
			case 5:
				$this->setLabelCompanyId($value);
				break;
			case 6:
				$this->setDepartment($value);
				break;
			case 7:
				$this->setLine1Col1($value);
				break;
			case 8:
				$this->setLine2Col1($value);
				break;
			case 9:
				$this->setLine3Col1($value);
				break;
			case 10:
				$this->setLine4Col1($value);
				break;
			case 11:
				$this->setLine1Col2($value);
				break;
			case 12:
				$this->setLine2Col2($value);
				break;
			case 13:
				$this->setLine3Col2($value);
				break;
			case 14:
				$this->setLine4Col2($value);
				break;
			case 15:
				$this->setL1Font($value);
				break;
			case 16:
				$this->setL1FontSize($value);
				break;
			case 17:
				$this->setL2Font($value);
				break;
			case 18:
				$this->setL2FontSize($value);
				break;
			case 19:
				$this->setL3Font($value);
				break;
			case 20:
				$this->setL3FontSize($value);
				break;
			case 21:
				$this->setL4Font($value);
				break;
			case 22:
				$this->setL4FontSize($value);
				break;
			case 23:
				$this->setLabelHeightInCm($value);
				break;
			case 24:
				$this->setLabelWidthInCm($value);
				break;
			case 25:
				$this->setPosition($value);
				break;
			case 26:
				$this->setGarmentType($value);
				break;
			case 27:
				$this->setColor($value);
				break;
			case 28:
				$this->setColorHex($value);
				break;
			case 29:
				$this->setPrintOrientation($value);
				break;
			case 30:
				$this->setRemark($value);
				break;
			case 31:
				$this->setL1FontStyle($value);
				break;
			case 32:
				$this->setL2FontStyle($value);
				break;
			case 33:
				$this->setL3FontStyle($value);
				break;
			case 34:
				$this->setL4FontStyle($value);
				break;
			case 35:
				$this->setL1Separator($value);
				break;
			case 36:
				$this->setL2Separator($value);
				break;
			case 37:
				$this->setL3Separator($value);
				break;
			case 38:
				$this->setL4Separator($value);
				break;
			case 39:
				$this->setCreatedBy($value);
				break;
			case 40:
				$this->setDateCreated($value);
				break;
			case 41:
				$this->setModifiedBy($value);
				break;
			case 42:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LabelingTemplatePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setLabelDescriptionId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setLabelField1Id($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setLabelField2Id($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setLabelField3Id($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setLabelCompanyId($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDepartment($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setLine1Col1($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setLine2Col1($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setLine3Col1($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setLine4Col1($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setLine1Col2($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setLine2Col2($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setLine3Col2($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setLine4Col2($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setL1Font($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setL1FontSize($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setL2Font($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setL2FontSize($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setL3Font($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setL3FontSize($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setL4Font($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setL4FontSize($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setLabelHeightInCm($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setLabelWidthInCm($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setPosition($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setGarmentType($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setColor($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setColorHex($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setPrintOrientation($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setRemark($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setL1FontStyle($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setL2FontStyle($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setL3FontStyle($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setL4FontStyle($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setL1Separator($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setL2Separator($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setL3Separator($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setL4Separator($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setCreatedBy($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setDateCreated($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setModifiedBy($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setDateModified($arr[$keys[42]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(LabelingTemplatePeer::DATABASE_NAME);

		if ($this->isColumnModified(LabelingTemplatePeer::ID)) $criteria->add(LabelingTemplatePeer::ID, $this->id);
		if ($this->isColumnModified(LabelingTemplatePeer::LABEL_DESCRIPTION_ID)) $criteria->add(LabelingTemplatePeer::LABEL_DESCRIPTION_ID, $this->label_description_id);
		if ($this->isColumnModified(LabelingTemplatePeer::LABEL_FIELD1_ID)) $criteria->add(LabelingTemplatePeer::LABEL_FIELD1_ID, $this->label_field1_id);
		if ($this->isColumnModified(LabelingTemplatePeer::LABEL_FIELD2_ID)) $criteria->add(LabelingTemplatePeer::LABEL_FIELD2_ID, $this->label_field2_id);
		if ($this->isColumnModified(LabelingTemplatePeer::LABEL_FIELD3_ID)) $criteria->add(LabelingTemplatePeer::LABEL_FIELD3_ID, $this->label_field3_id);
		if ($this->isColumnModified(LabelingTemplatePeer::LABEL_COMPANY_ID)) $criteria->add(LabelingTemplatePeer::LABEL_COMPANY_ID, $this->label_company_id);
		if ($this->isColumnModified(LabelingTemplatePeer::DEPARTMENT)) $criteria->add(LabelingTemplatePeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(LabelingTemplatePeer::LINE1_COL1)) $criteria->add(LabelingTemplatePeer::LINE1_COL1, $this->line1_col1);
		if ($this->isColumnModified(LabelingTemplatePeer::LINE2_COL1)) $criteria->add(LabelingTemplatePeer::LINE2_COL1, $this->line2_col1);
		if ($this->isColumnModified(LabelingTemplatePeer::LINE3_COL1)) $criteria->add(LabelingTemplatePeer::LINE3_COL1, $this->line3_col1);
		if ($this->isColumnModified(LabelingTemplatePeer::LINE4_COL1)) $criteria->add(LabelingTemplatePeer::LINE4_COL1, $this->line4_col1);
		if ($this->isColumnModified(LabelingTemplatePeer::LINE1_COL2)) $criteria->add(LabelingTemplatePeer::LINE1_COL2, $this->line1_col2);
		if ($this->isColumnModified(LabelingTemplatePeer::LINE2_COL2)) $criteria->add(LabelingTemplatePeer::LINE2_COL2, $this->line2_col2);
		if ($this->isColumnModified(LabelingTemplatePeer::LINE3_COL2)) $criteria->add(LabelingTemplatePeer::LINE3_COL2, $this->line3_col2);
		if ($this->isColumnModified(LabelingTemplatePeer::LINE4_COL2)) $criteria->add(LabelingTemplatePeer::LINE4_COL2, $this->line4_col2);
		if ($this->isColumnModified(LabelingTemplatePeer::L1_FONT)) $criteria->add(LabelingTemplatePeer::L1_FONT, $this->l1_font);
		if ($this->isColumnModified(LabelingTemplatePeer::L1_FONT_SIZE)) $criteria->add(LabelingTemplatePeer::L1_FONT_SIZE, $this->l1_font_size);
		if ($this->isColumnModified(LabelingTemplatePeer::L2_FONT)) $criteria->add(LabelingTemplatePeer::L2_FONT, $this->l2_font);
		if ($this->isColumnModified(LabelingTemplatePeer::L2_FONT_SIZE)) $criteria->add(LabelingTemplatePeer::L2_FONT_SIZE, $this->l2_font_size);
		if ($this->isColumnModified(LabelingTemplatePeer::L3_FONT)) $criteria->add(LabelingTemplatePeer::L3_FONT, $this->l3_font);
		if ($this->isColumnModified(LabelingTemplatePeer::L3_FONT_SIZE)) $criteria->add(LabelingTemplatePeer::L3_FONT_SIZE, $this->l3_font_size);
		if ($this->isColumnModified(LabelingTemplatePeer::L4_FONT)) $criteria->add(LabelingTemplatePeer::L4_FONT, $this->l4_font);
		if ($this->isColumnModified(LabelingTemplatePeer::L4_FONT_SIZE)) $criteria->add(LabelingTemplatePeer::L4_FONT_SIZE, $this->l4_font_size);
		if ($this->isColumnModified(LabelingTemplatePeer::LABEL_HEIGHT_IN_CM)) $criteria->add(LabelingTemplatePeer::LABEL_HEIGHT_IN_CM, $this->label_height_in_cm);
		if ($this->isColumnModified(LabelingTemplatePeer::LABEL_WIDTH_IN_CM)) $criteria->add(LabelingTemplatePeer::LABEL_WIDTH_IN_CM, $this->label_width_in_cm);
		if ($this->isColumnModified(LabelingTemplatePeer::POSITION)) $criteria->add(LabelingTemplatePeer::POSITION, $this->position);
		if ($this->isColumnModified(LabelingTemplatePeer::GARMENT_TYPE)) $criteria->add(LabelingTemplatePeer::GARMENT_TYPE, $this->garment_type);
		if ($this->isColumnModified(LabelingTemplatePeer::COLOR)) $criteria->add(LabelingTemplatePeer::COLOR, $this->color);
		if ($this->isColumnModified(LabelingTemplatePeer::COLOR_HEX)) $criteria->add(LabelingTemplatePeer::COLOR_HEX, $this->color_hex);
		if ($this->isColumnModified(LabelingTemplatePeer::PRINT_ORIENTATION)) $criteria->add(LabelingTemplatePeer::PRINT_ORIENTATION, $this->print_orientation);
		if ($this->isColumnModified(LabelingTemplatePeer::REMARK)) $criteria->add(LabelingTemplatePeer::REMARK, $this->remark);
		if ($this->isColumnModified(LabelingTemplatePeer::L1_FONT_STYLE)) $criteria->add(LabelingTemplatePeer::L1_FONT_STYLE, $this->l1_font_style);
		if ($this->isColumnModified(LabelingTemplatePeer::L2_FONT_STYLE)) $criteria->add(LabelingTemplatePeer::L2_FONT_STYLE, $this->l2_font_style);
		if ($this->isColumnModified(LabelingTemplatePeer::L3_FONT_STYLE)) $criteria->add(LabelingTemplatePeer::L3_FONT_STYLE, $this->l3_font_style);
		if ($this->isColumnModified(LabelingTemplatePeer::L4_FONT_STYLE)) $criteria->add(LabelingTemplatePeer::L4_FONT_STYLE, $this->l4_font_style);
		if ($this->isColumnModified(LabelingTemplatePeer::L1_SEPARATOR)) $criteria->add(LabelingTemplatePeer::L1_SEPARATOR, $this->l1_separator);
		if ($this->isColumnModified(LabelingTemplatePeer::L2_SEPARATOR)) $criteria->add(LabelingTemplatePeer::L2_SEPARATOR, $this->l2_separator);
		if ($this->isColumnModified(LabelingTemplatePeer::L3_SEPARATOR)) $criteria->add(LabelingTemplatePeer::L3_SEPARATOR, $this->l3_separator);
		if ($this->isColumnModified(LabelingTemplatePeer::L4_SEPARATOR)) $criteria->add(LabelingTemplatePeer::L4_SEPARATOR, $this->l4_separator);
		if ($this->isColumnModified(LabelingTemplatePeer::CREATED_BY)) $criteria->add(LabelingTemplatePeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(LabelingTemplatePeer::DATE_CREATED)) $criteria->add(LabelingTemplatePeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(LabelingTemplatePeer::MODIFIED_BY)) $criteria->add(LabelingTemplatePeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(LabelingTemplatePeer::DATE_MODIFIED)) $criteria->add(LabelingTemplatePeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(LabelingTemplatePeer::DATABASE_NAME);

		$criteria->add(LabelingTemplatePeer::ID, $this->id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setLabelDescriptionId($this->label_description_id);

		$copyObj->setLabelField1Id($this->label_field1_id);

		$copyObj->setLabelField2Id($this->label_field2_id);

		$copyObj->setLabelField3Id($this->label_field3_id);

		$copyObj->setLabelCompanyId($this->label_company_id);

		$copyObj->setDepartment($this->department);

		$copyObj->setLine1Col1($this->line1_col1);

		$copyObj->setLine2Col1($this->line2_col1);

		$copyObj->setLine3Col1($this->line3_col1);

		$copyObj->setLine4Col1($this->line4_col1);

		$copyObj->setLine1Col2($this->line1_col2);

		$copyObj->setLine2Col2($this->line2_col2);

		$copyObj->setLine3Col2($this->line3_col2);

		$copyObj->setLine4Col2($this->line4_col2);

		$copyObj->setL1Font($this->l1_font);

		$copyObj->setL1FontSize($this->l1_font_size);

		$copyObj->setL2Font($this->l2_font);

		$copyObj->setL2FontSize($this->l2_font_size);

		$copyObj->setL3Font($this->l3_font);

		$copyObj->setL3FontSize($this->l3_font_size);

		$copyObj->setL4Font($this->l4_font);

		$copyObj->setL4FontSize($this->l4_font_size);

		$copyObj->setLabelHeightInCm($this->label_height_in_cm);

		$copyObj->setLabelWidthInCm($this->label_width_in_cm);

		$copyObj->setPosition($this->position);

		$copyObj->setGarmentType($this->garment_type);

		$copyObj->setColor($this->color);

		$copyObj->setColorHex($this->color_hex);

		$copyObj->setPrintOrientation($this->print_orientation);

		$copyObj->setRemark($this->remark);

		$copyObj->setL1FontStyle($this->l1_font_style);

		$copyObj->setL2FontStyle($this->l2_font_style);

		$copyObj->setL3FontStyle($this->l3_font_style);

		$copyObj->setL4FontStyle($this->l4_font_style);

		$copyObj->setL1Separator($this->l1_separator);

		$copyObj->setL2Separator($this->l2_separator);

		$copyObj->setL3Separator($this->l3_separator);

		$copyObj->setL4Separator($this->l4_separator);

		$copyObj->setCreatedBy($this->created_by);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setModifiedBy($this->modified_by);

		$copyObj->setDateModified($this->date_modified);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); 
	}

	
	public function copy($deepCopy = false)
	{
				$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new LabelingTemplatePeer();
		}
		return self::$peer;
	}

} 