<?

Gearbox\Engine::addGear([
	"name" => "Gearbox::ActiveModel",
	"loader" => function($class_name){
		if(\Gearbox\Engine\Loader::classicGearLoader($class_name, 'ActionModel', 'activemodel/lib/active_model/')){
    	return true;
		} else {
			$dirModel = \Gearbox\Engine::baseDir().'/app/models/'.\Gearbox\ActiveSupport::underscore($class_name).'.php';
			if(file_exists($dirModel)){
				require_once $dirModel;
				return true;
			}
		}
		return false;
	}
]);
