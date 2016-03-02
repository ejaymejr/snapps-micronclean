<?php

/**
 * Subclass for performing query and update operations on the 'label_preview_detail' table.
 *
 * 
 *
 * @package lib.model.hgas3
 */ 
class LabelPreviewDetailPeer extends BaseLabelPreviewDetailPeer
{
	public static function GetDataByTemplateId($tID)
	{
		$c = new Criteria();
		$c->add(self::LABELING_TEMPLATE_ID, $tID);
		$rs = self::doSelectOne($c);
		return $rs;
	}	
}
