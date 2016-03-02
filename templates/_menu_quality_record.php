		<?php if ($sf_user->isAuthenticated()): ?>
        <ul class="element-menu ">
            <li>
                <a class="dropdown-toggle" href="#">GARMENT</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li><?php echo link_to('Helmke Drum &nbsp;<sup class=fg-lightOrange>Form: 008</sup>', "micronclean/helmkeSearch"  )?></li>
                    <li><?php echo link_to('Garment Bacteria Count &nbsp;<sup class=fg-lightOrange>Form: 063</sup>', "micronclean/garmentBacteriaSearch"  )?></li>
                    <li>
                    	<a class="dropdown-toggle" href="#">Air Flow/Particle Count &nbsp;<sup class='fg-lightOrange'>Form: 007</sup></a>
                    	<?php //echo link_to('Air Particle Count &nbsp;<sup class=fg-lightOrange>Form: 007</sup>', "micronclean/airSearch"  )?>
                    	<ul class="dropdown-menu dark" data-role="dropdown" style="display: none;">
                    		<li><?php echo link_to('ACRO &nbsp;<sup class=fg-lightOrange>Form: 007</sup>', "airparticle/acroSearch"  )?></li>
                    		<li><?php echo link_to('Micronclean &nbsp;<sup class=fg-lightOrange>Form: 007</sup>', "airparticle/microncleanSearch"  )?></li>
                    		<li><?php echo link_to('Nanoclean &nbsp;<sup class=fg-lightOrange>Form: 007</sup>', "airparticle/nanocleanSearch"  )?></li>
                    	</ul>
                    </li>
                    <li><?php echo link_to('Surface Resistivity &nbsp;<sup class=fg-lightOrange>Form: 140</sup>', "micronclean/surfaceSearch"  )?></li>
                    <li><?php echo link_to('Garment IC Test &nbsp;<sup class=fg-lightOrange>Form: 015</sup>', "micronclean/icSearch"  )?></li>
                    <li><?php echo link_to('BKL Garment Repair &nbsp;<sup class=fg-lightOrange></sup>', "home/redirectToGarmentRepair"  )?></li>
                    <li><?php echo link_to('NVR FTIR &nbsp;<sup class=fg-lightOrange>Form: 014</sup>', "micronclean/nvrSearch"  )?></li>
                    <li><?php echo link_to('Veritas &nbsp;<sup class=fg-lightOrange>Form: 009</sup>', "micronclean/veritasSearch"  )?></li>
                    
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle" href="#">CASSETTE</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li><?php echo link_to('Cassette Quality Record &nbsp;<sup class=fg-lightOrange></sup>', "home/redirectToCassette"  )?></li>
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle" href="#">GENERAL</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li>
                    	<a class="dropdown-toggle" href="#">CA/PA &nbsp;<sup class='fg-lightOrange'>Form: 056</sup></a>
                    	<ul class="dropdown-menu dark" data-role="dropdown" style="display: none;">
                    		<li><?php echo link_to('CA/PA &nbsp;<sup class=fg-lightOrange>Form: 056</sup>', "capa/capaSearch"  )?></li>
                    		<li><?php echo link_to('QAN &nbsp;<sup class=fg-lightOrange>Form: 056</sup>', "capa/capaSearch"  )?></li>
                    	</ul>
                    </li>
                    <li><?php echo link_to('Supplier CA/PA &nbsp;<sup class=fg-lightOrange>Form: 056</sup>', "capa/supplierCapaSearch"  )?></li>
                    <li><?php echo link_to('Di Water Plant &nbsp;<sup class=fg-lightOrange>Form: 029</sup>', "diwater"  )?></li>
                    <li><?php echo link_to('Repair Report &nbsp;<sup class=fg-lightOrange>Form: 027</sup>', "repairReport"  )?></li>
                    <li><?php echo link_to('Customer Management &nbsp;<sup class=fg-lightOrange>Form: 054</sup>', "custComplaint"  )?></li>
                    <li><?php echo link_to('Contract Management &nbsp;<sup class=fg-lightOrange>Form: 103</sup>', "contractMgt"  )?></li>
                    <li><?php echo link_to('Non-Conformance &nbsp;<sup class=fg-lightOrange>Form: 048/049</sup>', "conformance"  )?></li>
                    <li><?php echo link_to('Dryer &nbsp;<sup class=fg-lightOrange>Form: 077</sup>', "dryerParticle"  )?></li>
                    <li><?php echo link_to('Plastic Bag &nbsp;<sup class=fg-lightOrange>Form: 069</sup>', "plasticBag"  )?></li>
                    <li><?php echo link_to('Evaluation Report &nbsp;<sup class=fg-lightOrange>Form: 030</sup>', "evaluation"  )?></li>
                    <li><?php echo link_to('Interal Audit &nbsp;<sup class=fg-lightOrange>Form: 037</sup>', "internalAudit"  )?></li>
                    <li><?php echo link_to('Management Review &nbsp;<sup class=fg-lightOrange>Form: 010</sup>', "mgtReview"  )?></li>
                    <li><?php echo link_to('DI Water Monitoring @XXXV &nbsp;<sup class=fg-lightOrange></sup>', "home/redirectToDiPlant35"  )?></li>
                    <li><?php echo link_to('Air @XXXV &nbsp;<sup class=fg-lightOrange></sup>', "home/redirectToAir35"  )?></li>
                    <li><?php echo link_to('DI Water Monitoring @XXIX &nbsp;<sup class=fg-lightOrange></sup>', "home/redirectToNanoclean2DiPlant"  )?></li>
                    <li><?php echo link_to('Air @XXIX &nbsp;<sup class=fg-lightOrange</sup>', "home/redirectToNanoclean2Air"  )?></li>
                    <li><?php echo link_to('Showa PVA Report &nbsp;<sup class=fg-lightOrange></sup>', "home/redirectToShowa"  )?></li>
                    <li><?php echo link_to('LPC Calibration &nbsp;<sup class=fg-lightOrange>Form: 115</sup>', "micronclean/lpcSearch"  )?></li>
                    <li><?php echo link_to('IC Calibration &nbsp;<sup class=fg-lightOrange></sup>', "micronclean/icCalibrationSearch"  )?></li>
                    <li><?php echo link_to('Ultrasonic Wash &nbsp;<sup class=fg-lightOrange></sup>', "micronclean/ultrasonicSearch"  )?></li>
                    <li><?php echo link_to('Washing Machine Load &nbsp;<sup class=fg-lightOrange>Form: 078</sup>', "micronclean/washingMachineLoadSearch"  )?></li>
                    <li><?php echo link_to('Washing Machine Temp &nbsp;<sup class=fg-lightOrange>Form: 079</sup>', "micronclean/washingMachineTempSearch"  )?></li>
                    <li><?php echo link_to('Washing Machine Dose &nbsp;<sup class=fg-lightOrange>Form: 087</sup>', "micronclean/washingMachineDoseCalibrationSearch"  )?></li>
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle" href="#">TRAINING</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li><?php echo link_to('Upload Photo', 'photo/upload'  )?></li>
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle" href="#">MACHINE RECIPE</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li><?php echo link_to('Water Monitoring', 'machine/waterMonitoringSearch'  )?></li>
                    <li><?php echo link_to('Dryer Monitoring', 'machine/dryerMonitoringSearch'  )?></li>
                    <li><?php echo link_to('Process/Repair Log', 'machine/processEventLogSearch'  )?></li>
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle" href="#">MAINTENANCE</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li>
		                <a class="dropdown-toggle" href="#">Document Change</a>
		                <ul class="dropdown-menu dark drop-left" data-role="dropdown">
		                    <li><?php echo link_to('Supplier Document Change', 'documentChange/supplierDocumentSearch'  )?></li>
		                    <li><?php echo link_to('Acro Solutions Document Change', 'photo/upload'  )?></li>
		                    <li><?php echo link_to('Micronclean Document Change', 'photo/upload'  )?></li>
		                    <li><?php echo link_to('Nanoclean Document Change', 'photo/upload'  )?></li>
		                    <li><?php echo link_to('Nanoclean-MY Document Change', 'photo/upload'  )?></li>
		                </ul>
                    </ul>
                </ul>
            </li>
            
            
</ul>
<?php endif; ?>
