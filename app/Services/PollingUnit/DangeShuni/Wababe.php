<?php
namespace App\Services\PollingUnit\DangeShuni;
	
	class Wababe
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'WABABE KUDU/PRIMARY SCHOOL WABABE (GIDAN IFAD)',
				'WABABE PRY SCH, WABABE MPS',
				'WABABE GABAS/ PRIMARY SCHOOL (WABABE GABAS GIDAN HAKIMI)',
				'HAMMARE/ PRIMARY SCHOOL HAMMARE (HAMMARE GIDAN HAKIMI)',
				'DONAMA/BAYAN GIDAN HAKIMI (BAYAN GIDAN H/DONAWA)',
				'MODEL PRY SCH, YOLA',
				'PRIMARY SCHOOL DABAGIN WABABE (BAYAN MASALLACI WABABE)',
				'PRIMARY SCHOOL KARADAGE (GIDAN MAL. ALTINE)',
				'HAUSARE P. SCHOOL',
				'PRIMARY SCHOOL DALI (MALAM HANTSI/ GIDAN M. N DALI)',
				'DORAWAR DIKKO/COLLAPSED PRIMARY SPACE (RAKWAMNI',
				'MODEL PRY SCH, SALAU',
				'MODEL PRY SCH, SUKANDU',
				'FILIN YARKASUWA, ILLELAR SALAU',
				'BELEL BAKIN RIJIYA'
			];
		}
	}