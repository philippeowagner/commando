<?php
	/*
	# Copyright 2012 NodeSocket LLC
	#
	# Licensed under the Apache License, Version 2.0 (the "License");
	# you may not use this file except in compliance with the License.
	# You may obtain a copy of the License at
	#
	# http://www.apache.org/licenses/LICENSE-2.0
	#
	# Unless required by applicable law or agreed to in writing, software
	# distributed under the License is distributed on an "AS IS" BASIS,
	# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
	# See the License for the specific language governing permissions and
	# limitations under the License.
	*/
	
	require_once(dirname(__DIR__) . "/classes/Requires.php");
	
	Functions::check_required_parameters(array($_POST['ids']));
	
	//$ids 'should' be an array
	$ids = json_decode($_POST['ids']);
	
	if($ids == null) {
		//Output error details
		Error::halt(400, 'bad request', 'Parameter \'ids\' is invalid JSON.');
	}
	
	MySQLQueries::delete_recipes($ids);
?>