<?php

namespace mageekguy\atoum\php\tokenizer\iterators;

use
	\mageekguy\atoum\exceptions,
	\mageekguy\atoum\php\tokenizer,
	\mageekguy\atoum\php\tokenizer\iterators
;

class phpArgument extends tokenizer\iterator
{
	public function getDefaultValue()
	{
		return null;
	}
}

?>
