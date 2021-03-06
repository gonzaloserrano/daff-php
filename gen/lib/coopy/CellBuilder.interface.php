<?php

interface coopy_CellBuilder {
	function needSeparator();
	function setSeparator($separator);
	function setConflictSeparator($separator);
	function setView($view);
	function update($local, $remote);
	function conflict($parent, $local, $remote);
	function marker($label);
	function links($unit);
}
