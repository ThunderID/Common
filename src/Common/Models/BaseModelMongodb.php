<?php

namespace Thunderlab\Common\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Thunderlab\Common\Traits\ErrorTrait;

abstract class BaseModelMongodb extends Eloquent {
	
	use ErrorTrait;
	
}