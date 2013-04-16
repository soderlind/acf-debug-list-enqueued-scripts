<?php

class acf_field_debug_list_enqueued_scripts extends acf_field
{
		
	/*
	*  __construct
	*
	*  Set name / label needed for actions / filters
	*
	*  @since	3.6
	*  @date	23/01/13
	*/
	
	function __construct()
	{
		// vars
		$this->name = 'debug_list_enqueued_scripts';
		$this->label = __('ACF DEBUG: List Enqueued Scripts');
		$this->category = __("Basic",'acf'); // Basic, Content, Choice, etc
		
		// do not delete!
    	parent::__construct();
    	
 

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
							echo '<tr><td>',$i,'<td>', $loaded_scripts, '</td><td>',(count($wp_scripts->registered[$loaded_scripts]->deps) > 0) ?  implode(" and ", $wp_scripts->registered[$loaded_scripts]->deps) : '', '</td></tr>', "\n";
							$i++;
						}
					?>
				</table>
			</div>
			<?php
	}
	
}


// create field
new acf_field_debug_list_enqueued_scripts();

?>