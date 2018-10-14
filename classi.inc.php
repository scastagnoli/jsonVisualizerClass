<?php
class tabella{
	private $nomeFile;
	private $datiJSON;

	function __construct($fileName)
	{
		$this->nomeFile = $fileName;
		$json_data = file_get_contents($this->nomeFile);

		$this->datiJSON = json_decode($json_data, true);
	}
	
	public function dati()
	{
		var_dump($this->datiJSON);
	}
	public function visualizza($classeCSS)
	{

		echo "<table class = \"$classeCSS\">";
		//var_dump($datiJSON);
		//var_dump($datiJSON[0]);
		echo "<thead><tr>";
		foreach ($this->datiJSON[0] as $k=>$v)
			echo "<th>$k</th>";
		echo "</tr></thead>";
		echo "<tbody>";
		foreach ($this->datiJSON as $elemento)
		{
			echo "<tr>";
			foreach ($elemento as $k => $v)
				echo "<td>$v</td>";
			echo "</tr>";
		}
		echo "</tbody>";
		echo "<tfoot><tr>";
		foreach ($this->datiJSON[0] as $k=>$v)
			echo "<th>$k</th>";
		echo "</tr></tfoot>";
		echo "</table>";	
			}
}//fine definzione classe
?>