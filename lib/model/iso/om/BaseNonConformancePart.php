<?php


abstract class BaseNonConformancePart extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date;


	
	protected $customer;


	
	protected $company;


	
	protected $product_type;


	
	protected $part;


	
	protected $quantity;


	
	protected $cost;


	
	protected $vpc;


	
	protected $adhesive_top;


	
	protected $particle_count;


	
	protected $crack_top;


	
	protected $after_drying;


	
	protected $ddi;


	
	protected $missing_part;


	
	protected $over_date_top;


	
	protected $over_punch_top;


	
	protected $stain;


	
	protected $sticker_top;


	
	protected $torn_broken;


	
	protected $date_created;


	
	protected $created_by;


	
	protected $date_modified;


	
	protected $modified_by;


	
	protected $over_date_bottom;


	
	protected $over_date_body;


	
	protected $over_punch_bottom;


	
	protected $over_punch_body;


	
	protected $mixed_part_bottom;


	
	protected $mixed_part_body;


	
	protected $mixed_part_top;


	
	protected $crack_body;


	
	protected $crack_bottom;


	
	protected $scratches_top;


	
	protected $scratches_body;


	
	protected $scratches_bottom;


	
	protected $worpage_top;


	
	protected $worpage_body;


	
	protected $worpage_bottom;


	
	protected $stain_top;


	
	protected $stain_body;


	
	protected $stain_bottom;


	
	protected $sticker_bottom;


	
	protected $sticker_body;


	
	protected $adhesive_body;


	
	protected $adhesive_bottom;


	
	protected $moulding_defect_top;


	
	protected $moulding_defect_bottom;


	
	protected $moulding_defect_body;


	
	protected $hk_drum_fail;


	
	protected $chips_top;


	
	protected $chips_body;


	
	protected $chips_bottom;


	
	protected $dryer_1_temperature;


	
	protected $dryer_1_particle;


	
	protected $dryer_2_temperature;


	
	protected $dryer_2_particle;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getDate($format = 'Y-m-d')
	{

		if ($this->date === null || $this->date === '') {
			return null;
		} elseif (!is_int($this->date)) {
						$ts = strtotime($this->date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date] as date/time value: " . var_export($this->date, true));
			}
		} else {
			$ts = $this->date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getCustomer()
	{

		return $this->customer;
	}

	
	public function getCompany()
	{

		return $this->company;
	}

	
	public function getProductType()
	{

		return $this->product_type;
	}

	
	public function getPart()
	{

		return $this->part;
	}

	
	public function getQuantity()
	{

		return $this->quantity;
	}

	
	public function getCost()
	{

		return $this->cost;
	}

	
	public function getVpc()
	{

		return $this->vpc;
	}

	
	public function getAdhesiveTop()
	{

		return $this->adhesive_top;
	}

	
	public function getParticleCount()
	{

		return $this->particle_count;
	}

	
	public function getCrackTop()
	{

		return $this->crack_top;
	}

	
	public function getAfterDrying()
	{

		return $this->after_drying;
	}

	
	public function getDdi()
	{

		return $this->ddi;
	}

	
	public function getMissingPart()
	{

		return $this->missing_part;
	}

	
	public function getOverDateTop()
	{

		return $this->over_date_top;
	}

	
	public function getOverPunchTop()
	{

		return $this->over_punch_top;
	}

	
	public function getStain()
	{

		return $this->stain;
	}

	
	public function getStickerTop()
	{

		return $this->sticker_top;
	}

	
	public function getTornBroken()
	{

		return $this->torn_broken;
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

	
	public function getCreatedBy()
	{

		return $this->created_by;
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

	
	public function getModifiedBy()
	{

		return $this->modified_by;
	}

	
	public function getOverDateBottom()
	{

		return $this->over_date_bottom;
	}

	
	public function getOverDateBody()
	{

		return $this->over_date_body;
	}

	
	public function getOverPunchBottom()
	{

		return $this->over_punch_bottom;
	}

	
	public function getOverPunchBody()
	{

		return $this->over_punch_body;
	}

	
	public function getMixedPartBottom()
	{

		return $this->mixed_part_bottom;
	}

	
	public function getMixedPartBody()
	{

		return $this->mixed_part_body;
	}

	
	public function getMixedPartTop()
	{

		return $this->mixed_part_top;
	}

	
	public function getCrackBody()
	{

		return $this->crack_body;
	}

	
	public function getCrackBottom()
	{

		return $this->crack_bottom;
	}

	
	public function getScratchesTop()
	{

		return $this->scratches_top;
	}

	
	public function getScratchesBody()
	{

		return $this->scratches_body;
	}

	
	public function getScratchesBottom()
	{

		return $this->scratches_bottom;
	}

	
	public function getWorpageTop()
	{

		return $this->worpage_top;
	}

	
	public function getWorpageBody()
	{

		return $this->worpage_body;
	}

	
	public function getWorpageBottom()
	{

		return $this->worpage_bottom;
	}

	
	public function getStainTop()
	{

		return $this->stain_top;
	}

	
	public function getStainBody()
	{

		return $this->stain_body;
	}

	
	public function getStainBottom()
	{

		return $this->stain_bottom;
	}

	
	public function getStickerBottom()
	{

		return $this->sticker_bottom;
	}

	
	public function getStickerBody()
	{

		return $this->sticker_body;
	}

	
	public function getAdhesiveBody()
	{

		return $this->adhesive_body;
	}

	
	public function getAdhesiveBottom()
	{

		return $this->adhesive_bottom;
	}

	
	public function getMouldingDefectTop()
	{

		return $this->moulding_defect_top;
	}

	
	public function getMouldingDefectBottom()
	{

		return $this->moulding_defect_bottom;
	}

	
	public function getMouldingDefectBody()
	{

		return $this->moulding_defect_body;
	}

	
	public function getHkDrumFail()
	{

		return $this->hk_drum_fail;
	}

	
	public function getChipsTop()
	{

		return $this->chips_top;
	}

	
	public function getChipsBody()
	{

		return $this->chips_body;
	}

	
	public function getChipsBottom()
	{

		return $this->chips_bottom;
	}

	
	public function getDryer1Temperature()
	{

		return $this->dryer_1_temperature;
	}

	
	public function getDryer1Particle()
	{

		return $this->dryer_1_particle;
	}

	
	public function getDryer2Temperature()
	{

		return $this->dryer_2_temperature;
	}

	
	public function getDryer2Particle()
	{

		return $this->dryer_2_particle;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::ID;
		}

	} 
	
	public function setDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date !== $ts) {
			$this->date = $ts;
			$this->modifiedColumns[] = NonConformancePartPeer::DATE;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v) {
			$this->customer = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::CUSTOMER;
		}

	} 
	
	public function setCompany($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->company !== $v) {
			$this->company = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::COMPANY;
		}

	} 
	
	public function setProductType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->product_type !== $v) {
			$this->product_type = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::PRODUCT_TYPE;
		}

	} 
	
	public function setPart($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->part !== $v) {
			$this->part = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::PART;
		}

	} 
	
	public function setQuantity($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->quantity !== $v) {
			$this->quantity = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::QUANTITY;
		}

	} 
	
	public function setCost($v)
	{

		if ($this->cost !== $v) {
			$this->cost = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::COST;
		}

	} 
	
	public function setVpc($v)
	{

		if ($this->vpc !== $v) {
			$this->vpc = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::VPC;
		}

	} 
	
	public function setAdhesiveTop($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->adhesive_top !== $v) {
			$this->adhesive_top = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::ADHESIVE_TOP;
		}

	} 
	
	public function setParticleCount($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->particle_count !== $v) {
			$this->particle_count = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::PARTICLE_COUNT;
		}

	} 
	
	public function setCrackTop($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->crack_top !== $v) {
			$this->crack_top = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::CRACK_TOP;
		}

	} 
	
	public function setAfterDrying($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->after_drying !== $v) {
			$this->after_drying = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::AFTER_DRYING;
		}

	} 
	
	public function setDdi($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ddi !== $v) {
			$this->ddi = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::DDI;
		}

	} 
	
	public function setMissingPart($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->missing_part !== $v) {
			$this->missing_part = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::MISSING_PART;
		}

	} 
	
	public function setOverDateTop($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->over_date_top !== $v) {
			$this->over_date_top = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::OVER_DATE_TOP;
		}

	} 
	
	public function setOverPunchTop($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->over_punch_top !== $v) {
			$this->over_punch_top = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::OVER_PUNCH_TOP;
		}

	} 
	
	public function setStain($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->stain !== $v) {
			$this->stain = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::STAIN;
		}

	} 
	
	public function setStickerTop($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sticker_top !== $v) {
			$this->sticker_top = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::STICKER_TOP;
		}

	} 
	
	public function setTornBroken($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->torn_broken !== $v) {
			$this->torn_broken = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::TORN_BROKEN;
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
			$this->modifiedColumns[] = NonConformancePartPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::CREATED_BY;
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
			$this->modifiedColumns[] = NonConformancePartPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::MODIFIED_BY;
		}

	} 
	
	public function setOverDateBottom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->over_date_bottom !== $v) {
			$this->over_date_bottom = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::OVER_DATE_BOTTOM;
		}

	} 
	
	public function setOverDateBody($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->over_date_body !== $v) {
			$this->over_date_body = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::OVER_DATE_BODY;
		}

	} 
	
	public function setOverPunchBottom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->over_punch_bottom !== $v) {
			$this->over_punch_bottom = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::OVER_PUNCH_BOTTOM;
		}

	} 
	
	public function setOverPunchBody($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->over_punch_body !== $v) {
			$this->over_punch_body = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::OVER_PUNCH_BODY;
		}

	} 
	
	public function setMixedPartBottom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->mixed_part_bottom !== $v) {
			$this->mixed_part_bottom = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::MIXED_PART_BOTTOM;
		}

	} 
	
	public function setMixedPartBody($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->mixed_part_body !== $v) {
			$this->mixed_part_body = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::MIXED_PART_BODY;
		}

	} 
	
	public function setMixedPartTop($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->mixed_part_top !== $v) {
			$this->mixed_part_top = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::MIXED_PART_TOP;
		}

	} 
	
	public function setCrackBody($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->crack_body !== $v) {
			$this->crack_body = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::CRACK_BODY;
		}

	} 
	
	public function setCrackBottom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->crack_bottom !== $v) {
			$this->crack_bottom = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::CRACK_BOTTOM;
		}

	} 
	
	public function setScratchesTop($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->scratches_top !== $v) {
			$this->scratches_top = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::SCRATCHES_TOP;
		}

	} 
	
	public function setScratchesBody($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->scratches_body !== $v) {
			$this->scratches_body = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::SCRATCHES_BODY;
		}

	} 
	
	public function setScratchesBottom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->scratches_bottom !== $v) {
			$this->scratches_bottom = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::SCRATCHES_BOTTOM;
		}

	} 
	
	public function setWorpageTop($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->worpage_top !== $v) {
			$this->worpage_top = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::WORPAGE_TOP;
		}

	} 
	
	public function setWorpageBody($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->worpage_body !== $v) {
			$this->worpage_body = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::WORPAGE_BODY;
		}

	} 
	
	public function setWorpageBottom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->worpage_bottom !== $v) {
			$this->worpage_bottom = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::WORPAGE_BOTTOM;
		}

	} 
	
	public function setStainTop($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->stain_top !== $v) {
			$this->stain_top = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::STAIN_TOP;
		}

	} 
	
	public function setStainBody($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->stain_body !== $v) {
			$this->stain_body = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::STAIN_BODY;
		}

	} 
	
	public function setStainBottom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->stain_bottom !== $v) {
			$this->stain_bottom = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::STAIN_BOTTOM;
		}

	} 
	
	public function setStickerBottom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sticker_bottom !== $v) {
			$this->sticker_bottom = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::STICKER_BOTTOM;
		}

	} 
	
	public function setStickerBody($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sticker_body !== $v) {
			$this->sticker_body = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::STICKER_BODY;
		}

	} 
	
	public function setAdhesiveBody($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->adhesive_body !== $v) {
			$this->adhesive_body = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::ADHESIVE_BODY;
		}

	} 
	
	public function setAdhesiveBottom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->adhesive_bottom !== $v) {
			$this->adhesive_bottom = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::ADHESIVE_BOTTOM;
		}

	} 
	
	public function setMouldingDefectTop($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->moulding_defect_top !== $v) {
			$this->moulding_defect_top = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::MOULDING_DEFECT_TOP;
		}

	} 
	
	public function setMouldingDefectBottom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->moulding_defect_bottom !== $v) {
			$this->moulding_defect_bottom = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::MOULDING_DEFECT_BOTTOM;
		}

	} 
	
	public function setMouldingDefectBody($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->moulding_defect_body !== $v) {
			$this->moulding_defect_body = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::MOULDING_DEFECT_BODY;
		}

	} 
	
	public function setHkDrumFail($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hk_drum_fail !== $v) {
			$this->hk_drum_fail = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::HK_DRUM_FAIL;
		}

	} 
	
	public function setChipsTop($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->chips_top !== $v) {
			$this->chips_top = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::CHIPS_TOP;
		}

	} 
	
	public function setChipsBody($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->chips_body !== $v) {
			$this->chips_body = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::CHIPS_BODY;
		}

	} 
	
	public function setChipsBottom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->chips_bottom !== $v) {
			$this->chips_bottom = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::CHIPS_BOTTOM;
		}

	} 
	
	public function setDryer1Temperature($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dryer_1_temperature !== $v) {
			$this->dryer_1_temperature = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::DRYER_1_TEMPERATURE;
		}

	} 
	
	public function setDryer1Particle($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dryer_1_particle !== $v) {
			$this->dryer_1_particle = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::DRYER_1_PARTICLE;
		}

	} 
	
	public function setDryer2Temperature($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dryer_2_temperature !== $v) {
			$this->dryer_2_temperature = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::DRYER_2_TEMPERATURE;
		}

	} 
	
	public function setDryer2Particle($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dryer_2_particle !== $v) {
			$this->dryer_2_particle = $v;
			$this->modifiedColumns[] = NonConformancePartPeer::DRYER_2_PARTICLE;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->date = $rs->getDate($startcol + 1, null);

			$this->customer = $rs->getString($startcol + 2);

			$this->company = $rs->getString($startcol + 3);

			$this->product_type = $rs->getString($startcol + 4);

			$this->part = $rs->getString($startcol + 5);

			$this->quantity = $rs->getInt($startcol + 6);

			$this->cost = $rs->getFloat($startcol + 7);

			$this->vpc = $rs->getFloat($startcol + 8);

			$this->adhesive_top = $rs->getString($startcol + 9);

			$this->particle_count = $rs->getString($startcol + 10);

			$this->crack_top = $rs->getString($startcol + 11);

			$this->after_drying = $rs->getString($startcol + 12);

			$this->ddi = $rs->getString($startcol + 13);

			$this->missing_part = $rs->getString($startcol + 14);

			$this->over_date_top = $rs->getString($startcol + 15);

			$this->over_punch_top = $rs->getString($startcol + 16);

			$this->stain = $rs->getString($startcol + 17);

			$this->sticker_top = $rs->getString($startcol + 18);

			$this->torn_broken = $rs->getString($startcol + 19);

			$this->date_created = $rs->getTimestamp($startcol + 20, null);

			$this->created_by = $rs->getString($startcol + 21);

			$this->date_modified = $rs->getTimestamp($startcol + 22, null);

			$this->modified_by = $rs->getString($startcol + 23);

			$this->over_date_bottom = $rs->getString($startcol + 24);

			$this->over_date_body = $rs->getString($startcol + 25);

			$this->over_punch_bottom = $rs->getString($startcol + 26);

			$this->over_punch_body = $rs->getString($startcol + 27);

			$this->mixed_part_bottom = $rs->getString($startcol + 28);

			$this->mixed_part_body = $rs->getString($startcol + 29);

			$this->mixed_part_top = $rs->getString($startcol + 30);

			$this->crack_body = $rs->getString($startcol + 31);

			$this->crack_bottom = $rs->getString($startcol + 32);

			$this->scratches_top = $rs->getString($startcol + 33);

			$this->scratches_body = $rs->getString($startcol + 34);

			$this->scratches_bottom = $rs->getString($startcol + 35);

			$this->worpage_top = $rs->getString($startcol + 36);

			$this->worpage_body = $rs->getString($startcol + 37);

			$this->worpage_bottom = $rs->getString($startcol + 38);

			$this->stain_top = $rs->getString($startcol + 39);

			$this->stain_body = $rs->getString($startcol + 40);

			$this->stain_bottom = $rs->getString($startcol + 41);

			$this->sticker_bottom = $rs->getString($startcol + 42);

			$this->sticker_body = $rs->getString($startcol + 43);

			$this->adhesive_body = $rs->getString($startcol + 44);

			$this->adhesive_bottom = $rs->getString($startcol + 45);

			$this->moulding_defect_top = $rs->getString($startcol + 46);

			$this->moulding_defect_bottom = $rs->getString($startcol + 47);

			$this->moulding_defect_body = $rs->getString($startcol + 48);

			$this->hk_drum_fail = $rs->getString($startcol + 49);

			$this->chips_top = $rs->getString($startcol + 50);

			$this->chips_body = $rs->getString($startcol + 51);

			$this->chips_bottom = $rs->getString($startcol + 52);

			$this->dryer_1_temperature = $rs->getString($startcol + 53);

			$this->dryer_1_particle = $rs->getString($startcol + 54);

			$this->dryer_2_temperature = $rs->getString($startcol + 55);

			$this->dryer_2_particle = $rs->getString($startcol + 56);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 57; 
		} catch (Exception $e) {
			throw new PropelException("Error populating NonConformancePart object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NonConformancePartPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			NonConformancePartPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(NonConformancePartPeer::DATABASE_NAME);
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
					$pk = NonConformancePartPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += NonConformancePartPeer::doUpdate($this, $con);
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


			if (($retval = NonConformancePartPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NonConformancePartPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getDate();
				break;
			case 2:
				return $this->getCustomer();
				break;
			case 3:
				return $this->getCompany();
				break;
			case 4:
				return $this->getProductType();
				break;
			case 5:
				return $this->getPart();
				break;
			case 6:
				return $this->getQuantity();
				break;
			case 7:
				return $this->getCost();
				break;
			case 8:
				return $this->getVpc();
				break;
			case 9:
				return $this->getAdhesiveTop();
				break;
			case 10:
				return $this->getParticleCount();
				break;
			case 11:
				return $this->getCrackTop();
				break;
			case 12:
				return $this->getAfterDrying();
				break;
			case 13:
				return $this->getDdi();
				break;
			case 14:
				return $this->getMissingPart();
				break;
			case 15:
				return $this->getOverDateTop();
				break;
			case 16:
				return $this->getOverPunchTop();
				break;
			case 17:
				return $this->getStain();
				break;
			case 18:
				return $this->getStickerTop();
				break;
			case 19:
				return $this->getTornBroken();
				break;
			case 20:
				return $this->getDateCreated();
				break;
			case 21:
				return $this->getCreatedBy();
				break;
			case 22:
				return $this->getDateModified();
				break;
			case 23:
				return $this->getModifiedBy();
				break;
			case 24:
				return $this->getOverDateBottom();
				break;
			case 25:
				return $this->getOverDateBody();
				break;
			case 26:
				return $this->getOverPunchBottom();
				break;
			case 27:
				return $this->getOverPunchBody();
				break;
			case 28:
				return $this->getMixedPartBottom();
				break;
			case 29:
				return $this->getMixedPartBody();
				break;
			case 30:
				return $this->getMixedPartTop();
				break;
			case 31:
				return $this->getCrackBody();
				break;
			case 32:
				return $this->getCrackBottom();
				break;
			case 33:
				return $this->getScratchesTop();
				break;
			case 34:
				return $this->getScratchesBody();
				break;
			case 35:
				return $this->getScratchesBottom();
				break;
			case 36:
				return $this->getWorpageTop();
				break;
			case 37:
				return $this->getWorpageBody();
				break;
			case 38:
				return $this->getWorpageBottom();
				break;
			case 39:
				return $this->getStainTop();
				break;
			case 40:
				return $this->getStainBody();
				break;
			case 41:
				return $this->getStainBottom();
				break;
			case 42:
				return $this->getStickerBottom();
				break;
			case 43:
				return $this->getStickerBody();
				break;
			case 44:
				return $this->getAdhesiveBody();
				break;
			case 45:
				return $this->getAdhesiveBottom();
				break;
			case 46:
				return $this->getMouldingDefectTop();
				break;
			case 47:
				return $this->getMouldingDefectBottom();
				break;
			case 48:
				return $this->getMouldingDefectBody();
				break;
			case 49:
				return $this->getHkDrumFail();
				break;
			case 50:
				return $this->getChipsTop();
				break;
			case 51:
				return $this->getChipsBody();
				break;
			case 52:
				return $this->getChipsBottom();
				break;
			case 53:
				return $this->getDryer1Temperature();
				break;
			case 54:
				return $this->getDryer1Particle();
				break;
			case 55:
				return $this->getDryer2Temperature();
				break;
			case 56:
				return $this->getDryer2Particle();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = NonConformancePartPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDate(),
			$keys[2] => $this->getCustomer(),
			$keys[3] => $this->getCompany(),
			$keys[4] => $this->getProductType(),
			$keys[5] => $this->getPart(),
			$keys[6] => $this->getQuantity(),
			$keys[7] => $this->getCost(),
			$keys[8] => $this->getVpc(),
			$keys[9] => $this->getAdhesiveTop(),
			$keys[10] => $this->getParticleCount(),
			$keys[11] => $this->getCrackTop(),
			$keys[12] => $this->getAfterDrying(),
			$keys[13] => $this->getDdi(),
			$keys[14] => $this->getMissingPart(),
			$keys[15] => $this->getOverDateTop(),
			$keys[16] => $this->getOverPunchTop(),
			$keys[17] => $this->getStain(),
			$keys[18] => $this->getStickerTop(),
			$keys[19] => $this->getTornBroken(),
			$keys[20] => $this->getDateCreated(),
			$keys[21] => $this->getCreatedBy(),
			$keys[22] => $this->getDateModified(),
			$keys[23] => $this->getModifiedBy(),
			$keys[24] => $this->getOverDateBottom(),
			$keys[25] => $this->getOverDateBody(),
			$keys[26] => $this->getOverPunchBottom(),
			$keys[27] => $this->getOverPunchBody(),
			$keys[28] => $this->getMixedPartBottom(),
			$keys[29] => $this->getMixedPartBody(),
			$keys[30] => $this->getMixedPartTop(),
			$keys[31] => $this->getCrackBody(),
			$keys[32] => $this->getCrackBottom(),
			$keys[33] => $this->getScratchesTop(),
			$keys[34] => $this->getScratchesBody(),
			$keys[35] => $this->getScratchesBottom(),
			$keys[36] => $this->getWorpageTop(),
			$keys[37] => $this->getWorpageBody(),
			$keys[38] => $this->getWorpageBottom(),
			$keys[39] => $this->getStainTop(),
			$keys[40] => $this->getStainBody(),
			$keys[41] => $this->getStainBottom(),
			$keys[42] => $this->getStickerBottom(),
			$keys[43] => $this->getStickerBody(),
			$keys[44] => $this->getAdhesiveBody(),
			$keys[45] => $this->getAdhesiveBottom(),
			$keys[46] => $this->getMouldingDefectTop(),
			$keys[47] => $this->getMouldingDefectBottom(),
			$keys[48] => $this->getMouldingDefectBody(),
			$keys[49] => $this->getHkDrumFail(),
			$keys[50] => $this->getChipsTop(),
			$keys[51] => $this->getChipsBody(),
			$keys[52] => $this->getChipsBottom(),
			$keys[53] => $this->getDryer1Temperature(),
			$keys[54] => $this->getDryer1Particle(),
			$keys[55] => $this->getDryer2Temperature(),
			$keys[56] => $this->getDryer2Particle(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NonConformancePartPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setDate($value);
				break;
			case 2:
				$this->setCustomer($value);
				break;
			case 3:
				$this->setCompany($value);
				break;
			case 4:
				$this->setProductType($value);
				break;
			case 5:
				$this->setPart($value);
				break;
			case 6:
				$this->setQuantity($value);
				break;
			case 7:
				$this->setCost($value);
				break;
			case 8:
				$this->setVpc($value);
				break;
			case 9:
				$this->setAdhesiveTop($value);
				break;
			case 10:
				$this->setParticleCount($value);
				break;
			case 11:
				$this->setCrackTop($value);
				break;
			case 12:
				$this->setAfterDrying($value);
				break;
			case 13:
				$this->setDdi($value);
				break;
			case 14:
				$this->setMissingPart($value);
				break;
			case 15:
				$this->setOverDateTop($value);
				break;
			case 16:
				$this->setOverPunchTop($value);
				break;
			case 17:
				$this->setStain($value);
				break;
			case 18:
				$this->setStickerTop($value);
				break;
			case 19:
				$this->setTornBroken($value);
				break;
			case 20:
				$this->setDateCreated($value);
				break;
			case 21:
				$this->setCreatedBy($value);
				break;
			case 22:
				$this->setDateModified($value);
				break;
			case 23:
				$this->setModifiedBy($value);
				break;
			case 24:
				$this->setOverDateBottom($value);
				break;
			case 25:
				$this->setOverDateBody($value);
				break;
			case 26:
				$this->setOverPunchBottom($value);
				break;
			case 27:
				$this->setOverPunchBody($value);
				break;
			case 28:
				$this->setMixedPartBottom($value);
				break;
			case 29:
				$this->setMixedPartBody($value);
				break;
			case 30:
				$this->setMixedPartTop($value);
				break;
			case 31:
				$this->setCrackBody($value);
				break;
			case 32:
				$this->setCrackBottom($value);
				break;
			case 33:
				$this->setScratchesTop($value);
				break;
			case 34:
				$this->setScratchesBody($value);
				break;
			case 35:
				$this->setScratchesBottom($value);
				break;
			case 36:
				$this->setWorpageTop($value);
				break;
			case 37:
				$this->setWorpageBody($value);
				break;
			case 38:
				$this->setWorpageBottom($value);
				break;
			case 39:
				$this->setStainTop($value);
				break;
			case 40:
				$this->setStainBody($value);
				break;
			case 41:
				$this->setStainBottom($value);
				break;
			case 42:
				$this->setStickerBottom($value);
				break;
			case 43:
				$this->setStickerBody($value);
				break;
			case 44:
				$this->setAdhesiveBody($value);
				break;
			case 45:
				$this->setAdhesiveBottom($value);
				break;
			case 46:
				$this->setMouldingDefectTop($value);
				break;
			case 47:
				$this->setMouldingDefectBottom($value);
				break;
			case 48:
				$this->setMouldingDefectBody($value);
				break;
			case 49:
				$this->setHkDrumFail($value);
				break;
			case 50:
				$this->setChipsTop($value);
				break;
			case 51:
				$this->setChipsBody($value);
				break;
			case 52:
				$this->setChipsBottom($value);
				break;
			case 53:
				$this->setDryer1Temperature($value);
				break;
			case 54:
				$this->setDryer1Particle($value);
				break;
			case 55:
				$this->setDryer2Temperature($value);
				break;
			case 56:
				$this->setDryer2Particle($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = NonConformancePartPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCustomer($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCompany($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setProductType($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setPart($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setQuantity($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCost($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setVpc($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setAdhesiveTop($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setParticleCount($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setCrackTop($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setAfterDrying($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDdi($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setMissingPart($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setOverDateTop($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setOverPunchTop($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setStain($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setStickerTop($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setTornBroken($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setDateCreated($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setCreatedBy($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setDateModified($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setModifiedBy($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setOverDateBottom($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setOverDateBody($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setOverPunchBottom($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setOverPunchBody($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setMixedPartBottom($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setMixedPartBody($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setMixedPartTop($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setCrackBody($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setCrackBottom($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setScratchesTop($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setScratchesBody($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setScratchesBottom($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setWorpageTop($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setWorpageBody($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setWorpageBottom($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setStainTop($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setStainBody($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setStainBottom($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setStickerBottom($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setStickerBody($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setAdhesiveBody($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setAdhesiveBottom($arr[$keys[45]]);
		if (array_key_exists($keys[46], $arr)) $this->setMouldingDefectTop($arr[$keys[46]]);
		if (array_key_exists($keys[47], $arr)) $this->setMouldingDefectBottom($arr[$keys[47]]);
		if (array_key_exists($keys[48], $arr)) $this->setMouldingDefectBody($arr[$keys[48]]);
		if (array_key_exists($keys[49], $arr)) $this->setHkDrumFail($arr[$keys[49]]);
		if (array_key_exists($keys[50], $arr)) $this->setChipsTop($arr[$keys[50]]);
		if (array_key_exists($keys[51], $arr)) $this->setChipsBody($arr[$keys[51]]);
		if (array_key_exists($keys[52], $arr)) $this->setChipsBottom($arr[$keys[52]]);
		if (array_key_exists($keys[53], $arr)) $this->setDryer1Temperature($arr[$keys[53]]);
		if (array_key_exists($keys[54], $arr)) $this->setDryer1Particle($arr[$keys[54]]);
		if (array_key_exists($keys[55], $arr)) $this->setDryer2Temperature($arr[$keys[55]]);
		if (array_key_exists($keys[56], $arr)) $this->setDryer2Particle($arr[$keys[56]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(NonConformancePartPeer::DATABASE_NAME);

		if ($this->isColumnModified(NonConformancePartPeer::ID)) $criteria->add(NonConformancePartPeer::ID, $this->id);
		if ($this->isColumnModified(NonConformancePartPeer::DATE)) $criteria->add(NonConformancePartPeer::DATE, $this->date);
		if ($this->isColumnModified(NonConformancePartPeer::CUSTOMER)) $criteria->add(NonConformancePartPeer::CUSTOMER, $this->customer);
		if ($this->isColumnModified(NonConformancePartPeer::COMPANY)) $criteria->add(NonConformancePartPeer::COMPANY, $this->company);
		if ($this->isColumnModified(NonConformancePartPeer::PRODUCT_TYPE)) $criteria->add(NonConformancePartPeer::PRODUCT_TYPE, $this->product_type);
		if ($this->isColumnModified(NonConformancePartPeer::PART)) $criteria->add(NonConformancePartPeer::PART, $this->part);
		if ($this->isColumnModified(NonConformancePartPeer::QUANTITY)) $criteria->add(NonConformancePartPeer::QUANTITY, $this->quantity);
		if ($this->isColumnModified(NonConformancePartPeer::COST)) $criteria->add(NonConformancePartPeer::COST, $this->cost);
		if ($this->isColumnModified(NonConformancePartPeer::VPC)) $criteria->add(NonConformancePartPeer::VPC, $this->vpc);
		if ($this->isColumnModified(NonConformancePartPeer::ADHESIVE_TOP)) $criteria->add(NonConformancePartPeer::ADHESIVE_TOP, $this->adhesive_top);
		if ($this->isColumnModified(NonConformancePartPeer::PARTICLE_COUNT)) $criteria->add(NonConformancePartPeer::PARTICLE_COUNT, $this->particle_count);
		if ($this->isColumnModified(NonConformancePartPeer::CRACK_TOP)) $criteria->add(NonConformancePartPeer::CRACK_TOP, $this->crack_top);
		if ($this->isColumnModified(NonConformancePartPeer::AFTER_DRYING)) $criteria->add(NonConformancePartPeer::AFTER_DRYING, $this->after_drying);
		if ($this->isColumnModified(NonConformancePartPeer::DDI)) $criteria->add(NonConformancePartPeer::DDI, $this->ddi);
		if ($this->isColumnModified(NonConformancePartPeer::MISSING_PART)) $criteria->add(NonConformancePartPeer::MISSING_PART, $this->missing_part);
		if ($this->isColumnModified(NonConformancePartPeer::OVER_DATE_TOP)) $criteria->add(NonConformancePartPeer::OVER_DATE_TOP, $this->over_date_top);
		if ($this->isColumnModified(NonConformancePartPeer::OVER_PUNCH_TOP)) $criteria->add(NonConformancePartPeer::OVER_PUNCH_TOP, $this->over_punch_top);
		if ($this->isColumnModified(NonConformancePartPeer::STAIN)) $criteria->add(NonConformancePartPeer::STAIN, $this->stain);
		if ($this->isColumnModified(NonConformancePartPeer::STICKER_TOP)) $criteria->add(NonConformancePartPeer::STICKER_TOP, $this->sticker_top);
		if ($this->isColumnModified(NonConformancePartPeer::TORN_BROKEN)) $criteria->add(NonConformancePartPeer::TORN_BROKEN, $this->torn_broken);
		if ($this->isColumnModified(NonConformancePartPeer::DATE_CREATED)) $criteria->add(NonConformancePartPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(NonConformancePartPeer::CREATED_BY)) $criteria->add(NonConformancePartPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(NonConformancePartPeer::DATE_MODIFIED)) $criteria->add(NonConformancePartPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(NonConformancePartPeer::MODIFIED_BY)) $criteria->add(NonConformancePartPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(NonConformancePartPeer::OVER_DATE_BOTTOM)) $criteria->add(NonConformancePartPeer::OVER_DATE_BOTTOM, $this->over_date_bottom);
		if ($this->isColumnModified(NonConformancePartPeer::OVER_DATE_BODY)) $criteria->add(NonConformancePartPeer::OVER_DATE_BODY, $this->over_date_body);
		if ($this->isColumnModified(NonConformancePartPeer::OVER_PUNCH_BOTTOM)) $criteria->add(NonConformancePartPeer::OVER_PUNCH_BOTTOM, $this->over_punch_bottom);
		if ($this->isColumnModified(NonConformancePartPeer::OVER_PUNCH_BODY)) $criteria->add(NonConformancePartPeer::OVER_PUNCH_BODY, $this->over_punch_body);
		if ($this->isColumnModified(NonConformancePartPeer::MIXED_PART_BOTTOM)) $criteria->add(NonConformancePartPeer::MIXED_PART_BOTTOM, $this->mixed_part_bottom);
		if ($this->isColumnModified(NonConformancePartPeer::MIXED_PART_BODY)) $criteria->add(NonConformancePartPeer::MIXED_PART_BODY, $this->mixed_part_body);
		if ($this->isColumnModified(NonConformancePartPeer::MIXED_PART_TOP)) $criteria->add(NonConformancePartPeer::MIXED_PART_TOP, $this->mixed_part_top);
		if ($this->isColumnModified(NonConformancePartPeer::CRACK_BODY)) $criteria->add(NonConformancePartPeer::CRACK_BODY, $this->crack_body);
		if ($this->isColumnModified(NonConformancePartPeer::CRACK_BOTTOM)) $criteria->add(NonConformancePartPeer::CRACK_BOTTOM, $this->crack_bottom);
		if ($this->isColumnModified(NonConformancePartPeer::SCRATCHES_TOP)) $criteria->add(NonConformancePartPeer::SCRATCHES_TOP, $this->scratches_top);
		if ($this->isColumnModified(NonConformancePartPeer::SCRATCHES_BODY)) $criteria->add(NonConformancePartPeer::SCRATCHES_BODY, $this->scratches_body);
		if ($this->isColumnModified(NonConformancePartPeer::SCRATCHES_BOTTOM)) $criteria->add(NonConformancePartPeer::SCRATCHES_BOTTOM, $this->scratches_bottom);
		if ($this->isColumnModified(NonConformancePartPeer::WORPAGE_TOP)) $criteria->add(NonConformancePartPeer::WORPAGE_TOP, $this->worpage_top);
		if ($this->isColumnModified(NonConformancePartPeer::WORPAGE_BODY)) $criteria->add(NonConformancePartPeer::WORPAGE_BODY, $this->worpage_body);
		if ($this->isColumnModified(NonConformancePartPeer::WORPAGE_BOTTOM)) $criteria->add(NonConformancePartPeer::WORPAGE_BOTTOM, $this->worpage_bottom);
		if ($this->isColumnModified(NonConformancePartPeer::STAIN_TOP)) $criteria->add(NonConformancePartPeer::STAIN_TOP, $this->stain_top);
		if ($this->isColumnModified(NonConformancePartPeer::STAIN_BODY)) $criteria->add(NonConformancePartPeer::STAIN_BODY, $this->stain_body);
		if ($this->isColumnModified(NonConformancePartPeer::STAIN_BOTTOM)) $criteria->add(NonConformancePartPeer::STAIN_BOTTOM, $this->stain_bottom);
		if ($this->isColumnModified(NonConformancePartPeer::STICKER_BOTTOM)) $criteria->add(NonConformancePartPeer::STICKER_BOTTOM, $this->sticker_bottom);
		if ($this->isColumnModified(NonConformancePartPeer::STICKER_BODY)) $criteria->add(NonConformancePartPeer::STICKER_BODY, $this->sticker_body);
		if ($this->isColumnModified(NonConformancePartPeer::ADHESIVE_BODY)) $criteria->add(NonConformancePartPeer::ADHESIVE_BODY, $this->adhesive_body);
		if ($this->isColumnModified(NonConformancePartPeer::ADHESIVE_BOTTOM)) $criteria->add(NonConformancePartPeer::ADHESIVE_BOTTOM, $this->adhesive_bottom);
		if ($this->isColumnModified(NonConformancePartPeer::MOULDING_DEFECT_TOP)) $criteria->add(NonConformancePartPeer::MOULDING_DEFECT_TOP, $this->moulding_defect_top);
		if ($this->isColumnModified(NonConformancePartPeer::MOULDING_DEFECT_BOTTOM)) $criteria->add(NonConformancePartPeer::MOULDING_DEFECT_BOTTOM, $this->moulding_defect_bottom);
		if ($this->isColumnModified(NonConformancePartPeer::MOULDING_DEFECT_BODY)) $criteria->add(NonConformancePartPeer::MOULDING_DEFECT_BODY, $this->moulding_defect_body);
		if ($this->isColumnModified(NonConformancePartPeer::HK_DRUM_FAIL)) $criteria->add(NonConformancePartPeer::HK_DRUM_FAIL, $this->hk_drum_fail);
		if ($this->isColumnModified(NonConformancePartPeer::CHIPS_TOP)) $criteria->add(NonConformancePartPeer::CHIPS_TOP, $this->chips_top);
		if ($this->isColumnModified(NonConformancePartPeer::CHIPS_BODY)) $criteria->add(NonConformancePartPeer::CHIPS_BODY, $this->chips_body);
		if ($this->isColumnModified(NonConformancePartPeer::CHIPS_BOTTOM)) $criteria->add(NonConformancePartPeer::CHIPS_BOTTOM, $this->chips_bottom);
		if ($this->isColumnModified(NonConformancePartPeer::DRYER_1_TEMPERATURE)) $criteria->add(NonConformancePartPeer::DRYER_1_TEMPERATURE, $this->dryer_1_temperature);
		if ($this->isColumnModified(NonConformancePartPeer::DRYER_1_PARTICLE)) $criteria->add(NonConformancePartPeer::DRYER_1_PARTICLE, $this->dryer_1_particle);
		if ($this->isColumnModified(NonConformancePartPeer::DRYER_2_TEMPERATURE)) $criteria->add(NonConformancePartPeer::DRYER_2_TEMPERATURE, $this->dryer_2_temperature);
		if ($this->isColumnModified(NonConformancePartPeer::DRYER_2_PARTICLE)) $criteria->add(NonConformancePartPeer::DRYER_2_PARTICLE, $this->dryer_2_particle);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(NonConformancePartPeer::DATABASE_NAME);

		$criteria->add(NonConformancePartPeer::ID, $this->id);

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

		$copyObj->setDate($this->date);

		$copyObj->setCustomer($this->customer);

		$copyObj->setCompany($this->company);

		$copyObj->setProductType($this->product_type);

		$copyObj->setPart($this->part);

		$copyObj->setQuantity($this->quantity);

		$copyObj->setCost($this->cost);

		$copyObj->setVpc($this->vpc);

		$copyObj->setAdhesiveTop($this->adhesive_top);

		$copyObj->setParticleCount($this->particle_count);

		$copyObj->setCrackTop($this->crack_top);

		$copyObj->setAfterDrying($this->after_drying);

		$copyObj->setDdi($this->ddi);

		$copyObj->setMissingPart($this->missing_part);

		$copyObj->setOverDateTop($this->over_date_top);

		$copyObj->setOverPunchTop($this->over_punch_top);

		$copyObj->setStain($this->stain);

		$copyObj->setStickerTop($this->sticker_top);

		$copyObj->setTornBroken($this->torn_broken);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setCreatedBy($this->created_by);

		$copyObj->setDateModified($this->date_modified);

		$copyObj->setModifiedBy($this->modified_by);

		$copyObj->setOverDateBottom($this->over_date_bottom);

		$copyObj->setOverDateBody($this->over_date_body);

		$copyObj->setOverPunchBottom($this->over_punch_bottom);

		$copyObj->setOverPunchBody($this->over_punch_body);

		$copyObj->setMixedPartBottom($this->mixed_part_bottom);

		$copyObj->setMixedPartBody($this->mixed_part_body);

		$copyObj->setMixedPartTop($this->mixed_part_top);

		$copyObj->setCrackBody($this->crack_body);

		$copyObj->setCrackBottom($this->crack_bottom);

		$copyObj->setScratchesTop($this->scratches_top);

		$copyObj->setScratchesBody($this->scratches_body);

		$copyObj->setScratchesBottom($this->scratches_bottom);

		$copyObj->setWorpageTop($this->worpage_top);

		$copyObj->setWorpageBody($this->worpage_body);

		$copyObj->setWorpageBottom($this->worpage_bottom);

		$copyObj->setStainTop($this->stain_top);

		$copyObj->setStainBody($this->stain_body);

		$copyObj->setStainBottom($this->stain_bottom);

		$copyObj->setStickerBottom($this->sticker_bottom);

		$copyObj->setStickerBody($this->sticker_body);

		$copyObj->setAdhesiveBody($this->adhesive_body);

		$copyObj->setAdhesiveBottom($this->adhesive_bottom);

		$copyObj->setMouldingDefectTop($this->moulding_defect_top);

		$copyObj->setMouldingDefectBottom($this->moulding_defect_bottom);

		$copyObj->setMouldingDefectBody($this->moulding_defect_body);

		$copyObj->setHkDrumFail($this->hk_drum_fail);

		$copyObj->setChipsTop($this->chips_top);

		$copyObj->setChipsBody($this->chips_body);

		$copyObj->setChipsBottom($this->chips_bottom);

		$copyObj->setDryer1Temperature($this->dryer_1_temperature);

		$copyObj->setDryer1Particle($this->dryer_1_particle);

		$copyObj->setDryer2Temperature($this->dryer_2_temperature);

		$copyObj->setDryer2Particle($this->dryer_2_particle);


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
			self::$peer = new NonConformancePartPeer();
		}
		return self::$peer;
	}

} 