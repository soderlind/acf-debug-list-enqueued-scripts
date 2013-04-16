<?php

class acf_field_debug_list_enqueued_scripts extends acf_Field
{

	function __construct($parent)
	{
		// do not delete!
    	parent::__construct($parent);
    	
    	// set name / title
    	$this->name = 'debug_list_enqueued_scripts';
		$this->title = __('ACF DEBUG: List Enqueued Scripts');
		
   	}
   	
   	
 	
	function create_field($field)
	{
			global $wp_scripts;
			?>
			<div class="wrap">
				<h2>List Enqueued Scripts</h2>
				<table width="100%" cellspacing="2" cellpadding="5" class="form-table">
					<tr><td>#</td><td><b>Loaded</b></td><td><b>Dependent on</b></td></tr>
					<!--tr><th>#</th><th>Loaded</th><th>Dependent on</th></tr-->
					<?php
						$i = 1;
						foreach ($wp_scripts->print_scripts() as $loaded_scripts) {
							echo '<tr><td>',$i,'<td>', $loaded_scripts, '</td><td>',(count($wp_scripts->registered[$loaded_scripts]->deps) > 0) ?  implode(" and ", $wp_scripts->registered[$loaded_scripts]->deps) : '', '</td></tr>', "n";
							$i++;
						}
					?>
				</table>
			</div>
			<?php
	}
}

?>